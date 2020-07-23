'use strict';

const cheerio = require('cheerio');
const fs = require('fs');
const path = require('path');
const { fetchData, writeData } = require('../helpers/utils');
const { baseUrl } = require('../helpers/constants');

const getRawFileLoc = (id, type) => path.resolve(__dirname, `../data${ type === 'html' ? '/raw' : '' }/${id}.${type}`);

const loadYearData = async (url, year, callback) => {
	const fileLoc = getRawFileLoc(year, 'json');
	if (fs.existsSync(fileLoc)) {
		const content = fs.readFileSync(fileLoc).toString();

		if (content) {
			console.log(`loading year ${year} data from file ... `);
			return JSON.parse(content);
		}
	}
	
	console.log(`loading year data for ${year} from source ...`);

	const data = await fetchData(url, getRawFileLoc(year, 'html'));
	if (!data) {
		return null;
	}

  const $ = cheerio.load(data);
  const meta = { date: '', cond: '', champions: [], };
  const entries = [];

	const titles = $('h3');
	const condition = $('p');
	const tables = $('table.table.vnkr-table');

  // try to find the tournament start date
  titles.each(function () {
  	const title = $(this).text();
  	if (title && title.startsWith('Start Date:')) {
			const dates = title.split('Start Date: ');
			meta['date'] = dates && dates.length > 0 ? dates[1] : null;
	  }
  });

  // the theme footer contains 3 'p' tags, if more than that, we're seeing
	// the condition text, parse it and save.
  if (condition.length >= 3) {
  	meta['cond'] = condition.slice(0, 1).text();
  }

  // now save all records
	let championTable = true;

	tables.each(function () {
		let titleRow = true;
		$(this).find('tbody > tr').each(function () {
			if (titleRow) {
				titleRow = false;
				return;
			}

			const player = {};

			$(this).find('td').each(function (idx) {
				if (idx === 3) {
					return;
				}

				const content = $(this).text()
					.split('\n')
					.map(val => (val && val.trim()) || '')
					.filter(val => val);

				if (!content || !content.length) {
					return;
				}

				switch (idx) {
					case 0:
						if (championTable) {
							player['division'] = content[0];
						} else {
							player['position'] = content[0];
						}
						break;

					case 1:
						player['name'] = content[0];
						player['hometown'] = content[1];
						break;

					case 2:
						player['scores'] = content[0] && content[0].substring(0, content[0].length - 1);
						player['total'] = content[1];
						break;

					default:
						break;
				}
			});

			const links = $(this).find('a');
			if (!links || !links.length) {
				console.error(`[error] failed to parse ${year}'s champion table:`, $(this).text());
				return;
			}

			const rawLink = links[0].attribs.href;
			let gameLink = '';

			if (links.length > 1) {
				gameLink = baseUrl + links[1].attribs.href;
			}

			player['playerId'] = rawLink.split('?id=')[1];
			player['link'] = baseUrl + rawLink;

			if (gameLink) {
				player['game'] = gameLink;
			}

			if (championTable) {
				meta.champions.push(player);
			} else {
				entries.push(player);
			}
		});

		// the year's champions
		if (championTable) {
			championTable = false;
		}
	});

	// if (year === "2019") {
  //   console.log(meta, entries);
	// }

		const content = { meta, entries, }
		writeData(JSON.stringify(content), fileLoc);

  return content;
};

module.exports = loadYearData;

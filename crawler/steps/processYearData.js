'use strict';

const cheerio = require('cheerio');
const fs = require('fs');
const path = require('path');
const { fetchData } = require('../utils');

const getRawFileLoc = (id, type) => path.resolve(__dirname, `../data/${id}.${type}`);

const loadYearData = async (url, year, callback) => {
	const fileLoc = getRawFileLoc(year, 'json');
	if (fs.existsSync(fileLoc)) {
		const content = fs.readFileSync(fileLoc).toString();
		if (content) {
			console.log(`loading year ${year} data from file ... `);
			return JSON.parse(content);
		}
	}
	
	const data = await fetchData(url, getRawFileLoc(year, 'html'));
	if (!data) {
		return null;
	}

	console.log('parsing year data ... ');

  const $ = cheerio.load(data);
  const meta = { date: '', };
  const entries = [];

	const titles = $('h3');
	const tables = $('table.table.vnkr-table');

  // try to find the tournament start date
  titles.each(function () {
  	const title = $(this).text();
  	if (title && title.startsWith('Start Date:')) {
			const dates = title.split('Start Date: ');
			meta['date'] = dates && dates.length > 0 ? dates[1] : null;
	  }
  });

  // now save all records
	let championTable = false;
	tables.each(function () {

	});

  console.log(meta, entries, tables.length);

  return { meta, entries, };
};

module.exports = loadYearData;

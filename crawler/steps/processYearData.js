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

  const tables = $('table.table.vnkr-table');
  const titles = $('h3');

  titles.each(function () {
  	console.log($(this).text());
  });

  // console.log(tables, titles);
};

module.exports = loadYearData;

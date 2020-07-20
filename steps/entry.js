'use strict';

const cheerio = require('cheerio');
const fs = require('fs');
const { fetchData, writeData } = require('../utils');

const loc = '../data/entry.json';
const rawLoc = '../data/entry.html';

const loadEntryData = async () => {
	if (fs.existsSync(loc)) {
		const content = fs.readFileSync(loc).toJSON();
		if (content) {
			console.log('loading data from file ... ');
			return content;
		}
	}

	const url = 'http://fpams014.fpm.iastate.edu/tournaments/iowa_masters/history/';
	const data = await fetchData(url, rawLoc);

	if (!data) {
		return null;
	}

	console.log('parsing data ... ');

  const $ = cheerio.load(data);
  const rows = $('tbody > tr');

  let headerRow = true;
  const store = [];

  rows.each(function () {
  	if (headerRow) {
  		headerRow = false;
  		return;
	  }

  	const info = {};
  	info['year'] = $(this).find('th').text();

    const cells = $(this).find('td')
	    .text()
	    .split('\n')
	    .map(val => val.trim())
	    .filter(val => val);

    if (cells.length === 5) {
    	info['winner'] = cells[0];
    	info['winner_home'] = cells[1];
    	info['score'] = cells[2];
    	info['total'] = cells[3];

    	const link = $(this).find('a').attr('href');
    	info['link'] = url + link;
      // console.log('link:', url + link);
    } else {
    	info['reason'] = cells[0];
    }

    store.push(info);
  });

  writeData(JSON.stringify(store), loc);

  return store;
};

module.exports = loadEntryData;

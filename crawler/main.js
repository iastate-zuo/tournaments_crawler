'use strict';

const loadEntryData = require('./steps/entry');
const loadYearData = require('./steps/processYearData');

const tournaments = {};

// step 1: prepare to load entry page data
loadEntryData().then(tour => {
	// console.log(tour);

	tour.forEach(t => {
		if (!t.year) {
			return;
		}

		if (t.reason) {
			tournaments[t.year] = {
				reason: t.reason,
			};

			return;
		}

		const query = (t.link || "").split('?id=');
		if (!query || !query.length || query.length < 2) {
			console.error('bad link ... ', t.link);
			return;
		}

		tournaments[t.year] = {
			player: t.winner,
			legacyId: query[1],
		};

		if (t.year === "2019") {
			loadYearData(t.link, t.year, loadPlayerData);
		}
	});

	// console.log(tournaments);
});

const loadPlayerData = (link, callback) => {

};

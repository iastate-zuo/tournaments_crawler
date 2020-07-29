'use strict';

const loadEntryData = require('./steps/entry');
const loadYearData = require('./steps/processYearData');
const loadPlayerData = require("./steps/processGameData");

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

		const data = loadYearData(t.link, t.year, loadPlayerData);

		if (data && data['entries'] && data['entries'].length) {
			data['entries'].forEach(etr => {
				if (etr['game']) {
					loadPlayerData(etr['game'], etr['playerId']);
				}
			});
		}
	});

	console.log(tournaments);
});

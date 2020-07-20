'use strict';

const loadEntryData = require('./steps/entry');

// step 1: prepare to load entry page data
console.log(loadEntryData().then(console.log));

const axios = require('axios');
const fs = require('fs');

const fsErrHandler = function (err, debug) {
	if (err) {
		console.error('failed to write:', err);
		return;
	}

	debug && console.log('write to file done ... ');
}

const fetchData = async function (url, dest, debug) {
	// read file from cached data
  if (fs.existsSync(dest)) {
  	debug && console.log('reading data from file ... ');
  	return fs.readFileSync(dest).toString();
  }

  // make http call to url
  debug && console.log("crawling data for:", url);

  const response = await axios(url).catch((err) => console.log(err));
  if (response.status !== 200){
    console.log("error occurred while fetching data:", url);
    return null;
  }

  const content = response.data.toString();
  if (dest) {
	  fs.writeFile(dest, content, null, (err) => fsErrHandler(err, debug));
  }

  return content;
};

const writeData = function (content, dest, debug) {
	if (!dest) {
		console.error("can't find the location to write:", dest);
		return;
	}

	fs.writeFile(dest, content, null, (err) => fsErrHandler(err, debug));
}

module.exports = {
	fetchData,
	writeData,
};

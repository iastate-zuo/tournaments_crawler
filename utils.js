const axios = require('axios');
const fs = require('fs');
const filePath = './data/entry.html';

const fsErrHandler = function (err) {
	if (err) {
		console.error('failed to write:', err);
	} else {
		console.log('write to file done ... ');
	}
}

const fetchData = async function (url, dest) {
	// read file from cached data
  if (fs.existsSync(filePath)) {
  	console.log('reading data from file ... ');
  	return fs.readFileSync(filePath).toString();
  }

  // make http call to url
  console.log("crawling data for:", url);

  let response = await axios(url).catch((err) => console.log(err));
  if(response.status !== 200){
    console.log("Error occurred while fetching data");
    return null;
  }

  const content = response.data.toString();
	fs.writeFile(dest, content, null, fsErrHandler);

  return content;
};

const writeData = function (content, dest) {
	if (!dest || !fs.existsSync(dest)) {
		console.error("can't find the location to write:", dest);
		return;
	}

	fs.writeFile(dest, content, null, fsErrHandler);
}

module.exports = {
	fetchData,
	writeData,
};

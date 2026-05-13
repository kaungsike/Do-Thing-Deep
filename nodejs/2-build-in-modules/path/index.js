const path = require("node:path");

console.log(__filename);
console.log(__dirname);

console.log(path.basename(__filename));
console.log(path.dirname(__dirname));

console.log(path.extname(__filename));
console.log(path.extname(__dirname));
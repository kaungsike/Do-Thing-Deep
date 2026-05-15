// const math = require('./math');

// const { add, subtract } = math




// console.log(add(2,4))
// console.log(subtract(2,4))

// const {name} = require('./data.json');

// console.log(name);

// console.log("Hello Node");

// console.log("first")

const crypto = require("node:crypto");

const start = Date.now();
crypto.pbkdf2Sync("password", "salt", 100000, 512, "sha512");
crypto.pbkdf2Sync("password", "salt", 100000, 512, "sha512");
crypto.pbkdf2Sync("password", "salt", 100000, 512, "sha512");
crypto.pbkdf2Sync("password", "salt", 100000, 512, "sha512");
crypto.pbkdf2Sync("password", "salt", 100000, 512, "sha512");
console.log("Hashing password took " + (Date.now() - start) + " milliseconds");
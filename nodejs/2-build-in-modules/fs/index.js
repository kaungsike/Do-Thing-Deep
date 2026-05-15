const fs = require("node:fs");

const fileContent = fs.readFileSync("./file.txt", "utf-8"); // Synchronous read, blocks the event loop until the file is read

console.log("first");

console.log(fileContent);

console.log("second");

fs.readFile("./file.txt", "utf-8", (err, data) => {
  if (err) {
    console.error("Error reading file:", err);
    return;
  }
  console.log("Asynchronous read:", data);
});

console.log("third");

fs.writeFileSync("./greet.txt", "This is some new content."); // Synchronous write, blocks the event loop until the file is written

fs.writeFile("./greet.txt", " Hello Node with fs", {flag: "a"}, (err) => {
  if (err) {
    console.error("Error writing file:", err);
    return;
  }
  console.log("File written successfully!");
});

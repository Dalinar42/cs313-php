const fs = require('fs');
let buf = fs.readFileSync(process.argv[2]);
const str = buf.toString();
// console.log(str);
let strArray = str.split('\n');

let stringCount = strArray.length - 1;

console.log(stringCount);

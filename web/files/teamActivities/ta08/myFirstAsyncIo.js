let fs = require('fs')

fs.readFile(process.argv[2], function (err, contents) {
   // fs.readFile(file, 'utf8', callback) can also be used
   let lines = contents.toString().split('\n').length - 1
   console.log(lines)
})

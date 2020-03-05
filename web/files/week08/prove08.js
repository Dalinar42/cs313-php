let http = require('http');
let url = require('url');

http.createServer(function onRequest(req, response) {

   let adr = "http://localhost:8888" + req.url;
   let q = url.parse(adr, true);

   if (q.pathname == "/home") {
      response.writeHead(200, { 'Content-Type': 'text/html' });
      response.write('<h3>Welcome to the Home Page!<h3>');
      response.end();
   }
   else if (q.pathname == "/getData") {
      response.writeHead(200, { 'Content-Type': 'application/json' });
      response.write('{"name": "Austin Nelson", "class": "cs313"}');
      response.end();

   }
   else if (q.pathname == "/add") {
      let qdata = q.query;
      let num1 = Number(qdata.number1);
      let num2 = Number(qdata.number2);
      let sum = num1 + num2;
      if (qdata.htmlAjax == "ajax") {
         response.writeHead(200, { 'Content-Type': 'application/json' });
         response.write('{"number 2": "'.concat(num1.toString(), '", "number2": "', num2.toString(), '", "sum": "', sum.toString(), '"}'));
         response.end();
      }
      else if (qdata.htmlAjax == "html") {
         response.writeHead(200, { 'Content-Type': 'text/html' });
         response.write("The sum of your numbers is ".concat(num1.toString(), '+', num2.toString(), '=', sum.toString()));
         response.end();
      }
      else {
         // console.log(req);
         response.writeHead(404, { "Content-Type": "text/html" });
         response.write('Page not found');
         response.end();
      }
   }
   else {
      // console.log(req);
      response.writeHead(404, { "Content-Type": "text/html" });
      response.write('Page not found');
      response.end();
   }

}).listen(8888);

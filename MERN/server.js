const http = require("http");

http.createServer(function(request, response) {
    response.writeHead(200, {"Content-Type": "text/html"});
    response.write("<h1>Hello NodeJS</h1>");
    response.write("<h3>Kelby Abel - b87t476</h3>");
    response.write("<p>Running Node Server on port 3073</p>");
    response.end();
}).listen(3073);
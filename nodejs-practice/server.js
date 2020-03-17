var http = require('http');

http.createServer(function (req, res) {
    res.writeHead(200, {'Content-Type': 'text/plain'});
    res.write('Hellow World!');
    res.end();
}).listen(8080);



console.log('Hello');
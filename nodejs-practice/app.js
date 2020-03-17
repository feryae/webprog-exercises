const http = require('http');


const server = http.createServer((req,res) => {
	console.log(req.url,req.method,req.headers);
	res.setHeader('Content-Type', 'text/html');
	res.write('1301174532');
	res.end();
});

server.listen(3000);
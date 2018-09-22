var http = require("http");

function onRequest(req, res) {
	if (req.url == "/home") {
		res.writeHead(200, { "Content-Type": "text/html" });
		res.end("<h1>Welcome to the homepage!<h1>");
	}
	
	else if (req.url == "/getData") {
		res.writeHead(200, { "Content-Type": "application/json" });
		res.end(JSON.stringify({"name":"Br.Burton","class":"cs313"}));
	}
	
	else {
		res.writeHead(404, { "Content-Type": "text/plain" });
		res.end("404 error! File not found.");
	}
}

http.createServer(onRequest).listen(8000);
console.log("Server has started.");

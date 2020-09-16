var http = require('http');
var url = require ('url');
var fs = require('fs');


function renderHTML(path, response){
	fs.readFile(path, null, function(error, data){
		if(error){
			response.writeHead(404);
			response.write('File not found');

		}else {
			response.write(data);
		}
		response.end();
	});
}


function handleRequest(request, response){
		response.writeHead(200, {'Content-type': 'text/html'});

		var path = url.parse(request.url).pathname;
		switch (path){
			case '/':
				renderHTML('./list-users.html', response);
				break;
			case '/listusers':
				renderHTML('./list-users.html', response);
				break;
			case '/adduser':
				renderHTML('./add-user.html', response);
				break;
			default:
				renderHTML('./404.html', response);
		}
	}

http.createServer(handleRequest).listen(3000);
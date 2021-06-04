const http = require('http')
const fs = require('fs')

http.createServer(function (request, response){
    console.log('request come', request.url)

    if (request.url === '/') {
        const html = fs.readFileSync('test.html', 'utf-8')
        response.writeHead(200, {
            'Content-Type': 'text/html',
        })
        response.end(html)
    }

    if (request.url === '/service.js') {
        const etag = request.headers['if-none-match']
        if (etag == '777') {
            response.writeHead(304, {
                'Content-Type': 'application/javascript',
                // 'Cache-Control': 'max-age=20, no-store',
                'Cache-Control': 'max-age=20',
                'Last-Modified-Since': 123,
                'Etag':777
            })
            response.end('')
        } else {
            response.writeHead(200, {
                'Content-Type': 'application/javascript',
                'Cache-Control': 'max-age=20',
                // 'Cache-Control': 'max-age=20, no-store',
                'Last-Modified-Since': 123,
                'Etag':777
            })
        }
        response.end('console.log("script loaded")')
    }
    

}).listen(8888)

console.log('service listen:8888')
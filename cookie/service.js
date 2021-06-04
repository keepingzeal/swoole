const http = require('http')
const fs = require('fs')

http.createServer(function (request, response){
    // console.log('request come', request.url)
    
    const host = request.headers.host
    console.log(host)
    if (request.url === '/') {
        const html = fs.readFileSync('test.html', 'utf-8')

        if (host === 'a.test.com:8888') {
            response.writeHead(200, {
                'Content-Type': 'text/html',
                'Set-Cookie': ['id=1111; max-age=20', 'id1=2222; domain=test.com']
            })
        }
        
        response.end(html)
    }

}).listen(8888)

console.log('service listen:8888')
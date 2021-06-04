const http = require('http')
const fs = require('fs')

http.createServer(function (require, response){
    const html = fs.readFileSync('test.html', 'utf-8')
    console.log('request come', require.url)

    response.writeHead(200, {
        'Content-Type': 'text/html',
    })
    response.end(html)

}).listen(8889)

console.log('service listen:8889')
const http = require('http')
const fs = require('fs')

http.createServer(function (request, response){
    const html = fs.readFileSync('test.html', 'utf-8')
    console.log('request come', request.url)
    // console.log(require.headers)

    // response.writeHead(200, {
    //     'Content-Type': 'text/html',
    // })
    response.end(html)

}).listen(8888)

console.log('service listen:8888')
const http = require('http')

http.createServer(function (require, response){
    console.log('request come', require.url)
    response.writeHead(200, {
        'Access-Control-Allow-Origin': 'http://localhost:8888',
        'Access-Control-Allow-Headers': 'X-Test-Cors',
        'Access-Control-Allow-Methods': 'POST,PUT',
    })
    response.end('123')
}).listen(8887)

console.log('service listen: 8887') 
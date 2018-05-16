const http = require('http');

let server = http.createServer();

server.on('request',(req,res)=>{
  console.log("request");
  res.write('thicc thigs club')
  res.end();
})

server.listen(3000,()=>{
  console.log('server listening on port 3000');
});

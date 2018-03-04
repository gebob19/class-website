const express = require('express');
const app = express();
const server = require('http').Server(app);

app.get('/', function(req, res) {
    res.sendFile(__dirname+'/index.html');
});

server.listen(3000);

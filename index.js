const express = require('express');
const app = express();
const server = require('http').Server(app);
const path = require('path');

app.use(express.static('client'));

app.get('/', function(req, res) {
    res.sendFile(index.html);
});

server.listen(3000);

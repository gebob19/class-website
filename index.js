const express = require('express');
const app = express();
const server = require('http').Server(app);
const path = require('path');

app.use(express.static('client'));

server.listen(3000);

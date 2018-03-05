const express = require('express');
const app = express();
const server = require('http').Server(app);
const path = require('path');

app.use(express.static('Assignment2/src'));

server.listen(3000);

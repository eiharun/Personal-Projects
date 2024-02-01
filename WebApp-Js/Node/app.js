/*
const EventEmitter = require('events');// Class

const Logger = require('./logger');// logger.js
const logger = new Logger();

// Register a listener .on() and .addListener() are same
logger.addListener('messageLogged', (arg) =>{//function(arg){} and (arg) =>{} are same
    console.log('Listener called', arg);
});

logger.log('Hello World!');

// Raise: logging (data: message) [Practice]
emitter.addListener('YourData', (arg) =>{//function(arg){} and (arg) =>{} are same
    console.log('Listener called', arg);
});
emitter.emit('YourData', { id: 2, data: 'Your Data', url: 'http://', class: 'Top Secret'})
*/

const http = require('http');

const server = http.createServer((req, res) => {// Has all the capabilities of an Event Emitter
    if (req.url === '/') {
        res.write('Hello World');
        res.end();
    }

    if (req.url === '/api/courses') {
        res.write(JSON.stringify([1, 2, 3]))
        res.end();
    }
});



server.listen(3001);

console.log('Listening on port 3001...');

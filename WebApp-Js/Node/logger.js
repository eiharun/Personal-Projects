
const EventEmitter = require('events');// Class

var url = 'http://mylogger.io/log';

class Logger extends EventEmitter {
    log(message) {      // Method
        // Send an HTTP request
        console.log(message);
        this.emit('messageLogged', { id: 1, url: 'http://' });// Raise an event
    }
}



module.exports = Logger;
//module.exports.endPoint = url;


source code is here -->>  /index.js


var express = require('express');
var app = express();
var uuid = require('uuid-random');

app.use(express.json());
app.use(express.urlencoded({ extended: true }));
app.use('/', express.static('./'));

app.all('/', (req, res) => {

    var admin_pass = uuid()
    var setting = {}
    var username = req.query.username

    if(typeof username == 'undefined') {
        res.end("source code is here -->>  /index.js")
    }

    // admin check
    if(username == "admin") {
        try {
            var pass = req.query.password
            if(pass != admin_pass)
                res.end("Bad hacker! You are not admin!")
        } catch(e) {
            console.log(e)
        }
    }

    // setting
    var val = req.body.val
    if(typeof val != 'undefined') {
        setting[username] = val;
    }
    
    // get flag
    if(typeof setting["admin"] != 'undefined') {
        if(setting["admin"] == "GETFLAG") {
            res.end(process.env.FLAG);
        } else {
            res.end("Q____Q")
        }
    } else {
        res.send("Bye!")
    }

	for (var a in {}) {delete Object.prototype[a]}
});


app.listen(3000, function() {
    console.log("Start server !");
});

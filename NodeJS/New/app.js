var express = require('express');
var mysql = require('mysql');


// koneksi database
var db = mysql.createConnection({
    host        : 'localhost',
    user        : 'root',
    password    : '',
    database    : 'node'
});

// cek konek
db.connect((err) => {
    if(err){
        throw err;
    }
    console.log('Terkoneksi')
});

var app = express();

app.listen('3000', () => {
    console.log('Server startedon port 3000');
});

 
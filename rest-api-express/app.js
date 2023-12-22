// import express
const express = require('express');

// import router
const router = require('./routes/api');

// Membuat object app
const app = express();

// Menggunakan middleware json
app.use(express.json());


// Menggunakan router
app.use(router);


// mendefinisikan port
app.listen(3000);
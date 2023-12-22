/**
 * Import modul mysql
 */
const mysql = require('mysql');

/**
 * import dotenv dan jalankan config
 */
require('dotenv').config();

/**
 * destructuring object process.env
 */
const {
    DB_HOST,
    DB_USER,
    DB_PASS,
    DB_DATABASE
} = process.env;


/**
 *  Membuat koneksi ke database
 */
const db = mysql.createConnection({
    host: DB_HOST,
    user: DB_USER,
    password: DB_PASS,
    database: DB_DATABASE
});

/**
 * Mengecek koneksi ke database
 */

db.connect((err) => {
    if (err) {
        console.log("Eror connecting " + err.stack);
        return;
    } else {
        console.log("Connected to database " + DB_DATABASE);
    }
});

module.exports = db;


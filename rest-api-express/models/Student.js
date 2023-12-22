const db = require('../config/database');

class Student{
    /**
     * Membuat method static untuk mengambil semua data student
     */
    static all() {
        // return Promise sebagai solusi Asyncronous
        return new Promise((resolve, reject) => {
            const query = "SELECT * FROM students";
            /**
             * Melakukan query menggunakan method query yang dimiliki oleh db
             * Menerima dua parameter, query dan callback
             */
            db.query(query, (err, results) => {
                resolve(results);
            });
        });
    }
}

// Export class Student
module.exports = Student;
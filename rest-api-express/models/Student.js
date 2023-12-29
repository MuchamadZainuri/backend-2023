const db = require('../config/database');

class Student {
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

    static async create(data) {
        const id = await new Promise((resolve, reject) => {
            const sql = "INSERT INTO students SET ?";
            db.query(sql, data, (err, results) => {
                resolve(results.insertId);
            });
        });

        const student = this.find(id);
        return student;
    }

    static find(id) {
        return new Promise((resolve, reject) => {
            const sql = "SELECT * FROM students WHERE id = ?";
            db.query(sql, id, (err, results) => {

                const [student] = results;
                resolve(student);
            });
        });
    }

    static async update(id, data) {
        await new Promise((resolve, reject) => {
            const sql = "UPDATE students SET? WHERE id = ?";
            db.query(sql, [data, id], (err, results) => {
                resolve(results);
            });
        });

        const student = await this.find(id);
        return student;
    }

    static delete(id) {
        return new Promise((resolve, reject) => {
            const sql = "DELETE FROM students WHERE id = ?";
            db.query(sql, id, (err, results) => {
                resolve(results);
            });
        });
    }
    
}

// Export class Student
module.exports = Student;
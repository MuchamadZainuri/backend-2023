const Student = require("../models/Student");

class StudentController {
    /**
     * membuat method async index untuk mengambil semua data students
     * @param {*} req 
     * @param {*} res 
     */
    async index(req, res) { 
        // memanggil method static all yang ada di model Student dengan async await
        const students = await Student.all();

        const data = {
            message: "Menampilkan semua students",
            data: students
        };

        res.json(data); 
    }
}

const object = new StudentController();
module.exports = object;

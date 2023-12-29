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

        if (students.length > 0) {
            const data = {
                message: "Menampilkan semua students",
                data: students
            };
            
            return res.status(200).json(data);
        }
            const data = {
                message: "Students is empty",
            }

            return res.status(200).json(data);
    }

    async store(req, res) {

        const { nama, nim, email, jurusan } = req.body;
        
        if (!nama || !nim || !email || !jurusan) {
            const data = {
                message: "Semuan data harus diisi",
            };

            return res.status(422).json(data);
        }

        const student = await Student.create(req.body);

        const data = {
            message: "Menambahkan data Student",
            data: student
        };

        return res.status(201).json(data);
    }

    async update(req, res) {
        const { id } = req.params;

        const student = await Student.find(id);

        if (student) {
            const student = await Student.update(id, req.body);

            const data = {
                message: `Mengedit data students`,
                data: student,
            };

            return res.status(200).json(data);
        }

        const data = {
            message: `Student not found`,
        };

        return res.status(404).json(data);
    }

    async destroy(req, res) {
        const { id } = req.params;
        const student = await Student.find(id);

        if (student) {
            await Student.delete(id);
            const data = {
                message: `Menghapus data students`,
            };
            return res.status(200).json(data);
        }

        const data = {
            message: `Student not found`,
        }
        return res.status(404).json(data);
    }

    async show(req, res) {
        const { id } = req.params;
        const student = await Student.find(id);

        if (student) {
            const data = {
                message: `Menampilkan data student`,
                data: student,
            };

            return res.status(200).json(data);
        }

        const data = {
            message: `Student not found`,
        };

        return res.status(404).json(data);
    }
}

const object = new StudentController();
module.exports = object;

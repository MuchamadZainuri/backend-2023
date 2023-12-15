const express = require('express');

const app = express();

app.get("/", (req, res) => {
    res.send("Hello Express");
});

app.get("/students", (req, res) => {
    res.send("Menampilkan semua students");
});

app.post("/students", (req, res) => {
    res.send("Menambahkan data student");
});

app.put("/students", (req, res) => {
    res.send("Mengedit student");
});

app.delete("/students", (req, res) => {
    res.send("Menghapus student");
});

app.put("/students/:id", (req, res) => {
    const { id } = req.params;
    res.send(`Mengedit student ${id}`);
});

app.delete("/students/:id", (req, res) => {
    const { id } = req.params;
    res.send(`Menghapus student ${id}`);
});

app.listen(3000);


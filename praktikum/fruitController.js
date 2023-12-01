const fruits = require('./data.js');

// cek isi
// console.log(fruits);


// menampilkan semua data
const index = () => {
    for (fruit of fruits) {
        console.log(fruit);
    }
}

// menambahkan data
const store = (name) => {
    fruits.push(name);
    console.log(`Menambahkan data ${name}`);
    index();
};

// export method
module.exports = { index, store };


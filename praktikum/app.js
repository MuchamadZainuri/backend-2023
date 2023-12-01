// import method dalam controller
const { index, store } = require('./fruitController.js');

const main = () => { 
    console.log('Menampilkan data buah-buahan:');
    index();
    console.log("\n");
    store('Alpukat');
}

main();
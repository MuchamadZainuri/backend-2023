/**
 * Fungsi untuk menampilkan hasil download
 */
const showDownload = async () => {
    try {
        const file = await download();
        console.log(`Download selesai\nHasil Download: ${file}`);
    } catch (error) {
        console.log(error);
    }
}

/**
 * Fungsi untuk download file
 */
const download = () => {
    return new Promise((resolve, reject) => {
        const network = true;
        if (!network) {
            reject("Tidak ada koneksi internet");
        }
        setTimeout(() => {
            resolve("windows-10.exe");
        }, 3000);
    });
}

showDownload();

/**
 * TODO:
 * - Refactor callback ke Promise atau Async Await
 * - Refactor function ke ES6 Arrow Function
 * - Refactor string ke ES6 Template Literals
 */

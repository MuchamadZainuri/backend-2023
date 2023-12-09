const persiapan = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve("Mempersiapkan bahan ...");
        }, 3000);
    });
}

const rebusAir = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve("Merebus air ...");
        }, 7000);
    });
}

const masak = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve("Masak mie ...");
        }, 5000);
    });
}

const main = async () => {
    console.log(await persiapan());
    console.log(await rebusAir());
    console.log(await masak());
};

main();
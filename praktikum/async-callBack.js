const persiapan = () => {
    console.log("Mempersiapkan bahan ...");
}

const rebusAir = () => {
    console.log("Merebus air ...");
}

const masak = () => {
    console.log("Memasak mie ...");
    console.log("selesai");
}


const main = () => {
    setTimeout(() => {
        persiapan();

        setTimeout(() => {
            rebusAir();

            setTimeout(() => {
                masak();
            }, 3000);
        }, 2000);
    }, 5000);
}

main();
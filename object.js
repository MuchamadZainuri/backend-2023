const users = {
    name: "Zain",
    address: "Depok",
    age: 19,
    isMarried: false,
}

console.log(users.name, users.isMarried);

for (user in users) {
    console.log(users[user]);
}
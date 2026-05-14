const greet = (name) => {
    console.log(`Hello ${name}`);
}

const higherOrderFunction = (callback) => {
    const name = "Node";
    callback(name);
}

higherOrderFunction(greet);
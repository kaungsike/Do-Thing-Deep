const EvenEmitter = require('node:events');

const emitter = new EvenEmitter();

emitter.on("Order - pizza", (size, toppings) => {
    console.log("Order received!. Baking a " + size + " pizza with the following toppings: " + toppings.join(", "));
});

emitter.on("Order - pizza", (size) => {
    if (size === "large") {
        console.log("Adding extra cheese to the pizza");
    }
});

console.log("Do work before event occurs in the system.")

emitter.emit("Order - pizza", "large", ["pepperoni", "mushrooms"])
const fs =  require('fs');

const filePath = './todo.json';

const command = process.argv[2];
const value = process.argv[3];

const loadTodo = () => {
    try{
        const bufferData = fs.readFileSync(filePath);
        const bufferDataString = bufferData.toString();
        return JSON.parse(bufferDataString);
    }catch(e){
        console.log(e)
        return [];
    }
}

const saveTodo = (todo) => {
    const todoJson = JSON.stringify(todo);
    fs.writeFileSync(filePath, todoJson);
}

const addTodo = (x) => {
    const todo = loadTodo();
    todo.push({"todo": x});
    saveTodo(todo);
    console.log(value,"Added")
}   

const readTodo = () => {
    const todo = loadTodo();
    todo.forEach((x) => {
        console.log(x.todo);
    })
}

if(command === 'add') {
    addTodo(value)
}else if(command === 'read') {
    readTodo()
}else{
    console.log("Unrecognized command");
}


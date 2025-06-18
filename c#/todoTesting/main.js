console.log("App Start");

const requestData = async () => {
    const res = await fetch("http://localhost:8888/api/tasks/1",{
        method : "GET",

    });

    console.log("res ",res);


    const json = await res.json();

    console.log("json ",json)
}

requestData();
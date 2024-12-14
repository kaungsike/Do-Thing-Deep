import "./style.css";

const fetchBtn = document.querySelector("#fetchBtn");

const handleFetchBtn = async () => {

  const res1 = await fetch("http://localhost:5000/tasks/")

  

  console.log(await res1.json());

  // fetch("http://localhost:5000/tasks/1")
  //   .then((response) => response.json())
  //   .then((data) => console.table(data));

  // fetch("http://localhost:5000/tasks")
  //   .then((res) => res.text())
  //   .then((data) => {
  //     console.log(JSON.parse(data));
  //     fetch("http://localhost:5000/tasks")
  //       .then((res) => res.text())
  //       .then((data) => {
  //         console.log(JSON.parse(data));
  //         fetch("http://localhost:5000/tasks")
  //           .then((res) => res.text())
  //           .then((data) => console.log(JSON.parse(data)));
  //       });
  //   });

  // const p = new Promise((resolve, reject) => {
  //   setTimeout(() => {
  //     const val = Math.floor(Math.random() * 10);
  //     console.log(val);

  //     if (val > 5) {
  //       resolve(val);
  //     } else {
  //       reject(val);
  //     }
  //   }, 1000);
  // });

  // p.then(
  //   (x) => {
  //     console.log("success", x);
  //   },
  //   (x) => {
  //     console.log("fail", x);
  //   }
  // );

  // console.log(p);

  // let x = 0;

  // const p = new Promise((resolve,reject) => {
  //   setTimeout(() => {
  //     resolve(5);
  //   },2000)
  // })

  // p.then((data) => {
  //   x = data
  //   console.log(x===5 ? "good" : "bad");
  // })
};

fetchBtn.addEventListener("click", handleFetchBtn);

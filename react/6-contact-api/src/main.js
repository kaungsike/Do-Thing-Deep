import "./style.css";

const fetchBtn = document.querySelector("#fetchBtn");
const handleFetchBtn = () => {
  console.log("U click");
  fetch("http://localhost:5000/tasks/8")
    .then((res) => res.json())
    .then((data) => console.log(data));
};

fetchBtn.addEventListener("click", handleFetchBtn);

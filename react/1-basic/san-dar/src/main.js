const myName = "kaung sike";

const app = document.querySelector("#app");

const showMyName = (name) => {
  app.innerText = name;
  console.log(myName);
}

showMyName(myName);
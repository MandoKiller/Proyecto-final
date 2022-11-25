let character = "X";

document.querySelectorAll(".grid div").forEach((element) => {
  element.addEventListener("click", () => {
    if (element.innerHTML === "") {
      element.innerHTML = character;
      character = character === "X" ? "O" : "X";
    }
  });
});

function reset() {
  document.querySelectorAll(".grid div").forEach((element) => {
    element.innerHTML = "";
  });
}

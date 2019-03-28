
function Prompt() {
    color = prompt("Na jaki kolor chcesz zmienić tło?");
    document.body.style.backgroundColor = color;
}


function Alert() {
  alert('Obecny kolor tła to: ' + document.body.style.backgroundColor + '.');
}


function Confirm() {
  if (window.confirm("Na pewno chcesz wrócić do strony głównej")) {
    window.open("../index.html");
  }
}

// ES6 Syntax
const errorMessage = () => alert("Kursi sudah dibooking!");

const toggleWarna = async () => {
  let kursi = document.querySelectorAll(".box");

  for(let i = 0; i < kursi.length; i++) {
    kursi[i].classList.remove("box-dipilih");
  }
}

const ubahWarna = async (x) => {
  await toggleWarna();
  x.classList.add("box-dipilih");
  let nomorKursi = x.getAttribute('data-value');
  document.getElementById("tempatKursi").value = nomorKursi;
}
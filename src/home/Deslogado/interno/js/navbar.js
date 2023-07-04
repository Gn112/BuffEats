const toggleButton = document.getElementsByClassName('toggle_btn')[0]
const navbarLinks = document.getElementsByClassName('dropdown_menu')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})

// Redirecionamento
document.getElementById("entrar").onclick = function () {
  location.href = "../../Login/index.php";
};

document.getElementById("criar").onclick = function () {
  location.href = "../../Decisao/decisao.php";
};

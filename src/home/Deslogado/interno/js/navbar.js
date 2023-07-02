const toggleButton = document.getElementsByClassName('toggleBtn')[0]
const navbarLinks = document.getElementsByClassName('menu_nav')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})
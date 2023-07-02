const toggleButton = document.getElementsByClassName('toggle_btn')[0]
const navbarLinks = document.getElementsByClassName('dropdown_menu')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})
const hamburger = document.querySelector("div.hamburger");
const menu = document.querySelector("div.hamburger__menu");
// const logo = document.querySelector(".logo__picture")


const openMenu = () => {
    menu.classList.toggle('visible');
    // logo.src = "images/cross.png";
    // menu.style.opacity = "0.75";
}

hamburger.addEventListener('click', openMenu);

class MobileNavbar {
    constructor(mobileMenu, navList, navLinks) {
    this.mobileMenu = document.querySelector(mobileMenu);
    this.navList = document.querySelector(navList);
    this.navLinks = document.querySelectorAll(navLinks);
    this.activeClass = "active";

    this.handleClick = this.handleClick.bind(this);
}

    animateLinks() {
    this.navLinks.forEach((link, index) => {
        link.style.animation? (link.style.animation = "") : (link.style.animation = `navLinkFade 0.5s ease forwards ${ index / 7 + 0.3
            }s`);
    });
}

handleClick() {
    this.navList.classList.toggle(this.activeClass);
    this.mobileMenu.classList.toggle(this.activeClass);
    this.animateLinks();
}

addClickEvent() {
    this.mobileMenu.addEventListener("click", this.handleClick);
}

init() {
    if (this.mobileMenu) {
        this.addClickEvent();
    }
    return this;
}
}

const mobileNavbar = new MobileNavbar(
    ".mobile-menu",
    ".nav-list",
    ".nav-list li",
);
mobileNavbar.init();


window.addEventListener('resize', function () {
    if(window.screen.availWidth < 800){
    $('#drop').toggleClass('dropleft');
}else{
    $('#drop').toggleClass('dropdown');
}
});

// MASK

$(document).ready(function(){
    $("#cpf").mask("000.000.000-00");
    $("#celular").mask("(00) 00000-0000");
    $("#telefone").mask("(00) 0000-0000");
    $("#cep").mask("00000-000");
})
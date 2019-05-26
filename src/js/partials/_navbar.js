export function setNavbar() {

    //Ajoute un padding à la section du haut pour eviter que la navbar ne passe par dessus le carousel en haut de la page
    let navbar = document.getElementById("navbar");

    let header = document.getElementsByTagName("header")[0];
    let nav_logo = document.querySelector('#nav-logo');

    let nav_height = navbar.clientHeight +"px";

    let body = document.getElementsByTagName('body')[0];

    window.onload = () => {
        body.style.paddingTop=nav_height;         
    };

}
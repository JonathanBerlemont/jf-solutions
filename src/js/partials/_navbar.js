export function setNavbar() {

    //Ajoute un padding à la section du haut pour eviter que la navbar ne passe par dessus le carousel en haut de la page
    let navbar = document.getElementById("navbar");
    let nav_height = navbar.clientHeight;

    let header = document.getElementsByTagName("header")[0];

    window.addEventListener("load", () => {
        header.style.paddingTop = nav_height + "px";
    })


    //Modifie La navbar quand on scroll
    //...
}
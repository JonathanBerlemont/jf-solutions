export function setNavbar() {

    //Ajoute un padding à la section du haut pour eviter que la navbar ne passe par dessus le carousel en haut de la page
    let navbar = document.getElementById("navbar");
    let navbar_height = navbar.clientHeight;

    let header = document.getElementsByTagName("header")[0];

    


    //Modifie La navbar quand on scroll
    let nav_items = document.getElementById("nav-items");
    let nav_items_height = nav_items.clientHeight;
    let nav_logo = document.getElementById("nav-logo");

    window.addEventListener("scroll", () => {
        if ((document.documentElement.scrollTop || document.body.scrollTop) > nav_logo.clientHeight) {
            navbar.classList.add("nav-scroll");     
            header.style.paddingTop = navbar_height + "px";                   
        } else {
            navbar.classList.remove("nav-scroll");
            header.style.paddingTop = "0px";
        }
    })

}
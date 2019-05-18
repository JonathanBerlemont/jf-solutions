export function setNavbar() {

    //Ajoute un padding à la section du haut pour eviter que la navbar ne passe par dessus le carousel en haut de la page
    let navbar = document.getElementById("navbar");

    let header = document.getElementsByTagName("header")[0];
    let nav_logo = document.querySelector('#nav-logo');

    let nav_logo_height = nav_logo.clientHeight +"px";
    


    window.addEventListener("scroll", () => {
        if ((document.documentElement.scrollTop || document.body.scrollTop) > nav_logo.clientHeight) {  
            navbar.classList.add('scroll');
            header.style.paddingTop=nav_logo_height; 
        } else {
            navbar.classList.remove('scroll');
            header.style.paddingTop=0
        }
    })

}
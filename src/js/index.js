let vids = document.getElementsByTagName("video");
let indicators = document.getElementsByClassName("carousel-indicators")[0];

let carousel_inner = document.getElementsByClassName("carousel-inner")[0];

let div_services = document.getElementById("div-services");
let div_about = document.getElementById("div-about");
let div_contact = document.getElementById("div-contact");
let section_links = document.getElementById("section-links");


window.addEventListener("load", () => {
    vids[0].play;
    indicators.style.display = "none";

    setTimeout(() => {
        indicators.style.display = "";
    }, 5000);


    setTimeout(() => {
        section_links.style.overflow = "hidden";
        div_services.classList.add("slideFromRight");
        div_services.classList.remove("waiting");
    }, 5000)
    setTimeout(() => {
        div_about.classList.add("slideFromRight");
        div_about.classList.remove("waiting");
    }, 6000)
    setTimeout(() => {
        div_contact.classList.add("slideFromRight");
        div_contact.classList.remove("waiting");
    }, 7000)

    setTimeout(() => {
        section_links.style.overflow = "";
    }, 10000);


})

let check = () => {
    for (let i = 0; i < vids.length; i++) {
        if (!vids[i].parentElement.classList.contains("active")){
            vids[i].currentTime = 0
            vids[i].pause;
        } else {
            vids[i].play;
        }
    }
}

for (let j = 0; j < 1000; j++) {
    setTimeout(check, j*100);    
}
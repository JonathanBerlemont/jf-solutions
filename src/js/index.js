let vids = document.getElementsByTagName("video");
let indicators = document.getElementsByClassName("carousel-indicators")[0];

window.addEventListener("load", () => {
    vids[0].play;
    indicators.style.display = "none";
    setTimeout(() => {
        indicators.style.display = "";
    }, 5000);
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
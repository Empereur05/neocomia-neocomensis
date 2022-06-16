function animation() {
    setInterval(animationImage, 1);
}

function animationImage() {
    if (window.pageYOffset > 350) {
        document.getElementsByClassName("bg-image")[0].style.position = "fixed"
        document.getElementsByClassName("bg-image")[0].style.top = "50px"
    }
    else {
        document.getElementsByClassName("bg-image")[0].style.position = "absolute"
        document.getElementsByClassName("bg-image")[0].style.top = "400px"
    }

}
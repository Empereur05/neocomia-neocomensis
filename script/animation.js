function animation() {
    setInterval(animationImage, 1);
}

function animationImage() {
    if (window.pageYOffset > 350) {
        // document.getElementsByClassName("background-image")[0].style.position = "fixed"
        // document.getElementsByClassName("background-image")[0].style.top = "50px"
        // document.getElementsByClassName("texte-voir-plus")[0].style.position = "fixed"
        // document.getElementsByClassName("texte-voir-plus")[0].style.top = window.innerHeight * 95/100 + "px"
        // document.getElementsByClassName("inscription")[0].style.position = "fixed"
        // document.getElementsByClassName("inscription")[0].style.top = "200px"
    }
    else {
        // document.getElementsByClassName("background-image")[0].style.position = "absolute"
        // document.getElementsByClassName("inscription")[0].style.position = "absolute"
        // document.getElementsByClassName("background-image")[0].style.top = "400px"
        // document.getElementsByClassName("inscription")[0].style.top = "550px"
        // document.getElementsByClassName("texte-voir-plus")[0].style.position = "absolute"
        // document.getElementsByClassName("texte-voir-plus")[0].style.top = window.innerHeight * 95/100 + "px"
    }

    if (window.pageYOffset > 615) {
        document.getElementsByClassName("medium-title-information")[0].style.display = "none"
        // document.getElementsByClassName("inscription")[0].style.display = "none"
    }
    else {
        document.getElementsByClassName("medium-title-information")[0].style.display = "block"
        // document.getElementsByClassName("inscription")[0].style.display = "block"
    }

}
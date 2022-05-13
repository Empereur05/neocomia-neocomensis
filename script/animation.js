function animation() {
    setInterval(animationImage, 1);
}

function animationImage() {
    
    if (window.pageYOffset > 430) {
        document.getElementsByClassName("background-image")[0].style.position = "fixed"
        document.getElementsByClassName("background-image")[0].style.top = "50px"
        document.getElementsByClassName("large-title-information")[0].style.left = 100 - (window.pageYOffset - 430)*3 +"px"
        document.getElementsByClassName("medium-title-information")[0].style.left = 200 + (window.pageYOffset - 430)*8 +"px"
        document.getElementsByClassName("texte-voir-plus")[0].style.left = 110 - (window.pageYOffset - 430)*3 +"px"
        document.getElementsByClassName("inscription")[0].style.left = 80 + (window.pageYOffset - 430)/3 +"%"
    }
    else {
        document.getElementsByClassName("background-image")[0].style.position = "absolute"
        document.getElementsByClassName("background-image")[0].style.top = "480px"
    }

    if (window.pageYOffset > 615) {
        document.getElementsByClassName("medium-title-information")[0].style.display = "none"
        document.getElementsByClassName("inscription")[0].style.display = "none"
    }
    else {
        document.getElementsByClassName("medium-title-information")[0].style.display = "block"
        document.getElementsByClassName("inscription")[0].style.display = "block"
    }
    
}
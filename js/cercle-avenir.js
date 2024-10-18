let lesConteneurMask = document.querySelectorAll(".conteneur-mask");


for(let i = 0; i < lesConteneurMask.length; i++){
    lesConteneurMask[i].addEventListener("mouseover", function(){
        let leMask = lesConteneurMask[i].children[0].nextSibling;
        leMask.style.zIndex = 2;
    });
}

for(let i = 0; i < lesConteneurMask.length; i++){
    lesConteneurMask[i].addEventListener("mouseout", function(){
        let leMask = lesConteneurMask[i].children[0].nextSibling;
        setTimeout(function(){leMask.style.zIndex = 1;}, 500);
    });
}

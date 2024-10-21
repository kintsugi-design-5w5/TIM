let lesConteneurMask = document.querySelectorAll(".conteneur-mask");


for(let i = 0; i < lesConteneurMask.length; i++){
    lesConteneurMask[i].addEventListener("mouseover", function(){
        let leMask = lesConteneurMask[i].children[0].nextSibling;
        leMask.style.zIndex = 4;

        lesConteneurMask[i].children[0].style.zIndex = 5;

        for(let j = 0; j < lesConteneurMask.length; j++){
            if(lesConteneurMask[j] != lesConteneurMask[i]){
                lesConteneurMask[j].style.pointerEvents = "none";
            }
        }
    });
}

for(let i = 0; i < lesConteneurMask.length; i++){
    lesConteneurMask[i].addEventListener("mouseout", function(){
        let leMask = lesConteneurMask[i].children[0].nextSibling;
        lesConteneurMask[i].style.pointerEvents = "none";
        setTimeout(function(){
            for(let i = 0; i < lesConteneurMask.length; i++){
                lesConteneurMask[i].style.pointerEvents = "auto";
                lesConteneurMask[i].children[0].style.zIndex = 3;
            }
            leMask.style.zIndex = 1;
        }, 500);
    });
}

for(let i = 0; i < lesConteneurMask.length; i++){
    lesConteneurMask[i].addEventListener("click", function(){
        window.location.href = lesConteneurMask[i].children[0].href;
    });
}

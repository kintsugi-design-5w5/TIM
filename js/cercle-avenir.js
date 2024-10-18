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
        setTimeout(function(){
            for(let i = 0; i < lesConteneurMask.length; i++){
                lesConteneurMask[i].style.pointerEvents = "auto";
                lesConteneurMask[i].children[0].style.zIndex = 3;
            }
            leMask.style.zIndex = 1;
        }, 500);
    });
}

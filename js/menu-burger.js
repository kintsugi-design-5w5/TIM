
let burger = document.querySelector("#burger");

burger.addEventListener("click", ClickBurger);

function ClickBurger(){
    if(burger.checked){
        document.querySelector('body').style.overflowY = 'hidden';
        console.log(window.scrollY); //Donne la position du scroll
    }
    else{
        document.querySelector('body').style.overflowY = 'auto';
    }
}
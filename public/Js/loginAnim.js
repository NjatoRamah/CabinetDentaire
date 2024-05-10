let conn = document.querySelector(".act");
let tlt = document.querySelector(".act-0");
let connD = document.querySelector(".act-2");
let contenu =document.querySelector(".connect");
conn.addEventListener("click",valid);
connD.addEventListener("click",retour);
function valid(){
    contenu.classList.add("vald");
    tlt.classList.remove("scal");

}
function retour(){
    contenu.classList.remove("vald");
    tlt.classList.add("scal");
}

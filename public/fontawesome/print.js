function print(){
    const prints = document.querySelector(".profilCont")
    const btn = document.querySelector("#pdf-button")

    btn.addEventListener("click",()=>{
        prints.print()
    })
}
setTimeout(print,100)
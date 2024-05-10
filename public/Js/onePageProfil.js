function position(){
    let menu = document.querySelectorAll('.menu');
    let barre = document.querySelectorAll('.contenuPart');

    menu.forEach((element,index) => {
        element.addEventListener('click',()=>{
            menu.forEach((e,a)=>{
               
                if (element != e) {
                    barre[a].classList.remove('actV');   
                    barre[a].classList.add('actVy'); 
                }
                else{
                    barre[a].classList.add('actV');
                    barre[a].classList.remove('actVy');   

                }
            })
        })

    });
}
setTimeout(position,1000);

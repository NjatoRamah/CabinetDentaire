// function diff(){
//     let prime = document.querySelectorAll('.nav-link');
//     let block = document.querySelectorAll('.contenuParty');
//     let boutton = document.querySelectorAll('.btn');
//     prime.forEach((e,i) => {
//         e.addEventListener('click',()=>{
//             prime.forEach((a,b)=>{
//                 if (e!=a){
//                     block[b].classList.remove('active');
//                 }
//                 else{
//                     block[b].classList.add('active');
//                 }
//             })
//         })
//     });
//     boutton.forEach((e,i) => {
//         e.addEventListener('click',()=>{
//             boutton.forEach((a,b)=>{
//                 if (e!=a){
//                     block[b].classList.remove('active');
//                 }
//                 else{
//                     block[b].classList.add('active');
//                 }
//             })
//         })
//     });

// }
// setTimeout(diff,1000);

let messError = document.querySelector('.boxErr');
messError.addEventListener("click",ok);
function ok(){
    messError.classList.add("back");
}


const descTone = document.querySelectorAll(".descTone");
const windowPortion = 0.5;

window.addEventListener("scroll", checkdescTone);

checkdescTone();

function checkdescTone() {
  const triggerBottom = window.innerHeight * windowPortion;

  descTone.forEach((descTone) => {
    const hiddenItemTop = descTone.getBoundingClientRect().top;
    hiddenItemTop < triggerBottom

      ? descTone.classList.add("anim")
      : descTone.classList.remove("anim");

  });
};


function scrol() {
    let soin = document.querySelector('.soinImg');
    let part1 = document.querySelector('.soinDetOne');
    let part2 = document.querySelector('.soinDetTwo');
    let boutton = document.querySelector('.bout');
    let body = document.body;
    let max = body.style;
    let scrolY = window.scrollY;
    let w = window.innerWidth
    if (w <1130) {
      if (scrolY>844) {
        soin.classList.add("anim");
        part1.classList.add("anim");
        part2.classList.add("anim");
        boutton.classList.add("anim");
        }else
        {
        soin.classList.remove("anim");
        part1.classList.remove("anim");
        part2.classList.remove("anim");
        boutton.classList.remove("anim");
       }
    }else{
      if (scrolY>1670) {
        soin.classList.add("anim");
        part1.classList.add("anim");
        part2.classList.add("anim");
        boutton.classList.add("anim");
        }else
        {
        soin.classList.remove("anim");
        part1.classList.remove("anim");
        part2.classList.remove("anim");
        boutton.classList.remove("anim");
        }
    }
    console.log(scrolY);

}
setInterval(scrol,100);

// ++++++++++++++++
// date a jours
let date = document.getElementById('date');
let heure = document.getElementById('heure');
function mise(){
  let times = new Date();
  date.innerHTML = times.toLocaleDateString();
  heure.innerHTML = times.toLocaleTimeString();

}
setInterval(mise,1000);

// function resp(){
//   let head = document.querySelector('.head');
//   let bt = document.querySelector('.respTwo');
//   bt.addEventListener("click",()=>{

//         head.classList.add("active");
// })
// }
// setInterval(resp,1000);
let head = document.querySelector('.head');
let bt = document.querySelector('.respTwo');
bt.addEventListener("click",valid);
function valid(){
  head.classList.toggle("active");
}

let messError = document.querySelector('.afferror');
messError.addEventListener("click",ok);
function ok(){
    messError.classList.add("back");

}




let menuitems = document.getElementsByClassName('menu-a')
Object.entries(menuitems).forEach(entry => {
    [key, value] = entry;
    
    if (value.href == window.location.href) {
        menuitems[key].classList.add('current-page')
    }
})

let hamburger = document.getElementsByClassName('hamburger')[0]
hamburger.addEventListener('click', (e) => {
    hamburger.classList.toggle('is-active')
})

document.addEventListener('scroll', (e) => {
    let etapybutton = document.getElementsByClassName('etapy-button')[0]
    if (checkVisible(etapybutton)) {
        etapybutton.classList.add('animate__animated') 
        etapybutton.classList.add('animate__bounceIn') 
    } else {
        
        etapybutton.classList.remove('animate__animated') 
        etapybutton.classList.remove('animate__bounceIn') 
    }
})


function checkVisible(elm) {
    var rect = elm.getBoundingClientRect();
    var viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
    return !(rect.bottom < -300 || rect.top - viewHeight >= -50);
  }
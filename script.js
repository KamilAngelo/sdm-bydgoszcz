
let menuitems = document.getElementsByClassName('menu-a')
Object.entries(menuitems).forEach(entry => {
    [key, value] = entry;
    
    let reg = new RegExp(value.href + ".*")
    if (window.location.href.match(reg)) {
        menuitems[key].classList.add('current-page')
    }
})

let hamburger = document.getElementsByClassName('hamburger')[0]
hamburger.addEventListener('click', (e) => {
    hamburger.classList.toggle('is-active')
    document.getElementsByClassName('header-menu')[0].classList.toggle('header-menu-visible')
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
    return !(rect.bottom < -300 || rect.top - viewHeight >= -20);
  }

let more_buttons = Array.from(document.getElementsByClassName('more-button'));
let more_p = Array.from(document.getElementsByClassName('more-about-points'));
more_buttons.forEach((button, index) => button.addEventListener('click', () => {
    more_p[index].style.display = "block";
    button.style.display = "none";
    more_p[index].parentElement.classList.add('row-item');
    more_p[index].parentElement.classList.add('shadow-div');

    button.parentElement.parentElement.firstElementChild.classList.add('row-item');
}))
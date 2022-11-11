
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


let iframe_element = document.getElementsByTagName('iframe')[0]

iframe_element.onclick = function() {
    let yt_player = document.getElementById('movie_player')
    if (yt_player.classList.contains('playing-mode')) {alert('playing-mode')}
    else {alert('pause-mode')}
    alert('dasnasij')

}

    
const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
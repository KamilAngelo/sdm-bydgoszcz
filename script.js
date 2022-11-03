
let menuitems = document.getElementsByClassName('menu-a')
Object.entries(menuitems).forEach(entry => {
    [key, value] = entry;
    console.log(value.href)
    console.log(window.location.href)
    
    if (value.href == window.location.href) {
        menuitems[key].classList.add('current-page')
    }
})
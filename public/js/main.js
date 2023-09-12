const nav = document.querySelector('nav')
const alist = document.querySelectorAll('.ulist a')
const logo = document.querySelector('.logo span')
const loginlist = document.querySelector('.login-register a')
const content = document.querySelectorAll('.content')

window.addEventListener('scroll',()=>{
    if (scrollY > 100) {
        nav.classList.add('active')
    }else{
        nav.classList.remove('active')
    }
})


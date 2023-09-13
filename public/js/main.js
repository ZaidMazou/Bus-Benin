const nav = document.querySelector('nav')
const alist = document.querySelectorAll('.ulist a')
const logo = document.querySelector('.logo span')
const loginlist = document.querySelector('.login-register a')
const content = document.querySelectorAll('.content')
const compagnie = document.querySelectorAll('.compagnie-content')
const sectionTitle = document.querySelectorAll('.section-title')
const description = document.getElementById('desc')
const Contact = document.getElementById('contact')
const desctrajet = document.getElementById('desctrajet')

window.addEventListener('scroll',()=>{
    if (scrollY > 100) {
        nav.classList.add('active')
    }else{
        nav.classList.remove('active')
    }
})

class ApparitionScroll{
    constructor(elment){
        this.elment = elment
    }
    apparition(classadd) {
        const obv = new IntersectionObserver(h=>{
            if (h[0].isIntersecting) {
                this.elment.classList.add(classadd)
            }
        })
        obv.observe(this.elment)
    }
}

compagnie.forEach((cpg)=>{
    const app = new ApparitionScroll(cpg)
    app.apparition('active')
})

sectionTitle.forEach((sect)=>{
    const app = new ApparitionScroll(sect)
    app.apparition('active')
})
const desc = new ApparitionScroll(description)
desc.apparition('active')

const contact = new ApparitionScroll(Contact)
contact.apparition('active')

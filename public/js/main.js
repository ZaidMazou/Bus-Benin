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
const aSlider = document.querySelector('.a-slider')

window.addEventListener('scroll',()=>{
    if (scrollY > 100) {
        nav.classList.add('active')
        aSlider.style.display = "block"
    }else{
        nav.classList.remove('active')
        aSlider.style.display = "none"
    }
})

aSlider.addEventListener('click', function() {
    scrollToTop(800);
});

// Fonction de slide vers le faut

function scrollToTop(duration) {
    const start = window.scrollY;
    const delta = -start;
    let startTime = null;

    function animateScroll(currentTime) {
        if (startTime === null) startTime = currentTime;
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        
        window.scroll(0, start + delta * progress);
        
        if (progress < 1) {
            requestAnimationFrame(animateScroll);
        }
    }

    requestAnimationFrame(animateScroll);
}

// Apparition au scrol

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

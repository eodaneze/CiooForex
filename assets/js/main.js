// -----------back to top 
let backtotop = document.querySelector('.back-to-top')
window.addEventListener('scroll', () => {

    if (window.scrollY > 100) {
      backtotop.classList.add('active')
    } else {
      backtotop.classList.remove('active')
    }
})


//--------------- end of back to top


let nav_content = document.querySelector('.nav-content');
window.addEventListener('scroll', () => {

    if(window.pageYOffset > 100){
        nav_content.classList.add('main-nav-change')
        nav_content.classList.add('nav-content-change')
    }else if(window.pageYOffset < 100){
        nav_content.classList.remove('main-nav-change')
        nav_content.classList.remove('nav-content-change')
    }
})

  

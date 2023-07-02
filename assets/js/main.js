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

// pip-payment-alert

// let all_pay = document.querySelector('.payment_alert');
// window.addEventListener('scroll', () => {
//    if(window.pageYOffset > 100){
//       all_pay.classList.add('payment_alert_js')
//    }else{
//      all_pay.classList.remove('payment_alert')
//    }
// })

// hero-section-slider

var int;
function setInt() {
  clearInterval(int);
  int = setInterval(function() {
    var btns = document.getElementsByName("carousel");
    for(var i = 0; i < btns.length; i++) {
      if(btns[i].checked) {
        btns[i].checked = false;
        if(i + 1 == btns.length) {
          btns[0].checked = true;
        }
        else {
          btns[i + 1].checked = true;
        }
        return;
      }
    }
  }, 5000); 
}
setInt();


  

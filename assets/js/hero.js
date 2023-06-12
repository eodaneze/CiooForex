
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


function scroll_left(){
    var left = document.querySelector("*.scrolldiv");
    //left.scrollBy(150,0);
    left.scrollBy({
        top: 0,
        left: 340,
        behavior: 'smooth'
      });
}

function scroll_right(){
    var right = document.querySelector("*.scrolldiv");
    right.scrollBy({
        top: 0,
        left: -340,
        behavior: 'smooth'
      });
}

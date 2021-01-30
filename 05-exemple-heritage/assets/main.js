const fadeOutClass = document.querySelectorAll('.fade-out');

let displayNone = setTimeout(function(){
    for(fadeOut of fadeOutClass){
        fadeOut.style.display = 'none';
    }
}, 9800);
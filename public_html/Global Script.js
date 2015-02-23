var mq = window.matchMedia("(max-width: 714px)");

$(document).ready(function() {
    if(mq.matches){
        document.getElementById("homepage").innerHTML = "";
    }
});
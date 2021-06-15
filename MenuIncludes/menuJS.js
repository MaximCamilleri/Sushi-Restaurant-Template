var options = document.getElementsByClassName("option");


function menu(num){
    for(var i = 0; i < options.length ;i++){
        options[i].className = "option";
    }

    options[num].className = "option active"
}

function moveScroller() {
    var $anchor = $("#");
    var $scroller = $('#sidenav');

    var move = function() {
        var st = $(window).scrollTop();
        var ot = $anchor.offset().top;
        if(st > ot) {
            $scroller.css({
                position: "fixed",
                top: "0px"
            });
        } else {
            $scroller.css({
                position: "relative",
                top: ""
            });
        }
    };
    $(window).scroll(move);
    move();
}
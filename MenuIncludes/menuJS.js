var options = document.getElementsByClassName("option");


function menu(num){
    for(var i = 0; i < options.length ;i++){
        options[i].className = "option";
    }

    options[num].className = "option active"
}


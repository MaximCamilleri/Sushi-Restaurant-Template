var container = document.getElementById("sidenav");

var options = container.getElementsByClassName("option");

for(var i = 0; i <options.length ;i++){
    options[i].addEventListener("click",function(){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace("active", "");
        this.className += "active";
    });
}
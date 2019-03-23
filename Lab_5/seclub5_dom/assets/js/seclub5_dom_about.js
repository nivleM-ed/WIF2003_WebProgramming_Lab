var chart = document.getElementById("ochart");

ochart.onmouseenter = function(){
    chart.src = "/assets/pic/selogo.jpg";
    chart.style = "height: 40%; width: 40%";
}

ochart.onmouseleave = function(){
    chart.src = "/assets/pic/ochart.jpg";
    chart.style = "height: 50%; width: 50%";
}
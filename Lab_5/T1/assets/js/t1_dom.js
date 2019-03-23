//Q1
var a_li = document.querySelectorAll("li");

for(var x = 0; x < a_li.length; x++) {
    console.log(a_li[x].textContent);
}

//Q2
var special = document.querySelector(".special");
special.onmouseover = function(){
    window.alert("Book a tour");
};


//Q3
var there = document.querySelector("#there");
there.style.color = "blue";
there.style.border = "dashed";
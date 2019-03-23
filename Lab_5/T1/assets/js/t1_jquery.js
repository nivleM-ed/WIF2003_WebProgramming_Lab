//Q1
var a_li = $("li");

for(var x = 0; x < a_li.length; x++) {
    console.log(a_li[x].textContent);
}

//Q2

$(".special").mouseover(function(){
    alert("Book a tour");
});

//Q3
var styles = {
    color: "blue",
    border: "dashed"
};

$("#there").css(styles);


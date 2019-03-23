//Lab 4 Question 1
var q1a = document.getElementById("q1a");
q1a_ans = 760 % 9;
q1a.innerHTML = "q1a = " + q1a_ans;

var q1b = document.getElementById("q1b");
q1b_ans = ("WIF2003" + "Web Programming")[10];
q1b.innerHTML = "q1b = " + q1b_ans;

var q1c = document.getElementById("q1c");   
q1c_ans = "helloworld".length % "him\\".length;
q1c.innerHTML = "q1c = " + q1c_ans;

//Lab 4 Question 3
var x = 10;
var y = "a";
console.log("\nQ3: (y === 'b' || x === y) && !(y != 8 && x <= y)");
console.log(y === "b" || x === y) && !(y != 8 && x <= y);

//Lab 4 Question 4
var x = 3;
var y = 8;
console.log("\nQ4: (!(x == '3' || x === y) && !(y != 8 && x <= y))");
console.log(!(x == "3" || x === y) && !(y != 8 && x <= y));

//Lab 4 Question 5
console.log("\nQ5:")
console.log("5(a) : " + !"Hello World");
console.log("5(b) : " + !"");
console.log("5(c) : " + !null);
console.log("5(d) : " + !0);
console.log("5(e) : " + !-1);
console.log("5(f) : " + !NaN);

//Lab 4 Question 6
console.log("\nQ6: while loop");
var list = new Array();
var x = 10;
while (x <= 40) {
    if (x % 2 != 0) {
        list.push(x);
    }
    x++;
}
console.log(list);

console.log("\nQ6: for loop");
var list = [];
for (var x = 10; x <= 40; x++) {
    if (x % 2 != 0) {
        list.push(x);
    }
}
console.log(list);

//Lab 4 Question 7
function printReverse(arr) {
    for (var x = arr.length - 1; x >= 0; x--) {
        console.log(arr[x]);
    }
}

//Lab 4 Question 8
var someObject = {
    name: "Hedwig",
    age: 6,
    color: "red",
    123: true
}
console.log("\nQ8: 123 is not valid")
console.log(someObject.name);
console.log(someObject.age);
console.log(someObject.color);

//Lab 4 Question 9
console.log("\nQ9: ")
var movieObj = {
    movie: ["In Bruges", "Frozen", "Mad Max Fury Road", "Les Miserables"],
    rating: [5, 4.5, 5, 3.5],
    status: ["watched", "not seen", "seen", "not seen"]
}

for (var x = 0; x < movieObj.movie.length; x++) {
    var txt = "You have " + movieObj.status[x] + " \"" + movieObj.movie[x] + "\" - " + movieObj.rating[x] + " stars.";
    console.log(txt);
}

//Lab 4 Question 10

function prettyPrint(obj) {
    for(var x in obj) {q
        var val = obj[x]
        console.log(x,": ",val);
    }
}
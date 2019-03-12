
    var firstname = prompt("What is your first name?");
    var lastname = prompt("What is your last name?");
    var age = prompt("How old are you?");

    var txt = "Hello, " + firstname + " " + lastname + "! Welcome to this page.";
    var age_txt = "You are " + age + " years old.";

    window.alert(txt);
    console.log(age_txt);
    var stalker = document.getElementById("stalker");
    stalker.innerHTML = txt + " " + age_txt;

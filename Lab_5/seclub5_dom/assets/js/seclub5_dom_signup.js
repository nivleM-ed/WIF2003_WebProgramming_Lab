
var arr = {
    code: ["WS","TA","SE","CO","GA"],
    name: ["Workshop", "Talk", "SE Day", "Competition", "Gathering with alumni"],
    venue: ["MM1", "DK2", "The Cubes", "MM3", "Student Centre", "Block B"]
}
var favevent = document.getElementById("favevent");
var event = document.getElementById("eventvenue");
var venue_no;

function getVenue(name) {
    for(var x=0; x<arr.code.length; x++) {
        if(arr.code[x] == name) {
            return x;
        }
    }
    return -1;
}

favevent.addEventListener("click", function() {
        venue_no = getVenue(favevent.options[favevent.selectedIndex].value);
        event.innerHTML = "Event venue is " + arr.venue[venue_no];
});

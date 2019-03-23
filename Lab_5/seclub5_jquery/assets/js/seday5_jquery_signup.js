var arr = {
    code: ["WS","TA","SE","CO","GA"],
    name: ["Workshop", "Talk", "SE Day", "Competition", "Gathering with alumni"],
    venue: ["MM1", "DK2", "The Cubes", "MM3", "Student Centre", "Block B"]
}

$("#favevent").on("click", ".option", function(){
    var name = $("#favevent").find(":selected").val();    
    var venue_no = getVenue(name);
    console.log(name);
    $("#eventvenue").html("Event venue is " + arr.venue[venue_no]);
   
});
function getVenue(name) {
    for(var x=0; x<arr.code.length; x++) {
        if(arr.code[x] == name) {
            return x;
        }
    }
    return -1;
}

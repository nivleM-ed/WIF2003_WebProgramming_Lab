var arr = {
    code: ["WS","TA","SE","CO","GA"],
    name: ["Workshop", "Talk", "SE Day", "Competition", "Gathering with alumni"],
    venue: ["MM1", "DK2", "The Cubes", "MM3", "Student Centre", "Block B"]
}

for(var i = 0; i < arr.name.length; i++) {
    $('#favevent select').append('<option value='+i+'>'+arr.name[i]+'</option>');
}

$("#favevent select").on("change", function(){
    var value = $("#favevent select").find(":selected").val();    
    // var venue_no = getVenue(name); 
    console.log(name);
    $("#eventvenue").html("Event venue is " + arr.venue[value]);
});


<body>
    <form  method="POST">
        <label>Name: </label><input type="text" name="name">
        <label>Times: </label><input type="number" name="num">
        <input type="submit" name="submit" value="Print">
    </form>
</body>

<?php
function printName($name, $num) {
    for($x=0; $x<$num; $x++) {
        echo $name;
        echo "<br>";
    }
}

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $num = $_POST["num"];

    printName($name, $num);
}   
?> 

<script>
    
</script>
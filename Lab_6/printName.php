<body>
    <form method="POST">
        <label>Name: </label><input type="text" name="name">
        <label>Times: </label><input type="number" name="num">
        <input type="submit" name="submit" value="Print">
    </form>
</body>

<?php

class person {
    var $name;

    function __construct($name) {
        $this->name = $name;
    }

    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }

    function printName($num) {
        for ($x = 0; $x < $num; $x++) {
            echo $this->name;
            echo "<br>";
        }
    }
}


if (isset($_POST["submit"])) {
    $num = $_POST["num"];
    $name = $_POST["name"];

    $new_person = new person($name);
    $new_person->printName($num);
}
?>

<script>

</script> 
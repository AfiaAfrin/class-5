<?php
    
    $x = $_POST['name'];
    $y = $_POST['fname'];

    function personDetails ($name, $fname) {
        echo 'My Name is: ';
        echo $name;
        echo '<br/>';
        echo "Father's Name: ";
        echo $fname;
    }
    personDetails($x, $y)

?>
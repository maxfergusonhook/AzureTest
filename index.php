<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
   /* $name = "Edgar";

   // if ($name == "Simon") {
        print "I know you!";
    }
    else {
        print "Who are you?";
    }
    echo "hello world";
    echo "Hello, world!";
    echo "Hello," . "" . "world" . "!";
    echo 5*7;
    $myname = "Frodo Baggins";
    $myage = 111;
    echo "My name is" . $myname . "and i am" . $myage
    */
    /*$myage = 20;
    echo "<p>i am " . $myage . " years old</p>";
    if ($myage >= 21) {
        echo "<p>you can buy sausage rolls</p>";
    }
    else if ($myage >= 18) {
        echo "<p>you can buy mugs and sausage rolls</p>";
    }
    else if ($myage >= 16) {
        echo "<p>you can buy specs mugs and sausage rolls</p>";
    }
    else {
        echo "<p>you can buy nothing</p>";
    }
    */
    $wantedgood = "mugs";

    switch ($wantedgood){
        case "specs":
            echo "You have to be 16 to buy $wantedgood";
            break;
        case "mugs":
            echo "You have to be 18 to buy $wantedgood";
            break;
        case "sausage rolls":
            echo "You have to be 21 to buy $wantedgood";
            break;
    }
    ?>
    }

    ?>


</p>
</body>

</html>
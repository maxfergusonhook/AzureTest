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
    $myage = 20;
    echo "i am " . $myage . " years old";
    if($myage >= 21)
    {
        echo "you can buy sausage rolls";
    }
    else if($myage >= 18)
    {
        echo "you can buy mugs and sausage rolls";
    }
    else ($myage >= 16)
    {
        echo "you can buy specs mugs and sausage rolls";
    }

    ?>


</p>
</body>

</html>
<h1>Sample</h1>
<?php 
    $message = "Hello Letran";
    echo $message;
?>
<hr>
<?php 
    $a = 1;
    $b = 3;
    echo $a + $b;
?>
<hr>
<?php 
    // $a = 6;
    # $b = 4;
    echo $a + $b;
?>
<hr>
<?php 
    function add($val1, $val2){
        return $val1 + $val2;
    }

    echo add(13, 15);
    echo "   ";
    echo add(137, 151);

    function sub($val1, $val2){
        return $val1 - $val2;
    }
    echo sub(13, 15);
    echo "   ";
    echo sub(137, 151);

    // °F = (9/5 × °C) + 32
    // °C = 5/9(°F – 32)
?>
<hr>

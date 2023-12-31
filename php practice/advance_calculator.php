<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="advance_calculator.php" method="post">
    First Number: <input type="number" step=0.1 name="num1">

    <!-- normally type=number ta whole number ke input nay but jodi decimal value input nite chai tahole .er por joto ghor nite chai seta mention kore dite hobe,supoose point er por 3 ghor porjnto input nite chai tahole step=0.001 dite hobe -->
    <br>
    op:<input type="text" name="op">
    <br>
   Second Number: <input type="number" name="num2">
    <input type="submit">
    </form>


    <?php
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $op=$_POST["op"];
    
    if($op=="+"){
        echo $num1+$num2;
    }
    elseif($op=="-"){
        echo $num1-$num2;
    }
    elseif($op=="*"){
        echo $num1*$num2;
    }
    elseif($op=="/"){
        echo $num1/$num2;
    }
    elseif($op=="%"){
        echo $num1%$num2;
    }
    else{
        echo "invalid operator";
    }
    ?>
</body>
</html>
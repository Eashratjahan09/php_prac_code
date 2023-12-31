<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $isMale=true;
    $isTall=false;
    if($isMale && $isTall){
        echo "you are a tall male";
    }
    elseif($isMale && !$isTall){
        echo "you are a short male";
    }
    elseif(!$isMale && $isTall){
        echo "you are not male but are tall";
    }
    else{
        echo "you are not male and not tall";
    }


    echo "<hr>";
    function getMax($num1, $num2){
        if($num1 > $num2){
            return $num1;
        }else{
            return $num2;
        }
    }

    echo getMax(9,6);
    echo "<hr>";

    function getMax3($num1, $num2, $num3){
        if($num1 >= $num2 && $num1 >= $num3){
            return $num1;
        }
        elseif($num2 >= $num1 && $num2 >= $num3){
            return $num2;
        }
        else{
            return $num3; 
        }
    }

    echo getMax3(300,20,100);





    ?>
</body>
</html>
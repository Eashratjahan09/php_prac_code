<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function sayHi($name, $age){
        echo "hello $name, you are $age <br>";
    }
    sayHi("Anne", 22);
    sayHi("Miti", 23);
    sayHi("Emon", 14);

    function cube($num){
        return $num*$num*$num;
    }
    $result=cube(3);
    echo $result;
    echo "<br>";
    echo cube(4);
    ?>
</body>
</html>
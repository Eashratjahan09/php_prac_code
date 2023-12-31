<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i=5;$i>=1;$i--){
        echo "$i <br>";
    }
    echo "<hr>";
    $luckynumbers=array(9,30,10);
    for($i=0;$i<=count($luckynumbers);$i++){
        echo "$luckynumbers[$i] <br>";
    }

    ?>

</body>
</html>
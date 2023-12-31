<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "hello world";
    echo "<hr>";
    echo "<h1>Anne</h1>";

    $charName="Tom";
    $charAge=56;
    echo "hello $charName <br>";
    echo "his age is $charAge <br>";
    echo "but $charName want to be happy even at his age $charAge";
    echo "<br>";

    // data type:string,int,float/double,boolean
    $phrase="to be honest";
    $age=23;
    $cgpa=3.90;
    $isFemale=true;

    echo $phrase;
    echo "<hr>";
    //work with string---string's function:

    $srg="Hello Peeps";
    //strtolower
    echo strtolower($srg);
    echo "<br>";
    //strtoupper
    echo strtoupper($srg);
    echo "<br>";
    //strlen
    echo strlen($srg);
    echo "<hr>";
    //indexing
    echo $srg[0];
    echo "<hr>";
    echo $srg[1];
    echo "<hr>";
    echo "Mike"[1];
    echo "<hr>";
    //str_replace
    $name="Academic Theory";
    echo str_replace("Theory", "lab", $name);
    echo "<hr>";

    //str_replace(jetake replace korbo, ja diye replace korbo, n jei variable er property era)
    //substr:
    $pname="Grd Theory";
    echo substr($pname, 4);
    echo "<hr>";
    echo substr($pname, 4,3);

    //math function
    echo "<hr>";
    echo 5/10;
    echo "<hr>";
    echo abs(-500);
    echo "<hr>";
    echo pow(2,4);
    echo "<hr>";
    echo sqrt(144);
    echo "<hr>";
    echo max(2,10);
    echo "<hr>";
    echo min(12,10);
    echo "<hr>";
    echo round(3.2);
    echo "<hr>";
    echo round(3.7);
    echo "<hr>";
    echo ceil(3.3);
    echo "<hr>";
    echo floor(3.3);
    


    ?>
</body>
</html>
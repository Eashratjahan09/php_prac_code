<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="switch_case.php" method="post">
   what was your grade?
   <input type="text" name="grade">
    <input type="submit">
    </form>
    <?php
    $grade=$_POST["grade"];
    // echo $grade;
    switch($grade){
        case "A":
            echo "you did amazing!";
            break;
        case "B":
            echo "you did pretty good";
            break;
        case "F":
            echo "you FAIL";
            break;
        default:
           echo "Invalid Grade";
    }
    ?>
</body>
</html>
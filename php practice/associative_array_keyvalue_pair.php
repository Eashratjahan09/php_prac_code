<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="associative_array_keyvalue_pair.php" method="post">
    <input type="text" name="student">
    <input type="submit">
</form>



<?php
$grades=array("jim"=>"A+", "Pam"=>"B-");
echo $grades[$_POST["student"]];
// echo $grades["Pam"];
// echo "<br>";
// echo count($grades);
?>
</body>
</html>
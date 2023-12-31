<!-- form kinda middleman between HTML and PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <form action="calculator.php" method="GET">
    Num1:<input type="number" name="num1">
    <br>
    Num2:<input type="number" name="num2">
    <input type="submit">
    </form>
    <br>
  Answer:<?php echo $_GET["num1"]+$_GET["num2"] ?>
  <!-- method get use korle url e value ta dekhay but post use korle dekhayna,so in case of some values like password,we showld use post method for security purpose -->

</body>
</html>
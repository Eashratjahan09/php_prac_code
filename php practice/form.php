<!-- form kinda middleman between HTML and PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <form action="form.php" method="get">
    Name: <input type="text" name="username">
    <br>
    Age: <input type="number" name="userage">
    <input type="submit">
    </form>
    <br>
    My name is <?php echo $_GET["username"];?>
    My age is <?php echo $_GET["userage"];?>
    <hr>

</body>
</html>
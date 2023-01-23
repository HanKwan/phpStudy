<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>After a long time</title>
</head>
<body>
    <form action="study.php" method="post">
        <input type="number" name="num1">
        <input type="text" name="opt">
        <input type="number" name="num2">
        <input type="submit">
    </form>

    <?php
        $num1 = $_POST['num1'];
        $opt = $_POST['opt'];
        $num2 = $_POST['num2'];
        if ($opt === "+") {
            echo $num1 + $num2; 
        } else if ($opt === "-") {
            echo $num1 - $num2; 
        } else if ($opt === "*") {
            echo $num1 * $num2; 
        } else if ($opt === "/") {
            echo $num1 / $num2; 
        };
    ?>
</body>
</html>
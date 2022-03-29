<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restudy php with git</title>
</head>
<body>
    <form action="restudy.php" method="POST">
        <input type="number" name="num1">
        <input type="text" name="oprt">
        <input type="number" name="num2">
        <input type="submit">
    </form>
    <?php
        $num1 = $_POST['num1'];
        $oprt = $_POST['oprt'];
        $num2 = $_POST['num2'];
        if ($oprt === '+') {
            echo $num1 + $num2;
        } else if ($oprt === '-') {
            echo $num1 - $num2;
        } else if ($oprt === '/') {
            echo $num1 / $num2;
        } else if ($oprt === '*') {
            echo $num1 * $num2;
        } else {
            echo 'Invalid enter';
        }
    ?>
</body>
</html>
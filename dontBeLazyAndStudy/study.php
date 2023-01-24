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
        <button type="submit">=</button>
    </form>

    <form action="study.php" method="post">
        <h4>associative arr</h4>
        <input type="text" name="wName" value="<?php echo $_POST['wName'] ?>">
        <button type="submit">Search</button>
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

        $workers = ['johnny' => '120k', 'mary' => '110k'];
        $toLower = strtolower($_POST['wName']);
        echo $workers[$toLower];
    ?>
</body>
</html>
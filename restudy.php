<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restudy php with git</title>
</head>
<body>
    <?php
        include_once("temporary.php");
        include_once("temporary1.php");

        $movie1 = new Amovie("Adventure End game", "4.5", 2019);
        $movie1->putBadR("poor iron man");
        echo $movie1->filmTime;
        echo $movie1->getBadR();
    ?>
</body>
</html>
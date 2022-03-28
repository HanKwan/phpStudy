<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once ("book.php");
        require_once ("historyBook.php");

        $book1 = new Historybook("adventure", "stan Lee", 1150, 1998);
        $book1->setPw("i am ironman");
        echo $book1->getPw();
        echo $book1->writtenTime.'<br>';
        echo Historybook::getCounter();

        function sum(...$nums){
            $sum = 0;
            foreach ($nums as $number){
                $sum += $number;
            }
            echo $sum;
        }
        sum(1, 2, 3, 4, 5, 6);
        
    ?>
</body>
</html>
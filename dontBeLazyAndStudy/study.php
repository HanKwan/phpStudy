<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restudying</title>
</head>
<body>
    <h4>simple calculator</h4>
    <form action="study.php" method="post">
        <input type="number" name="num1">
        <input type="text" name="opt">
        <input type="number" name="num2">
        <button type="submit">=</button>
    </form>
    <?php 
        // $pdo = new PDO('mysql:host=localhost;dbname=example', 'root', 'password');
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $stmt = $pdo->prepare('SELECT * from tablename');
        // $stmt->execute();
        // $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // foreach ($results as $result) {
        //     echo $result->result_name;
        // };

        $num1 = $_POST['num1'];
        $opt = $_POST['opt'];
        $num2 = $_POST['num2'];
        $ans = 0;
        if ($opt === "+") {
            $ans = $num1 + $num2; 
        } else if ($opt === "-") {
            $ans = $num1 - $num2; 
        } else if ($opt === "*") {
            $ans = $num1 * $num2; 
        } else if ($opt === "/") {
            $ans = $num1 / $num2; 
        };
        ?>
        <div><?php echo $ans ?></div>
    
    <form action="study.php" method="post">
        <h4>associative arr</h4>
        <input type="text" name="wName" value="<?php echo $_POST['wName'] ?>">
        <button type="submit">Search</button>
    </form><br>
    
    <?php
        $workers = ['johnny' => '120k', 'mary' => '110k'];
        $toLower = strtolower($_POST['wName']);
        echo $workers[$toLower];

        $person1 = [
            'name' => 'Christ Joe',
            'nickname' => 'Joe',
            'age' => 26
        ];
        // echo $person1['address'] ?: 'address unknown';
        // what is the different between ?? and ?: 

        // switch - case
        // $role = 'manager';
        // switch ($role) {
        //     case 'manager': echo 'manager';
        //     break;
        //     case 'developer': echo 'developer';
        //     break;
        //     default: echo 'not found';
        // }

        // for each loop
        $employees = [
            'employee1' => [
                'name' => 'Jame',
                'role' => 'manager'
            ],
            'employee2' => [
                'name' => 'Mary',
                'role' => 'marketing'
            ]
        ];
        foreach ($employees as $employee) {
            if (is_array($employee)) {
                echo implode(' => ', $employee). '<br>';
            } else echo $employee;
        }

        // for loop
        $hay = ['someone', 'null', 0, 'needle', 3, null];
        echo 'needle found in position ' . array_search('needle', $hay) + 1 . '<br>';
        for ($i = 0; $i < count($hay); $i++) {
            // echo ' ' . $hay[$i];
            if ($hay[$i] === 'needle') {
                echo $hay[$i] . ' found in position ' . $i + 1 . '<br>';
            }
        }

        // sum function
        function sumAll (...$nums) {
            $total = 0;
            foreach ($nums as $num) {
                $total += $num;
            } return $total;
        }
        echo sumAll(3, 4, 234, 656, 34);
    ?>
    
</body>
</html>
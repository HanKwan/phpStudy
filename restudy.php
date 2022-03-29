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
        function sumAll(...$num) {
            $sum = 0;
            foreach ($num as $N) {
                $sum += $N;
            }
            echo $sum;
        }
        echo sumAll (1, 2, 3, 4, 5, 6);

        $role = "thief";
        switch($role) {
            case "manager": echo "manager";
            break;
            case "CEO": echo "CEO";
            break;
            default: echo "not found";
        }

        $person = [
            "name" => "john",
            "age" => 23,
            "likes" => ["coffee", "burger"]
        ];
        foreach ($person as $p) {
            if (is_array($p)) {
                return implode(",", $p);
            } else {
                return $p;
            }
        };
        echo $person["likes"]; //cant figure out
    ?>
</body>
</html>
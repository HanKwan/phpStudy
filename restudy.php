<?php
    // $pdo = new PDO('mysql:host=localhost;port=3306;dbname=product_crud', 'root', '');
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // $statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
    // $statement->execute();
    // $product = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Product crud</title>
</head>
<body>
    <h1>Product crud</h1>
    <a href="create.php"></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">image</th>
      <th scope="col">prize</th>
      <th scope="col">create_date</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        foreach($product as $i => $product) { ?>
          <tr>
            <th scope="row"><?php echo $i + 1 ?></th>
            <td><?php echo $product['title'] ?></td>
            <td><?php echo $product['description'] ?></td>
            <td><?php echo $product['image'] ?></td>
            <td><?php echo $product['prize'] ?></td>
            <td><?php echo $product['create_date'] ?></td>
          </tr>
      <?php  } ?>
  </tbody>
</table>
</body>
</html>
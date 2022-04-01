<?php
    // $pdo = new PDO('mysql:host=localhost;port=3306;dbname=product_crud', 'root', '');
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
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
    <h1>Create new item</h1>
    <form>
  <div class="mb-3">
    <label class="form-label">image</label>
    <input type="file" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">title</label>
    <input type="text" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">prize</label>
    <input type="number" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
<?php
    $connection = require_once './conn.php';
    $notes = $connection->getAllNotes();
    $error = 'Text cannot be empty';

    $currentNote = [
        'id' => '',
        'tilte' => '',
        'body' => ''
    ];
    if ($_GET['id']) {
        $currentNote = $connection->getNote($_GET['id']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- form -->
    <div class="d-flex justify-content-center">
        <div class="container mt-5 row justify-content-center">
            <div class="col-4">
                <?php if (isset($_GET['Error'])): ?>
                    <div class="alert alert-danger"><?php echo $error ?></div>
                <?php endif; ?>
                <form action="add.php" method="post" class="d-flex flex-column align-items-center">
                    <input type="hidden" name="id" value="<?php echo $currentNote['id'] ?>">
                    <input type="text" name="title" value="<?php echo $currentNote['title'] ?>" class="border-1 mb-2 w-100" placeholder="Note title">
                    <textarea name="body" class="mb-3 w-100" cols="10" rows="3" placeholder="About"><?php echo $currentNote['body'] ?></textarea>
                    <button class="btn-sm btn btn-primary w-50">
                        <?php if ($currentNote['id']): ?>
                            Update Note
                        <?php else: ?>
                            Add note
                        <?php endif; ?>
                    </button>
                </form> 
            </div>
        </div>
    </div>

    <!-- notes -->
    <div class="d-flex justify-content-center">
        <div class="container mt-5 row justify-content-center">
            <div class="col-4">
                <?php foreach($notes as $note): ?>
                    <div class="rounded mb-3 bg-warning pb-1 pt-3 px-2">
                        <div class="d-flex justify-content-between">
                            <a href="?id=<?php echo $note['id'] ?>" class="text-decoration-none text-dark">
                                <h5 class="mb-2"><?php echo $note['title'] ?></h5>
                            </a> 
                            <form action="delete.php" method="post">
                                <input type="hidden" value="<?php echo $note['id'] ?>" name="deleteId">
                                <button class="border-0 bg-warning">x</button>
                            </form>
                        </div>
                        <p><?php echo $note['body'] ?></p> 
                    </div>
                <?php endforeach; ?>        
            </div>
        </div>
    </div>
</body>
</html>
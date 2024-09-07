<?php
    include './function.php';

    if(isset($_GET['numbergen']) && $_GET['numbergen'] !==''){
        $yourPassword=passwordGen($_GET['numbergen']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <div class="container">
        <form action="./index.php" method="GET">
            <div class="mb-3">
                <label class="form-label">Password Generata</label>
                <input type="number" class="form-control" min="12" max="25" name="numbergen">
            </div>
            <button type="submit" class="btn btn-primary">Genera</button>
        </form>
        <?php if(isset($yourPassword)){
        echo $yourPassword;
        } ?>
    </div>
</body>
</html>
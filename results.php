<?php 

$paragraph = $_GET['paragraph'];

$censored = $_GET['censored'];

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords Results</title>
</head>
<body>

    <h1>Risultati Form: </h1>

    <p>

        <?php echo $paragraph ?>

    </p>

    <span>

        <?php echo $censored ?>

    </span>

</body>
</html>
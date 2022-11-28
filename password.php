<?php 
include __DIR__ . "/partials/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ecco la tua password</h1>
    <h2><?php echo random_string($password_lenght ); ?></h2>
</body>
</html>
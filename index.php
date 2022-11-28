<?php
session_start();

$password_lenght = $_GET["length_password"];

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
    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>

    <!-- password -->
    <section>
        <form action="password.php" method="GET">
            <label for="length_password">Lunghezza password</label>
            <input type="text" id="length_password" name="length_password">
            <button  type="submit">Crea</button>
        </form>
    </section>
    <?php $_SESSION['password_lenght'] = $password_lenght;?>
</body>
</html>

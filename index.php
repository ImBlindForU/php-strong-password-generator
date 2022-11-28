<?php
    $password_lenght = $_GET["length_password"];
    include __DIR__ . "/partials/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <div class="title">
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
    </div>
       

    <!-- password -->
    <section class="pass">
        <form action="index.php" method="GET">
            <label for="length_password">Lunghezza password</label>
            <input type="text" id="length_password" name="length_password">
            <button  type="submit">Crea</button>
        </form>
        <h3>
            <?php 
                if($password_lenght == ""){
                    echo "inserisci un numero";
                }else{
                    echo "ora segui le istruzioni successive";
                    echo "<i class='fa-solid fa-arrow-down'></i>";
                };
            ?>
        </h3>
        <a href="password.php">Clicca qui per vedere la tua password</a>
    </section>
    <?php
        session_start();
        $password = random_string($password_lenght);
        $_SESSION["password"] = $password; 
        ?>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<body>
    <div class="title">
        <h1>Ecco la tua password</h1>
    </div>
    <div class="pass">
         <h2><?php session_start();  echo $_SESSION["password"]; ?></h2>

        <a href="index.php">Clicca qui per tornare alla page precedente</a>
    </div>
  
</body>
</html>
<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepageStyle.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@700&family=Roboto+Slab:wght@900&display=swap" rel="stylesheet">
    <title>Homepage</title>
</head>
<body>
    <div class="navbar">
        <span>Benvenuto <span class="user"><?php echo $_SESSION['S_username']; ?><br></span> <span style="font-size: x-large;">questa è la tua area personale</span></span>
        <span class="r">
                    <button onclick="infos()">Informazioni</button>
                    <button>Classe</button>
                <a href="ita.php"><button onclick="alert('Disconnesione effettuata');">Disconnesione</button></a>
        </span>
    </div>
    <div>

    </div>
</body>
</html>
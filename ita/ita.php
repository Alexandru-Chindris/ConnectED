<?php
session_start();

if (!isset($_POST['username'])){ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pageStyle.css" type="text/css" /> 
    <title>Pagina di accesso</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div class="container">
        <h1>Esegui il login per procedere</h1>
        <input type="text" placeholder="Inserisci il tuo username" name="username"><br>
        <input type="password" placeholder="Inserisci la tua password" name="password"><br><br>
        <input type="submit" value="Invia" class="sub">
        </div>
    </form>
    <?php
    }
    else{
        $usr= strtolower($_POST['username']);
        $pwd= $_POST['password'];

        // Athorized user array
        $authorized=['admin' => 'qwe123', 'alex' =>'qwe123'];

        if (isset($authorized["$usr"])){
            if ($authorized["$usr"] == $pwd) {
                $_SESSION['S_username']=$usr;
                $_SESSION['S_password']=$pwd;
                header("Location: authorizedITA.php");
            } 
            else { 
               unset($_POST['username']);
               unset($_POST['password']);
               header("Location: ita.php");
            } 
        }else{  
            unset($_POST['username']);
            unset($_POST['password']);
            header("Location: ita.php");
        }
    }
      ?> 
</body>
</html>
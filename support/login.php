<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bejelentkezés</title>
    <link rel="x-icon" href="/XWTbaJKBpszjgRBNaYoIY.jpg">
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <form action="login_vaildate.php" method="post" >
        <h2>Bejelentkezés</h2>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label for="nev">
            Email-cím vagy felhasználónév
        </label>
        <input type="text" id="nev" name="nev"><br>
        <label for="jelszo"></label>
        <input type="password" name="jelszo" id="jelszo"><br>
        <button type="submit">Bejelentkezés</button>
        <p>
            Nincs fiókod? <a href="sign_up.php"></a>
        </p>
    </form>
</body>
</html>
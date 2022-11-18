<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['fnev'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>S. Adorus Support</title>
        <link rel="stylesheet" href="style.css">
        <link rel="x-icon" href="/XWTbaJKBpszjgRBNaYoIY.jpg">
    </head>
    <body>
        <h2>Üdvözlünk az S. Adorus szerver ügyfélszolgálatán <?php echo $_SESSION['fnev'] ?> </h2>
        <a href="logout.php">Kijelentkezés</a>
        <button>
            <a href="index.php">Kezdőlap</a>
        </button>
    </body>
    </html>
<?php
} else {
    header("Location: index.php");
    exit();
} ?>
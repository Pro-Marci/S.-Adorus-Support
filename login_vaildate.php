<?php
session_start();
include "db_conn.php";

if(isset($_POST['nev']) && isset($_POST['jelszo'])) {

    function ervenyesites($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$nev = ervenyesites($_POST['nev']);
$jelszo = ervenyesites($_POST['jelszo']);

if(empty($nev)) {
    header("Location: index.php?error=Kötelező mező");
    exit();
}
else if(empty($jelszo)) {
    header("Location: index.php?error=Kötelező mező");
    exit();
}

$sql = "SELECT * FROM felhasznalok WHERE fnev='$nev' AND password ='$jelszo'";
$eredmeny = mysqli_fetch_assoc($eredmeny);

if(mysqli_num_rows($eredmeny) === 1) {
    $row = mysqli_fetch_assoc($eredmeny);
    if($row('fnev') === $nev && $jelszo()) {
        echo "Sikeres bejelentkezés";
        $_SESSION['fnev'] = $row['fnev'];
        $_SESSION['nev'] = $row['nev'];
        $_SESSION['id'] = $row['id'];
        header("Location: home.php");
        exit();
    } else {
        header("Location: index.php?error=Helytelen felhasználónév vagy jelszó");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
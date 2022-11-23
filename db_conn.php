<?php
$servername = "localhost";
$username = "username";
$password = "passworld";

$conn = new msqli($servername, $username, $password);

if($conn->connect_error) {
    die("A csatlakozás meghiúsult. Próbálja újra" . $conn->connect_error);
}
$sql = "CREATE DATABASE support";
if($conn->query($sql) === TRUE) {
    echo "Sikeres létrehozás";
}else {
    echo "Hiba" . $conn->error;
}


$conn->close();
?>
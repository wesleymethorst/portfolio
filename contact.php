<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    echo "Bedankt, $name! We hebben je bericht ontvangen.";
}
?>

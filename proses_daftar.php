<?php

$local = "localhost";
$user = "root";
$password = "";
$db = "timetracer";

$mysqli = new mysqli($local, $user, $password, $db);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST['Email'];
    $Username = $_POST['Username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO pengguna (Email, Username, password) 
            VALUES ('$Email', '$Username', '$password')";

    if ($mysqli->query($sql) === TRUE) {
        // Add HTML and CSS to style the success message and center it
        echo '<div style="display: flex; justify-content: center; align-items: center; height: 100vh; text-align: center;">';
        echo '<div style="background-color: #oooFF; color: white; padding: 20px; font-size: 24px; border-radius: 10px;">';
        echo "Akun Berhasil dibuat, tunggu beberapa saat untuk Login";
        echo '</div>';
        echo '</div>';
        
        // Redirect to login.php after a few seconds
        header("refresh:3;url=login.php");
        exit; // Important to stop further execution after redirecting
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}
?>

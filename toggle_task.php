<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tasks";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['task_id']);
    $sql = "UPDATE task SET completed = !completed WHERE task_id = $id";
    
    if ($mysqli->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}

$mysqli->close();
?>
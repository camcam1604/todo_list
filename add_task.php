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
    $task = $mysqli->real_escape_string($_POST['task']);
    $sql = "INSERT INTO task (task) VALUES ('$task')";
    
    if ($mysqli->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}

$mysqli->close();
?>
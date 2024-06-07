<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tasks";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT task_id, task, completed FROM task";
$result = $mysqli->query($sql);

$taskCount = $result->num_rows;
echo "<p>Total des tâches ajoutées: $taskCount</p>";

if ($result === false) {
    die("Error in query: " . $mysqli->error);
}

if ($taskCount > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '  <div class="task' . ($row["completed"] ? ' completed' : '') . '">
                <form style="display:inline;" action="toggle_task.php" method="post">
                    <input type="hidden" name="task_id" value="' . $row["task_id"] . '">
                    <input type="radio" class="form-check-input" name="completed_task" value="' . $row["task_id"] . '"' . ($row["completed"] ? 'checked':'') . ' onchange="this.form.submit()">
                </form>
                <span class="task">' . htmlspecialchars($row["task"]) . '</span>
                <form style="display:inline;" action="delete_task.php" method="post">
                    <input type="hidden" name="task_id" value="' . $row["task_id"] . '">
                    <button type="submit" class="btn btn-success">Supprimer</button>
                </form>
                </>';
    }
} else {
    echo "Aucune tâche trouvée.";
}

$mysqli->close();
?>
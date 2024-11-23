<?php
include 'db.php';

if (isset($_POST['task_name'])) {
    $taskName = $_POST['task_name'];
    $sql = "INSERT INTO tasks (task_name) VALUES ('$taskName')";

    if ($conn->query($sql) === TRUE) {
        echo "Task berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

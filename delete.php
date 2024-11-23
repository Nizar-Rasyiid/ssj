<?php
include 'db.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM tasks WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Task berhasil dihapus!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<?php
include 'db.php';

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['task_name']}</td>
                <td>{$row['status']}</td>
                <td><button class='delete-btn' data-id='{$row['id']}'>Hapus</button></td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>Tidak ada data.</td></tr>";
}
?>

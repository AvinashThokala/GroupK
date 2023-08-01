<?php
include('config.php');

 if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM Employee WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Student deleted successfully.";
    } else {
        echo "Error deleting student: " . $conn->error;
    }
}

$conn->close();
?>
<br>
<a href="index.php">Back to employee List</a>


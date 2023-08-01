<?php include('config.php'); ?>
<h2>Add New Student</h2>
<form action="" method="POST">
    Employee_Name: <input type="text" name="name" required><br>
    Age: <input type="number" name="age" required><br>
    Mobile_Number: <input type="number" name="number" required><br>
     Location: <input type="text" name="Location" required><br>
      Project_Name: <input type="text" name="projectname" required><br>
       Role: <input type="number" name="role" required><br>
    <input type="submit" name="submit" value="Add Student">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $number = $_POST['number'];
    $Location = $_POST['Location'];
     $projectname = $_POST['projectname'];
      $role = $_POST['role'];



    $sql = "INSERT INTO Employee (Employee_Name, Age, Mobile_Number, Location, Project_Name, Role) VALUES ('$name', '$age', '$number','$Location','$projectname','$role')";

    if ($conn->query($sql) === TRUE) {
        echo "New employee added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
<br>
<a href="index.php">View All Students</a>

<?php
//including the database connection file
include '../config/dbconn.php';
//getting id of the data from url
$id = $_GET['question_number'];
//deleting the row from table
$result = mysqli_query($dbconn, "DELETE FROM questions WHERE question_number=$id");
//redirecting to the display page (index.php in our case)
header("Location:../pages/admin_panel.php");
?>

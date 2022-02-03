<?php include '../../MyDB.php';
    $id = $_POST["Tag_Number"];
    $name = $_POST["Edit_Name_Tag"];
    $sql = "UPDATE tag SET Tag_Name='$name' WHERE Tag_Number='$id'";
    mysqli_query($con, $sql);
    echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = '../View/Tag.php'; ";
	echo "</script>";
?>

<?php include '../../MyDB.php';
    $id = $_POST["Category_Number"];
    $name = $_POST["Edit_Name_Category"];
    $sql = "UPDATE category SET Category_Name='$name' WHERE Category_Number='$id'";
    mysqli_query($con, $sql);
    echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = '../View/Category.php'; ";
	echo "</script>";
?>

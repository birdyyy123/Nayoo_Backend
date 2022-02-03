<?php include '../../MyDB.php';
    $username = $_POST['Name_Category'];
    $sql1 = " INSERT INTO category(Category_Name) VALUES ('$username')";
    mysqli_query($con, $sql1);
    echo "<script type='text/javascript'>";
	echo "alert('Save Succesfuly');";
	echo "window.location = '../View/Category.php'; ";
	echo "</script>";
?>

<?php include '../../MyDB.php';
    $username = $_POST['Name_Tag'];
    $sql1 = " INSERT INTO tag(Tag_Name) VALUES ('$username')";
    mysqli_query($con, $sql1);
    echo "<script type='text/javascript'>";
	echo "alert('Save Succesfuly');";
	echo "window.location = '../View/Tag.php'; ";
	echo "</script>";
?>

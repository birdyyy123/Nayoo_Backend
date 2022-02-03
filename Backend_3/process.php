



<?php include 'MyDB.php';
// $result = mysqli_query($connect, "SELECT * FROM album");

if ($_REQUEST['Name_Category']){
    $username = $_POST['Name_Category'];
    $sql1 = " INSERT INTO category(Category_Name) VALUES ('$username')";
    mysqli_query($con, $sql1);
    echo "<script type='text/javascript'>";
	echo "alert('Save Succesfuly');";
	echo "window.location = 'Category.php'; ";
	echo "</script>";
}

if ($_REQUEST['Edit_Name_Category']){
    // $id = $_POST["Category_Number"];
    // $name = $_POST["Edit_Name_Category"];
    // $sql = "UPDATE category SET Category_Name='$name' WHERE Category_Number='$id'";
    // mysqli_query($con, $sql);
    // echo "<script type='text/javascript'>";
	// echo "alert('Update Succesfuly');";
	// echo "window.location = 'Category.php'; ";
	// echo "</script>";
}

// mysqli_close($con);
// while($row = mysqli_fetch_array($result)){
//     echo $row["Name"]. "" . $row["Category_Number"] . "<br>";


// }


// 2




?>

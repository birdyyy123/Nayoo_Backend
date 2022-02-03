<?php  include("../../head.php");
include ('../../MyDB.php');

$queryCategory = "SELECT Category_Name FROM category" or die("Error:" . mysqli_error());
$resultCategory = mysqli_query($con, $queryCategory)
?>


<form action="EditNameCategory.php" method="POST" enctype="multipart/form-data"  name="add" class="form-horizontal" id="add">
  <div class="form-group">
  <input type="hidden" name="Category_Number" value="<?php echo $member_id; ?>" />
    <div class="col-sm-4" align="left"> Name album </div>
    <div class="col-sm-3" align="left">
      <input type="text" name="Edit_Name_Category" id="Username" class="form-control">
    </div>
  </div>
  <?php
    echo '<select name="cars" class="custom-select mb-3">';
        echo '<option selected>Custom Select Menu</option>';
        while($rowCategory = mysqli_fetch_array($resultCategory)) {
            echo '<option value="volvo">' .$rowCategory["Category_Name"] . '</option>';
    }echo '</select>';
  ?>
  <div class="col-sm-4" align="left"> Tag </div>
    <div class="col-sm-3" align="left">
      <input type="text" name="Edit_Name_Category" id="Username" class="form-control">
    </div>
  </div>
  <button type="submit" class="btn btn-danger  btn-lg btn-block" id="btn"> Save </button>
</form>
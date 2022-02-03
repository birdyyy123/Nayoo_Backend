<?php  include("../../head.php");
include ('../../MyDB.php');
$member_id = mysqli_real_escape_string($con,$_GET['Tag_Number']);
$sql = "SELECT * FROM tag WHERE Tag_Number='$member_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<form action="EditNameTag.php" method="POST" enctype="multipart/form-data"  name="add" class="form-horizontal" id="add">
  <div class="form-group">
  <input type="hidden" name="Tag_Number" value="<?php echo $member_id; ?>" />
    <div class="col-sm-4" align="left"> Name Category </div>
    <div class="col-sm-3" align="left">
      <input type="text" name="Edit_Name_Tag" id="Username" class="form-control">
      <button type="submit" class="btn btn-danger  btn-lg btn-block" id="btn"> Save </button>
    </div>
  </div>
</form>
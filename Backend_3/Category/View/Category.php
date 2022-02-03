<?php  include("../../head.php");
  include ('../../MyDB.php');
?>
<h1><center>Category</center></h1>
<a href="/Mydb/" class="btn btn-info" role="button">Bank</a>
<br>
<center>
<form action="/Mydb/Category/Controller/NameCategory.php" method="POST" enctype="multipart/form-data"  name="add" class="form-horizontal" id="add">
  <div class="form-group">
    <div class="col-sm-4" align="left"> Name Category </div>
    <div class="col-sm-3" align="left">
      <input type="text" name="Name_Category" id="Username" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-3"> </div>
    <div class="col-sm-6">
      <button type="submit" class="btn btn-danger  btn-lg btn-block" id="btn"> Save </button>
    </div>
  </div>
</form>
</center>
<?php
$query = "SELECT * FROM category" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query)
?>
<div class="form-group">
  <div class="col-sm-3"> </div>
  <div class="col-sm-6">

    <?php
    echo ' <table id="example1" class="table table-bordered table-striped">';
      echo "<thead>";
        echo "<tr class='info'>
          <th width='25%'>ID</th>
          <th width='25%'>username</th>
          <th width='1%'></th>
          
        </tr>";
      echo "</thead>";
      while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
        echo "<td>" .$row["Category_Number"] .  "</td> ";
        echo "<td>" .$row["Category_Name"] .  "</td> ";
        echo "<td><a href='../Controller/CategoryEdit.php?Category_Number=$row[0]'>Edit</a></td> ";
      echo "</tr>";
      }
    echo "</table>";
    mysqli_close($con);
    ?>
  </div>
</div>
</div>


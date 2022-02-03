<?php  include("../../head.php");
  include ('../../MyDB.php');
?>
<h1><center>Tag</center></h1>
<a href="/Nayoo_Backend/Backend_3/" class="btn btn-info" role="button">Bank</a>
<br>
<center>
<form action="../Controller/NameTag.php" method="POST" enctype="multipart/form-data"  name="add" class="form-horizontal" id="add">
  <div class="form-group">
    <div class="col-sm-4" align="left"> Name Tag </div>
    <div class="col-sm-3" align="left">
      <input type="text" name="Name_Tag" id="Username" class="form-control">
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
$query = "SELECT * FROM Tag" or die("Error:" . mysqli_error());
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
          <th width='25%'>name</th>
          <th width='1%'></th>
          
        </tr>";
      echo "</thead>";
      while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
        echo "<td>" .$row["Tag_Number"] .  "</td> ";
        echo "<td>" .$row["Tag_Name"] .  "</td> ";
        echo "<td><a href='../Controller/TagEdit.php?Tag_Number=$row[0]'>Edit</a></td> ";
      echo "</tr>";
      }
    echo "</table>";
    mysqli_close($con);
    ?>
  </div>
</div>
</div>


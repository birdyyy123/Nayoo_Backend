<?php  include("../../head.php");
  include ('../../MyDB.php');
?>
<h1><center>Category</center></h1>
<a href="/Nayoo_Backend/Backend_3/" class="btn btn-info" role="button">Bank</a>
<br>
<center>

  <a href="../Controller/Addalbum.php" class="btn btn-info" role="button">Add album</a>
</center>
<?php

$queryalbum = "SELECT Number,Name,category.Category_Name,Tag_Number FROM album INNER JOIN category ON album.Category_Number = category.Category_Number" or die("Error:" . mysqli_error());
$resultalbum = mysqli_query($con, $queryalbum);


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
          <th width='25%'>Category_Numbe</th>
          <th width='25%'>Tag</th>
          <th width='1%'></th>
          
        </tr>";
      echo "</thead>";
      while($rowalbum = mysqli_fetch_array($resultalbum)) {
      echo "<tr>";
        echo "<td>" .$rowalbum["Number"] .  "</td> ";
        echo "<td>" .$rowalbum["Name"] .  "</td> ";
        echo "<td>" .$rowalbum["Category_Name"] .  "</td> ";
        echo "<td>" .$rowalbum["Tag_Number"] .  "</td> ";
        echo "<td><a href='../Controller/albumEdit.php?album_Number=$rowalbum[0]'>Edit</a></td> ";
      echo "</tr>";
      }
    echo "</table>";
    mysqli_close($con);
    ?>
  </div>
</div>
</div>


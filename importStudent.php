<?php
$alertmes= $_GET['var'];
?>



<form action="importStudentP.php" enctype="multipart/form-data" role="form" method="post">

  <label for="exampleInputFile">File Upload</label><br /><br />
  <input type="text" name="class" id="file" size="1" value="<?php echo $alertmes; ?>" readonly><br /><br />
  <input type="file" name="file" id="file" size="150">
  <p>Only CSV file import.</p>
  <button class="btn btn-info" type="submit" name="ImportStud" value="Import">Upload</button>

</form>

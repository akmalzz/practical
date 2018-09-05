
<?php
$var = $_GET['var'];

if($var==ftrwq)
{
  echo "<script type='text/javascript'>alert('Record Deleted Successfully');</script>";
}
 ?>



<form action="listProblemStatements.php" enctype="multipart/form-data" role="form" method="post">
<div text-align="center">
  <p><input type="text" name="courseId" placeholder="Enter Course ID"><br /><br /></p>
  <p><button class="btn btn-info" type="submit" name="listProb" value="Import">Display</button></p>
</div>
</form>

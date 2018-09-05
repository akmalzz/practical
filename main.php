<?php
$var = $_GET['var'];

if($var==pkxxty)
{
  echo "<script type='text/javascript'>alert('Course Has Been Successfully Created');</script>";
  echo "<script type='text/javascript'>window.location='main.php';</script>";
}
elseif($var==rbkiyr)
{
  echo "<script type='text/javascript'>alert('Class Has Been Successfully Created');</script>";
  echo "<script type='text/javascript'>window.location='main.php';</script>";
}

 ?>


<html>
<head>
</head>

<body>
<h1><a href="importProb.html" target="_blank">Create a Course</a></h1>
<h1><a href="problemstatements.php" target="_blank">Display Problem Statements</a></h1>
<h1><a href="addStudent.html" target="_blank">Create Class</a></h1>
<h1><a href="displayStudents.html" target="_blank">Display & Approve Students</a></h1>
<h1><a href="" target="_blank"></a></h1>


</body>

</html>

<?php

require('connect.php');

$deletek= $_GET['id'];
$course= $_GET['var2'];
//echo $symb;




//////////////////


//$deletek=$_POST["deletekey"];//*

//////////////

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = " DELETE FROM ".$course."p WHERE id='$deletek'";
    // use exec() because no results are returned
    $conn->exec($sql);

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

  echo "Record Deleted Successfully";
  header('Location:problemstatements.php?var=ftrwq');





 ?>

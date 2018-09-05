<?php

require('connect.php');

$deletek= $_GET['id'];

//echo $symb;
 
 


//////////////////


//$deletek=$_POST["deletekey"];//*

//////////////

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = " DELETE FROM test WHERE roll='$deletek'";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record Deleted Successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;







 ?>

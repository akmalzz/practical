<?php
if(!empty($_POST["submitCheck"])){

require('connect.php');
$class = $_POST["clsName"];
$course = $_POST["course"];
$xc = $_POST["tot"];
$count = 1;

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
for($i=0 ; $i<$xc ; $i++)
{
  $check = $_POST["ch".$i.""];
    $sql = "CREATE TABLE IF NOT EXISTS ".$class."c (id int PRIMARY KEY AUTO_INCREMENT, seatno varchar(20), name varchar(100), approved varchar(4) );update ".$class."c set approved='$check' where id=$count; ";

    $conn->exec($sql);
    $count++;
}

    $congo="New Record Created Successfully";

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    //echo $sql1 . "<br>" . $e->getMessage();

    }

$conn = null;

echo "<h1>Approval list created</h1>";
header("Location:displaystudents.php?class=$class&vrr=bbytrwz");

}

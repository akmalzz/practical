<?php
if(!empty($_POST["ImportStud"])){

require('connect.php');
$class = $_POST["class"];


try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//   echo $filename = $_FILES['file']['tmp_name'];
   $filename = $_FILES['file']['tmp_name'];
   if($_FILES['file']['size'] > 0)
   {
     $file = fopen($filename, "r");
     while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE )
     {
       $sql = "CREATE TABLE IF NOT EXISTS ".$class."c (id int PRIMARY KEY AUTO_INCREMENT, seatno varchar(20), name varchar(100), approved varchar(4) );INSERT INTO ".$class."c (seatno,name)VALUES ('$emapData[0]','$emapData[1]');";
       $res=$conn->exec($sql);;
     }
     fclose($file);

     header('Location:main.php?var=rbkiyr');
   // use exec() because no results are returned
    }





//echo $congo="New Record Created Successfully";
   }
catch(PDOException $e)
   {
   echo $sql . "<br>" . $e->getMessage();
   //echo $sql1 . "<br>" . $e->getMessage();
   }

$conn = null;

}

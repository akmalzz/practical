<?php
if(!empty($_POST["ImportProb"])){

require('connect.php');
$course = $_POST["courseId"];


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
       $sql = "CREATE TABLE IF NOT EXISTS ".$course."p ( id int(5) PRIMARY KEY AUTO_INCREMENT, statement text );INSERT INTO ".$course."p (statement)VALUES ('$emapData[0]');";
       $res=$conn->exec($sql);;
     }
     fclose($file);
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

//sleep(5);
header('Location:main.php?var=pkxxty');


}

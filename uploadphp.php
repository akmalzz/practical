<?php
/*include_once('connection.php');

if(isset($_POST['Import']))
{
  echo $filename = $_FILES['file']['tmp_name'];
  if($_FILES['file']['size'] > 0)
  {
    $file = fopen($filename, "r");
    while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE )
    {
      $sql = "INSERT into tbl_excel(excel_name, excel_email) values('$emapData[0]', '$emapData[1]')";
      $res=$conn->query($sql);
    }
    fclose($file);
    echo "CSV file has been Successfully imported";
  }
  else {
    echo "INVALID file : Please upload CSV file";
  }


}


?>
*/

<?php
if(!empty($_POST["Import"])){

require('connect.php');



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
       $sql = "INSERT into tbl_excel(excel_name, excel_email) values('$emapData[0]', '$emapData[1]')";
       $res=$conn->exec($sql);;
     }
     fclose($file);
     echo "CSV file has been Successfully imported";

   // use exec() because no results are returned
    }





echo $congo="New Record Created Successfully";
   }
catch(PDOException $e)
   {
   echo $sql . "<br>" . $e->getMessage();
   //echo $sql1 . "<br>" . $e->getMessage();
   header("location:admin.php?var=$congo&var2=1");
   }

$conn = null;

}


?>

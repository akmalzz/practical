<?php

$alertmes= $_GET['var'];
$alertmes2= $_GET['var2'];


if($alertmes2==1)
{

	echo "<script  type='text/javascript' language='javaScript'>";

	echo "alert('".$alertmes."');";

	echo 'window.location.href = "admin.php";';

	echo "</script>";



}
?>


<?php
if(!empty(_POST['file']))
{
  if($_FILES['file']['name'])
  {

    require("connect.php");
    $filename = explode('.',$_FILES['file']['name']);

    if($filename[1] == 'csv')
    {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
            $handle = fopen($_FILES['file']['tmp_name'],"r");
            while ($data = fgetcsv($handle))
            {
              $item1 = prepare($conn, $data[0]);
              $item2 = prepare($conn, $data[1]);
              $sql = "INSERT into tbl_excel(excel_name, excel_email) values('$item1', '$item2');";
              $conn->exec($sql);
            }
            fclose($handle);

//
            $congo="New Record Created Successfully";
            header("location:file.php?var=$congo&var2=1");
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            header("location:file.php?var=$congo&var2=1");
            }
        $conn = null;
      }
  }

}
 ?>
<html>
<head>
<title>File Upload</title>
</head>

<body>
  <form method="POST" enctype="multipart/form-data">
    <div align="center">
      <p>Upload CSv:<input type="file" name="file"/></p>
      <p><input type="submit" name="submit" value="import"/></p>
    </div>
  </form>
</body>


</html>

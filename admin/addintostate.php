 <?php
if(!empty($_POST["submitState"])){

require('connect.php');

//////////////////
$courseId=$_POST["courseId"];
$probState=$_POST["probState"];

//////////////

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "  CREATE TABLE IF NOT EXISTS ".$courseId."p ( id INT(10) AUTO_INCREMENT PRIMARY KEY, statement text );INSERT INTO ".$courseId."p (statement)VALUES ('$probState'); ";


    // use exec() because no results are returned


    $conn->exec($sql);



    $congo="New Record Created Successfully";
    header("location:admin.php?var=$congo&var2=1");
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

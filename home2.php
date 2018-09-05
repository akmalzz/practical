<?php



require('connect.php');

//////////////////
$courseId=$_POST["courseId"];
$seatNo=$_POST["seatNo"];
$class=$_POST["class"];

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return parent::current();
    }

    function beginChildren() {

    }

    function endChildren() {

    }
}


$alldata=array();
$alldata2=array();
$count=0;
$tot=0;
$approval='Hello';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT approved FROM ".$class."c where seatno ='$seatNo';");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        //echo $v;
        $approval=$v;

    }

/*echo $alldata[0];//name
echo $alldata[1];//email
echo $alldata[2];//paymode*/

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;

if($approval!='app')
{
  header('Location:notApproved.html');
}
else
{



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT count(id) FROM ".$courseId."p;");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        //echo $v;
        $tot=$v;
    }

/*echo $alldata[0];//name
echo $alldata[1];//email
echo $alldata[2];//paymode*/

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;

$numberGen=rand(1,$tot);

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT statement FROM ".$courseId."p where id = $numberGen;");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        //echo $v;
        $alldata[$count]=$v;
        $count=$count+1;
    }

/*echo $alldata[0];//name
echo $alldata[1];//email
echo $alldata[2];//paymode*/

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
$count=0;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT statement FROM studtab where seatno='$seatNo';");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        //echo $v;
        $alldata2[$count]=$v;
        $count=$count+1;
    }

/*echo $alldata[0];//name
echo $alldata[1];//email
echo $alldata[2];//paymode*/

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;


if($count==0)
{
	$pbvar = "$alldata[0]";





try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "  CREATE TABLE IF NOT EXISTS studtab ( seatno varchar(30) PRIMARY KEY, statement text );INSERT INTO studtab VALUES ('$seatNo','$pbvar'); ";


    // use exec() because no results are returned


    $conn->exec($sql);


    $congo="New Record Created Successfully";

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    //echo $sql1 . "<br>" . $e->getMessage();

    }
}
else
{



$studData=array();
$count==0;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("select * from studtab where seatno = '$seatNo';");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        //echo $v;
        $studData[$count]=$v;
        $count=$count+1;
    }


    $pbvar = "<br/>Seat No : $studData[1] </br> Problem Statement : $studData[2] <br/>You have alredy got your statement!!!!<br/>Play Fair Bro....";
/*echo $alldata[0];//name
echo $alldata[1];//email
echo $alldata[2];//paymode*/

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}




}
$conn = null;

}



/*$i=0;
$count=$count-1;
for ($x = 0; $x <= $count/2; $x++) {
    echo "<tr><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td><a href='deleteNote.php?id=".$alldata[$i-2]."'><i class='fa fa-trash-o' aria-hidden='true'></i></a></td></tr>";
}
*/


?>


<!DOCTYPE html>
<html>
<head>
	<title>MMCOE Practical Exam Portal</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>


<div class="container">

<div id="mmcoeLogo">
	<img src="mmcoeLogo.jpg">
</div>


<div id="statementDivision">
	<p id="statement"><?php echo $pbvar; ?></p>
</div>

</div>

</body>
</html>

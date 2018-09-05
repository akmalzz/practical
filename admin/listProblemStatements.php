<?php
$course = $_POST['courseId'];
 ?>


<html>
<head>

<link href="bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


</table>
 </div>
 <!-------------------------------------------------------------------->

 <div class="table-responsive" style="">
 <table class="table table-striped table-bordered">
<tr><th colspan="3" class="text-center">Course ID : <?php echo $course; ?></th></tr>
 <tr><th>id</th><th>Problem Statement</th><th>Delete</th></tr>
 <!-------------------------------------------------------------------->


<?php

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

require('connect.php');
$alldata=array();
$count=0;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare(" SELECT * FROM ".$course."p; ");
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
$i=0;
$count=$count-1;
for ($x = 0; $x <= $count/2; $x++) {
    echo "<tr><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td><a href='deleteStatement.php?id=".$alldata[$i-2]."&var2=".$course."'><i class='fa fa-trash-o' aria-hidden='true'></i></a></td></tr>";
}



?>

</table>
</div>



</html>

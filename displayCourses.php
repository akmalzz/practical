
<html>


<head>


  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




</head>

 <!-------------------------------------------------------------------->
 <div class="table-responsive" style="">
 <table class="table table-striped table-bordered">
 <tr><th>Course ID</th><th>Course</th></tr>
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
    $stmt = $conn->prepare(" SELECT * FROM Courses; ");
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
      echo "<tr><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td></tr>";
}



?>

</table>
</div>



</html>

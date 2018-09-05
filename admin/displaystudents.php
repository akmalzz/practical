<?php
$class = $_GET['class'];

$var = $_GET['vrr'];

if($var==bbytrwz)
{
  echo "<script type='text/javascript'>alert('Approval list has been Updated');</script>";
  echo "<script type='text/javascript'>window.location='displaystudents.php?class=$class';</script>";
}

?>


<html>


<head>


  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




</head>




</table>
 </div>
 <!-------------------------------------------------------------------->
<form enctype="multipart/form-data" method="post" action="createApList.php">
 <div class="table-responsive" style="">
 <table class="table table-striped table-bordered">
<tr><th colspan="3" class="text-center">Class : <?php echo "<input type='text' name='clsName' value='$class' readonly>"; ?></th></tr>
 <tr><th>Seat Number</th><th>Name</th><th>Check</th></tr>
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
    $stmt = $conn->prepare(" SELECT * FROM ".$class."c; ");
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
for ($x = 0; $x <= $count/4; $x++) {
  $i++;
    if($alldata[$i+2]=='app')
    {
      echo "<tr><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td><input type='checkbox' class='chcktbl' name='ch$x' value='app' checked />&nbsp;</td></tr>";
    }
    else
    {
      echo "<tr><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td><input type='checkbox' class='chcktbl' name='ch$x' value='app' />&nbsp;</td></tr>";
    }

  $i++;
}



?>

</table>
</div>
<Label>Total : &nbsp</label><input type="text" name="tot" value="<?php echo $x;?>" readonly>&nbsp&nbsp
<!--<input type="text" name="course">-->
<input type="submit" name="submitCheck" value="Submit">
</form>


</html>

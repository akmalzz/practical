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
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
</head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="admin.css">

<body>


<nav class="navbar navbar-default">
	<div class="conainer-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">
				<img src="mmcoeLogo.jpg" id="adminLogo">
			</a>
		</div>
	</div>
</nav>

<div class="container">

 <div class="row">

        <div class="col-lg-2">
        </div>
        <div class=col-lg-6>

        <form method="POST" action="addintostate.php" enctype="" >
            <div class="form-group">
            <input id="courseID" name="courseId" class="form-control" type="text" name="name" placeholder="Enter Course ID">
        	</div>

            <div class="form-group">
            	<textarea id="problemStatement" name="probState" class="form-control" rows="10" cols="100" placeholder="Enter problem statement"></textarea>
            </div>

            <div class="form-group" id="uploadDivision">
            	<button class="btn btn-info" type="submit" name="submitState" value="Upload">Upload</button>  
            </div>

        </form>
    	</div>

    	<div class="col-lg-4">
    	</div>

    </div>

</div>

</body>
</html>

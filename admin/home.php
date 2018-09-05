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

<form method="POST" action="home2.php" enctype="">

	<p><input type="text" placeholder="Enter Exam Seat Number" name="seatNo" required></p>

	<p><input type="text" placeholder="Enter Course ID" name="courseId" required></p>

<p>
	<select name="class">
  <option value="BE">BE</option>
  <option value="TE">TE</option>
  <option value="SE">SE</option>
</select>
</p>

	<input type="submit" name="getState" value="Get Statement" >
</form>

<div id="statementDivision">
	<p id="statement"></p>
</div>

</div>

</body>
</html>

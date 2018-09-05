<?php

if(!empty($_POST["sub"]))
{
    echo "<h1>Married  :  ".$_POST["check1"]."</h1>";
    echo "<h1>Student  :  ".$_POST["check2"]."</h1>";
    echo "<h1>Submit  :  ".$_POST["sub"]."</h1>";
}

?>


<form method="post" enctype="multipart/form-data" action="?" >
<label>Married</label><input type="checkbox" value="done" name="check1">
<label>Student</label><input type="checkbox" value="done" name="check2">
<input type="submit" name="sub" value="Submit">
</form>


<html>
<head>
</head>
<body>
  <a href="https://www.google.com" target="_blank">Google</a>
</body>

</html>

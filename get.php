<html>
<head>
<title>intro to GET and POST</title>
</head>
<body>
<form action="get.php" method="GET">
<label for="name">enter your name</label><br>
<input type="text"name="name" id="name"><br>
<input type="submit">
</form>
<?php
$name=$GET["name"];
echo"your name is $name";
?>
</body>
</html>


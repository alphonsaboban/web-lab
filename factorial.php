<html>
<head></head>
<body>
<form method="POST">
enter a number:<input type="text" name="number" <br><br><br>
<input type="submit" name="submit" value="submit"<br>
</form>
</body>
</html>
<?php  
if($_POST){  
$fact = 1;  
$number = $_POST['number'];  
echo "Factorial of $number:<br><br>";  
for ($i = 1; $i <= $number; $i++){         
$fact = $fact*$i;  
}  
echo $fact."<br>";  
}  

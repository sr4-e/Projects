<!DOCTYPE HTML>
<html>  
<body>

<form action="demo_forms.php" method="get">
Name: <input type="text" name="name"><br>
Maijor: <input type="text" name="maijor"><br>
<input type="submit">
</form>

Welcome <?php echo $_GET["name"]; ?><br>
Your maijor is: <?php echo $_GET["maijor"]; ?>

</body>
</html>
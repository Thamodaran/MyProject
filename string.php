<html>
	<head>
		<link rel="stylesheet" href="mystyle.css">
		<style>
			a{display:block;width:100px;}
		</style>
	</head>
<body>
	<form method="post">
		<span class="row>">Welcome</span>
		<span class="row"><span class="cols">Please give the input here :</span><span class="cols"><input type="text"name="string"></span></span>
				<span class="row"><span class="cols"><input type="submit" value="Test"></span></span>
	</form>
<?php
if(!is_numeric($_POST['string'])){
?>
	<span class="output"><?php echo 'The given input is string'; ?> </span>
<?php
}
else if( $res == 0){
?>
	<span class="output"><?php echo 'The given input is Not a string'; ?> </span>
<?php
}
?>
<a href="index.php">Back</a>
</body>
</html>

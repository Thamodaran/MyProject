<html>
<head>
        <link rel="stylesheet" href="mystyle.css">
        <title>Day2 schdule</title>
<body>
<div class="outer">
        <h3>We are happy to reporting</h3>
        <div>
             <h3>Php basics</h3>
		<h4>Day-3 Status</h4>
		    <span class="row"><span class="cols">Introduction of Php</span></span>
       		    <span class="row"><span class="cols">Php syntax</span></span>
		    <span class="row"><span class="cols">Php variables</span></span>
		    <span class="row"><span class="cols">Output statements</span></span>
		<h4>Day-4 Status</h4>
		    <span class="row"><span class="cols">Php Datatypes</span></span>
		    <span class="row"><span class="cols">Php string functions</span></span>
		    <span class="row"><span class="cols">Constant </span></span>
		    <span class="row"><span class="cols">Operator </span></span>
	</div>
	<div>
		<h3>Worked Examples</h3>
		<a href="string.php">To find the given input is string or not</a>
		<a href="operator.php">Operator example</a>
		<a href="datatype.php">Data types example</a>
		<a href="?res=str">Test</a>
		<a href="?res=str1">Test1</a>
	</div>
	<div class="string">
		<?php
			if(isset($_REQUEST["res"]))
			{
				switch ($_REQUEST['res'])
				{
					case 'str': include 'operator.php';
					break;
					case 'str1': include 'datatype.php';
					break;
				}
			}
		?>

	</div>
</div>
</body>
</html>

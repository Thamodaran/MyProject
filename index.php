<html>
	<head>
		<link rel="stylesheet" href="mystyle.css">
	</head>
<body>
	<div id="outer">
		<nav>
			<h1>My Training</h1>
		</nav>
		<div id="left" class="left">
			<div id="leftinner"class="left">
				<h3>Training schedule</h3>
				<a href="day1.php?day1">Day 1</a>
				<a href="day2.php?day2">Day 2</a>
				<a href="day3_4.php?day3">Day 3 - Day 4</a>
				<a href="day5.php?day4">Day 5</a>
				<a href="day6_10.php?day5">Day 6 - Day 10</a>
				<a href="day11_13.php?day6">Day 11 - Day 13</a>
				<a href="day14.php?day7">Day 14</a>
			  	<a href="day15_16.php?day8">Day 15 - Day 16</a>
			  	<a href="day7_18.php?day9">Day 17 - Day 18</a>
			  	<a href="day19_20.php?day10">Day 19 - Day 20</a>
			  	<a href="day21_22.php?day11">Day 21 - Day 22</a>
			 </div>
		</div>
		<div id="right">
			<?php if(isset($_REQUEST["day1"]))
				{
					include 'day1.php';
				}
			  ?>
		</div>
	</div>
</body>
</html>

<html>
	<head>
		<link rel="stylesheet" href="mystyle.css">
	</head>
<body>
<header>
<h1>
	Welcome
</h1>
</header>
	<div class="outer">
		<nav>
			<h1>My Training</h1>
			<a href="index.php">Home</a>
		</nav>
		<div id="left" class="left">
			<div id="leftinner">
				<h4>Training schedule</h4>
				<a href="?day=day1">Day 1</a>
				<a href="?day=day2">Day 2</a>
				<a href="?day=day3">Day 3 - Day 4</a>
				<a href="?day=day4">Day 5</a>
				<a href="?day=day5">Day 6 - Day 10</a>
				<a href="?day=day6">Day 11 - Day 13</a>
				<a href="?day=day7">Day 14</a>
			  	<a href="?day=day8">Day 15 - Day 16</a>
			  	<a href="?day=day9">Day 17 - Day 18</a>
			  	<a href="?day=day10">Day 19 - Day 20</a>
			  	<a href="?day=day11">Day 21 - Day 22</a>
			 </div>
		</div>
		<div id="right1" class="left">
			<?php if(isset($_REQUEST["day"]))
				{
				 switch ($_REQUEST['day'])
				    {
					case 'day1':include 'day1.php';
					break;
					case 'day2':include 'day2.php';
                                        break;
					case 'day3':include 'day3_4.php';
                                        break;
                                        case 'day4':include 'day5.php';
					break;
                                        case 'day5':include 'day6_10.php';
                                        break;
                                        case 'day6':include 'day11_13.php';
					break;
                                        case 'day7':include 'day_14.php';
                                        break;
                                        case 'day8':include 'day15_16.php';
					break;
					case 'day9':include 'day15_16.php';
                                        break;
					case 'day10':include 'day15_16.php';
                                        break;
					case 'day11':include 'day15_16.php';
                                        break;
				    }
				}
			?>
			<div class="inner_top">

			</div>
		</div>
			<div class="rightinner right">
				<a href="#">Home</a>
			</div>
	</div>
<footer>
</footer>
</body>
</html>

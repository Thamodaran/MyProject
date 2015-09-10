	<form method="post">
		<span class="row align">Welcome</span>
                <span class="row"><span class="cols">Please enter the first number :</span><span class="cols"><input type="text" name="fnum">
			</span></span>
                <span class="row"><span class="cols">pleas enter the second number :</span><span class="cols"><input type="text" name="snum">
			</span></span>
		<span class="row"><span class="cols"><input type="submit" value="Test"></span></span>
        </form>
	<?php
		$firstnum=$_POST['fnum'];
		$secondnum=$_POST['snum'];
	?>
	<label class="output">using the addition operator</label><br>
	<span class="output">
	<?php
		echo $firstnum + $secondnum;
	?>
	</span>
	<br><label class="output">using the subtraction operator</label><br> 
	<span class="output">
	<?php
		echo $firstnum - $secondnum;
	?>
	</span>
	<br><label class="output">using the multiplication operator</label><br>
	<span class="output">
	<?php 
		echo $firstnum * $secondnum; 
	?>
	</span>
	<br><label class="output">using the division operator</label><br>
	<span class="output">
	<?php 
		echo $firstnum / $secondnum; 
	?>
	</span>
	<br><label class="output">using the modulus operator</label><br>
	<span class="output">
	<?php 
		echo $firstnum % $secondnum; 
	?>
<a href="index.php">Back</a>


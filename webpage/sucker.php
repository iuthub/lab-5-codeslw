<?php
if (isset($_POST['submit'])){
	$name=$POST['name'];
	$section=$POST['section'];
	$creditcardnumber=$POST['credit card'];
	$radio=$POST['Visa'];
	$radio2=$POST['Master card'];
	$valid==(empty($section) or empty($name) or empty($creditcardnumber) or (empty($radio) and empty($radio2)))?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		

		<h1>Buy Your Way to a Better Education!</h1>

		<p>
			The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
		</p>
		
		<hr />
		

		<h2>Give Us Your Money</h2>
		<?php 
		if(!valid){
			?>
		<dl>
			<dt>Name</dt>
			<dd>
              <?= $name ?>
			</dd>
			
			<dt>Section</dt>
			<dd>
				<?= $section ?>
			</dd>
			
			<dt>Credit Card</dt>
			<dd>
				<?= $creditcardnumber ?>
				</br>
				<?= $radio ?>
			</dd>
		</dl>
		
		<div>
			
		</div>
	<?php } 
	else{?>
		<p>Please feel out all the forms!</p>
		 <a href="buyagrade.php">Try again?</a></p>
		
	</body>
</html>
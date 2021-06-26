<?php
$number = range(0,6);

$sum=array(3,13,23);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Task</title>
</head>
<body>
	<div>
		<ul>
			<?php print_r ($number); ?>
		<li><?php echo array_sum($sum); ?></li>
		</ul>
		
	</div>





</body>
</html>
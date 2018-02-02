<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<nav>
		<ul>
			<li><a href="/about">About Us</a></li>
			<li><a href="/contact">Contact Us</a></li>
			<li><a href="/about/culture">About Culture</a></li>
		</ul>
	</nav>
	<ul>
		<?php foreach($tasks as $task): ?>
			<?php if($task->completed == true): ?>
				<li><strike><?php echo $task->id . ' ' . $task->description; ?></strike></li>
			<?php else: ?>
				<li><?php echo $task->id . ' ' . $task->description; ?></li>
			<?php endif; ?>
		<?php endforeach; ?>
	</ul>
</body>

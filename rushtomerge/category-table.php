<?php
	include('./back/db.php');

	$result = mysqli_query($link, "SELECT * FROM categories");
	while ($row = mysqli_fetch_assoc($result)) {
		echo <<<HTML
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="index.php?category=${row['id']}">
				<img width="235" height="235" src="${row['img']}" class="attachment-full size-full wp-post-image" alt="${row['name']}">
				</a>
				<div class="catlabel">
					<a href="index.php?category=${row['id']}">${row['name']}</a>
				</div>
HTML;
				if ($_SESSION['admin'])
				echo <<<HTML
				<div class="adm">
					<a href="delete123.php?category=${row['id']}">X</a>
				</div>
HTML;
		echo <<<HTML
			</div>
		</div>
HTML;
	}	
?>
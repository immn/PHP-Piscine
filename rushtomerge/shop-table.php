<?php
	include('./back/db.php');

	if (isset($_GET['category']))
	{
		$id = abs(mysqli_real_escape_string($link, $_GET['category']));
		$result = mysqli_query($link, "SELECT * FROM product_categories, products WHERE products.id=product_categories.product_id AND category_id = ${id}");
	}
	else
		$result = mysqli_query($link, "SELECT * FROM products");

	while ($row = mysqli_fetch_assoc($result)) {

		$price = $row['price'] / 100;
		echo <<<HTML
			<div class="post">
				<div class="icon">
					<a class="iconscale" href="/index.php?add=${row['id']}">
						<img width="235" height="235" src="${row['img']}" class="attachment-full size-full wp-post-image" alt="Image ${row['name']}">
					</a>
					<div class="catlabel">
						<a href="/index.php?add=${row['id']}">${row['name']}</a>
					</div>
					<div class="price">
						<a href="/index.php?add=${row['id']}">${price}$</a>
					</div>
HTML;
		if ($_SESSION['admin'])
				echo <<<HTML
				<div class="adm">
					<a href="delete123.php?product=${row['id']}">X</a>
				</div>
HTML;
			echo <<<HTML
				</div>
			</div>
HTML;
	}
?>
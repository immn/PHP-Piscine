<?php

	if ($_SESSION['cart'])
	{
		foreach ($_SESSION['cart'] as $product)
		{
			$price = $product['price'] / 100;
			echo <<<HTML
				<div class="post">
					<div class="icon">
						<a class="iconscale" href="#">
							<img width="235" height="235" src="${product['img']}" class="attachment-full size-full wp-post-image" alt="Image ${product['name']}">
						</a>
						<div class="catlabel">
							<a href="#">${product['name']}</a>
						</div>
						<div class="price">
							<a href="#">${price}$</a>
						</div>
					</div>
				</div>
HTML;
		}
	}
?>
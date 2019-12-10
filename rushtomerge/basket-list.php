<?php
	if ($_SESSION['cart'])
	{
		$i = 1;
		foreach($_SESSION['cart'] as $product)
		{
			$price = $product['price'] / 100 * $product['quantity'];
			echo "${i}. ${product['name']} x ${product['quantity']} - ${price} $";
			echo "<br>---------------------------------------------------------------------<br>";
			$i++;
		}
		$sum = $_SESSION['sum'] / 100;
		echo "<h1>Summary: ${sum}$</h1>";
	}
?>
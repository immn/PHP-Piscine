<?php include('head.php'); ?>
<header class="row">
	<div class="col-l-2 logo">
		<a href="index.php"><img src="img/42.png" alt=""></a>
	</div>
	<div class="col-l-6  menu">
		<a href="index.php" id="amenu">Home</a> 
		|
		<a href="category.php" id="amenu">Category</a> 
		|
		<a href="about.php" id="amenu">About</a> 
	</div>
	<div class="basket">
		<a href="basket.php" id="basket">
			<?php
				echo isset($_SESSION['basketCount']) ? $_SESSION['basketCount']  : "0";
			?>
			Price - 
			<?php
				echo isset($_SESSION['basketPrice']) ? number_format($_SESSION['basketPrice'], 2) : '0.00';
			?> $
		</a>
	</div>
	<div class="col-l-4 login">
		<a href="register.php"  id = "signup">Register</a> | <a href="login.php"  id = "signup">Sign Up</a>   
	</div>
</br>
</header>
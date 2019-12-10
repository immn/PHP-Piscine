<?php
	include('head.php');
	session_start();
?>
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
				echo isset($_SESSION['quantity']) ? $_SESSION['quantity']  : "0";
			?>
			Price - 
			<?php
				echo isset($_SESSION['sum']) ? number_format($_SESSION['sum'] / 100, 2) : '0.00';
			?> $
		</a>
	</div>
	<div class="col-l-4 login">
		<?php IF($_SESSION['login']): ?>
			<a href="delete.php"  id = "signup">Delete account</a> | <a href="logout.php"  id = "signup">Logout</a>
		<?php ELSE: ?>
			<a href="register.php"  id = "signup">Register</a> | <a href="login.php"  id = "signup">Sign In</a>
		<?php ENDIF; ?>
	</div>
</br>
</header>
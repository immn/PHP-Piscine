<?php	session_start();
		include('blocks/header-adm.php'); ?>
<div id = "autocenterbox">
	<div id="content">
		<div class="gallery">
		<div class="games"><strong>New Category</strong></div>
			<form action="scripts/new-category.php" class = "contact_form" method="POST">
			<div class="text"><h1>Name of Category</h1></div>
				<input type="text" name="pseudo" placeholder="" value="" class="input"><br><br>
				<div class="text"><h1>Path on server to pic</h1></div>
				<input type="email" name="email" placeholder="" class=""><br><br>
				<div class="text"><h1>Link</h1></div>
				<input type="text" name="firstname" placeholder="" class=""><br><br>
				<div class="text"><h1>Age</h1></div>
				<input type="text" name="lastname" placeholder="18+" class=""><br><br>
				<br>
				<button type="submit" class="submit">OK</button>
				<input type="hidden" name="from" value="register">
				<input type="hidden" name="success" value="login">
			</form>
		</div>
	</div>
</div>
<?php include('blocks/footer.php'); ?>






<?php	session_start();
		include('blocks/header-adm.php'); ?>
<div id = "autocenterbox">
	<div id="content">
		<div class="gallery">
		<div class="games"><strong>New Item</strong></div>
			<form action="scripts/item.php" class = "contact_form" method="POST">
			<div class="text"><h1>Name of item</h1></div>
				<input type="text" name="pseudo" placeholder="" value="" class="input"><br><br>
				<div class="text"><h1>Category of Item</h1></div>
				<!-- <input type="drop" name="password" placeholder="" class=""><br><br> -->
                <select name="Category" class="text">
                <option value="horror">horror</option>
                <option value="saab">Saab</option>
                <option value="fiat">Fiat</option>
                <option value="audi">Audi</option>
                </select>
				<div class="text"><h1>Path on server</h1></div>
				<input type="email" name="email" placeholder="" class=""><br><br>
				<div class="text"><h1>Link</h1></div>
				<input type="text" name="firstname" placeholder="" class=""><br><br>
				<div class="text"><h1>Price</h1></div>
				<input type="text" name="lastname" placeholder="5.99" class=""><br><br>
				<br>
				<button type="submit" class="submit">OK</button>
				<input type="hidden" name="from" value="register">
				<input type="hidden" name="success" value="login">
			</form>
		</div>
	</div>
</div>
<?php include('blocks/footer.php'); ?>






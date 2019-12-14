<?php	
	session_start();
	include('./back/db.php');

	if ($_SESSION['login'])
		header('Location: /');

	$err = "";
	if ($_POST['submit'] == "OK")
	{
		$nickname = mysqli_real_escape_string($link, $_POST['nickname']);
		$result = mysqli_query($link, "SELECT * FROM users WHERE nickname = '${nickname}'");
		if (mysqli_num_rows($result))
			$err = "Nickname already exist";
		else
		{
			if ($_POST['password'] != $_POST['password2'])
				$err = "Passwords not same";
			else
			{
				if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
					$err = "Invalid email";
				}
				else
				{
					if (strlen($_POST['password'] < 4))
						$err = "Password must be more than 3 symbols";
					else
					{
						$password = hash('md5', $_POST['password']);
						$mail = mysqli_real_escape_string($link, $_POST['email']);
						$name = mysqli_real_escape_string($link, $_POST['firstname']);
						$lastname = mysqli_real_escape_string($link, $_POST['lastname']);
						$address = mysqli_real_escape_string($link, $_POST['address']);
						mysqli_query($link, "INSERT INTO `users` (`id`, `nickname`, `password`, `mail`, `name`, `lastname`, `address`) 
						VALUES (NULL, '${nickname}', '${password}', '${mail}', '${name}', '${lastname}', '${address}')");
						$_SESSION['login'] = $nickname;
						header('Location: /');
					}
				}
			}
		}
	}


	include('blocks/header.php'); 
?>
<audio id="melody" autoplay>
	<source src=<?php
						echo isset($_GET['category']) ? "/"."music/".$_GET['category'].".mp3":"/music/ghostnusters.mp3";
					?>>
</audio>
<img id="imgOnOff" src="img\on.png" alt="Вкл/выкл звук" onclick="Mute()">

<script>
	myVid = document.getElementById("melody");
	imgOnOff = document.getElementById("imgOnOff");
	var x = 0;

	function Mute() {
		if (x == 0) {
			myVid.muted = true;
			imgOnOff.src = 'img\\off.png';
			x = 1;
		} else {
			myVid.muted = false;
			imgOnOff.src = 'img\\on.png';
			x = 0;
		}
	}
</script>

<div id="autocenterbox">
	<div id="content">
		<div class="gallery">
			<div class="games"><strong>Registry</strong></div>
			<?= $err ?>
			<form action="register.php" class="contact_form" method="POST">
				<div class="text">
					<h1>Nickname</h1>
				</div>
				<input type="text" name="nickname" placeholder="" value="" class="input" require><br><br>
				<div class="text">
					<h1>Password</h1>
				</div>
				<input type="password" name="password" placeholder="" class="" require><br><br>
				<div class="text">
					<h1>Retype password</h1>
				</div>
				<input type="password" name="password2" placeholder="Retype password" class="" require><br><br>
				<div class="text">
					<h1>E-mail</h1>
				</div>
				<input type="email" name="email" placeholder="example@example.com" class="" require><br><br>
				<div class="text">
					<h1>Firstname</h1>
				</div>
				<input type="text" name="firstname" placeholder="" class=""><br><br>
				<div class="text">
					<h1>Lastname</h1>
				</div>
				<input type="text" name="lastname" placeholder="" class=""><br><br>
				<div class="text">
					<h1>Address</h1>
				</div>
				<input type="text" name="address" placeholder="" class=""><br><br>
				<br>
				<button type="submit" class="submit" name="submit" value="OK">OK</button>
				<p>Have an account?<br><a href="login.php">Sign Up</a></p>
			</form>
		</div>
	</div>
</div>
<?php include('blocks/footer.php'); ?>
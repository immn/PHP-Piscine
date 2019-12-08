<?php	session_start();
		include('blocks/header.php'); ?>
			<audio id="melody" autoplay>
		<source src=<?php
						echo isset($_GET['category']) ? "/"."music/".$_GET['category'].".mp3":"/music/ghostnusters.mp3";
					?>>
	</audio>
	<img id="imgOnOff" src="img\on.png" alt="Вкл/выкл звук" onclick="Mute()">
	
	<script>	
		myVid=document.getElementById("melody");
		imgOnOff=document.getElementById("imgOnOff");
		var x = 0;
		function Mute()
		{
			if (x==0)
			{
				myVid.muted=true;
				imgOnOff.src='img\\off.png';
				x=1;
			}
			else
			{
				myVid.muted=false;
				imgOnOff.src='img\\on.png';
				x=0;
			} 
		}
	</script>

<div id = "autocenterbox">
	<div id="content">
		<div class="gallery">
		<div class="games"><strong>Sign In</strong></div>
			<form action="scripts/people.php" class = "contact_form" method="POST">
			<div class="text"><h1>Nickname</h1></div>
				<input type="text" name="pseudo" placeholder="" value="" class="input"><br><br>
				<div class="text"><h1>Password</h1></div>
				<input type="password" name="password" placeholder="" class=""><br><br>
				<br>
				<button type="submit" class="submit">OK</button>
				<input type="hidden" name="from" value="register">
				<input type="hidden" name="success" value="login">
				<p>Dont have an account?<br><a href="register.php">Register</a></p>
			</form>
		</div>
	</div>
</div>
<?php include('blocks/footer.php'); ?>






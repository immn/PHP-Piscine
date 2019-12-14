<?php
	session_start();
	if (!$_SESSION['cart'])
		header('Location: /');
	if (!$_SESSION['login'])
		header('Location: /register.php');
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
			<div class="games"><strong>Your Items</strong></div>
			<br>
			<br>
			<?php include("basket-table.php") ?>
		</div>
	</div>
</div>
<div id="autocenterbox">
	<div id="content">


		<div class="gallery">
			<div class="games"><strong>Total</strong></div>
			<br>
			<br>
			<?php include("basket-list.php") ?>
			<a href="order.php"> Buy It!</a>
		</div>
	</div>
</div>


<!-- </body> -->
<?php include('blocks/footer.php'); ?>
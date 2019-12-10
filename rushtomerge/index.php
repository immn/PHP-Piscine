<?php
	include('./back/db.php');

	session_start();

	/*
		cart
		----id
		----------name
		----------price
		----------img
		----------quantity
	*/
	if (isset($_GET['add']))
	{
		if (!$_SESSION['cart'])
		{
			$_SESSION['cart'] = array();
			$_SESSION['sum'] = 0;
			$_SESSION['quantity'] = 0;
		}
		
		$id = abs(mysqli_real_escape_string($link, $_GET['add']));
		$result = mysqli_query($link, "SELECT * FROM products WHERE id = ${id}");
		$row = mysqli_fetch_assoc($result);
		if ($_SESSION['cart'][$row['id']])
			$_SESSION['cart'][$row['id']]['quantity']++;
		else {
			$product = array(
				'name' => $row['name'],
				'price' => $row['price'],
				'img' => $row['img'],
				'quantity' => 1
			);
			$_SESSION['cart'][$row['id']] = $product;
		}

		$_SESSION['sum'] += $row['price'];
		$_SESSION['quantity'] += 1;
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
			<div class="games"><strong>Retro-Games Store</strong></div>
			<br>
			<br>
			<?php include("shop-table.php") ?>
			<?php IF($_SESSION['admin']): ?>
				<div class="post">
							<div class="icon">
								<a class="iconscale" href="">
								<img width="235" height="235" src="/img/new.png" class="attachment-full size-full wp-post-image" alt="">
								</a>
							</div>
						</div>
				</div>
			<?php ENDIF; ?>
		</div>
	</div>
</div>


<!-- </body> -->
<?php include('blocks/footer.php'); ?>
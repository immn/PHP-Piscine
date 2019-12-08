<?php
    session_start();

    include('blocks/header.php'); ?>
<div id = "autocenterbox">
<div id="content">
	<audio id="melody" autoplay="autoplay">
		<source src="music\ghostnusters.mp3">
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

	<div class="gallery">
	<br>
	<br>
		<!-- <div class="post">
			<div class="icon">
				<a class="iconscale" href="">
					<img width="432" height="432" src="img\giphy (11).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="">Dogia 2000</a>
				</div>	
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="">
				<img width="432" height="432" src="http://hello.eboy.com/eboy/wp-content/uploads/2019/11/KAI-Mixc-World-Shenzhen-64s-tn.png" class="attachment-full size-full wp-post-image" alt=""></a>
				<div class="catlabel">
					<a href="">Pixorama</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="">
				<img width="432" height="432" src="http://hello.eboy.com/eboy/wp-content/uploads/2016/02/Blockbob-Luxing-FlatRotating-01k-tn.gif" class="attachment-full size-full wp-post-image" alt=""></a>
				<div class="catlabel">
					<a href="">Turning Man</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="/">
				<img width="216" height="216" src="http://hello.eboy.com/eboy/wp-content/uploads/2016/11/UBS-UbisoftChars-09k-tn.png" class="attachment-full size-full wp-post-image" alt="">
			</a>
				<div class="catlabel">
					<a href="">Pop Mix</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
			<a class="iconscale" href="">
			<img width="432" height="432" src="http://hello.eboy.com/eboy/wp-content/uploads/2019/02/PT-Berlin-Weltzeituhr-kleiner-01t-tn.png" class="attachment-full size-full wp-post-image" alt="">
			</a>
				<div class="catlabel">
					<a href="">Atom</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="">
				<img width="432" height="432" src="img\giphy (10).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="">Triforce</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="">
				<img width="235" height="235" src="img\giphy (9).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="">Dark Wood</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="">
				<img width="235" height="235" src="img\giphy (8).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="">MacEat</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="">
				<img width="235" height="235" src="img\giphy (7).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="">Sceletons II</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="">
				<img width="235" height="235" src="img\giphy (6).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="">Mr. Lemo</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="">
				<img width="235" height="235" src="img\giphy (5).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="">MGS5</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="">
				<img width="235" height="235" src="img\giphy (4).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="">Dance Dance Revolution</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="">
				<img width="235" height="235" src="img\giphy (3).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="">KF</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="">
				<img width="235" height="235" src="img\giphy (2).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="">Star Skull</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="">
				<img width="235" height="235" src="img\giphy (1).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="">Magic Brush</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="">
				<img width="235" height="235" src="img\giphy.gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="">Stranger Things</a>
				</div>
			</div>
		</div> -->
		<?php include("shop-table.php") ?>
	</div>
</div>
</div>


<!-- </body> -->
<?php include('blocks/footer.php'); ?>




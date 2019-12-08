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
		<?php include("shop-table.php") ?>
	</div>
</div>
</div>


<!-- </body> -->
<?php include('blocks/footer.php'); ?>




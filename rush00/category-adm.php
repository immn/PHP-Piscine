<?php
    session_start();

	include('blocks/header.php'); ?>
	<audio id="melody" autoplay="autoplay">
		<source src="music\spiderman.mp3">
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
	<div class="games"><strong>Categories</strong></div>
	<br>
	<br>
		<?php include("category-table-adm.php") ?>
        <div class="post">
					<div class="icon">
						<a class="iconscale" href="\">
						<img width="235" height="235" src="/img/new.png" class="attachment-full size-full wp-post-image" alt="">
						</a>
						<div class="catlabel">
							<a href="new-category.php">New</a>
						</div>
					</div>
				</div>
	</div>
</div>
</div>


<!-- </body> -->
<?php include('blocks/footer.php'); ?>


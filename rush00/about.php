<?php
	session_start();
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
				<div class="games"><strong>School 21</strong> Moscow<br></div>
				<div class="contactus">
					<div><strong>Write Us: </strong> <br><a class="highlight" href="mailto:immnsn@hotmail.com" target="_blank" rel="noopener noreferrer">kgarth-o</a><br><a class="highlight" href="mailto:immnsn@hotmail.com" target="_blank" rel="noopener noreferrer">bmanfrey</a><br></div>
				<div><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>	
				</div>
				
				</div>
			</div>
		</div>
	</div>
<?php include('blocks/footer.php'); ?>






<?php
    session_start();

    include('blocks/header.php'); ?>
<!-- <div class="container">
    <div class="row highlight">
        <div class="full col-l-4"
             style="background-image: url('http://fr.web.img3.acsta.net/r_1920_1080/pictures/16/03/04/12/05/368503.jpg')">
            <div class="title">Les visiteurs 3</div>
        </div>
        <div class="full col-l-4">
            <div class="half"
                 style="background-image: url('http://fr.web.img6.acsta.net/r_1920_1080/pictures/16/02/10/12/58/354076.jpg')">
                <div class="title">Le fantôme de Canderville</div>
            </div>
            <div class="half"
                 style="background-image: url('http://fr.web.img1.acsta.net/r_x_600/newsv7/16/04/07/14/05/0462050.jpg')">
                <div class="title">Warcraft, le film</div>
            </div>
        </div>
        <div class="full col-l-4"
             style="background-image: url('http://fr.web.img6.acsta.net/r_1920_1080/pictures/16/01/25/13/19/213730.jpg')">
            <div class="title">Ratchet et Clank</div>
        </div>
    </div>
    <div class="row">
        <div class="col-l-4">
            <h1>Nos coups de coeur</h1>
        </div>
        <div class="col-l-8">
            <h1>Exemple</h1>
        </div>
    </div>
</div> -->
<!-- <body class="home blog"> -->
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
	
	<!-- <div id="post-14651" class="newsbox">
		<div class="banner">
			<img src="http://hello.eboy.com/eboy/wp-content/uploads/2015/09/SFCUTCOVER-01t-2x.png" width="882px" height="441px" alt="NewsBanner-2015Q3SanFranciscoPoster">
		</div>
	</div> -->

	<div class="gallery">
	<br>
	<br>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="http://hello.eboy.com/eboy/category/everything/">
					<img width="432" height="432" src="img\giphy (11).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="http://hello.eboy.com/eboy/category/everything/">Dogia 2000</a>
				</div>	
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="http://hello.eboy.com/eboy/category/everything/explore/eboy-brands/pixorama/">
				<img width="432" height="432" src="http://hello.eboy.com/eboy/wp-content/uploads/2019/11/KAI-Mixc-World-Shenzhen-64s-tn.png" class="attachment-full size-full wp-post-image" alt=""></a>
				<div class="catlabel">
					<a href="http://hello.eboy.com/eboy/category/everything/explore/eboy-brands/pixorama/">Pixorama</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="http://hello.eboy.com/eboy/category/everything/explore/wares/toys/">
				<img width="432" height="432" src="http://hello.eboy.com/eboy/wp-content/uploads/2016/02/Blockbob-Luxing-FlatRotating-01k-tn.gif" class="attachment-full size-full wp-post-image" alt=""></a>
				<div class="catlabel">
					<a href="http://hello.eboy.com/eboy/category/everything/explore/wares/toys/">Turning Man</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="http://hello.eboy.com/eboy/category/everything/explore/eboy-brands/peecol/">
				<img width="216" height="216" src="http://hello.eboy.com/eboy/wp-content/uploads/2016/11/UBS-UbisoftChars-09k-tn.png" class="attachment-full size-full wp-post-image" alt="">
			</a>
				<div class="catlabel">
					<a href="http://hello.eboy.com/eboy/category/everything/explore/eboy-brands/peecol/">Pop Mix</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
			<a class="iconscale" href="http://hello.eboy.com/eboy/category/everything/explore/parts/">
			<img width="432" height="432" src="http://hello.eboy.com/eboy/wp-content/uploads/2019/02/PT-Berlin-Weltzeituhr-kleiner-01t-tn.png" class="attachment-full size-full wp-post-image" alt="">
			</a>
				<div class="catlabel">
					<a href="http://hello.eboy.com/eboy/category/everything/explore/parts/">Atom</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="http://hello.eboy.com/eboy/category/everything/explore/work/advertising/">
				<img width="432" height="432" src="img\giphy (10).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="http://hello.eboy.com/eboy/category/everything/explore/work/advertising/">Triforce</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">
				<img width="235" height="235" src="img\giphy (9).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">Dark Wood</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">
				<img width="235" height="235" src="img\giphy (8).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">MacEat</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">
				<img width="235" height="235" src="img\giphy (7).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">Sceletons II</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">
				<img width="235" height="235" src="img\giphy (6).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">Mr. Lemo</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">
				<img width="235" height="235" src="img\giphy (5).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">MGS5</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">
				<img width="235" height="235" src="img\giphy (4).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">Dance Dance Revolution</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">
				<img width="235" height="235" src="img\giphy (3).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">KF</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">
				<img width="235" height="235" src="img\giphy (2).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">Star Skull</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">
				<img width="235" height="235" src="img\giphy (1).gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">Magic Brush</a>
				</div>
			</div>
		</div>
		<div class="post">
			<div class="icon">
				<a class="iconscale" href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">
				<img width="235" height="235" src="img\giphy.gif" class="attachment-full size-full wp-post-image" alt="">
				</a>
				<div class="catlabel">
					<a href="http://hello.eboy.com/eboy/category/everything/explore/work/editorial/">Stranger Things</a>
				</div>
			</div>
		</div>
		
	</div>
</div>
</div>
<!-- </body> -->
<?php include('blocks/footer.php'); ?>




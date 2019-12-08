<?php
	session_start();
	include('blocks/header-adm.php'); ?>
<div id = "autocenterbox">
<div id="content">
	

	<div class="gallery">
	<div class="games"><strong>All Users</strong></div>
	<br>
	<br>
		<?php include("admin-table-us.php") ?>
		<div class="post">
					<div class="icon">
						<a class="iconscale" href="new-user.php">
						<img width="235" height="235" src="/img/new.png" class="attachment-full size-full wp-post-image" alt="">
						</a>
					</div>
				</div>
	</div>
</div>
</div>


<!-- </body> -->
<?php include('blocks/footer.php'); ?>




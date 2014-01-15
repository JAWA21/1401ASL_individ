<div class="container" id="content">
	<p> main content area where all the photos will live</p>

	<!-- <div class="photo"> -->
		<ul>
			<?php $count=sizeof($photoArr); for($i=0; $i<$count;$i++){?>
			<li class="photo"><img src="<?php echo base_url();echo 'assets/'.$photoArr[$i]['src']?>"></li>
			<!-- <div class="clearfix"></div> -->
		</ul>
	<!-- </div> -->
	<?}?>
</div>

<div class="container">
      <div class="row row-offcanvas row-offcanvas-left">

      <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="sm-6">
          	<h2>Welcome Back, <?php echo $this->session->userdata('user_name'); ?>!</h2>
     <p>This section represents the area that only logged in members can access.</p>
     
     <?var_dump($this->session->userdata)?>

          </div>

        
 <!-- <div class="row"> -->
    <!-- <div class="col-6 col-sm-6 col-lg-4"> -->

     <!-- </div> -->


<?php echo form_open_multipart('gallery/do_upload');?>

	<div class="row">
        <div class="form-group col-lg-4">
			<label for="userfile">Upload</label>
			<input type="file" id="userfile" name="userfile" size="20" />
		</div>
		 <div class="form-group col-lg-4">
			<label for="title">Title</label>
			<input type="text" id="title" name="title" class="form-control" value="<?php echo set_value('title'); ?>" />
		</div>
		 <div class="form-group col-lg-4">
			<label for="desc">Description:</label>
			<input type="text" id="desc" name="desc" class="form-control" value="<?php echo set_value('desc'); ?>" />
		</div>

		<input type="hidden" name="id" value="<?$this->session->userdata('user_id');?>"/>
	</div>


<input type="submit" value="upload" class="btn btn-info pull-right"/>

</form>

</div>

<?php $onclick = array('onclick'=>"return confirm('Are you sure?')");?>


            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
          	<p>Command Center</p>
            <?php echo anchor('user/profile', 'Profile', 'class="list-group-item"'); ?>
            <?php echo anchor('user/orderStat', 'Orders', 'class="list-group-item"'); ?>
            <?php echo anchor('user/photosUp', 'Your Photos', 'class="list-group-item"'); ?>
            <!-- <div class="logout btn-info list-group-item"><?php //echo anchor('user/logout', 'Logout',$onclick); ?></div> -->

          </div>
        </div><!--/span-->
      </div><!--/row-->
      </div>
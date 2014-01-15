<div class="content">
	<h2>Welcome Back, <?php echo $this->session->userdata('username'); ?>!</h2>
     <p>This section represents the area that only logged in members can access.</p>
     <?php $onclick = array('onclick'=>"return confirm('Are you sure?')");?>
	<h4><?php echo anchor('user/logout', 'Logout', $onclick); ?></h4>

</div><!--<div class="content">-->

<?php echo form_open_multipart('gallery/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" class="btn btn-success"/>

</form>

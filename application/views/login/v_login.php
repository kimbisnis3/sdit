<div class="content">
<div class="container">
	<style media="screen">
		
	</style>
	<div class="title">
		<h2>CUSTOMER LOGIN</h2>
	</div>

			<div>
			<p style="margin: 0 auto;"><?php echo $this->session->flashdata('message');?></p>
			</div>
			<div class="form-login" >
			<form action='<?php echo base_url();?>login/login' method='post' name='process'>
			<div class="form-group">
			<label>Username</label>
				<input type="text" name="nama" class="form-control" placeholder="username"/ required>
			</div>
			<div class="form-group">
			<label>Password</label>
				<input type="password" name="pass" class="form-control" placeholder="password" required />
			</div>
			<div class="row">
			<div class="col-md-6">
				<button type="submit" class="btn btn-success">login</button>
			</div>
			</div>
			</form>
			</div>
			<div class="holder-box">

			</div>
</div>
</div>

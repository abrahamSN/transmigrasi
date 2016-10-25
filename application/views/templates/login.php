<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
<div class="container">
	<div class="row" style="margin-top:10px;">
		<div class="col-md-12">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Login Panel
					</div>
					<div class="panel-body">
						<form method="post" action="<?php echo site_url('Login/proseslogin') ?>">
							<input type="text" placeholder="Masukan Username" name="user" class="form-control"><br/>
							<input type="password" placeholder="Masukan Password" name="pass" class="form-control"><br/>
							<button type="submit" class="btn btn-primary btn-sm" style="width:100%">								
								Login
							</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

</div>

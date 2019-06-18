<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Change password</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12"> 
                            <?php if ( $this->session->flashdata('message') ) : ?>
							<div class="alert alert-danger alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
								<?= $this->session->flashdata('message') ?>
							</div>
							<? endif ?>
							<?= form_open() ?> 
							<div class="row">
								<div class="form-group <?= form_error('oldpassword') ? 'has-error' : '' ?> col-lg-4">
									<label for="oldpassword">Old password</label>
									<input type="password" class="form-control" id="oldpassword" name='oldpassword' value="<?= $this->input->post('oldpassword') ?>">
									<span class="text-danger">
										<?= form_error('oldpassword') ?></span>
								</div>
								<div class="form-group col-lg-4 <?= form_error('newpassword') ? 'has-error' : '' ?>">
									<label for="newpassword">New password</label>
									<input type="password" class="form-control" id="newpassword" name='newpassword' value="<?= $this->input->post('newpassword') ?>">
									<span class="text-danger">
										<?= form_error('newpassword') ?></span>
								</div>
								<div class="form-group col-lg-4 <?= form_error('confirmpassword') ? 'has-error' : '' ?>">
									<label for="confirmpassword">Confirm password</label>
									<input type="password" class="form-control" id="confirmpassword" name='confirmpassword' value="<?= $this->input->post('confirmpassword') ?>">
									<span class="text-danger">
										<?= form_error('confirmpassword') ?></span>
								</div>
							</div> 
							<div class="row">
								<div class="col-lg-6">
									<button type="submit" name="submit" class="btn btn-info btn-block">Save</button>
								</div>
								<div class="col-lg-6">
									<a href="<?= base_url() ?>admin/profile" class="btn btn-danger btn-block">Cancel</a>
								</div>
							</div>
							<?= form_close() ?>
						</div>
					</div>
				</div>
			</div>
			<!-- END OVERVIEW -->
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->

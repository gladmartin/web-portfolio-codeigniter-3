<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Edit profile -
						<?= $profile->nickname ?>
					</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<?php if ( $this->session->flashdata('errorUpload') ) : ?>
							<div class="alert alert-danger alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
								<?= $this->session->flashdata('errorUpload') ?>
							</div>
							<? endif ?>
							<?= form_open_multipart() ?>
							<input type="hidden" name="id" value="<?= $profile->id ?>">
							<input type="hidden" name="oldphoto" value="<?= $profile->photo ?>">
							<div class="row">
								<div class="form-group <?= form_error('nickname') ? 'has-error' : '' ?> col-lg-4">
									<label for="nickname">Nick Name</label>
									<input type="text" class="form-control" id="nickname" name='nickname' value="<?= $this->input->post('nickname') ? $this->input->post('nickname') : $profile->nickname ?>">
									<span class="text-danger">
										<?= form_error('nickname') ?></span>
								</div>
								<div class="form-group col-lg-4 <?= form_error('fullname') ? 'has-error' : '' ?>">
									<label for="fullname">Full Name</label>
									<input type="text" class="form-control" id="fullname" name='fullname' value="<?= $this->input->post('fullname') ? $this->input->post('fullname') : $profile->fullname ?>">
									<span class="text-danger">
										<?= form_error('fullname') ?></span>
								</div>
								<div class="form-group col-lg-4 <?= form_error('email') ? 'has-error' : '' ?>">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" name='email' value="<?= $this->input->post('email') ? $this->input->post('email') : $profile->email ?>">
									<span class="text-danger">
										<?= form_error('email') ?></span>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-4 <?= form_error('phone') ? 'has-error' : '' ?>">
									<label for="phone">Phone</label>
									<input type="telp" class="form-control" id="phone" name='phone' value="<?= $this->input->post('phone') ? $this->input->post('phone') : $profile->phone ?>">
									<span class="text-danger">
										<?= form_error('phone') ?></span>
								</div>
								<div class="form-group col-lg-4 <?= form_error('birth') ? 'has-error' : '' ?>">
									<label for="birth">Birth</label>
									<input type="text" class="form-control" id="birth" name='birth' value="<?= $this->input->post('birth') ? $this->input->post('birth') : $profile->birth ?>">
									<span class="text-danger">
										<?= form_error('birth') ?></span>
								</div>
								<div class="form-group col-lg-4 <?= form_error('job') ? 'has-error' : '' ?>">
									<label for="job">Job</label>
									<input type="text" class="form-control" id="job" name='job' value="<?= $this->input->post('job') ? $this->input->post('job') : $profile->job ?>">
									<span class="text-danger">
										<?= form_error('job') ?></span>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-6 <?= form_error('website') ? 'has-error' : '' ?>">
									<label for="website">Website</label>
									<input type="text" class="form-control" id="website" name='website' value="<?= $this->input->post('website') ? $this->input->post('website') : $profile->website ?>">
									<span class="text-danger">
										<?= form_error('website') ?></span>
								</div>
								<div class="form-group col-lg-6 <?= form_error('photo') ? 'has-error' : '' ?>">
									<label for="photo">Photo</label>
									<input type="file" class="form-control" id="photo" name='photo'>
									<span class="text-danger">Leave this blank if you don't want to change it</span>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-6 <?= form_error('address') ? 'has-error' : '' ?>">
									<label for="address">Address</label>
									<textarea type="text" class="form-control" rows="10" id="address" name='address'><?= $this->input->post('address') ? $this->input->post('address') : $profile->address ?></textarea>
									<span class="text-danger">
										<?= form_error('address') ?></span>
								</div>
								<div class="form-group col-lg-6 <?= form_error('about') ? 'has-error' : '' ?>">
									<label for="about">About</label>
									<textarea class="form-control" rows="10" id="about" name='about'><?= $this->input->post('about') ? $this->input->post('about') : $profile->about ?></textarea>
									<span class="text-danger">
										<?= form_error('about') ?></span>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<button type="submit" name="submit" class="btn btn-info btn-block">Save</button>
								</div>
								<div class="col-lg-6">
									<a href="<?= base_url() ?>/admin/profile" class="btn btn-danger btn-block">Cancel</a>
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

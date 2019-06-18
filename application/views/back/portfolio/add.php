<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Add Portfolio Collection</h3>
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
							<div class="row">
								<div class="form-group <?= form_error('title') ? 'has-error' : '' ?> col-lg-6">
									<label for="title">Title Project</label>
									<input type="text" class="form-control" id="title" name='title' value="<?= $this->input->post('title') ?>">
									<?= form_error('title') ?>
								</div>
								<div class="form-group <?= form_error('category') ? 'has-error' : '' ?> col-lg-6">
									<label for="category">Category</label>
									<input type="text" class="form-control" id="category" name='category' value="<?= $this->input->post('category') ?>">
									<?= form_error('category') ?>
								</div>
							</div>
							<div class="row">
								<div class="form-group <?= form_error('date') ? 'has-error' : '' ?> col-lg-6">
									<label for="date">Date</label>
									<input type="date" class="form-control" id="date" name='date' value="<?= $this->input->post('date') ?>">
									<?= form_error('date') ?>
								</div>
								<div class="form-group col-lg-3">
									<label for="thumnail">Thumnail</label>
                                    <input type="file" class="form-control" id="thumnail" name='photo'> 
								</div>
								<div class="form-group col-lg-3">
									<label for="photo">Photos</label>
                                    <input type="file" class="form-control" id="photo" multiple name='files[]'> 
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-12 <?= form_error('description') ? 'has-error' : '' ?>">
									<label for="description">Description</label>
									<textarea type="text" class="form-control" id="description" name='description'><?= $this->input->post('description') ?></textarea>
									<?= form_error('description') ?>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<button type="submit" name="submit" class="btn btn-info btn-block">Save</button>
								</div>
								<div class="col-lg-6">
									<button type="reset" class="btn btn-danger btn-block">Reset</button>
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

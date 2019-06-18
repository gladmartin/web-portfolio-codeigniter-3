<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Edit Portfolio</h3>
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
                            <input type="hidden" name="oldphoto" value="<?= $portfolio->thumbnail ?>"> 
							<div class="row">
								<div class="form-group <?= form_error('title') ? 'has-error' : '' ?> col-lg-6">
									<label for="title">Title Project</label>
									<input type="text" class="form-control" id="title" name='title' value="<?= $this->input->post('title') ? $this->input->post('title') : $portfolio->title ?>">
									<?= form_error('title') ?>
								</div>
								<div class="form-group <?= form_error('category') ? 'has-error' : '' ?> col-lg-6">
									<label for="category">Category</label>
									<input type="text" class="form-control" id="category" name='category' value="<?= $this->input->post('category') ? $this->input->post('category') : $portfolio->category ?>">
									<?= form_error('category') ?>
								</div>
							</div>
							<div class="row">
								<div class="form-group <?= form_error('date') ? 'has-error' : '' ?> col-lg-6">
									<label for="date">Date</label>
									<input type="date" class="form-control" id="date" name='date' value="<?= $this->input->post('date') ? $this->input->post('date') : $portfolio->date ?>">
									<?= form_error('date') ?>
								</div>
								<div class="form-group col-lg-3">
									<label for="thumbnail">Thumbnail</label>
                                    <input type="file" class="form-control" id="thumbnail" name='photo'> 
									<span class="text-danger">Leave this blank if you don't want to change it</span>
								</div>
								<div class="form-group col-lg-3">
									<label for="photo">Photos</label>
                                    <input type="file" class="form-control" id="photo" multiple name='files[]'> 
									<span class="text-danger">Leave this blank if you don't want to add it</span>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-6 <?= form_error('description') ? 'has-error' : '' ?>">
									<label for="description">Description</label>
									<textarea type="text" class="form-control" id="description" name='description'><?= $this->input->post('description') ? $this->input->post('description') : $portfolio->description ?></textarea>
									<?= form_error('description') ?>
								</div>
								<div class="form-group col-lg-6">
									<?php foreach( $photos as $p ) : ?>
									<a class="badge badge-danger delete-photo" data-id="<?= $p->id ?>"><i class="icon-submenu lnr lnr-cross"></i></a>
									<img src="<?= base_url() ?>/assets/images/portfolio/<?= $p->photo ?>" class="img-<?= $p->id ?>" width="100" class="img-thumbnail">
									<? endforeach ?>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<button type="submit" name="submit" class="btn btn-info btn-block">Save</button>
								</div>
								<div class="col-lg-6">
									<a href="<?= base_url() ?>admin/portfolio/list" class="btn btn-danger btn-block">Cancel</a>
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

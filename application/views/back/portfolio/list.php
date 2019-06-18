<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Portfolio List</h3> 
				</div>
				<div class="panel-body"> 
					<div class="row">
						<div class="col-md-12">
                            <?php if ( $this->session->flashdata('flash') ) : ?>
							<div class="alert alert-info alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
								 <?= $this->session->flashdata('flash') ?>
							</div>
							<? endif ?>
							<table class="table table-responsive table-striped">
								 <thead>
                                     <tr>
									 	<th>#</th>
                                         <th>Title</th>
                                         <th>Thumbnail</th>
                                         <th>Description</th>
                                         <th>Date</th>
                                         <th>Category</th>
                                         <th>Opt</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $i =1; foreach( $portfolio as $p ) : ?>
                                     <tr>
									 	 <td> <?= $i++ ?> </td>
                                         <td> <?= $p->title ?> </td>
                                         <td> 
										 	<img src="<?= base_url() ?>assets/images/portfolio/<?= $p->thumbnail ?>" alt="<?= $p->title ?>" width="100"> 
										 </td>
                                         <td> <?= substr($p->description, 0 , 50) ?>.... </td>
                                         <td> <?= $p->date ?> </td>
                                         <td> <?= $p->category ?> </td>
                                         <td>
                                             <a href="<?= base_url() ?>admin/portfolio/delete/<?= $p->id ?>" class="badge bg-danger deletePortfolio" >Delete</a>
                                             <a href="<?= base_url() ?>admin/portfolio/edit/<?= $p->id ?>" class="badge bg-success">Edit</a>
                                         </td>
                                     </tr>   
                                     <? endforeach ?>
                                 </tbody>
							</table> 
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

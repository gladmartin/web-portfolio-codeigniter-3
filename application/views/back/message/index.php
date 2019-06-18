<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Message</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<table class="table table-responsive">
								<thead>
									<tr>
										<th>Name</th>
										<th>Email</th>
										<th>Subject</th>
										<th>Body</th> 
										<th>Opt</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach( $message as $m ) : ?>
									<tr class="<?= $m->seen == 0 ? 'unread' : '' ?>">
										<td>
											<?= $m->name ?>
										</td> 
										<td>
											<?= $m->email ?> </td>
										<td>
											<?= $m->subject ?>
										</td>
										<td>
											<?= $m->body ?>
										</td>
										<td>
											<a class="badge bg-danger " onclick=swalDelete("<?= base_url() ?>admin/message/delete/<?= $m->id ?>")>Delete</a>
											<a href="<?= base_url() ?>admin/message/detail/<?= $m->id ?>" class="badge bg-success">detail</a>
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

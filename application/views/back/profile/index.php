<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Profile detail</h3> 
				</div>
				<div class="panel-body"> 
					<div class="row">
						<div class="col-md-12 text-center ">
							<img src="<?= base_url() ?>assets/images/<?= $profile->photo ?>" alt="<?= $profile->nickname ?>" class="img-circle img-thumbnail" width="200">
						</div>
					</div>	<br>	
					<div class="row">
						<div class="col-md-12">
							<table class="table table-responsive table-striped">
								<tr>
									<th>Nick Name</th>
									<td><?= $profile->nickname ?></td>
								</tr>
								<tr>
									<th>Full Name</th>
									<td><?= $profile->fullname ?></td>
								</tr>
								<tr>
									<th>Email</th>
									<td><?= $profile->email ?></td>
								</tr>
								<tr>
									<th>Phone</th>
									<td><?= $profile->phone ?></td>
								</tr>
								<tr>
									<th>Birth</th>
									<td><?= $profile->birth ?></td>
								</tr>
								<tr>
									<th>Job</th>
									<td><?= $profile->job ?></td>
								</tr>
								<tr>
									<th>Adress</th>
									<td><?= $profile->address ?></td>
								</tr>
								<tr>
									<th>Website</th>
									<td><?= $profile->website ?></td>
								</tr>
								<tr>
									<th>About</th>
									<td><?= $profile->about ?></td>
								</tr>
							</table>
							<a href="<?= base_url() ?>admin/profile/edit/<?= $profile->id ?>" class="btn btn-info btn-block" >Edit</a>
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

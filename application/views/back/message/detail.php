<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Detail message - <?= $sender->name ?></h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12"> 
                            <u><h4>Name</h4></u>
                            <p><?= $sender->name ?></p>
                            <u><h4>Email</h4></u>
                            <p><?= $sender->email ?></p>
                            <u><h4>Subject</h4></u>
                            <p><?= $sender->subject ?></p>
                            <u><h4>Body</h4></u>
                            <p><?= $sender->body ?></p> 
                            <a href="<?= base_url() ?>admin/message" class="btn btn-default btn-block">Back</a>
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

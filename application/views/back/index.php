<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Dashboard</h3> 
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-inbox"></i></span>
								<p>
									<span class="number"><?= count($this->check_message->getAll() ) ?></span>
									<span class="title">Message</span>
								</p>
							</div>
						</div> 
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-eye"></i></span>
								<p>
									<span class="number">274,678</span>
									<span class="title">Visits</span>
								</p>
							</div>
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

<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a href="<?= base_url() ?>admin/dashboard" class="<?= active_menu('dashboard') ?>"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
				<li><a href="<?= base_url() ?>admin/profile" class="<?= active_menu('profile') ?>" ><i class="lnr lnr-user"></i> <span>Profile</span></a></li> 
				<li>
					<a href="#subPortfolio" data-toggle="collapse" class="<?= active_menu('portfolio') ?> collapsed"><i class="lnr lnr-file-empty"></i> <span>Portfolio</span>
						<i class="icon-submenu lnr lnr-chevron-left"></i></a>
					<div id="subPortfolio" class="<?= active_menu('portfolio', 'collapse-in', 'collapse') ?>">
						<ul class="nav">
							<li><a href="<?= base_url() ?>admin/portfolio/list" class="<?= $this->uri->segment(3) == 'list' ? 'active' : '' ?>">List</a></li>
							<li><a href="<?= base_url() ?>admin/portfolio/add" class="<?= $this->uri->segment(3) == 'add' ? 'active' : '' ?>">Add</a></li>
						</ul>
					</div>
				</li> 
				<li><a href="<?= base_url() ?>admin/message" class="<?= active_menu('message') ?>" ><i class="lnr lnr-inbox"></i> <span>Message</span></a></li> 
			</ul>
		</nav>
	</div>
</div>
<!-- END LEFT SIDEBAR -->

<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
	<script type="text/javascript">
		try{ace.settings.loadState('sidebar')}catch(e){}
	</script>
	<ul class="nav nav-list">
			<li class="">
				<a href="clientarea.php">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Dashboard </span>
				</a>
	
				<b class="arrow"></b>
			</li>

		<li class="active open">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-users"></i>
				<span class="menu-text">
					Tu Info
				</span>
				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">

				<div class="panel-body">

			<address style="color: white;">
                <strong><?php echo $Clients->empresa ?></strong>

                <br />
                <?php echo $Clients->address ?>
                <br />
                <?php echo $Clients->state.' - '.$Clients->city ?>
                <br />
                <abbr title="Phone">P:</abbr>
                <?php echo $Clients->phonenumber ?>
            </address>
            <a href="profile.php"><button class="btn btn-xs btn-success">
                <i class="ace-icon fa fa-pencil align-top bigger-100"></i>
                Actualizar
            </button></a>

            </div>
			</ul>
		</li>
	</ul><!-- /.nav-list -->

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>
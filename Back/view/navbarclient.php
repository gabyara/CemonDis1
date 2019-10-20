<div id="navbar" class="navbar navbar-default    navbar-collapse       ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
            	<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>
				<div class="navbar-header pull-left">
					<a href="clientarea.php" class="navbar-brand">
						<small>
							<i class="fa fa-globe"></i>
							Area de Cliente
						</small>
					</a>

					<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons">
						<span class="sr-only">Toggle user menu</span>

						<img src="assets/images/avatars/avatar2.png" alt="" />
					</button>

				</div>

				<div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
					<ul class="nav ace-nav">
						

						<li class="red dropdown-modal user-min">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/avatar2.png" alt="" />
								<span class="user-info">
									<small>Bienvenido,</small>
									<?php echo $Clients->empresa ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								
								<li>
									<a href="profile.php">
										<i class="ace-icon fa fa-user"></i>
										Perfil
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="../login.php">
										<i class="ace-icon fa fa-power-off"></i>
										Cerrar Sesión
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>
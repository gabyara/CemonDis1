<?php
$Clients = $Persistencia->ClientStaffALL(3);
$Staff = $Persistencia->ClientStaffALL(2);
?>
<div class="col-sm-12">
	<div class="widget-box transparent" id="recent-box">
		<div class="widget-header">
			<h4 class="widget-title lighter smaller">
				<i class="ace-icon fa fa-rss orange"></i>Recientes
			</h4>

			<div class="widget-toolbar no-border">
				<ul class="nav nav-tabs" id="recent-tab">
					<li class="active">
						<a data-toggle="tab" href="#member-tab">Clientes</a>
					</li>

				</ul>
			</div>
		</div>

		<div class="widget-body">
			<div class="widget-main padding-4">
				<div class="tab-content padding-8">

					<div id="member-tab" class="tab-pane active">
						<div class="clearfix">
                        	<?php while($RegistClientAll = mysql_fetch_array($Clients)){?>
							<div class="itemdiv memberdiv">
								<div class="user">
									<img alt="Bob Doe's avatar" src="../assets/images/avatars/avatar2.png" />
								</div>

								<div class="body">
									<div class="empresa">
										<a href="clientedit.php?id=<?php echo $RegistClientAll['id']; ?>"><?php echo $RegistClientAll['empresa'].' '.$RegistClientAll['rif'] ?></a>
									</div>

									<div class="time">
										<i class="ace-icon fa fa-clock-o"></i>
										<span class="green"><?php echo $RegistClientAll['_year'].' años '.$RegistClientAll['_month'].' meses '.$RegistClientAll['_day'].' días de antiguedad' ?></span>
									</div>

									<div>
										<?php if($RegistClientAll['status'] == 1) {?>
										<span class="label label-success label-sm">Activo</span>
                                        <?php }else{?>
                                        <span class="label label-inverse label-sm">Inactivo</span>
                                        <?php }?>
									</div>
								</div>
							</div>
                            <?php }?>
						</div>

						<div class="space-4"></div>

						<div class="center">
							<i class="ace-icon fa fa-users fa-2x green middle"></i>

							&nbsp;
							<a href="clients.php" class="btn btn-sm btn-white btn-info">
								Ver todos los clientes &nbsp;
								<i class="ace-icon fa fa-arrow-right"></i>
							</a>
						</div>

						<div class="hr hr-double hr8"></div>
					</div><!-- /.#member-tab -->

				</div>
			</div><!-- /.widget-main -->
		</div><!-- /.widget-body -->
	</div><!-- /.widget-box -->
</div>
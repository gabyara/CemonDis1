<?php
$active = explode('/',$_SERVER["REQUEST_URI"]);
if($active['3'] == 'home.php'){
	$home = 'active';
	}elseif($active['3'] == 'clients.php'){
		$clients = 'active';
		$open = "open";
		}elseif($active['3'] == 'clientsadd.php'){
			$clientsadd = 'active';
			$open = "open";
			}elseif($active['3'] == 'supporttickets.php?view=active'){
				$ticktactive = 'active';
				$open = "open";
				}elseif($active['3'] == 'supporttickets.php?view=open'){
					$ticktopen = 'active';
					$open = "open";
					}elseif($active['3'] == 'supporttickets.php?view=answered'){
						$ticktanswered = 'active';
						$open = "open";
						}elseif($active['3'] == 'supporttickets.php?view=new'){
							$ticktnew = 'active';
							$open = "open";
							}elseif($active['3'] == 'supporttickets.php?view=closed'){
								$ticktclosed = 'active';
								$open = "open";
								}elseif($active['3'] == 'staff.php'){
									$staff = 'active';
									$open = "open";
									}elseif($active['3'] == 'staffadd.php'){
										$staffadd = 'active';
										$open = "open";
										}elseif($active['3'] == 'novedades.php'){
											$novedades = 'active';
											$open = "open";
											}elseif($active['3'] == 'novedadesadd.php'){
												$novedadesadd = 'active';
												$open = "open";
												}												
?>
<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
	<script type="text/javascript">
		try{ace.settings.loadState('sidebar')}catch(e){}
	</script>

	<ul class="nav nav-list">
			<li class="<?php if(isset($home)){echo $home;} ?>">
				<a href="home.php">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Dashboard </span>
				</a>
	
				<b class="arrow"></b>
			</li>

		<li class="<?php if(isset($clients) and isset($open)){echo $clients.' '.$open;} if(isset($clientsadd) and isset($open)){echo $clientsadd.' '.$open;} ?>">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-users"></i>
				<span class="menu-text">
					Clientes
				</span>
				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">

				<li class="<?php if(isset($clients)){echo $clients;}?>">
					<a href="clients.php">
						<i class="menu-icon fa fa-caret-right"></i>
						Ver Clientes
					</a>

					<b class="arrow"></b>
				</li>
				
				<li class="<?php if(isset($clientsadd)){echo $clientsadd;}?>">
					<a href="clientsadd.php">
						<i class="menu-icon fa fa-caret-right"></i>
						Add Nuevo Cliente
					</a>

					<b class="arrow"></b>
				</li>
				
			</ul>
		</li>

		<li class="<?php if(isset($ticktactive) and isset($open)){echo $ticktactive.' '.$open;} if(isset($ticktopen) and isset($open)){echo $ticktopen.' '.$open;} if(isset($ticktanswered) and isset($open)){echo $ticktanswered.' '.$open;} if(isset($ticktclosed) and isset($open)){echo $ticktclosed.' '.$open;} if(isset($ticktnew) and isset($open)){echo $ticktnew.' '.$open;}?>">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-list"></i>
				<span class="menu-text"> Solicitudes </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
                        <li class="<?php if(isset($ticktactive)){echo $ticktactive;}?>">
                            <a href="supporttickets.php?view=active">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Recibidas
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php if(isset($ticktanswered)){echo $ticktanswered;}?>">
                            <a href="supporttickets.php?view=answered">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Por despachar
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php if(isset($ticktclosed)){echo $ticktclosed;}?>">
                            <a href="supporttickets.php?view=closed">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Despachadas
                            </a>

                            <b class="arrow"></b>
                        </li>
                </li>
				

<!--
				<li class="<?php if(isset($ticktnew)){echo $ticktnew;}?>">
					<a href="supporttickets.php?view=new">
						<i class="menu-icon fa fa-caret-right"></i>
						Abrir Tickets
					</a>

					<b class="arrow"></b>
				</li>
-->	
			</ul>
		</li>
		<li class="<?php if(isset($ticktopen)){echo $ticktopen;}?>">
                            <a href="index2.php?view=open">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Emitir Factura
                            </a>
                            <b class="arrow fa fa-angle-down"></b>
        </li>

		<li class="<?php if(isset($ticktopen)){echo $ticktopen;}?>">
                            <a href="index3.php?view=open">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Tipo de Servicio
                            </a>
                            <b class="arrow fa fa-angle-down"></b>
        </li>
		

	</ul><!-- /.nav-list -->

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>
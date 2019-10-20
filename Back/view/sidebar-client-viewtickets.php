<?php
$active = explode('/',$_SERVER["REQUEST_URI"]);
if($active['2'] == 'supporttickets.php?view=open'){
	$open = 'open';
	}elseif($active['2'] == 'supporttickets.php?view=answered'){
		$answered = "open";
		}elseif($active['3'] == 'supporttickets.php?view=closed'){
			$closed = "open";
			}elseif($active['2'] == 'submitticket.php'){
				$submitticket = "open";
				}										
?>
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
					Informacíon Ticket
				</span>
				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">

				<div class="panel-body">

			<address style="color: white;">
                <strong style="font-weight: 700;max-width: 159px;display: inline-block;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">#<?php echo $TicketsTID->tid ?> - <?php echo $TicketsTID->title ?></strong>

                <hr />
                <small>Departamento</small><br />
                <strong><?php if($TicketsTID->did == 1){echo 'Soporte';} ?></strong>
                <hr />
                <small>Enviado</small><br />
                <strong><?php setlocale(LC_ALL,"es_ES"); echo date("j M, Y, (g:i a)", strtotime(date($TicketsTID->datee)));?></strong>
            </address>
			<?php if($TicketsTID->status == 3) {?>
            <button class="btn disabled btn-xs btn-danger">
                <i class="ace-icon fa fa fa-times align-top bigger-100"></i>
                Cerrar
            </button>
			<?php }else{ ?>
			<button class="btn btn-xs btn-danger">
                <i class="ace-icon fa fa fa-times align-top bigger-100"></i>
                Cerrar
            </button>
			<?php } ?>

            </div>
			</ul>
		</li>
            <li class="<?php if(isset($submitticket)){echo $submitticket;} ?>">
				<a href="submitticket.php">
					<i class="menu-icon fa fa-comments blue"></i>
					<span class="menu-text"> Abrir Ticket </span>
				</a>
	
				<b class="arrow"></b>
			</li>
              
	</ul><!-- /.nav-list -->
    
<!--  -->

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>
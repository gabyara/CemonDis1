<?php
$active = explode('/',$_SERVER["REQUEST_URI"]);
if($active['2'] == 'supporttickets.php?view=open'){
	$open = 'open';
	}elseif($active['2'] == 'supporttickets.php?view=answered'){
		$answered = "open";
		}elseif($active['2'] == 'supporttickets.php?view=closed'){
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
            <li class="<?php if(isset($open)){echo $open;} ?>">
				<a href="supporttickets.php?view=open">
					<i class="menu-icon fa fa-eye"></i>
					<span class="menu-text"> Desp Solicitados </span>
				</a>
	
				<b class="arrow"></b>
			</li>
            <li class="<?php if(isset($answered)){echo $answered;} ?>">
				<a href="supporttickets.php?view=answered">
					<i class="menu-icon glyphicon glyphicon-signal pink"></i>
					<span class="menu-text"> Desp por realizar 
                    
                    	<span class="badge badge-transparent tooltip-error" title="2 Important Events">
                            <i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
                        </span>
                    </span>
				</a>
	
				<b class="arrow"></b>
			</li>
            <li class="<?php if(isset($closed)){echo $closed;} ?>">
				<a href="supporttickets.php?view=closed">
					<i class="menu-icon fa fa-eye-slash pink"></i>
					<span class="menu-text"> Desp Realizado </span>
				</a>
	
				<b class="arrow"></b>
			</li>
     
              
	</ul><!-- /.nav-list -->
    
<!--  -->

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>
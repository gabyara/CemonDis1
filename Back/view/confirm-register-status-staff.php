<div class="col-sm-12">
    <h3 class="header smaller lighter green">
        <i class="ace-icon fa fa-bullhorn"></i>
       Confirmación de Registro Exitoso!
    </h3>

    <div class="alert alert-block alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <i class="ace-icon fa fa-times"></i>
        </button>

        <p>
            <strong>
                <i class="ace-icon fa fa-check"></i>
                Bien Hecho!
            </strong>
        </p>
    </div>
    
    <?php 
		if(!empty($Clients_Staff->id)){
				$_SESSION["ClientStaff"] = $Clients_Staff->name.' '.$Clients_Staff->surname;
				$_SESSION["email"] = $Clients_Staff->email;
				$_SESSION["id_profile"] = $Clients_Staff->id_profile;
				$_SESSION["status"] = $Clients_Staff->status;
				$_SESSION["id"]	= $Clients_Staff->id;
	?>
	<div class="alert alert-info">
        <p>
            <a href="home.php"><button class="btn btn-sm btn-success">Ir a tu Panel Administrativo</button></a>
        </p>
    </div>
	<?php }?>
</div><!-- /.col -->

<script src="../assets/js/jquery-2.1.4.min.js"></script>
<?php
$Clients = $Persistencia->ClientStaffID($_REQUEST['id']);
?>
<div class="bootbox modal fade bootbox-confirm in" tabindex="-1" role="dialog" style="display: block; padding-right: 17px;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<div class="bootbox-body">Estas seguro de eliminar a <?php echo $Clients->name.' '.$Clients->surname ?>?</div>
</div>
<div class="modal-footer">
<form action="" method="post">
<?php if($Clients->id_profile == 2){ ?>
<button type="button" class="btn btn-sm" onclick="javascript:location.href='staff.php'">Cancelar</button>
<?php }elseif($Clients->id_profile == 3){?>
<button type="button" class="btn btn-sm" onclick="javascript:location.href='clients.php'">Cancelar</button>
<?php }?>

<button type="submit" id="confirm" name="confirm" class="btn btn-primary btn-sm">Eliminar</button>
</form>
</div>
</div>
</div>
</div>
<div class="modal-backdrop fade in"></div>
<?php if(isset($_REQUEST['confirm'])){?>
<?php $Persistencia->DeletClientStaff($_REQUEST['id']) ?>
<?php if($Clients->id_profile == 2){ ?>
<script language="javascript">location.href="staff.php";</script>
<?php }elseif($Clients->id_profile == 3){?>
<script language="javascript">location.href="clients.php";</script>
<?php }?>
<?php }?>	


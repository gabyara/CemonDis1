<?php
$Tickets = $Persistencia->TicketsALLTID($_REQUEST['tid']);
?>
<?php if($TicketsTID->status == 3) {?>
<center><div class="alert alert-warning">
	<strong>Este Ticket esta cerrado!</strong>
	 Puede responder a este ticket para reabrirlo.
	<br />
</div>
</center>
<?php } ?>

<?php include('open-ticket-reply.php'); ?>


<?php while($RegistTicketsALL = mysql_fetch_array($Tickets)){?>
<div class="col-xs-12 col-sm-10 widget-container-col" id="widget-container-col-5">
    <div class="widget-box" id="widget-box-5">
        <div class="widget-header">
            <h5 class="widget-title smaller"><?php echo $RegistTicketsALL['name'] ?></h5>

            <div class="widget-toolbar">
                <span class="label label-success">
                    <?php setlocale(LC_ALL,"es_ES"); echo date("j M, Y, (g:i a)", strtotime(date($RegistTicketsALL['date'])));?>
                    
                </span>
            </div>
        </div>

        <div class="widget-body">
            <div class="widget-main padding-6">
                <div class="alert alert-info"> <?php echo $RegistTicketsALL['message'] ?> </div>
            </div>
        </div>
    </div>
</div>
<?php }?>
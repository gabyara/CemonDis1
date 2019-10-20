

<form action=" " method="post">
<h5>Solicitud de despacho #<?php echo $TicketsID->id ?></h5>
<?php error_reporting(0);?>
<div class="col-sm-4">
	<div class="form-group">
        <div class="col-sm-6">
            <select class="col-xs-10 col-sm-5 form-control " id="status" name="status">
                <?php if($TicketsID->status == 1) {?>
					<option class="text-success" value="1">Recibido</option>
					<option class="text-danger" value="2">Por Despachar</option>
					<option class="text-muted" value="3">Despachado</option>
				<?php }elseif($TicketsID->status == 2) {?>
					<option class="text-danger" value="2">Por Despachar</option>
					<option class="text-muted" value="3">Despachado</option>
				<?php }elseif($TicketsID->status == 3) {?>
					<option class="text-muted" value="3">Despachado</option>
					<option class="text-danger" value="2">Por Despachar</option>
					<option class="text-success" value="1">Recibido</option>
				<?php } ?>
            </select>

        <?php 
            if($TicketsID->status==1){
                $fecha = date('Y-m-j');
                $nuevafecha = strtotime ( '+30 day' , strtotime ( $fecha ) ) ;
                $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
                $d=rand(20,300);
                $TicketsID->precio=$d;
                $TicketsID->ruta='Autopista Reginal del centro';
                $TicketsID->PesoPaquete=$p;
                $TicketsID->DirActual='Caracas Sede Principal';
                $Factura= new Factura();
                $Clients_Staff= new Clients_Staff();
                $Persistencia= new Persistencia();
                $Clients_Staff = $Persistencia->ClientStaffID($TicketsID->userid);
                $Factura->idticket=$TicketsID->id;
                $Factura->userid= $TicketsID->userid;
                $Factura->montocancelar= $TicketsID->precio;
                $Factura->descripcion='Servicio de envio de paquete';
                $Factura->status='Por Cobrar';
                $Factura->fvencimiento=$nuevafecha;
                $Factura->userrif=$Clients_Staff->rif;  
                $Persistencia->GuardarFactura($Factura);
                $Persistencia->ModificarTicketPrecio($TicketsID);
                $Persistencia->ModificarTicketRuta($TicketsID);
               
            }
                if($TicketsID->status==2){
                $Factura= new Factura();
                $Persistencia= new Persistencia();
                $Factura=$Persistencia->FacturaClientTicketID($TicketsID->id);  
                 $TicketsID->facturaid=$Factura->id; 
                $Persistencia->ModificarTicketidf($TicketsID); 
                }
            

        ?>
       
        </div>
	</div>
</div>
<div class="col-sm-11">
    <div class="widget-toolbox padding-4 clearfix">
        <div class="btn-group pull-left">
            <button class="btn btn-sm btn-purple" type="submit" name="submitticket" onclick="" >
                <i class="ace-icon fa fa-floppy-o bigger-125"></i>
               Actualizar
            </button>
            
        </div>
    </div>
</div>
</form>


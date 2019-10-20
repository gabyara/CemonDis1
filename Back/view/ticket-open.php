<?php
$Tickets = $Persistencia->TicketsALLStatus(1,$_SESSION["id"]);
?>
<div class="row">
    <div class="col-xs-12">
		<!-- div.table-responsive -->

        <!-- div.dataTables_borderWrap -->
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="center" style="display:none"></th>
                        <th>Id Despacho</th>
                        <th>Direccion Destinatario</th>
                        <th>Peso del paquete</th>
                        <th>Costo del envío</th>
                        <th class="hidden-480">Status</th>
                        <th class="hidden-480"><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>Ultima Actualización</th>
                    </tr>
                </thead>

                <tbody>
					<?php while($RegistTickets = mysql_fetch_array($Tickets)){?>
                    <tr>
             
                <td><center>#<?php echo $RegistTickets['id'] ?></center></td>    
                <td><center>
                   <?php echo $RegistTickets['DirDestino'] ?></center>
                </td>
                 <td>
                   <center><?php echo $RegistTickets['PesoPaquete'] ?>kg</center>
                </td>

                 <td>
                   <center><?php echo $RegistTickets['precio'] ?>$</center>
                </td>

                <td><center>Por Confirmar</center></td>
                <td class="hidden-480">
                    <?php setlocale(LC_ALL,"es_ES"); echo date("j M, Y, (g:i a)", strtotime(date($RegistTickets['datee'])));?>       
                </td>

                <td style="display:none"></td>
            </tr>
					<?php }?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

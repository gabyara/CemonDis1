<div class="clearfix">
    <div class="pull-right tableTools-container"></div>
</div>

<!-- div.table-responsive -->
<?php
$Tickets = $Persistencia->TicketsALLStatus1(3);
?>
<!-- div.dataTables_borderWrap -->
<div>
    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th class="center">
                    <label class="pos-rel">
                        <input type="checkbox" class="ace" />
                        <span class="lbl"></span>
                    </label>
                </th>
                <th><center>Id Despacho</center></th>
                <th><center>Producto</center></th>
                <th><center>Dir. Destino</center></th>
                <th><center>Peso</center></th>
                <th><center>Ruta</center></th>
                <th><center>Precio</center></th>
                <th><center>Id Factura</center></th>
                <th class="hidden-480"><center>Empresa</center></th>
                <th>
                    <center><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                    Estado</center>
                </th>
                
                <th class="hidden-480"><center>Última Actualización</center></th>

               
            </tr>
        </thead>

        <tbody>
            <?php while($RegistTickets = mysql_fetch_array($Tickets)){?>
            <tr>
                <td class="center">
                    <label class="pos-rel">
                        <input type="checkbox" class="ace" />
                        <span class="lbl"></span>
                    </label>
                </td>
                <td><center>#<?php echo $RegistTickets['id'] ?></center></td>    
                <td><center>
                   <?php echo $RegistTickets['producto'] ?></center>
                </td>
                <td><center>
                   <?php echo $RegistTickets['DirDestino'] ?></center>
                </td>
                 <td>
                   <center><?php echo $RegistTickets['PesoPaquete'] ?>kg</center>
                </td>
                 <td>
                   <center><?php echo $RegistTickets['ruta'] ?></center>
                </td>
                 <td>
                   <center><?php echo $RegistTickets['precio'] ?>$</center>
                </td>
                 <td>
                   <center><?php echo $RegistTickets['facturaid'] ?></center>
                </td>
                <td class="hidden-480"><center><a href="#"><span class="label label-sm label-success"><?php echo $RegistTickets['empresa'] ?></span></center></a></td>                
                <td><span class="text-muted"><center>Despachado</center></span></td>
               
                <td class="hidden-480">
                    <center><?php setlocale(LC_ALL,"es_ES"); echo date("j M, Y, (g:i a)", strtotime(date($RegistTickets['datee'])));?></center>       
                </td>

                <td style="display:none"></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>


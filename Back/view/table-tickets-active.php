<div class="clearfix">
    <div class="pull-right tableTools-container"></div>
</div>

<!-- div.table-responsive -->
<?php
$Tickets = $Persistencia->TicketsALLStatus2(1,2);
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
                <th style="display:none"><center></center></th>
                <th style="display:none"><center></center></th>
                <th><center>Producto</center></th>
                <th><center>Dir. Destino</center></th>
                <th><center>Peso </center></th>
                <th class="hidden-480"><center>Empresa</center></th>
                <th>
                    <center><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                    Estado</center>
                </th>
                <th><center>Actualizar Estado</center></th>
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
                <td style="display:none" ><center></center></td> 
                <td style="display:none"><center></center></td>    
                 <td>
                   <center><?php echo $RegistTickets['producto'] ?></center>
                </td>
                <td>
                   <center><?php echo $RegistTickets['DirDestino'] ?></center>
                </td>
                 <td>
                   <center><?php echo $RegistTickets['PesoPaquete'] ?></center>
                </td>
                <td class="hidden-480"><a href="#"><center><span class="label label-sm label-success"><?php echo $RegistTickets['empresa'] ?></span></center></a></td>

                <td>
				<?php
					if($RegistTickets['status'] == 1) {?>
					<span class="text-success"><center>Recibido</center></span>
					<?php }else{ ?>
						<span class="text-warning bigger-110 orange"><center>Por Despachar</center></span>
					<?php } ?>
				
				</td>
                <td><center><a href="?view=view&tid=<?php echo $RegistTickets['tid'] ?>">Actualizar</a></center></td>
                <td class="hidden-480">
                    <center><?php setlocale(LC_ALL,"es_ES"); echo date("j M, Y, (g:i a)", strtotime(date($RegistTickets['datee'])));?></center>		
                </td>

                <td style="display:none"></td>
			</tr>
			<?php }?>
        </tbody>
    </table>
</div>

<div class="hr hr-18 hr-double dotted"></div>
<?php
$Clients_Staff = $Persistencia->ClientStaffID($_REQUEST['id']);
?>

<div class="tabbable">
	<ul class="nav nav-tabs" id="myTab">
		<li class="active">
			<a data-toggle="tab" href="#home">
				<i class="green ace-icon fa fa-user bigger-120"></i>
				Perfil
			</a>
		</li>

		<li>
			<a data-toggle="tab" href="#tickets">
				<i class="green ace-icon fa fa-comments bigger-120"></i>
				Solicitudes Despachos
			</a>
		</li>

		<li>
			<a data-toggle="tab" href="#emails">
				<i class="green ace-icon fa fa-envelope bigger-120"></i>
				Facturas
			</a>
		</li>
	</ul>

	<div class="tab-content">
		<div id="home" class="tab-pane fade in active">
			<form class="form-horizontal" id="validation-form" method="post" action="">
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Rif:</label>
        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="name" name="name" class="col-xs-12 col-sm-5" value="<?php echo $Clients_Staff->rif; ?>" />
            </div>
        </div>
    </div>
    
    <div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-gplus">Empresa</label>

		<div class="col-sm-9">
			<span class="input-icon input-icon-right">
				<input type="text" name="empresa" id="empresa" value="<?php echo $Clients_Staff->empresa; ?>" id="form-field-gplus" />
			</span>
		</div>
	</div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="surname">Num Solicitudes:</label>
        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="surname" name="surname" class="col-xs-12 col-sm-5" value="<?php echo $Clients_Staff->numsolicitudes; ?>"/>
            </div>
        </div>
    </div>
    
    <div class="space-2"></div>
    
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="email" name="email" id="email" class="col-xs-12 col-sm-6" readonly="readonly" value="<?php echo $Clients_Staff->email; ?>"/>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">Contraseña:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="password" name="password" id="password" class="col-xs-12 col-sm-4" />
            </div>
        </div>
    </div>

    <div class="space-2"></div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password2">Confirmar Contraseña:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="password" name="password2" id="password2" class="col-xs-12 col-sm-4" />
            </div>
        </div>
    </div>

    <div class="hr hr-dotted"></div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state">Dirección: </label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" name="address" id="address" class="col-xs-12 col-sm-4" value="<?php echo $Clients_Staff->address; ?>"/>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="city">Ciudad: </label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" name="city" id="city" class="col-xs-12 col-sm-4" value="<?php echo $Clients_Staff->city; ?>"/>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state">Estado: </label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" name="state" id="state" class="col-xs-12 col-sm-4" value="<?php echo $Clients_Staff->state; ?>"/>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone">Número de Telef:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="ace-icon fa fa-phone"></i>
                </span>

                <input type="tel" id="phone" name="phone" value="<?php echo $Clients_Staff->phonenumber; ?>"/>
            </div>
        </div>
    </div>

    <div class="hr hr-dotted"></div>
    
    <!-- 
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-gplus">Departamento</label>

		<div class="col-sm-9">
			<span class="input-icon input-icon-right">
				<input type="text" name="departamento" id="departamento" value="<?php echo $Clients_Staff->departamento; ?>" id="form-field-gplus" />
			</span>
		</div>
	</div>
		-->
    <div class="space-8"></div>

    <hr />
    <div class="wizard-actions">
        <button name="clientedit" id="clientedit" type="submit" class="btn btn-success btn-next" data-last="Finish">
            Editar Cliente
        </button>
    </div>
</form>
		</div>

		<div id="tickets" class="tab-pane fade">
			
			<?php
			$Tickets = $Persistencia->TicketsALL($Clients_Staff->id);
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
							<th>Id Despacho</th>
			                <th>Direccion Destino</th>
			                <th>Peso Paquete</th>
			                <th class="hidden-480">Empresa</th>
			                <th>
			                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
			                    Estado
			                </th>
			            
			                <th class="hidden-480">Última Actualización</th>


						   
						</tr>
					</thead>

					<tbody>
						<?php while($RegistTickets = mysql_fetch_array($Tickets)){?>
						<tr>
							<th class="center">
								<label class="pos-rel">
									<input type="checkbox" class="ace" />
									<span class="lbl"></span>
								</label>
							</th>
                        	<td style="display:none"></td>
							<td>#<?php echo $RegistTickets['id'] ?></td>    
			                <td>
			                   <?php echo $RegistTickets['DirDestino'] ?>
			                </td>
			                 <td>
			                   <?php echo $RegistTickets['PesoPaquete'] ?>
			                </td>
			                <td class="hidden-480"><a href="#"><span class="label label-sm label-success"><?php echo $RegistTickets['empresa'] ?></span></a></td>
							<td>
							
							<?php
								if($RegistTickets['status'] == 1) {?>
								<span class="text-success">Recibida</span>
								<?php }elseif($RegistTickets['status'] == 2) { ?>
									<span class="text-warning bigger-110 orange">Por Despachar</span>
								<?php }else{?>
										<span class="">Despachado</span>
								<?php } ?>
							
							</td>
							

							<td class="hidden-480">
								<?php setlocale(LC_ALL,"es_ES"); echo date("j M, Y, (g:i a)", strtotime(date($RegistTickets['datee'])));?>		
							</td>

						</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
		<div id="emails" class="tab-pane fade">
			
			<?php
			$Factura = $Persistencia->FacturaClientALL($Clients_Staff->id);
			?>
			<!-- div.dataTables_borderWrap -->
			<div>
				<table id="dynamic-table2" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th class="center">
								<label class="pos-rel">
									<input type="checkbox" class="ace" />
									<span class="lbl"></span>
								</label>
							</th>

                        	<th>Id Factura</th>
							<th>Fecha emitida</th>
							<th>Descripcion</th>
							<th>Monto A Cancelar</th>
							<th>Fecha vencimiento</th>
							<th>status</th>
						</tr>
					</thead>

					<tbody>
						<?php while($RegistFactura = mysql_fetch_array($Factura)){?>
						<tr onclick="javascript: openwindow(<?php echo $RegistFactura['id'] ?>)">
							<th class="center">
								<label class="pos-rel">
									<input type="checkbox" class="ace" />
									<span class="lbl"></span>
								</label>
							</th>
                       		<td style="display:none"></td>
							<td>#<?php echo $RegistFactura['id'] ?></td>
							<td class="hidden-480">
								<?php setlocale(LC_ALL,"es_ES"); echo date("j M, Y, (g:i a)", strtotime(date($RegistFactura['femision'])));?>		
							</td>
							<td><?php echo $RegistFactura['descripcion'] ?></td>
							<td > $<?php echo $RegistFactura['montocancelar'] ?></td>
                            <td > <?php echo $RegistFactura['fvencimiento'] ?></td>
                            <td ><?php echo $RegistFactura['status'] ?></td>   
						</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>								
<script language="JavaScript1.2">
function openwindow(id)
{
window.open("viewemail.php?id="+id,
	"mywindow","location=1,status=1,scrollbars=1,width=650,height=450");
}
</script>												
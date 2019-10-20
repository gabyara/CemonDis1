<?php
$Clients = $Persistencia->ClientStaffALL(3);
?>

<div class="clearfix">
    <div class="pull-right tableTools-container"></div>
</div>

<!-- div.table-responsive -->

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
                <th>Rif</th>
                <th>Empresa</th>
                <th class="hidden-480">Email</th>

                <th>Num Solicitudes</th>
                <th class="hidden-480">Status</th>

                <th></th>
            </tr>
        </thead>

        <tbody>
        	<?php while($RegistClientAll = mysql_fetch_array($Clients)){?>
            
            <tr>
                <td class="center">
                    <label class="pos-rel">
                        <input type="checkbox" class="ace" />
                        <span class="lbl"></span>
                    </label>
                </td>

                <td>
                    <a href="#<?php echo $RegistClientAll['id']; ?>"><?php echo $RegistClientAll['rif']; ?></a>
                </td>

                <td><a href="#<?php echo $RegistClientAll['id']; ?>"><?php echo $RegistClientAll['empresa']; ?></a></td>
                <td class="hidden-480"><?php echo $RegistClientAll['email']; ?></td>
                <td><?php echo $RegistClientAll['numsolicitudes']; ?></td>

                <td class="hidden-480">
                	<?php if($RegistClientAll['status'] == 1){ ?>
                    <span class="label label-sm label-success">Solvente</span>
                    <?php }else{?>
                    <span class="label label-sm label-inverse arrowed-in">Deudor</span>
                    <?php }?>
                </td>

                <td>
                    <div class="hidden-sm hidden-xs action-buttons">
                        <a class="green" href="clientedit.php?id=<?php echo $RegistClientAll['id']; ?>" id="bootbox-confirm" class="tooltip-success" data-rel="tooltip" title="Ver/Editar">
                            <i class="ace-icon fa fa-pencil bigger-130"></i> <i class="ace-icon fa fa-search-plus bigger-130"></i>
                        </a>

                        <a class="red" href="confirm-delet.php?id=<?php echo $RegistClientAll['id']; ?>" id="bootbox-confirm" class="tooltip-error" data-rel="tooltip" title="Eliminar">
                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                        </a>
                    </div>

                    <div class="hidden-md hidden-lg">
                        <div class="inline pos-rel">
                            <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                            </button>

                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                 <li>
                                    <a href="clientedit.php" id="bootbox-confirm" class="tooltip-success" data-rel="tooltip" title="Ver/Editar">
                                        <span class="green">
                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                        </span>
                                        <span class="blue">
                                            <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="clientedit.php?id=<?php echo $RegistClientAll['id']; ?>" id="bootbox-confirm" class="tooltip-success" data-rel="tooltip" title="Editar">
                                        <span class="green">
                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="confirm-delet.php?id=<?php echo $RegistClientAll['id']; ?>" id="bootbox-confirm" class="tooltip-error" data-rel="tooltip" title="Eliminar">
                                        <span class="red">
                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </td>
            </tr>
            
            <?php }?>
        </tbody>
    </table>
</div>

<div class="hr dotted"></div>
<div>
    <div id="user-profile-3" class="user-profile row">
        <div class="col-sm-offset-1 col-sm-10">
            
            <div class="space"></div>

            
                <div class="tabbable">
                    <ul class="nav nav-tabs padding-16">
                        <li class="active">
                            <a data-toggle="tab" href="#edit-basic">
                                <i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
                                Información Básica
                            </a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#edit-password">
                                <i class="blue ace-icon fa fa-key bigger-125"></i>
                                Contraseña
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content profile-edit-tab-content">
                        <div id="edit-basic" class="tab-pane in active">
                        	<form class="form-horizontal" action="" method="post" id="">
                            <h4 class="header blue bolder smaller">General</h4>

                            <div class="row">
                                
                                <div class="col-xs-12 col-sm-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label no-padding-right" for="form-field-first">Rif</label>

                                        <div class="col-sm-8">
                                            <input class="input-small" type="text" id="name" disabled="disabled" name="name" placeholder="Nombres" value="<?php echo $Clients_Staff->rif; ?>" />
                                        </div>
                                       </div>
                                       <div class="form-group"> 
                                         <label class="col-sm-4 control-label no-padding-right" for="form-field-first">Empresa</label>   
                                        <div class="col-sm-8">
                                       <input class="input-small" type="text" id="surname"disabled="disabled" name="surname" placeholder="Apellidos" value="<?php echo $Clients_Staff->empresa; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space"></div>
                            <h4 class="header blue bolder smaller">Contacto</h4>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>

                                <div class="col-sm-9">
                                    <span class="input-icon input-icon-right">
                                        <input type="email" name="email" id="email" disabled="disabled" value="<?php echo $Clients_Staff->email; ?>" />
                               <i class="ace-icon fa fa-envelope"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Número de Telef</label>

                                <div class="col-sm-9">
                                    <span class="input-icon input-icon-right">
                                        <input class="input-medium input-mask-phone" type="text" id="phone" name="phone" value="<?php echo $Clients_Staff->phonenumber; ?>" /> 		   
                                        <i class="ace-icon fa fa-phone fa-flip-horizontal"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-facebook">Dirección</label>

                                <div class="col-sm-9">
                                    <span class="input-icon input-icon-right">
                                        <input type="text" name="address" id="address" value="<?php echo $Clients_Staff->address; ?>" id="form-field-facebook" />
                               </span>
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-twitter">Ciudad</label>

                                <div class="col-sm-9">
                                    <span class="input-icon input-icon-right">
                                        <input type="text" name="city" id="city" value="<?php echo $Clients_Staff->city; ?>" id="form-field-twitter" />
                                   </span>
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-gplus">Estado</label>

                                <div class="col-sm-9">
                                    <span class="input-icon input-icon-right">
                                        <input type="text" name="state" id="state" value="<?php echo $Clients_Staff->state; ?>" id="form-field-gplus" />
                                    </span>
                                </div>
                            </div>
                            
                            <div class="space-4"></div>

                            
                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-gplus">Departamento</label>

                                <div class="col-sm-9">
                                    <span class="input-icon input-icon-right">
                                        <input type="text" name="departamento" id="departamento" value="<?php echo $Clients_Staff->departamento; ?>" id="form-field-gplus" />
                                    </span>
                                </div>
                            </div>
                            <div class="clearfix form-actions">
                    <div class="col-md-9">
                        <input class="btn btn-info" type="submit" value="Modificar" name="profiledit" id="profiledit" />
                            
                    </div>
                </div>
                            </form>
                        </div>

                        <div id="edit-password" class="tab-pane">
                        	<form class="form-horizontal" action="" method="post" id="validation-form">
                            <div class="space-10"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">New Password</label>

                                <div class="col-sm-9">
                                    <input type="password" id="password" name="password" />
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirm Password</label>

                                <div class="col-sm-9">
                                    <input type="password" id="password2" name="password2" />
                                </div>
                            </div>
                            <div class="clearfix form-actions">
                        <div class="col-md-9">
                            <input class="btn btn-info" type="submit" value="Modificar" name="profileditpass" id="profileditpass" />
                                
                        </div>
                    </div>
                        </form>
                        </div>
                        
                    </div>
                </div>

                
            
        </div><!-- /.span -->
    </div><!-- /.user-profile -->
</div>											
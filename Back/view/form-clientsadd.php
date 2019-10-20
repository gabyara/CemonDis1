<div class="hr hr-18 hr-double dotted"></div>
	
<form class="form-horizontal" id="validation-form" method="post" action="">
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Rif:</label>
        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input required="required" type="text" id="name" name="name" class="col-xs-12 col-sm-5" value="<?php if(isset($_POST['rif'])){echo $_POST['rif'];} ?>" />
            </div>
        </div>
    </div>

        <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state">Empresa: </label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input required="required" type="text" name="empresa" id="empresa" class="col-xs-12 col-sm-4" value="<?php if(isset($_POST['empresa'])){echo $_POST['empresa'];} ?>" />
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="surname">Num Solicitudes</label>
        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input required="required" type="text" id="surname" name="surname" class="col-xs-12 col-sm-5" value="<?php if(isset($_POST['numsolicitudes'])){echo $_POST['numsolicitudes'];} ?>" />
            </div>
        </div>
    </div>
    
    <div class="space-2"></div>
    
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input required="required" type="email" name="email" id="email" class="col-xs-12 col-sm-6" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input required="required" type="email" name="email" id="email" class="col-xs-12 col-sm-6" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">Contraseña:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input required="required" type="password" name="password" id="password" class="col-xs-12 col-sm-4" />
            </div>
        </div>
    </div>

    <div class="space-2"></div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password2">Confirmar Contraseña:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input required="required" type="password" name="password2" id="password2" class="col-xs-12 col-sm-4" />
            </div>
        </div>
    </div>

    <div class="hr hr-dotted"></div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state">Dirección: </label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input required="required" type="text" name="address" id="address" class="col-xs-12 col-sm-4" value="<?php if(isset($_POST['address'])){echo $_POST['address'];} ?>" />
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="city">Ciudad: </label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input required="required" type="text" name="city" id="city" class="col-xs-12 col-sm-4" value="<?php if(isset($_POST['city'])){echo $_POST['city'];} ?>" />
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state">Estado: </label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input required="required" type="text" name="state" id="state" class="col-xs-12 col-sm-4" value="<?php if(isset($_POST['state'])){echo $_POST['state'];} ?>" />
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

                <input required="required" type="tel" id="phone" name="phone" value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];} ?>" />
            </div>
        </div>
    </div>

    <div class="hr hr-dotted"></div>
    

    <div class="space-8"></div>

    <div class="form-group">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
            <label>
                <input name="agree" id="agree" type="checkbox" class="ace" />
                <span class="lbl"> Marque esta casilla para enviar un mensaje de información de nueva cuenta</span>
            </label>
        </div>
    </div>
    <hr />
    <div class="wizard-actions">
        <button name="clientadd" id="clientadd" type="submit" class="btn btn-success btn-next" data-last="Finish">
            Add Cliente
        </button>
    </div>
</form>

					
													
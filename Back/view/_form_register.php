<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" class="register-form" id="validation-form" action="" method="post" >
			<h2>Por favor Registrate <small>Es gratis y siempre lo será.</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input required="required" type="text" name="name" id="first_name" class="form-control input-lg" placeholder="Nombres" tabindex="1" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input required="required" type="text" name="surname" id="last_name" class="form-control input-lg" placeholder="Apellidos" tabindex="2" value="<?php if(isset($_POST['surname'])){echo $_POST['surname'];} ?>">
					</div>
				</div>
			</div>
			<div class="form-group">
				<input required="required" type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input required="required" type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input required="required" type="password" name="password2" id="password2" class="form-control input-lg" placeholder="Confirmar Contraseña" tabindex="6">
					</div>
				</div>
			</div>
               <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input required="required" type="text" name="empresa" id="empresa" class="form-control input-lg" placeholder="Empresa" tabindex="7">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input required="required" type="text" name="departamento" id="departamento" class="form-control input-lg" placeholder="Departamento" tabindex="8">
					</div>
				</div>
			</div>
                <div class="form-group">
					<input required="required" type="text" name="address" id="address" class="form-control input-lg" placeholder="Dirección" tabindex="8" value="<?php if(isset($_POST['address'])){echo $_POST['address'];} ?>">
				</div>
                <div class="form-group">
					<input required="required" type="text" name="city" id="city" class="form-control input-lg" placeholder="Ciudad" tabindex="10" value="<?php if(isset($_POST['city'])){echo $_POST['city'];} ?>">
				</div>
                <div class="form-group">
					<input required="required" type="text" name="state" id="state" class="form-control input-lg" placeholder="Estado" tabindex="11" value="<?php if(isset($_POST['state'])){echo $_POST['state'];} ?>">
				</div>
                <div class="form-group">
					<input required="required" type="tel" name="phone" id="phone" class="form-control input-lg" placeholder="Número de Telef" tabindex="12" value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];} ?>">
				</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" name="registeradd" id="registeradd" value="Registrar" class="btn btn-theme btn-block btn-lg" tabindex="12"></div>
				<div class="col-xs-12 col-md-6">Ya tienes una cuenta? <a href="login.php">Iniciar Sesión</a></div>
			</div>
		</form>
	
	</div>
</div>

</div>
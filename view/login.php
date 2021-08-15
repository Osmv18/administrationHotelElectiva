<?php if ($msg != NULL){ ?>
<div class="alert alert-warning" role="alert">
 <?php echo $msg ?>  
</div>
<?php   }  ?>
<div class="main-container">
    <div class="formulario">
        <div class="card">
            <div class="upper">
                <img src="img/Logo_Hotel.png" alt="Logo_Oblivion" id="img_sign"> 
                <h5 id="titulo-form">INICIO DE SESION</h5>
            </div>
            <form method="POST" action="?c=controller_login" id="signup-form">
                <div class="form-group">
                    <label class="label-form" for="user"> Usuario: </label>
                    <input type="text" class="form-input" name="user" id="form-input" placeholder="Usuario" required/>
                </div>
                <div class="dropdown-divider" id="dropdown-divider-form"></div>
                <div class="form-group">
                    <label class="label-form" for="password"> Contraseña: </label>
                    <input type="password" class="form-input" name="password" id="form-input" placeholder="Contraseña" required/>
                </div>
                <div class="dropdown-divider" id="dropdown-divider-form"></div>
                <button type="submit" class="btn btn-primary" id="login-btn">INICIAR SESIÓN</button>
            </form>
        </div> 
        <p class="registrate"> ¿No tienes una cuenta, regístrate? <a href="#" class="signup-link">Registrarse</a></p>   
    </div>
</div>


<!DOCTYPE html>
<html lang="en">
    
<head>
<title>Iniciar Sesion</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <form action="registrarUsuario.php" method="post" 
        oninput='pass.setCustomValidity(pass.value != clave.value ? "Las contraseñas no coinciden" : "")'
                        style="margin-right: 50px;
                                margin-left: 50px;
                                margin-top: 50px;">
        <div id="SignIn" class="form-group" style="position: relative;
                                                    margin-bottom: 100px;
                                                    max-width:500px;
                                                    margin-left: auto;
                                                    margin-right: auto;">
            <div id="LogoUpc" style="text-align: center;
                                    position: relative;
                                    margin-bottom: 50px;">
                <img src="img/logoupc.png" height="250" class="img-fluid" alt="Responsive image">
            </div>
            
            
            <div class="form-group">
                <label for="usr">Identificación:</label>
                <input type="text" class="form-control" name="identificacion" required>
            </div>
            <div class="form-group">
                <label for="usr">Nombres:</label>
                <input type="text" class="form-control" name="nombres" required>
            </div>
            <div class="form-group">
                <label for="usr">Apellidos:</label>
                <input type="text" class="form-control" name="apellidos" required>
            </div>
            <div class="form-group">
                <label for="usr">Grupo de Investigación:</label>
                <input type="text" class="form-control" name="grupoInv" required>
            </div>
            <div class="form-group">
                <label for="usr">Teléfono:</label>
                <input type="text" class="form-control" name="telefono" required>
            </div>
            <div class="form-group">
                <label for="usr">Dirección:</label>
                <input type="text" class="form-control" name="direccion" required>
            </div>
            <div class="form-group">
                <label for="pwd">Contraseña:</label>
                <input type="password" class="form-control" name="clave" required>
            </div><div class="form-group">
                <label for="usr">Confirmar Contraseña:</label>
                <input type="password" class="form-control" name="pass" required>
            </div>
            
            
            <div class="form-group">
                    <button type="submit" class="btn btn-success form-control"> Registrarse </button>
            </div>
            <div class="form-group" name="Registrate" style="text-align: center;
                                                            vertical-align: middle;">
                <label>O tambien puedes  </label>
                <a  class="btn btn-outline-primary" href="index.php" role="button"> Iniciar Sesión </a>
            </div>
        </div>
    </form>
</body> 

<footer>

</footer>

</html>
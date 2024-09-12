<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
      
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
     <link rel="stylesheet" href="./css/style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body id="home">
    <header id="header">
  <nav id="mainNavbar" class="navbar navbar-expand-lg bg-nav fixed-top">
    <a class="navbar-brand" href="index.php">
      <img class="logo" src="./img/logo2.png" alt="logo">
    </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="loginView.php">Inciar Sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ingreso.php">Registrarse</a>
        </li>
        
      </ul>
      
    </div>
  </nav> <!-- /.navbar -->
 
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css" integrity="sha512-P9pgMgcSNlLb4Z2WAB2sH5KBKGnBfyJnq+bhcfLCFusrRc4XdXrhfDluBl/usq75NF5gTDIMcwI1GaG5gju+Mw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
       .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
   .text-center{
    text-align: center;
   }     
    </style>
</head>
<body>

    <form action="conexion-login.php" method="post" >
       
	   <center><h1 style="color: #FFFFFF ">Sistema Sena</h1></center>
        
        <?php if (isset($error)) { ?>
            <p class="error"><?php echo $error; ?></p>
        <?php } ?>
        <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="./img/imgIcono-removebg-preview.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>
          <div class="d-flex flex-row align-items-center justify-content-center ">
            <center><p class="lead fw-normal mb-0 me-3 text-center">Sistema Sena</p></center>
            
          </div>

          <div class="divider d-flex align-items-center my-4">
            
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Usuario"  name="usuario" required/>
            <label class="form-label" for="form3Example3">Usuario</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="contraseña"  name="password" required/>
            <label class="form-label" for="form3Example4">Contraseña</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="forgot-password.php" class="text-body">¿Olvidó su contraseña?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Iniciar sesión</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">¿Aún no tienes cuenta? <a href="ingreso.php"
                class="link-danger">Registro</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>
        
        <!--<label for="usuario">Nombre de usuario:</label>
        <input type="text" name="usuario" id="usuario" required>
        
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Iniciar sesión</button><br>

        <center><a class="enlace" href="forgot-password.php">Olvidó su contraseña?</a></center>
        <br>
        --> 
        <?php 
    if(isset($_GET['message'])){
     
    ?>
      <div class="alert alert-primary" role="alert">
        <?php 
        switch ($_GET['message']) {
          case 'ok':
            echo 'el correo debe ser hotmail';
            break;
          case 'success_password':
            echo 'Inicia sesión con tu nueva contraseña';
            break;
            
          default:
            echo 'Algo salió mal, intenta de nuevo';
            break;
        }
        ?>
      </div>
    <?php
    }
    ?>
      <!-- <center> <a href="ingreso.php"><button type="button" class="btn btn-primary">Registrarse</button></a></center>-->
    </form>
	
	
</body>
</html>

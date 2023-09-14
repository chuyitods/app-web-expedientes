 <?php 
session_start();
    if (isset($_SESSION['id'])){
        header('Location: CSNI/frontend/administrador/escritorio.php');
    }
include_once 'CSNI/backend/login.php'

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caja Solidaria Nuevo Ideal</title>
  <link rel="icon" type="image/png" href="../backend/img/logo.png">
  <link rel="stylesheet" type="text/css" href="CSNI/backend/css/style.css">
  <style type="text/css">
 .loader-container{
   
}

.load_animation{
  width: 100%;
  height: 100vh;
  font-size: 4rem ;
  background-color: #fff;
  z-index: 500;
  position: fixed;
  top: 0;
  left: 0;
  overflow: hidden;
  
}
.animation {
  position: absolute;
  top: 50%;
  left: 50%;
  border: 3px solid rgb(0, 0, 0);
  border-radius: 50%;
  box-sizing: content-box;
  padding: 10px;
  transform: translate(-50% , -50%) ;
  opacity: .5;
  animation: spinner 1s infinite;
  transition: .1s;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
@keyframes spinner {
  50% {
    transform: translate(-50% , -50%) ;
    border: 2px solid rgba(0, 0, 0, 0.178);
    padding: 30px;
  }
  100% {
    opacity: 1;
    transform:translate(-50% , -50%) rotate(360deg);
    border: 3px solid rgba(0, 0, 0, 0);
    padding: 17rem;
    color: #233975;
  }
   

}



    </style>
</head>
<body background="CSNI/backend/img/fondo3.jpg" style="width: 100%; height: 100vh;">
  
  <div class="loader-container">
    <div class="load_animation">
        <ion-icon name="folder-outline" class="animation"></ion-icon>
    </div>
</div>
  <div class="wrapper">
    <div class="loader"></div>
  </div>

    <div class="split-sceen">
      
        <section class="copy">
          <h1 align="center" >Software de Expedientes CSNI</h1>
         
          
        </section>
      </div>

      <div class="right">
        <form method="POST" role="form" onsubmit="return validacion()">
          <section class="copy">
            <h2>Iniciar sesión</h2>
          <?php 
                            if (isset($errMsg)) {
                                echo '
    <div style="color:#FF0000;text-align:center;font-size:20px; font-weight:bold;">'.$errMsg.'</div>
    ';  ;
                            }

                        ?>
          </section>
          <div class="input-container name">
            <label for="fname">Nombre de usuario</label>
            <input type="text" id="usuario" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>"  autocomplete="off"  autocomplete="off" placeholder="Introduce tu nombre de usuario">

          </div>

          <div class="input-container password">
            <label for="password">Contraseña</label>
            <input type="password" id="contra"  name="password" value="<?php if(isset($_POST['password'])) echo MD5($_POST['password']) ?>" placeholder="Introduce tu Contraseña">
            <i class="far fa-eye-slash"></i>
          </div>

          
          <button name='login' class="signup-btn" type="submit">Entrar</button>

          

        </form>
      </div>
    </div>
    
<script type="text/javascript" src="CSNI/backend/js/script.js"></script>
<script type="text/javascript" src="CSNI/backend/js/validate.js"></script>
<script type="text/javascript" src="CSNI/backend/js/reenvio.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
 <script type="text/javascript">
        $(window).on("load",function(){
            $(".load_animation").fadeOut(1000);
        });
    </script>

     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
<div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small
            
                    </div>
                </div>
            </footer>
        </div>
    </div>

    
    
</html>
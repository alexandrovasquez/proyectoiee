<!DOCTYPE html>

<html>
<head>
<title>INGRESAR SISTEMA DE GESTION DE PAGOS</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" style="margin-left:500px; border:none" href="">LOGIN - Institucion Educativa Experimental</a>
     
      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav mr-auto">
          
        </ul>
        <form class="form-inline my-2 my-lg-0">
        
        </form>
      </div>
    </nav>

    <!--LOGIN-->

     <div class="container" >

     <br></br>
     <br></br>
     <br></br>

        <div align="center" class="card card-container">
            
            <img id="profile-img" class="profile-img-card" src="/ProyectoFinal/imagenes/login.jpg"/ width=20% height=30% />
         	<form class="form-signin" method="POST" action="login.php">

<label>Id Usuario</label>
<input type="text" name="Idusuario"  class="form-control" placeholder="escriba su ID">
<label>Clave</label>
<input type="password" name="clave" class="form-control" placeholder="escriba su clave">

              


                <div id="remember" class="checkbox">
                    
                    <label>
                        <input type="checkbox" value="remember-me"> Olvide mi contraseña
                    </label>
                     
                </div>
                <input type="submit" class="btn btn-info" name="login" value="INGRESAR AL SISTEMA" >

               
            </form>
        </div>
    </div>

    
    <footer class="page-footer font-small" style="background-color: #343A40; color: #FFF; margin-top: 150px">

     
    </footer>
    




</form>

</body>


</html>
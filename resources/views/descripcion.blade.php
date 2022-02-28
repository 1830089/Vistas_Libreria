<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria Sorprende</title>
    <!-- Bootsrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


     <!--font oswald-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">


    <!--iconos de redes sociales-->
    <script src="https://kit.fontawesome.com/2291e076db.js" crossorigin="anonymous"></script>
    <!-- CUSTOM CSS-->
    <link rel="stylesheet" href="{{asset('../Css/descripcion.css')}}">
</head>
<body>

    <!--barra de navegación NAVBAR-->

  <nav class="navbar navbar-expand-lg nv-main text-light nav-main">
    <div class="col-md-2">
    <a class="navbar-brand" href="#"><img src="../Images/LogoMakr-1oya0s.png" alt="logo Sorprende" class="nav-brand"></a>
  </div>
    <div class="col-md-10">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="col-md-7">
      <form class="form-inline my-2 ml-auto nav-right">
        <input class="form-control-lg mr-sm-2 col-md-10" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
      </form>
    </div>
    <div class="col-md-5">
      <ul class="navbar-nav ml-auto text-light">
        <li class="nav-item active">
          <a class="nav-link" href="#"><i class="fas fa-shopping-cart text-light"> Mi Carrito</i></a>
        </li>
        <li class="nav-item dropdown text-light">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="far fa-user font-weight-bold text-light "> Mi cuenta</i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Cerrar sesión</a>
          </div>
        </li>
      </ul>
    </div>
    </div>
  </div>
  </nav>
  <!--fin barra de navegación-->

        <div class="container">
            <div class="col-md-12">
                <div class="panel panel-default shadow-lg p-3 mb-5 bg-white rounded m-2">
                    <div class="panel-title">
                        <h2 class="text-center  font-weight-bold text-dark py-1"> Descripción del libro</h1>  
                      </div>
                      <div class="panel-body py-2">
                        <div class="row">
                        <div class="col-md-6 text-center justify-content-center align-self-center">
                            <h1> Un mundo invertido</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, laudantium?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis voluptatem nobis asperiores tempore? Impedit, beatae voluptates id nesciunt culpa, qui voluptatum, debitis quos magnam blanditiis sunt deserunt voluptatibus velit numquam!
                            </p>
                            <center><table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:180px;"><i class="fas fa-pencil-alt font-weight-bold"> Titulo</i></th>
                                        <th style="width:180px;"><i class="far fa-newspaper font-weight-bold"> Editorial</i></th>
                                        <th style="width:180px;"><i class="fas fa-user-edit font-weight-bold"> Autor</i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Un mundo invertido</td>
                                        <td>Atalanta</td>
                                        <td>Juan Ruiz</td>
                                    </tr>
                                </tbody>
                            </table></center>

                        </div>
                        <div class="col-md-6">
                            
                            <img class="d-block w-65" src="../Images/ejemplolibro.jpg" alt="First slide"> 
                        </div>
                        </div>
                       </div>
                       <div class="panel-footer p-0">
                           <div class="container p-0">
                               <div class="row">
                            <div class="col-md-6 text-center">
                            <a href="#" class="btn btn-outline-success text-dark">
                                <i class="fas fa-credit-card"> Añadir al carrito</i>
                            </a>
                            <a href="#" class="btn btn-outline-warning text-dark">
                                <i class="fas fa-minus"></i>
                            </a>
                            <input type="number" class="input-group-sm">
                            <a href="#" class="btn btn-outline-warning text-dark">
                                <i class="fas fa-plus"></i>
                            </a>
                            </div>
                            <div class="precio-tm col-md-6">
                                <p>precio Sorprende <br> $300</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--footer-->
    <footer class="bg-dark">
        <div class="container p-3 text-white text-center">
        </div>
      </footer>








    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>        
</body>
</html>
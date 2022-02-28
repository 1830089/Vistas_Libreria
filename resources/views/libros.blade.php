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
  <link rel="stylesheet" href="{{asset('../Css/libros.css')}}">
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
    </div>
    <div class="col-md-5">
      <ul class="navbar-nav ml-auto text-light">
        <li class="nav-item active">
          <a class="nav-link" href="#"><i class="fas fa-home"> Home</i></a>
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

        <div class="d-flex" id="wrapper">
          <!-- Sidebar-->
          <div class="border-end text-dark bg-light" id="sidebar-wrapper">
              <div class="sidebar-heading text-dark text-center font-weight-bold">Agregar</div>
              <div class=" bg-light nav flex-column nav-pills list-group list-group-flush" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class=" nav-link active list-group-item list-group-item-action list-group-item-dark p-3" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-book font-weight-bold"> Libro</i></a>
                <a class=" nav-link list-group-item list-group-item-action list-group-item-dark p-3" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"> <i class="fas fa-user-edit font-weight-bold"> Autor</i></a>
                <a class=" nav-link list-group-item list-group-item-action list-group-item-dark p-3" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="far fa-newspaper font-weight-bold"> Editorial</i></a>
              </div>
          </div>
          <!-- Page content wrapper-->
          <div id="page-content-wrapper">
              <!-- Page content-->
              <div class="container-fluid">
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><h1 id="h1">
                    <div class="col-md-12">
                      <div class="panel panel-default shadow-lg p-3 mb-5 bg-white rounded m-2">
                        <div class="panel-title">
                          <h2 class="text-center  font-weight-bold text-dark py-1"> <i class="fas fa-book"> Agregar libro</i></h1>  
                        </div>
                        <div class="panel-body py-2">
                          <form action="">
                            <div class="mb-4">
                              <label for="isbn" class="form-label text-dark">Isbn</label>
                              <input type="number" class="form-control" name="isbn">
                          </div>
                          <div class="mb-4">
                            <label for="titulo" class="form-label text-dark">Título</label>
                             <input type="text" class="form-control" name="titulo">
                            </div>
                            <div class="mb-4">
                              <label for="autor" class="form-label text-dark">Autor</label>
                              <select name="autor" class="custom-select">
                                <option value="value1">Value 1</option>
                                <option value="value2">Value 2</option>
                                <option value="value3">Value 3</option>
                              </select>
                              </div>
                              <div class="mb-4">
                                <label for="editorial" class="form-label text-dark">Editorial</label>
                                <select name="editorial" class="custom-select">
                                  <option value="value1">Value 1</option>
                                  <option value="value2">Value 2</option>
                                  <option value="value3">Value 3</option>
                                </select>
                                </div>
                                <div class="mb-4">
                                  <label for="precio" class="form-label text-dark">Precio</label>
                                   <input type="number" class="form-control" name="precio">
                                  </div>
                                  <div class="mb-4">
                                    <label for="cantidad" class="form-label text-dark">Cantidad</label>
                                     <input type="number" class="form-control" name="cantidad">
                                    </div>
                                    <div class="d-grid">
                                      <button type="submit" class="btn btn-secondary">Guardar Datos</button>
                                      </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="col-md-12">
                      <div class="panel panel-default shadow-lg p-3 mb-5 bg-white rounded m-2">
                        <div class="panel-title">
                          <h2 class="text-center  font-weight-bold text-dark py-1"><i class="fas fa-user-edit font-weight-bold"> Agregar autor</i></h1>  
                        </div>
                        <div class="panel-body py-2">
                          <form action="">
                            <div class="mb-4">
                              <label for="isbn" class="form-label text-dark">Nombre autor</label>
                              <input type="number" class="form-control" name="isbn">
                          </div>
                          <div class="d-grid">
                          <button type="submit" class="btn btn-secondary">Guardar Datos</button>
                          </div>
                          </form>
                        </div>
                    </div>
                  </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <div class="col-md-12">
                      <div class="panel panel-default shadow-lg p-3 mb-5 bg-white rounded m-2">
                        <div class="panel-title">
                          <h2 class="text-center  font-weight-bold text-dark py-1"> <i class="far fa-newspaper font-weight-bold"> Agregar editorial</i></h1>  
                        </div>
                        <div class="panel-body py-2">
                          <form action="">
                            <div class="mb-4">
                              <label for="isbn" class="form-label text-dark">Nombre Editorial</label>
                              <input type="number" class="form-control" name="isbn">
                          </div>
                          <div class="d-grid">
                          <button type="submit" class="btn btn-secondary">Guardar Datos</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
<!--

        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
          </div>
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><h1 id="h1">asdasdasdasdasdas</h1></div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
          </div>
          -->



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    </body>
</html>
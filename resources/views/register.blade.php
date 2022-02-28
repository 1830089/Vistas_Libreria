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
    <link rel="stylesheet" href="{{asset('../Css/login.css')}}">
</head>
<body>
    <nav class="nav-main">
        <img src="../Images/LogoMakr-1oya0s.png" alt="icono Sorprende" class="nav-brand col-md-10">
    </nav>
<div class="container">
    <div class="row">
        <div class="col-6 mx-auto contenedor-register" id="registro">
            <div class="text-end">
                <img src="#" width="40" alt="">
            </div>
            <div class="container">
                <h2 class="fw-bold text-center py-2 text-white bienvenido">Registrarse</h2>
                </div>
            <!--LOGIN-->
            <form action="">
                <div class="mb-4">
                    <div class="mb-4">
                        <label for="nombre" class="form-label text-white">Nombre completo</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>
                    <div class="mb-4">
                        <label for="apellido" class="form-label text-white">Nombre de usuario</label>
                        <input type="text" class="form-control" name="apellido">
                        </div>
                    <div class="mb-4">
                        <label for="email" class="form-label text-white">Correo Electronico</label>
                        <input type="email" class="form-control" name="email">

                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label text-white">Contraseña</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label text-white">Repite Contraseña</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-secondary">Registrarse</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>
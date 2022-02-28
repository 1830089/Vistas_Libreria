<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!--
        iconoss
    -->
    <script src="https://kit.fontawesome.com/2291e076db.js" crossorigin="anonymous"></script>

    <!-- micss-->

    <style>
        

        body{

            background-image: url('../Images/fondobackground.jpg');

        }

        .bg{
            background-image: url();
            background-position: center center;
        }

        .opacidad{
            filter:alpha(opacity=70);
            -moz-opacity:.70;opacity:.70;
        }
        #registro{
            position: relative;
            width: 700px;
            height: 700px;
            padding-left: 20px;
            padding-right: 20px;
            margin: auto;
            border-radius: 10px;
            background: rgb(0,0,0,.6);
        }
        #logeo{
            position: relative;
            width: 700px;
            height: 600px;
            padding-left: 20px;
            padding-right: 20px;
            margin: auto;
            border-radius: 10px;
            background: rgb(0,0,0,.6);
        }
    </style>
</head>
<body>

    @yield('contenido')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    
    
    </body>
</html>
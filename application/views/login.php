<!DOCTYPE HTML>
<html>
    <head>
        <base href="<?= base_url() ?>">
        <meta charset="utf-8">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>Inicio de Sesión de Administrador</title>

        <!-- Bootstrap core CSS -->
        <link href="/assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="/assets/css/login.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12" id="image">
                    <img src="/assets/images/weather.jpg">
                    <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-4 col-md-3 col-sm-offset-4 col-sm-4 col-xs-offset-4 col-xs-4">
                    <form method="post" action="/Welcome/valida" role="form">
                        <div class="form-login">
                            <h4>Inicio de sesion</h4>
                            <input type="text" id="userName" name="userName" class="form-control input-sm chat-input" placeholder="Usuario" />
                            <br>
                            <input type="password" id="userPassword" name="userPassword" class="form-control input-sm chat-input" placeholder="Contraseña" />
                            <br><br>
                            <span class="group-btn">
                                <button type="submit" class="btn btn-primary btn-md">Iniciar  <i class="fa fa-sign-in"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
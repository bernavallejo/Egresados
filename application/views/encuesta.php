<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
		

        <?php $usu = $this->session->userdata('nombre');?>
		<!-- include libraries(jQuery, bootstrap) -->		
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>	
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
										
        <!-- <!-- Bootstrap core CSS -->         
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">		

        <!-- Custom styles for this template -->
        <link href="/assets/css/portal_admin.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		
	</head>
	<body>
		<?php if(isset($usu)){?>
			<div id="wrapper" class="active">  
				<div class="col-md-12 col-sm-12" id="bar">
					<ul class="nav navbar-nav navbar-right">
						<?php 
							echo "<li><a>".$usu."</a></li>";
						?>	
						<li><a href="/Welcome/logout"><span class="glyphicon glyphicon-log-out" aria-hidden="true"> Salir</span></a></li>
					</ul>
				</div>
				<div id="sidebar-wrapper">
					<div class="container-fluid contenedor--div">
						<ul id="sidebar_menu" class="sidebar-nav">
							<li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
						</ul>
						<ul class="sidebar-nav" id="sidebar">
							<?php if ($this->session->userdata('tipo') == 1){?>
								<li><a href="/Admin/ver_egresados">Egresados<span class="sub_icon glyphicon glyphicon-link"></span></a></li>	
								<li><a href="/Admin/ver_usuarios">Usuarios<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="/Admin/ver_carreras">Carreras<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="/Admin/ver_empresas">Empresas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="/Admin/ver_preguntas">Preguntas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="/Admin/crear_encuestas">Encuestas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="#">Respuestas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="/Admin/correos">Titulacion<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="/Admin/correos">Cursos<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="/Admin/correos">Bolsa de trabajo<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="/Admin/correos">Eventos<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
							<?php }else { ?>
								<li><a href="/Coordinador/ver_egresados">Egresados<span class="sub_icon glyphicon glyphicon-link"></span></a></li>	
								<li><a href="/Coordinador/ver_empresas">Empresas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="/Coordinador/ver_preguntas">Preguntas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="/Coordinador/crear_encuestas">Encuestas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="#">Respuestas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="/Coordinador/correos">Titulacion<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="/Coordinador/correos">Cursos<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="/Coordinador/correos">Bolsa de trabajo<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="/Coordinador/correos">Eventos<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
							<?php } ?>	
						</ul>
					</div>	
				</div>
				<div id="page-content-wrapper">
					<div class="page-content inset">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<br><br>
								<?php foreach ($encuestas as $en){
									// print_r ($en);
									if ($en->privilegio == 1):
										echo '<div class=col-sm-offset-1 col-sm-11>'.($en->pregunta).'</div><div><br></div>';
										// echo ($en->tipo);
										// echo ($en->respuesta1);
										if( $en->tipo == 1):{
											if( isset( $en->respuesta1)):
												?><div class="col-sm-offset-1 col-sm-2"><input type="radio"> <?php echo ($en->respuesta1).'</div>';
											endif;	
											if( isset( $en->respuesta2)):
												?><div class="col-sm-2"><input type="radio" name="respuesta"> <?php echo ($en->respuesta2).'</div>';
											endif;
											if( isset( $en->respuesta3)):
												?><div class="col-sm-2"><input type="radio" name="respuesta"> <?php echo ($en->respuesta3).'</div>';
											endif;
											if( isset( $en->respuesta4)):
												?><div class="col-sm-2"><input type="radio" name="respuesta"> <?php echo ($en->respuesta4).'</div>';
											endif;
											if( isset( $en->respuesta5)):
												?><div class="col-sm-2"><input type="radio" name="respuesta"> <?php echo ($en->respuesta5).'</div>';
											endif;
											if( isset( $en->respuesta6)):
												?><div class="col-sm-2"><input type="radio" name="respuesta"> <?php echo ($en->respuesta5).'</div>';
											endif;
											if( isset( $en->respuesta7)):
												?><div class="col-sm-2"><input type="radio" name="respuesta"> <?php echo ($en->respuesta5).'</div>';
											endif;
											if( isset( $en->respuesta8)):
												?><div class="col-sm-2"><input type="radio" name="respuesta"> <?php echo ($en->respuesta5).'</div>';
											endif;
											if( isset( $en->respuesta9)):
												?><div class="col-sm-2"><input type="radio" name="respuesta"> <?php echo ($en->respuesta5).'</div>';
											endif;
											if( isset( $en->respuesta10)):
												?><div class="col-sm-2"><input type="radio" name="respuesta"> <?php echo ($en->respuesta5).'</div>';
											endif;
											if( isset( $en->respuesta11)):
												?><div class="col-sm-2"><input type="radio" name="respuesta"> <?php echo ($en->respuesta5).'</div>';
											endif;
											if( isset( $en->respuesta12)):
												?><div class="col-sm-2"><input type="radio" name="respuesta"> <?php echo ($en->respuesta5).'</div>';
											endif;
										} else:
											?>
											<div class="col-sm-offset-1 col-sm-10"><input type="text" style="width:100%"disabled></div>
											<?php
											endif;
										echo '<div><br><br></div>';
									endif;
								}
								echo '<br><br>';
								foreach ($encuestas as $en){
									if ($en->privilegio == 2):
										echo '<div class=col-sm-offset-1 col-sm-11>'.($en->pregunta).'</div><div><br></div>';
										// echo ($en->tipo);
										// echo ($en->respuesta1);
										if( $en->tipo == 1):{
											if( isset( $en->respuesta1)):
												?><div class="col-sm-offset-1 col-sm-2"><input type="radio"> <?php echo ($en->respuesta1).'</div>';
											endif;	
											if( isset( $en->respuesta2)):
												?><div class="col-sm-2"><input type="radio" name="respuesta"> <?php echo ($en->respuesta2).'</div>';
											endif;
											if( isset( $en->respuesta3)):
												?><div class="col-sm-2"><input type="radio" name="respuesta"> <?php echo ($en->respuesta3).'</div>';
											endif;
											if( isset( $en->respuesta4)):
												?><div class="col-sm-2"><input type="radio" name="respuesta"> <?php echo ($en->respuesta4).'</div>';
											endif;
											if( isset( $en->respuesta5)):
												?><div class="col-sm-2"><input type="radio" name="respuesta"> <?php echo ($en->respuesta5).'</div>';
											endif;	
										} else:
											?>
											<div class="col-sm-offset-1 col-sm-10"><input type="text" style="width:100%"disabled></div>
											<?php
											endif;
										echo '<div><br><br></div>';
									endif;
									}
								?>
								
							</div>
						</div>
					</div>		
				</div>
			</div>
		<?php }
			else {?>
				<h1 style="text-align:center;">Error usuario no identificado</h1>
				<h3 style="text-align:center;"><a href="/Welcome/index">Ir al inicio</a></h3>
			<?php } ?>	
		<!--<script src="/assets/js/jquery-3.2.1.min.js"></script>-->
		<script src="/assets/js/admin.js"></script>
		<!-- <script src="/assets/js/script.js"></script> -->
		
	</body>
</html>	
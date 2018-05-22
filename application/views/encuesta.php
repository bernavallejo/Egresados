<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
		

        <?php $usu = $this->session->userdata('nombre');?>
			<!--  -->
			<link type="text/css" rel="stylesheet" href="/assets/grocery_crud/themes/flexigrid/css/flexigrid.css" />
		<!--  -->
			<link type="text/css" rel="stylesheet" href="/assets/grocery_crud/css/jquery_plugins/fancybox/jquery.fancybox.css" />
		<!--  -->
			<link type="text/css" rel="stylesheet" href="/assets/grocery_crud/css/ui/simple/jquery-ui-1.10.1.custom.min.css" />
		<!--  -->
		<!--  -->
			<script src="/assets/grocery_crud/js/jquery-1.11.1.min.js"></script>
		<!--  -->
			<script src="/assets/grocery_crud/js/common/list.js"></script>
		<!--  -->
			<script src="/assets/grocery_crud/themes/flexigrid/js/cookies.js"></script>
		<!--  -->
			<script src="/assets/grocery_crud/themes/flexigrid/js/flexigrid.js"></script>
		<!--  -->
			<script src="/assets/grocery_crud/js/jquery_plugins/jquery.form.min.js"></script>
		<!--  -->
			<script src="/assets/grocery_crud/js/jquery_plugins/jquery.numeric.min.js"></script>
		<!--  -->
			<script src="/assets/grocery_crud/themes/flexigrid/js/jquery.printElement.min.js"></script>
		<!--  -->
			<script src="/assets/grocery_crud/js/jquery_plugins/jquery.fancybox-1.3.4.js"></script>
		<!--  -->
			<script src="/assets/grocery_crud/js/jquery_plugins/jquery.easing-1.3.pack.js"></script>
		<!--  -->
			<script src="/assets/grocery_crud/js/jquery_plugins/ui/jquery-ui-1.10.3.custom.min.js"></script>
		<!-- <!-- <?php foreach($css_files as $file): ?> -->
			<!-- <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" /> -->
		<!-- <!-- <?php endforeach; ?> -->
		<!-- <!-- <?php foreach($js_files as $file): ?> -->
			<!-- <script src="<?php echo $file; ?>"></script> -->
		<!-- <!-- <?php endforeach; ?> -->
        <!-- <!-- Bootstrap core CSS --> 
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
        <!-- <!--external css-->
        <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <!--<link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style-responsive.css" rel="stylesheet">-->
        <link href="/assets/css/portal_admin.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script> -->
		
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
								<li><a href="/Admin/ver_empresas">Emrpresas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="/Admin/ver_preguntas">Preguntas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="/Admin/crear_encuestas">Encuestas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="#">Respuestas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="#">Bolsa de trabajo<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
							<?php }else { ?>
								<li><a href="/Coordinador/ver_egresados">Egresados<span class="sub_icon glyphicon glyphicon-link"></span></a></li>	
								<li><a href="/Coordinador/ver_empresas">Emrpresas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="/Coordinador/ver_preguntas">Preguntas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="/Coordinador/crear_encuestas">Encuestas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="#">Respuestas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
								<li><a href="#">Bolsa de trabajo<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
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
										echo '<div class=col-sm-offset-1 col-sm-10>'.($en->pregunta).'</div><br><br>';
										// echo ($en->tipo);
										// echo ($en->respuesta1);
										if( $en->tipo == 1):{
											if( isset( $en->respuesta1)):
												?><div class="col-sm-offset-2 col-sm-4"><input type="radio" name="respuesta"> <?php echo ($en->respuesta1).'</div>';
											endif;	
											if( isset( $en->respuesta2)):
												?><input type="radio" name="respuesta"> <?php echo ($en->respuesta2);
											endif;
											if( isset( $en->respuesta3)):
												?><input type="radio" name="respuesta"> <?php echo ($en->respuesta3);
											endif;
											if( isset( $en->respuesta4)):
												?><input type="radio" name="respuesta"> <?php echo ($en->respuesta4);
											endif;
											if( isset( $en->respuesta5)):
												?><input type="radio" name="respuesta"> <?php echo ($en->respuesta5);
											endif;	
										} else:
											?>
											<div class="col-sm-offset-1 col-sm-10"><input type="text" style="width:100%"disabled></div>
											<?php
											endif;
										echo '<br><br>';
									endif;
								}
								echo '<br><br>';
								foreach ($encuestas as $en){
									if ($en->privilegio == 2):
										echo '<div class=col-sm-offset-1 col-sm-10>'.($en->pregunta).'</div><br><br>';
										// echo ($en->tipo);
										// echo ($en->respuesta1);
										if( $en->tipo == 1):{
											if( isset( $en->respuesta1)):
												?><div class="col-sm-offset-2 col-sm-2"><input type="radio"> <?php echo ($en->respuesta1).'</div>';
											endif;	
											if( isset( $en->respuesta2)):
												?><div class="col-sm-2"><input type="radio" name="respuesta"> <?php echo ($en->respuesta2).'</div>';
											endif;
											if( isset( $en->respuesta3)):
												?><input type="radio" name="respuesta"> <?php echo ($en->respuesta3);
											endif;
											if( isset( $en->respuesta4)):
												?><input type="radio" name="respuesta"> <?php echo ($en->respuesta4);
											endif;
											if( isset( $en->respuesta5)):
												?><input type="radio" name="respuesta"> <?php echo ($en->respuesta5);
											endif;	
										} else:
											?>
											<div class="col-sm-offset-1 col-sm-10"><input type="text" style="width:100%"disabled></div>
											<?php
											endif;
										echo '<br><br>';
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
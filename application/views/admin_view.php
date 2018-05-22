<!DOCTYPE html>
<html>
	<head>
	    <base href="<?= base_url() ?>">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="">
		<meta name="author" content="Dashboard">
		<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
		

		<?php $usu = $this->session->userdata('nombre');?>
		<?php $tipo = $this->session->userdata('tipo');?>
		<?php if (isset($css_files)): ?>
    		<?php foreach($css_files as $file): ?>
    			<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    		<?php endforeach; ?> 
		<?php endif ?>
		
		<?php if (isset($js_files)): ?>
			<?php foreach($js_files as $file): ?>
			<script type="text/javascript" src="<?php echo $file; ?>"></script>
		    <?php endforeach; ?>
		<?php else: ?>
		    <script src="/assets/grocery_crud/js/jquery-1.11.1.min.js"></script>
		<?php endif ?>
	
		<!-- Bootstrap core CSS -->
		<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"> 
		<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" rel="stylesheet"> -->
		<!--external css-->
		<link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

		<!-- Custom styles for this template -->
		<!--<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/style-responsive.css" rel="stylesheet">-->
		<link href="/assets/css/portal_admin.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<!--<script src="/assets/js/jquery-3.2.1.min.js"></script>-->
		
	</head>
	<body>
		<?php if(isset($usu)){?>
			<?php if($tipo == 1){?>
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
						<ul id="sidebar_menu" class="sidebar-nav">
							<li class="sidebar-brand"><a id="menu-toggle" href="">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
						</ul>
						<ul class="sidebar-nav" id="sidebar">
							<li><a href="/Admin/ver_egresados">Egresados<span class="sub_icon glyphicon glyphicon-link"></span></a></li>	
							<li><a href="/Admin/ver_usuarios">Usuarios<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
							<li><a href="/Admin/ver_carreras">Carreras<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
							<li><a href="/Admin/ver_empresas">Empresas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
							<li><a href="/Admin/ver_preguntas">Preguntas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
							<li><a href="/Admin/crear_encuestas">Encuestas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
							<li><a href="#">Respuestas<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
							<li><a href="#">Bolsa de trabajo<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
						</ul>
					</div>
					<div id="page-content-wrapper">
						<div class="page-content inset">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<?php if (isset($output)){
										echo $output;
									}
									else {?>
										<h2> Sistema seguimiento de egresados </h2>
									<?php } ?>	
								</div>
							</div>
						</div>		
					</div>
				</div>
			<?php } else {?>
				<h1 style="text-align:center;">No tienes privilegios</h1>
				<h3 style="text-align:center;"><a href="/Welcome/index">Ir al inicio</a></h3>
			<?php }	?>
		<?php } else {?>
			<h1 style="text-align:center;">Error usuario no identificado</h1>
			<h3 style="text-align:center;"><a href="/Welcome/index">Ir al inicio</a></h3>
		<?php } ?>	
		<script src="/assets/js/admin.js"></script>
	</body>
</html>
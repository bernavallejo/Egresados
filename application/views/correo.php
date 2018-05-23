<!DOCTYPE html>
<html lang="en">
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
				
			
		<!-- include summernote css/js -->
		<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">		
		
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
							<div class="col-md-9">
								<div class="panel panel-default">
									<div class="panel-body message">
										<p class="text-center">New Message</p>
										<form class="form-horizontal" role="form" autocomplete="off">
											<div class="form-group">
												<label for="to" class="col-sm-1 control-label">To:</label>
												<div class="col-sm-11">
													<input type="email" class="form-control select2-offscreen" id="to" placeholder="Type email" tabindex="-1">
												</div>
											</div>
											<div class="form-group">
												<label for="cc" class="col-sm-1 control-label">CC:</label>
												<div class="col-sm-11">
													<input type="email" class="form-control select2-offscreen" id="cc" placeholder="Type email" tabindex="-1">
												</div>
											</div>
											<div class="form-group">
												<label for="bcc" class="col-sm-1 control-label">BCC:</label>
												<div class="col-sm-11">
													<input type="email" class="form-control select2-offscreen" id="bcc" placeholder="Type email" tabindex="-1">
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-1"></div>
												<div class="col-sm-11">
												<textarea class="form-control summernote" id="message" name="body"></textarea>
												</div>
												
											</div>
											
											<div class="col-sm-11 col-sm-offset-1">																					
												<div class="form-group">	
													<button type="submit" class="btn btn-success">Enviar</button>
													<button type="reset" class="btn btn-default">Borrar</button>
													<button type="button" class="btn btn-danger">Cancelar</button>
												</div>
											</div>	
										</form>
										
									</div>	
								</div>	
							</div> <!--/.col	-->
						</div>
					</div>		
				</div>
			</div>
		<?php }
			else {?>
				<h1 style="text-align:center;">Error usuario no identificado</h1>
				<h3 style="text-align:center;"><a href="/Welcome/index">Ir al inicio</a></h3>
			<?php } ?>			
		<script src="/assets/js/admin.js"></script>		
		<script src="/assets/js/script.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
		<script>
		$(document).ready(function(){		 
			$(".summernote").summernote({
				height: 300,                 // set editor height
				placeholder: 'Tellme something today... ',
				minHeight: null,             // set minimum height of editor
				maxHeight: null,             // set maximum height of editor
				focus: true                  // set focus to editable area after initializing summernote
			});
		});		
		</script>
		
	</body>
</html>	
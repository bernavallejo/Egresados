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
		<div id="page-content-wrapper">
			<div class="page-content inset">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<form class="form-horizontal" method="post" role="form" autocomplete="off" action="/Coordinador/get_encuesta">	
							<br><br>
							<?php foreach ($encuestas as $en){
								if ($en->privilegio == 1){
									echo '<div class=col-sm-offset-1 col-sm-11>'.($en->pregunta).'</div><div><br></div>';
									echo '<input type=hidden name=enc2pre' .($en->id) .' value='.($en->id).' </input>';
									// echo ($en->tipo);
									// echo ($en->respuesta1);
									if( $en->tipo == 1){
										if( isset( $en->respuesta1)){
											?><div class="col-sm-offset-1 col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta1) ?>> <?php echo ($en->respuesta1).'</div>';
										}
										if( isset( $en->respuesta2)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta2) ?>> <?php echo ($en->respuesta2).'</div>';
										}
										if( isset( $en->respuesta3)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta3) ?>> <?php echo ($en->respuesta3).'</div>';
										}
										if( isset( $en->respuesta4)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta4) ?>> <?php echo ($en->respuesta4).'</div>';
										}
										if( isset( $en->respuesta5)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta5) ?>> <?php echo ($en->respuesta5).'</div>';
										}
										if( isset( $en->respuesta6)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta6) ?>> <?php echo ($en->respuesta6).'</div>';
										}
										if( isset( $en->respuesta7)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta7) ?>> <?php echo ($en->respuesta7).'</div>';
										}
										if( isset( $en->respuesta8)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta8) ?>> <?php echo ($en->respuesta8).'</div>';
										}
										if( isset( $en->respuesta9)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta9) ?>> <?php echo ($en->respuesta9).'</div>';
										}
										if( isset( $en->respuesta10)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta10) ?>> <?php echo ($en->respuesta10).'</div>';
										}
										if( isset( $en->respuesta11)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta11) ?>> <?php echo ($en->respuesta11).'</div>';
										}
										if( isset( $en->respuesta12)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta12) ?>> <?php echo ($en->respuesta12).'</div>';
										}
									}
									else{
										?>
											<div class="col-sm-offset-1 col-sm-10"><input type="text" style="width:100%" name=<?php echo 'abierta' . $en->id_pregunta ?>> </div>
										<?php
									}
									echo '<div><br><br></div>';
								}
							}?>								
							<?php	echo '<br><br>';
							foreach ($encuestas as $en){
								if ($en->privilegio == 2){
									echo '<div class=col-sm-offset-1 col-sm-11>'.($en->pregunta).'</div><div><br></div>';
									echo '<input type=hidden name=enc2pre' .($en->id) .' value='.($en->id).' </input>';
									if( $en->tipo == 1){
										if( isset( $en->respuesta1)){
											?><div class="col-sm-offset-1 col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta1) ?>> <?php echo ($en->respuesta1).'</div>';
										}
										if( isset( $en->respuesta2)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta2) ?>> <?php echo ($en->respuesta2).'</div>';
										}
										if( isset( $en->respuesta3)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta3) ?>> <?php echo ($en->respuesta3).'</div>';
										}
										if( isset( $en->respuesta4)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta4) ?>> <?php echo ($en->respuesta4).'</div>';
										}
										if( isset( $en->respuesta5)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta5) ?>> <?php echo ($en->respuesta5).'</div>';
										}
										if( isset( $en->respuesta6)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta6) ?>> <?php echo ($en->respuesta6).'</div>';
										}
										if( isset( $en->respuesta7)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta7) ?>> <?php echo ($en->respuesta7).'</div>';
										}
										if( isset( $en->respuesta8)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta8) ?>> <?php echo ($en->respuesta8).'</div>';
										}
										if( isset( $en->respuesta9)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta9) ?>> <?php echo ($en->respuesta9).'</div>';
										}
										if( isset( $en->respuesta10)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta10) ?>> <?php echo ($en->respuesta10).'</div>';
										}
										if( isset( $en->respuesta11)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta11) ?>> <?php echo ($en->respuesta11).'</div>';
										}
										if( isset( $en->respuesta12)){
											?><div class="col-sm-2"><input type="radio" name=<?php echo 'multiple' . $en->id_pregunta ?> value=<?php echo ($en->respuesta12) ?>> <?php echo ($en->respuesta12).'</div>';
										}
									}
									else{
										?>
										<div class="col-sm-offset-1 col-sm-10"><input type="text" style="width:100%" name=<?php echo 'abierta' . $en->id_pregunta ?>></div>
										<?php
									}
									echo '<div><br><br></div>';
								}	
							}
							?>
							<div class="col-md-offset-10">
								<button type="submit" class="btn btn-success">Enviar</button>
							</div>
						</form>
					</div>
				</div>
			</div>		
		</div>
	<!--<script src="/assets/js/jquery-3.2.1.min.js"></script>-->
	<script src="/assets/js/admin.js"></script>
	<!-- <script src="/assets/js/script.js"></script> -->
		
	</body>
</html>	
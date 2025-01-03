<!DOCTYPE html>
<html lang="pt-br">
<head>
	<! -- Basic Page Info -- >
	<meta charset="utf-8">
	<title>Sistema de Escala</title>

	<! -- Site Favicon -- >
	<link rel="icon" type="image/png" sizes="16x16"  href="img/favicon.png">

	<! -- Mobile Specific Metas -- >
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<! -- CSS -- >
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilo.css"/>

	
</head>

<body class="login-page">
	
	<! -- Index Top Bar -- >
	<div class="login-header box-shadow" style="background-color: rgba(0,54,104,255);">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				
			</div>
			<div class="login-menu">
				<h3 class="text-white">Sistema de Escala</h3>
			</div>
			<div class="login-menu">
				
			</div>	
		</div>	
	</div>

	<! -- Index Center Content -- >
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center" style="background: url('img/capa2.jpg'); background-size: cover;">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-6 container-fluid" style="text-align: center;">
					<img src="img/brasao.png" class=" img-fluid" alt="">
				</div>
				<div class="col-sm-6 pb-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center cm-color" style="color: rgba(0,54,104,255)">Acesso</h2>
						</div>
						<form method="POST" action="">
						<div class="input-group custom">
							<input type="text" name="cpf" id="cpf" class="form-control form-control-lg" required placeholder="Digite seu CPF" oninput="" onblur="">
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>	
							</div>					
						</div>
						<div class="input-group custom">
							<input type="password" name="password" id="password" class="form-control form-control-lg"
							required placeholder="Digite a sua senha" oninput="" onblur="">
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="dw dw-padlock1"></i></span>		
							</div>
						</div>
						<div class="row pb-30">
							<div class="col-6">
							</div>
							<div class="col-6">
								<div class="forgot-password">
									<a href="">Esqueceu a senha?</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="input-group mb-0">
									<input type="submit" name="submit" class="btn btn-lg btn-block text-white" style="background-color: rgba(0,54,104,255)" value="Entrar" >
								</div>				
							</div>					
						</div>						
						</form>
					</div>					
				</div>				
			</div>
		</div>
	</div>

	<!-- js -->
	<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->
	<script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	
</body>

</html>
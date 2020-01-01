<?php 
	require_once '../classes/usuarios.php';
	$u = new Usuario;
 ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
	 	<meta charset="utf-8"/>
	 	<title>Cadastro</title>
	 	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/grid.css">
		<link rel="stylesheet" type="text/css" href="../css/formestilo.css">
	</head>
	<body class="py-5 text-center">
	  	<div class="container">
	  		<div class="row mb-5">
				<div class="col-4">
				    <nav class="navbar navbar-expand navbar-dark bg-primary fixed-top">
			            <a class="sidebar-toggle text-light mr-3">
			                <span class="navbar-toggler-icon"></span>
			            </a>
			            <a class="navbar-brand" href="#">Fablab</a>
			            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			               <span class="navbar-toggler-icon"></span>
			            </button>
			            <div class="collapse navbar-collapse">
				            <ul class="navbar-nav ml-auto">
				                <li class="nav-item dropdown">
				                    <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
				                    	<img class="rounded-circle" src="../icones/iconuser48.png" width="20" height="20"> &nbsp;<span class="d-none d-sm-inline">Usuário</span>
				                    </a>
				                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
				                        <a class="dropdown-item" href="#">Perfil</a>
				                        <a class="dropdown-item" href="sair.php">Sair</a>
				                    </div>
				                </li>
				         	</ul>                
			        	</div>
				    </nav>
			    </div>
			</div>
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
					<!--img class="d-block mx-auto mb-4" src="../icones/logo_fab.png" width="105" height="123"-->
					<h1 class="logar">Cadastro</h1>
					<form method="POST" class="card p-3"> 
						<div class="row">
			         	 	<div class="col-md-12 mb-3">
			            		<input type="text" class="form-control" name="nome" placeholder="Nome Completo" maxlength="30" required>
			            		<small class="text-muted"></small>
			            		<div class="invalid-feedback" id="msg-sucesso">
			             			 
			           		 	</div>
			           		</div>
			           	</div>
			           	<div class="row">
			          		<div class="col-md-12 mb-3">
			            		<input type="text" class="form-control" name="telefone" placeholder="Telefone" maxlength="30" required>
			            		<div class="invalid-feedback">
			              	
			            		</div>
			         		</div>
			        	</div>
			           	<div class="row">
			          		<div class="col-md-12 mb-3">
			            		<input type="email" class="form-control" name="email" placeholder="Usuário" maxlength="40"  required>
			            		<div class="invalid-feedback">
			              	
			            		</div>
			         		</div>
			        	</div>
			        	<div class="row">
			          		<div class="col-md-6 mb-3">
			            		<input type="password" class="form-control" name="senha" placeholder="Senha" maxlength="15" required>
			            		<div class="invalid-feedback">
			              
			            		</div>
			          		</div>
			          		<div class="col-md-6 mb-3">
			            		<input type="password" class="form-control" name="confsenha" placeholder="Corfirmar Senha" maxlength="15" required>
			            	</div>
			            </div>	
			            <div class="row">	
			            	<!--div class="col-md-6 mb-3">	
			            		<input class="form-control bg-primary text-light" type="submit" value="Acessar">
			            		<div class="invalid-feedback">
			             		
			            		</div>
			          		</div-->
			          		<div class="col-md-12 mb-3">	
			            		<input class="form-control bg-primary text-light" type="submit" value="Cadastrar">
			            		<div class="invalid-feedback">
			             		
			            		</div>
			          		</div>
			        	</div>
			        	<hr class="mb-4">
			        	    <?php
	      //verificar se clicou em cadastrar
		   if(isset($_POST['nome']))
		   {
			   	$nome = addslashes($_POST['nome']);
			  	$telefone = addslashes($_POST['telefone']);
			  	$email = addslashes($_POST['email']); 
			  	$senha = addslashes($_POST['senha']);
			  	$confirmarsenha = addslashes($_POST['confsenha']);
			  	//verifica se esta preenchido
			  if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarsenha))
			  	{
				  	$u->conectar("projeto_login", "localhost", "root","");
				    if ($u->msgErro == "") //se esta ok
			    	{
				      	if($senha == $confirmarsenha)
				      	{	
				      	  	if($u->cadastrar($nome, $telefone, $email, $senha))
			  		      	{
			  		      		?>
			  		      		<div class="row">
									<div class="col-md-12 mb-3">
				  		      			<a href="index.php"><input id="msg-sucesso" type="button" value="Cadastro Efetuado, Faça Login"></a>
				  		      	 	</div>
				  		      	</div>   	
			  		      	 	<?php
			  		      	}
			  		      	else
			  		      	{
			  		      		?>
			  		      		<div class="row">
									<div class="col-md-12 mb-3">
				  		      	 		<input id="msg-erro" type="text" value="Email já cadastro!">
				  		      	 	</div>
				  		      	</div>   
			  		      	 	<?php
			  		      	}
			  		    }
			  		    else
			  		    {
			  		    	?>
				  		    	<div class="row">
								    <div class="col-md-12 mb-3 navbar-expand">
				  		      	 		<input id="msg-erro" type="text" value="As Senhas Digitadas São Diferentes!">	
				  		      	 	</div>
						  		</div>    
			  		      	<?php
			  		    }	   
				    }	
				    else
				    {
				    	?>
					    	<div class="msg-erro">
					      		<?php echo "Erro: ".$u->msgErro; ?>
					      	</div>
			      		<?php
			    	}	
			  	}	
			  	else
			  	{
				  	?>
				  	<div class="row">
						<div class="col-md-12 mb-3">
			  		    	<input id="msg-erro" type="text" value="Preencha todos os campos!">
			  		    </div>
			  		</div>    
			  		<?php
			  	}	
		    }
			?>
			        </form>
			    
			    </div>	    
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-12 mb-4">
    			<br><br><br><br>
    		</div>
    	</div>
    	<footer class="blog-footer bg-primary">
 			<p>&copy; Senai - 2019<a href=""></a> <a href=""></a>.</p>
  			<!--p><a href="#">Voltar ao topo</a></p-->
		</footer>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
	    <script src="../js/bootstrap.bundle.min.js"></script>
	    <script src="../form-validation.js"></script>
    </body>
</html>

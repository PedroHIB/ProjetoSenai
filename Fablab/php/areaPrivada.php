<?php 
	
	session_start();
	if(!isset($_SESSION['id_usuarios']))
	{
		header("location: index.php");
		exit;
	}	

 ?>
 
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <title>Fablab</title>
        <link rel="icon" href="../icones/logo_fab.png">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/grid.css">
        <link rel="stylesheet" type="text/css" href="../css/carousel.css">
        <link rel="stylesheet" href="../css/dashboard.css">
		<link rel="stylesheet" href="../css/all.css">
        <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    </head>
    <body>
	<header>
        <nav class="navbar navbar-expand navbar-dark bg-primary">
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
    </header>
		<div class="d-flex">
            <nav class="sidebar">
                <ul class="list-unstyled">
				<a href="#submenu1" data-toggle="collapse">
                    <li class="active"><a><i class="fas fa-chalkboard-teacher"></i> Área do Aluno</a></li>
				</a>
					<li><a href="../caledario.html"><i class="far fa-calendar-alt"></i> Calendário Mensal</a></li>
					<li><a href="../notas.html"><i class="fas fa-user-graduate"></i> Minhas Notas</a></li>
					<li><a href="../projetos.html"><i class="far fa-edit"></i> Projetos em Andamento</a></li>
					<li><a href="../upload.html"><i class="fas fa-upload"></i> Upload</a></li>
                    <li><a href="../filmes.html"><i class="fas fa-video"></i> Vídeos</a></li>
					<li><a href="../softwares.html"><i class="fas fa-laptop"></i> Softwares Disponíveis</a></li>
					<li><a href="../php/instrucoes.php"><i class="fas fa-book-reader"></i> Instruções</a></li>
                    <li><a href="../sobre.html"><i class="fas fa-info-circle"></i> Sobre</a></li>
                </ul>
            </nav>
			<div class="content p-1">
                <div class="list-group-item">
                    <div class="d-flex">
                        <div class="mr-auto p-2">
                            <h2 class="display-4 titulo">Instruções & Manuais</h2>
                        </div>
                         <p>Olá, <?php echo $_SESSION['id_usuarios']; ?>!</p>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card bg-success text-white">
                                <div class="card-body">            	
                                    <i class="fas fa-microchip fa-3x"></i>
                                    <h6 class="card-title">Arduino</h6>
                                    <h2 class="lead">3</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card bg-danger text-white">
                                <div class="card-body">
                                    <i class="fas fa-thumbtack fa-3x"></i>
                                    <h6 class="card-title">Fresadora</h6>
                                    <h2 class="lead">5</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card bg-warning text-white">
                                <div class="card-body">
                                    <i class="fas fa-print fa-3x"></i>
                                    <h6 class="card-title">Impressora 3D</h6>
                                    <h2 class="lead">651</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card bg-info text-white">
                                <div class="card-body">
                                    <i class="fas fa-x-ray fa-3x"></i>
                                    <h6 class="card-title">Corte a Laser</h6>
                                    <h2 class="lead">4</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
    <!-- Footer -->
<footer class="page-footer font-small bg-primary pt-4">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Social buttons --> 
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1" href="https://pt-br.facebook.com/" target="blank">
             <i class="fab fa-facebook-f"> Facebook</i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1" href="https://twitter.com/login?lang=pt" target="blank">
            <i class="fab fa-twitter"> Twitter </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-linkedin mx-1" href="https://br.linkedin.com/" target="blank" >
             <i class="fab fa-linkedin"> Linkedin </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1" href="https://www.instagram.com/?hl=pt-br" target="blank">
             <i class="fab fa-instagram pr-1"> Instagram </i>
          </a>
        </li>
      </ul>
      <!-- Social buttons -->
    </div>
    <!-- Footer Elements -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 text-white-50" >© 2019 Copyright: Fablab
      <!--a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a-->
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</html>
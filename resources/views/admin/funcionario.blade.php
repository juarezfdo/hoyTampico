<!DOCTYPE html>
<html>
<head>
	<title>Usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">

	<title>Tampico - @yield('title')</title>
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	
    <div class="wrapper">

    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
	        <img src="/images/logo.jpg" class="img-fluid" alt="Responsive image">
	    </div>
	  	<ul class="list-unstyled components">
            <p class="text-center h3">Tampico</p>
            <li>
                <a href="#">Historial de Noticias</a>
            </li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
	        <div class="container-fluid">

	            <button type="button" id="sidebarCollapse" class="btn btn-info">
	                <i class="fas fa-align-left"></i>
	                <span>Menú</span>
	            </button>
	            <h5 class="text-right">Bienvenido <b>Juan Perez</b></h5>

	        </div>
	    </nav>
	    <div class="container">
		<h3>Noticias del dia: </h3><label>Jueves <b> 30 de Agosto de 2018</b></label>
		
		<!--<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="http://docs.google.com/gview?url=http://victorpimentel.com/stuff/rubik.pdf&embedded=true" style="width:1100px; height:475px;" frameborder="0"></iframe>
		</div>-->

		<div class="card text-center">
		  <div class="card-header">
		    30 de agosto del 2018
		  </div>
		  <div class="card-body">
		    <h5 class="card-title">Titulo de Noticia</h5>
		    <p class="card-text">Subtitulo de noticia</p>
		    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<a href="#" class="btn btn-primary">Descargar Noticia</a>
		  </div>
		</div>
		<br>

	</div>

	    @yield('body')
    </div>
    <br>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        $(document).ready(function(){
          $('ul li a').click(function(){
            $('li a').removeClass("active");
            $(this).addClass("active");
        });
        });
    </script>
</div>  

</body>
</html>
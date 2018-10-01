<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

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
            <li class="{{ Request::is('/') ? 'active' : '' }}">
                <a href="{{ url('noticias/create') }}">Noticias</a>
            </li>
            <li>
                <a href="{{ url('usuario') }}">Usuarios</a>
            </li>
            <li>
                <a href="{{ url('noticias') }}">Ver como funcionario</a>
            </li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
	        <div class="container-fluid">

	            <button type="button" id="sidebarCollapse" class="btn btn-info">
	                <i class="fas fa-align-left"></i>
	                <i class="material-icons">menu</i></button>
	            </button>
              <h4>@yield('encabezado')</h4>

	        </div>
	    </nav>

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
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
         $('#delete').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) 
              var user_id = button.data('user_id') 
              var modal = $(this)
              modal.find('.modal-body #user_id').val(user_id);
        })
         $('#eliminar').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) 
              var noticia_id = button.data('noticia_id') 
              var modal = $(this)
              modal.find('.modal-body #noticia_id').val(noticia_id);
        })

        $('#show').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) 
              var nombre = button.data('name')
              var aPaterno = button.data('pat')
              var aMaterno = button.data('mat') 
              var email = button.data('email') 
              var password = button.data('password') 
              var telefono = button.data('telefono')
              var movil = button.data('movil')
              var rol = button.data('rol')


              var modal = $(this)
              modal.find('.modal-body #nombre').val(nombre+' '+aPaterno+' '+aMaterno);
              modal.find('.modal-body #email').val(email);
              modal.find('.modal-body #password').val(password);
              modal.find('.modal-body #telefono').val(telefono);
              modal.find('.modal-body #movil').val(movil);
              modal.find('.modal-body #rol').val(rol);
        })
        $('#editar').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) 
              var noticia_id = button.data('noticia_id')
              var titulo = button.data('titulo')
              var subtitulo = button.data('subtitulo')
              var fecha = button.data('fecha') 
              var descripcion = button.data('descripcion') 
        
              var modal = $(this)
              modal.find('.modal-body #titulo').val(titulo);
              modal.find('.modal-body #subtitulo').val(subtitulo);
              modal.find('.modal-body #fecha').val(fecha);
              modal.find('.modal-body #noticia_id').val(noticia_id);
              modal.find('.modal-body #descripcion').val(descripcion);
              
        })
        $('#edit').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) 
              var user_id = button.data('user_id')
              var nombre = button.data('name')
              var aPaterno = button.data('pat')
              var aMaterno = button.data('mat') 
              var email = button.data('email') 
              var password = button.data('password') 
              var telefono = button.data('telefono')
              var movil = button.data('movil')
              var rol = button.data('rol')

              console.log(user_id)
              var modal = $(this)
              modal.find('.modal-body #nombre').val(nombre);
              modal.find('.modal-body #aPaterno').val(aPaterno);
              modal.find('.modal-body #aMaterno').val(aMaterno);
              modal.find('.modal-body #email').val(email);
              modal.find('.modal-body #password').val(password);
              modal.find('.modal-body #telefono').val(telefono);
              modal.find('.modal-body #movil').val(movil);
              modal.find('.modal-body #user_id').val(user_id);
              modal.find('.modal-body #rol').val(rol);
        })
    </script>
</div> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Encuestas</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">Encuestas</a>
            </div>
        </div>
        <!-- /.container -->
    </nav>
    <div class="content-section-b">
    	<div class="container">
			<h1>Listado de encuestas</h1>
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th class="btn-primary">No.</th>
                    <th class="btn-primary">Nombre</th>
                    <th class="btn-primary">Descripci&oacute;n</th>
                    <th class="btn-primary"></th>
                </tr>
                <?php
                    $email = $_GET["email"];
                    $pass = $_GET["pass"];
                    include("conexion.php");
                    $conn = connect_with_mysql("localhost","root","","encuestas");
                    $sql = "SELECT encuesta.encuesta_nombre, encuesta.encuesta_descripcion, encuesta.encuesta_page, encuestado.encuestado_nombres, encuestado.encuestado_apellidos, encuestado.encuestado_email, encuestado.encuestado_password FROM encuesta, encuestado, encuestado_has_encuesta WHERE encuesta.encuesta_id = encuestado_has_encuesta.encuesta_id AND encuestado_has_encuesta.encuestado_id = encuestado.encuestado_id AND encuestado.encuestado_email = '".$email."' AND encuestado.encuestado_password = '".$pass."'";
                    $result = mysql_query($sql);
                    if (!$result) {
                        close_connect_with_mysql($conn);
                        header('Location: fail.php');
                    }else{
                        $i=1;
                        while ($fila = mysql_fetch_assoc($result)) {
                            echo "<tr>";                            
                            echo "<td>";
                            echo "".$i;
                            echo "</td>";
                            echo "<td>";
                            echo $fila['encuesta_nombre'];
                            echo "</td>";
                            echo "<td>";
                            echo $fila['encuesta_descripcion'];
                            echo "</td>";
                            echo "<td>";
                            echo "<td align=center><a href='".$fila['encuesta_page'];."'>Contestar</a></td>";
                            echo "</td>";
                            echo "</tr>";
                            $i++;
                        }
                    }
                    close_connect_with_mysql($conn);
                ?>
                <tr>
                    <td>1</td>
                    <td>Prueba</td>
                    <td>sfsdfdsfsdfsdfdsfsdfsfdf</td>
                    <td align=center><a href="#">Contestar</a></td>
                </tr>
            </table>
		</div>	
    </div>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Inicio</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; <a href="http://www.udima.es/">UDIMA</a> <a href="http://www.udima.es/es/master-arquitectura-software.html">Arquitectura de Software</a> 2015. Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript" src="javascript/index.js"></script>
</body>
</html>
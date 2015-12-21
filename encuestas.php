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
     <?php
        session_start();
        $email = "";
        $pass = "";
        if (!isset($_SESSION['email'])) {
            $email = $_GET["email"];
            $_SESSION['email'] = $email;
        }else{
            $email = $_SESSION['email'];    
        }
        if (!isset($_SESSION['pass'])) {
            $pass = md5($_GET["pass"]);
            $_SESSION['pass'] = $pass;
        }else{
            $pass = $_SESSION['pass'];
        }
        include("conexion.php");
        $conn = connect_with_mysql();
        $sql = "SELECT encuestado_id,encuestado_nombres,encuestado_apellidos,encuestado_email,encuestado_password,encuestado_rol_id FROM encuestado WHERE encuestado_email = '".$email."' AND encuestado_password = '".$pass."'";
        $result = mysql_query($sql);
        $nombre="";
        $idEncuestado="";
        $rolEncuestado="";
        if (!$result) {
             $mensaje  = 'Consulta no válida: ' . mysql_error() . "\n";
             $mensaje .= 'Consulta completa: ' . $sql;
            die($mensaje);
            close_connect_with_mysql($conn);
            header('Location: fail.php');
        }else{
            if (mysql_num_rows($result)==0) {
                close_connect_with_mysql($conn);
                header('Location: fail.php');
            }
        }
        while ($fila = mysql_fetch_array($result, MYSQL_NUM)) {
            $nombre = "".$fila[1]." ".$fila[2];
            $idEncuestado = "".$fila[0];
            $rolEncuestado = "".$fila[5];
            break;
        }

        if (!isset($_SESSION['idEncuestado'])) {
            $_SESSION['idEncuestado'] = $idEncuestado;
            $_SESSION['rolEncuestado'] = $rolEncuestado;
        }      
     ?>
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
                <a class="navbar-brand topnav" href="">Encuestas</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo "".$nombre; ?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        	<?php 
                        		if (strcmp($rolEncuestado, "1") === 0) {
                        			echo '<li><a href="mail.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;Enviar Invitaci&oacute;n</a></li>';
                        		}
                        	?>                        	
                            <li><a href="session_off.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>&nbsp;Cerrar Sesi&oacute;n</a></li>
                        </ul>
                    </li>
                </ul>
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
        $sql = "SELECT encuesta.encuesta_nombre, encuesta.encuesta_descripcion, encuesta.encuesta_page, encuesta.encuesta_id FROM encuesta, encuestado, encuestado_has_encuesta WHERE encuesta.encuesta_id = encuestado_has_encuesta.encuesta_id AND encuestado_has_encuesta.encuestado_id = encuestado.encuestado_id AND encuestado_has_encuesta.encuestado_has_encuesta_respuesta = '0' AND encuestado.encuestado_email = '".$email."' AND encuestado.encuestado_password = '".$pass."'";
        $result = mysql_query($sql);
         if (!$result) {
             $mensaje  = 'Consulta no válida: ' . mysql_error() . "\n";
             $mensaje .= 'Consulta completa: ' . $sql;
            die($mensaje);
            close_connect_with_mysql($conn);
            header('Location: fail.php');
        }else{
              if (mysql_num_rows($result)==0) {
                  close_connect_with_mysql($conn);
                  header('Location: fail.php');  
              }
         }
        $i=1;
        while ($fila = mysql_fetch_array($result, MYSQL_NUM)) {
        	echo "<tr>";
        	echo "<td>";
        	echo "".$i;
        	echo "</td>";
        	echo "<td>";
        	echo $fila[0];
        	echo "</td>";
        	echo "<td>";
        	echo $fila[1];
        	echo "</td>";        	
        	if (strcmp($rolEncuestado, "1") !== 0) {
        		echo "<td align=center><a href='".$fila[2]."?idEncuesta=".$fila[3]."'>Contestar</a></td>";
        	}else{
        		echo "<td align=center><a href='resultados.php?idEncuesta=".$fila[3]."'>Ver Resultados</a></td>";
        	}
            echo "</tr>";
            $i++;
        }            
        close_connect_with_mysql($conn);
    ?>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Encuestas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
     <?php
        session_start();
        $email = "";
        $pass = "";
		$nombres="";
		$apellidos="";
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
        $conn = connect_with_mysql("localhost","root","","encuestas");
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
            $rolEncuestado="".$fila[5];
			$nombres= "".$fila[1];
			$apellidos="".$fila[2];
            break;
        }

        if (!isset($_SESSION['idEncuestado'])) {
            $_SESSION['idEncuestado'] = $idEncuestado;                        
        }
        if (!isset($_SESSION['rolEncuestado'])) {
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
	                        		echo "<li><a data-toggle='modal' data-target='#modalMail'><span class='glyphicon glyphicon glyphicon-envelope' aria-hidden='true'></span>&nbsp;Enviar Invitaci&oacute;n</a></li>";
	                        	}else{
	                        		echo "<li><a data-toggle='modal' data-target='#modalCambios'><span class='glyphicon glyphicon glyphicon-user' aria-hidden='true'></span>&nbsp;Modificar Datos Personales</a></li>";
	                        	}
	                        	echo "<li class='divider'></li>";
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
                    <?php 
                    	if (strcmp($rolEncuestado, "1") === 0) {
                    		echo "<th class='btn-primary'></th>";
                    	}
                    ?>
                    <th class="btn-primary"></th>
                </tr>
    <?php
        $sql = "SELECT encuesta.encuesta_nombre, encuesta.encuesta_descripcion, encuesta.encuesta_page, encuesta.encuesta_id FROM encuesta, encuestado, encuestado_has_encuesta WHERE encuesta.encuesta_id = encuestado_has_encuesta.encuesta_id AND encuestado_has_encuesta.encuestado_id = encuestado.encuestado_id AND encuestado_has_encuesta.encuestado_has_encuesta_respuesta = '0' AND encuestado.encuestado_email = '".$email."' AND encuestado.encuestado_password = '".$pass."' order by 1";
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
        $values = array();
        $keys = array();
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
            if (strcmp($rolEncuestado, "1") === 0) {
            	echo "<td align=center><a href='".$fila[2]."?idEncuesta=".$fila[3]."'>Ver Encuesta</a></td>";
            	echo "<td align=center><a href='result.php?idEncuesta=".$fila[3]."'>Revisar Resultados</a></td>";
            }else{
            	echo "<td align=center><a href='".$fila[2]."?idEncuesta=".$fila[3]."'>Contestar</a></td>";
            }
            echo "</tr>";
            $i++;
            array_push($values,$fila[0]);
            array_push($keys,$fila[3]);
        }            
        close_connect_with_mysql($conn);
    ?>
            </table>
		</div>	
    </div>
    <!-- Modal -->
	<div id="modalMail" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="mail.php">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
							aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title">Enviar invitacion a encuestas</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="txtDestinatarios" class="control-label">Destinatarios:</label>
							<input type="text" class="form-control" id="txtDestinatarios"
								name="txtDestinatarios" />
						</div>
						<div class="form-group">
							<label for="selEncuesta" class="control-label">Encuesta:</label>
							<select class="form-control" id="selEncuesta" name="selEncuesta">
								<?php
									for ($i = 0; $i < count($keys); $i++) {
										echo "<option value='".$keys[$i]."'>".$values[$i]."</option>";
									}
								?>
							</select>
						</div>

					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Enviar Invitacion</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<!-- Modal -->
	<div id="modalCambios" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="perdata.php">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
							aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title">Cambiar Datos Personales</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="txtNombres" class="control-label">Nombres:</label>
							<input type="text" class="form-control" id="txtNombres"
								name="txtNombres" value="<?php echo $nombres;?>"/>
							<label id="message_nombres" class="message-error" style="color:red;"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Complete este campo</label>
						</div>
						<div class="form-group">
							<label for="txtApellidos" class="control-label">Apellidos:</label>
							<input type="text" class="form-control" id="txtApellidos"
								name="txtApellidos" value="<?php echo $apellidos;?>"/>
							<label id="message_apellidos" class="message-error" style="color:red;"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Complete este campo</label>
						</div>
						<div class="form-group">
							<label for="txtPassword" class="control-label">Password:</label>
							<input type="password" class="form-control" id="txtPassword"
								name="txtPassword" value=""/>
							<label id="message_password" class="message-error" style="color:red;"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Complete este campo</label>
						</div>
						<div class="form-group">
							<label for="txtPasswordRepet" class="control-label">Repet Password:</label>
							<input type="password" class="form-control" id="txtPasswordRepet"
								name="txtPasswordRepet" value=""/>
							<label id="message_password_reper" class="message-error" style="color:red;"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Complete este campo</label>
							<label id="message_password_reper_no" class="message-error" style="color:red;"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>No coinciden las contrase&ntilde;as</label>
						</div>
					</div>
					<div class="modal-footer">
						<button id="enviarCambios" type="submit" class="btn btn-primary">Cambiar</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Modal -->
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
    <script type="text/javascript" src="javascript/encuestas.js"></script>
</body>
</html>

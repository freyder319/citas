<!DOCTYPE html>
<html>
 <head>
 <title>Sistema de Gestión Odontológica</title>
 <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
  <link href="Vista/jquery/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
 <script src="Vista/jquery/jquery-3.7.1.min.js" type="text/javascript"></script>
 <script src="Vista/jquery/jquery-ui-1.12.1.custom/jquery-ui.js" type="text/javascript"></script>

 <script src="Vista/js/script.js" type="text/javascript"></script>
 </head> 
 <body>
 <div id="contenedor">
        <div id="encabezado">
        <h1>Sistema de Gestión Odontológica</h1>
        </div>
    <ul id="menu">
        <li><a href="index.php">inicio</a> </li>
        <li><a href="index.php?accion=asignar">Asignar</a> </li>
        <li><a href="index.php?accion=consultar">Consultar Cita</a> </li>
        <li><a class="activa" href="index.php?accion=cancelar">Cancelar Cita</a> </li>
        <li><a href="index.php?accion=consultorio">Consultorios</a> </li>
    </ul>
    <div id="contenido">
        <h2>Cancelar Cita</h2>
        <form action="index.php?accion=cancelarCita" method="post" 
        id="frmcancelar">
        <table>
            <tr>
                <td>Documento del Paciente </td>
                <td><input type="text" name="cancelarDocumento" 
                id="cancelarDocumento"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="button" value="Consultar" onclick="cancelarCita()"></td>
            </tr>
            <tr>
                <td colspan="2"><div id="paciente3"></div></td>
            </tr>
            <tr>
                 <td colspan="2"> <div id="paciente3"></div></td>
            </tr>
        </table>
</form>
<br><br><br>
</div>
 </div> 
 </body>
</html>
</body>
</html>
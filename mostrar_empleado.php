<?php
    include ("conexion_BD.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>EMPLEADOS</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./estilo_oas.css">
    <script type="text/javascript">
        $(document).ready(function(){ 
            //alert("sirve js");
        });
    </script>
</head>
<body>
    <div class="container">
        <h1>EMPLEADOS</h1>
        <table border="1">
            <tr style="background-color: blue; color: white;">
                <td>
                    ID
                </td>
                <td>
                    NOMBRE
                </td>
                <td>
                    APELLIDO
                </td>
                <td>
                    CARGO
                </td>
                <td>
                    TELÉFONO
                </td>
            </tr>
        </table>
        <?php
            $sql = "SELECT * FROM empleados";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
        ?>
            <table border="1">
                <tr>
                    <td>
                        <?php echo $row['k_codusuario']; ?>
                    </td>
                    <td>
                        <?php echo $row['n_nombre']; ?>
                    </td>
                    <td>
                        <?php echo $row['n_apellido']; ?>
                    </td>
                    <td>
                        <?php echo $row['o_cargo']; ?>
                    </td>
                    <td>
                        <?php echo $row['o_telefono']; ?>
                    </td>
                </tr>
            </table>
        <?
            } 
        ?>
    </div>     
</body>
</html>
<?php
require_once("autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=2>
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Edad</td>
                <td>Correo</td>
                <td colspan=2>Acciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $todos = new Acciones();
            $resultado = $todos->ConsultaTodos();
            foreach($resultado as $campo=>$valor){
                echo "<tr>";
                echo "<td>" . $valor["id"] . "</td>";
                echo "<td>" . $valor["nombre"] . "</td>";
                echo "<td>" . $valor["edad"] . "</td>";
                echo "<td>" . $valor["correo"] . "</td>";
                echo "<td><form action='actualiza.php' method='post'> <input type='hidden' name='id' value='". $valor["id"] ."'> <input type='submit' name='Actualiza' value='Editar'> </form></td>";
                echo "<td><form action='elimina.php' method='post'> <input type='hidden' name='id' value='". $valor["id"] ."'> <input type='submit' name='Actualiza' value='Editar'> </form></td>";                
                echo "</tr>";
            }
            ?>
            <tr><td colspan=6><form action='insertar.php' method='post'><input type='submit' name='inserta' value='Registro nuevo'></form></td></tr>
        </tbody>
    </table>
</body>
</html>
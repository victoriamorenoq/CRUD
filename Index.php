<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <?php
        include 'conexion.php';
        $sql="select * from Menus";
        $resultado=mysql_query($sql);
    ?>
    <div>
        <a href="agregar.php">Nuevo</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Menu_Padre</th>
                    <th>Descripción</th>
                    <th>Acciones<th>
                </tr>
            </thead>
            <tbody>
                <?php while ($filas=mysql_fetch_assoc($resultado)){
                 ?>
                <tr>
                    <td><?php echo $filas['ID']?></td>
                    <td><?php echo $filas['Nombre']?></td>
                    <td><?php echo $filas['Menu_Padre']?></td>
                    <td><?php echo $filas['Descripción']?></td>
                    <td>
                        <a href="">Editar</a>
                        <a href="">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
include 'conexion.php';
$id=$_GET['ID'];
$sqli="select * from menus where id='".$id."'";
$resultado=mysqli_query($conexion, $sql);
    while ($fila=mysqli_fetch_assoc($resultado)){

?>
<div>
    <form>
        <input type="hidden" name="txtid" value="<?php echo $fila['ID']?>">
        <label>Menú padre</label><br>
        <input type="text" name="txtmenuf" value="<?php echo $fila['Menú Padre']?>">><br>
        <label>Nombre</label>
        <input type="text" name="txtname" value="<?php echo $fila['Nombre']?>">><br>
        <label>Descripción</label>
        <input type="text" name="txtdescription" value="<?php echo $fila['Descripción']?>">><hr>
        <input type="submit" name="" value="Actualizar">
        <a href="index.php">Cancelar</a>
    </form>
    <?php } ?>
</div>
<?php
    $id=$_GET['txtid'];
    $user=$_GET['txtmenuf'];
    $name=$_GET['txtname'];
    $description=$_GET['txtdescription'];
    if ($menu!=null||$name!=null||$description!=null){
        $sqli2="update menus set Manú Padre='".$Menú_Padre."', '".$Nombre."', '".$Descripción."' where id='".$idp."'";
        mysqli_query($conexion, $sqli);
        if ($menu=1){
            header("location:Index.php");
        }
    }
<div>
    <form>
        <label>Menú padre</label><br>
        <input type="text" name="txtmenuf"><br>
        <label>Nombre</label>
        <input type="text" name="txtname"><br>
        <label>Descripción</label>
        <input type="text" name="txtdescription"><hr>
        <input type="submit" name="" value="Guardar">
        <a href="index.php">Cancelar</a>
    </form>
</div>
<?php
    include 'conexion.php';
    $menuf=$_GET['txtmenuf'];
    $name=$_GET['txtname'];
    $description=$_GET['txtdescription'];
    if ($menu!=null||$name!=null||$description!=null){
        $sqli="insert into menus(Menú_Padre, Nombre, Descripción)values('".$menu."', '".$name."', '".$description."')";
        mysqli_query($conexion, $sqli);
        if ($menu=1){
            header("location:Index.php");
        }
    }
    ?>
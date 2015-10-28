<?php
require_once("clases/productos.php");
$p=new Productos();
if(isset($_POST["nom"]))
{
    //print_r($_FILES);   
    //mime type
    //if($_FILES["file"]["type"]=="image/jpeg")
    //echo $_FILES["file"]["name"]."<br/>";
    /*
    if($_FILES["file"]["size"]<2000000)
    {
        echo "si";
    }else
    {
        echo "es mayor de 2 megas";
    }
    */
    copy($_FILES["file"]["tmp_name"],"uploads/productos/foto.doc");
    exit;
}
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>..:: Listado de Productos ::..</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
        </head>
        <body>
            <div class="container">
            <ol class="breadcrumb">
              <li><a href="listado.php">Listado</a></li>
              <li class="active">Agregar Usuario</li>
            </ol>
                <h1>Agregar Usuario</h1>
                <form name="form" method="post" action="" enctype="multipart/form-data">
                
                    <div class="form-group">
                        <label for="nombre">Nombre Producto</label>
                        <input type="text" class="form-control" placeholder="Nombre:" name="nom" />
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="nombre">Foto</label>
                        <input type="file" name="file" />
                    </div>
                    
                    <button type="submit" class="btn btn-default">Enviar</button>
                </form>
            </div>
        </body>
    </html>

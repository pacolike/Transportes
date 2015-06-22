<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Transportes Suarez</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="row">

        <div class="col-lg-12">

            <h1>Alta de Proveedores</h1>

            <form method = "POST" name="forma_proveedores" class="form-horizontal" action="proveedores_alta.php" target="_self">
                <input type="hidden" name="guardar" value="1">
                <div Class = "form-group ">
                    <div class = "col-sm-8 col-md-offset-0" >

                        <label  for="folio" class= "control-label "> Razon Social: </label>

                        <input type="text"  name = "rsocial" id="inputEmail" class="form-control"  placeholder="Razon Social" required autofocus>
                        
                        <label  for="folio" class= "control-label "> Alias: </label>

                        <input type="text"  name = "alias" id="inputEmail" class="form-control"  placeholder="Alias de Proveedor" required autofocus>

                        <label  for="folio" class= "control-label "> RFC: </label>

                        <input type="text"  name = "rfc" id="inputEmail" class="form-control"  placeholder="RFC" required autofocus>

                        <label  for="folio" class= "control-label "> Direccion: </label>

                        <input type="text"  name = "direccion" id="inputEmail" class="form-control"  placeholder="Ciudad, Estado, Municipio, Colonia" required autofocus>
                        
                        <label  for="folio" class= "control-label "> Telefono # 1: </label>

                        <input type="text"  name = "telefono1" id="inputEmail" class="form-control"  placeholder="Telefono Fijo" required autofocus>

                        <label  for="folio" class= "control-label "> Telefono # 2: </label>

                        <input type="text"  name = "telefono2" id="inputEmail" class="form-control"  placeholder="Telefono Celular" required autofocus>

                        <label  for="folio" class= "control-label "> Nombre del Contacto: </label>

                        <input type="text"  name = "contacto" id="inputEmail" class="form-control"  placeholder="Contacto en la Empresa" required autofocus>

                    </div>

                </div>
                            
                <div Class = "form-group ">
                    <div class = "col-sm-4 " >
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Guardar </button>
                    </div>
                    <div class = "col-sm-4 ">
                        <button class="btn btn-lg btn-warning btn-block" type="reset">Limpiar </button>
                    </div>
                </div>

            </form>

        </div>
    </div>
    <?php
        include("./inc/comun.php");
        include("./inc/func_bd.php");
        import_request_variables("pg");

        $link = conectar($_HOST, $_USUARIO, $_PASSWD, $_BD);

        #echo $guardar."<br>";

        if($guardar){

            $query = "INSERT INTO proveedores (rsocial,alias,rfc,direccion,telefono1,telefono2,nombre_contacto) VALUES ('$rsocial','$alias','$rfc','$direccion','$telefono1','$telefono2','$contacto') ;";
            $num_regs = 0;
            $result = query_idu($query,0);

            #header("Location:proveedores.php");
            echo '
            <script language="JavaScript" type="text/javascript">
            window.location="proveedores.php";
            </script>
            ';
            die();


        }

    ?>
        <!-- /#page-content-wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>

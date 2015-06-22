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

        <!-- Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <h1>Modulo de Proveedores</h1>

               <!-- <form method = "POST" name="form_gastos" class="form-inline" action="gastos_guardar.php" target="_self"> -->

                <!--            <div Class = "form-group "> -->
                 <a href= 'proveedores_alta.php' class='btn btn-default btn-sm btn-success' target='_self' id ='sub'> 
                        <span class = 'glyphicon glyphicon-plus'></span> Alta de Proveedores</a>

                <!--            <label for="inputEmail" class="sr-only">Descripcion</label> -->
                <!--            <input type="text"  name = "descripcion" id="inputEmail" class="form-control"  placeholder="Descripcion del Gasto" required autofocus> -->
                <!--            </div> -->  
                <!--        </form> -->

                        <br>
                        <br>
                        <table class = "table table-striped table-bordered table-hover ">
                            
                            <div class = "table-responsive"> 
                                
                                <tr class = "active info">
                                    <th> # ID </th>
                                    <th> Alias</th>
                                    <th> RFC</th>
                                    <th> Telefono 1</th>
                                    <th> Telefono 2</th>
                                    <th> Contacto</th>
                                    <th width=60px> Ver </th>
                                    <th width=60px> Editar </th>
                                    <th width=60px> Eliminar </th>
                                </tr>
                            </div>

                            <?php
                                include("./inc/func_bd.php");
                                include("./inc/comun.php");

                                $link = conectar($_HOST, $_USUARIO, $_PASSWD, $_BD);

                                $query = "SELECT * FROM proveedores ORDER BY id_proveedor asc;";
                                $num_regs = 0;
                                $result = query_sel($query,0);

                                if($num_regs==0){
                                    echo "
                                        <tr>
                                            
                                            <td colspan = '2' align='center' class = 'success' ><h5>Sin Registros Encontrados ! <h5></td></tr>
                                        </tr>
                                    ";
                                }

                                for($i=0;$i<$num_regs;$i++){

                                    $xID       = registro($result,$i,"id_proveedor",0);
                                    $xAlias    = registro($result,$i,"alias",0);
                                    $xRFC      = registro($result,$i,"rfc",0);
                                    $xTel1     = registro($result,$i,"telefono1",0);
                                    $xTel2     = registro($result,$i,"telefono2",0);
                                    $xContacto = registro($result,$i,"nombre_contacto",0);
                                    
                                    echo "

                                        <tr>
                                            <td>".$xID."</td>
                                            <td> ".$xAlias."</td>
                                            <td> ".$xRFC."</td>
                                            <td> ".$xTel1."</td>
                                            <td> ".$xTel2."</td>
                                            <td> ".$xContacto."</td>
                                            
                                            <td align='center'><a href= 'gastos_guardar.php?id=".$xID."' class='btn btn-default btn-sm btn-info'target='_self' id ='sub'> 
                                             <span class = 'glyphicon glyphicon-eye-open    '></span>
                                            </td>

                                            <td align='center'><a href= 'gastos_guardar.php?id=".$xID."' class='btn btn-default btn-sm btn-info'target='_self' id ='sub'> 
                                             <span class = 'glyphicon glyphicon-pencil'></span>
                                            </td>

                                            <td align='center'><a href= 'gastos_guardar.php?id=".$xID."' class='btn btn-default btn-sm btn-danger'target='_self' id ='sub'> 
                                             <span class = 'glyphicon glyphicon-remove-circle'></span>
                                            </td>
                                            
                                        </tr>
                                    ";
                                }


                            ?>

                        </table>


            </div>
        </div>
    
        <!-- /#page-content-wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>

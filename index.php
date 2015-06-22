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
    <script language="JavaScript">

        function calcHeight() {
          //find the height of the internal page
          var the_height=document.getElementById("display").contentWindow.document.body.scrollHeight;
          //change the height of the iframe
          document.getElementById("display").height=the_height;
        }

    </script>


    <style>

      .jumbotron{
        background:#1F98C4;
        color: #fff;
        padding: 20px 0;
        padding-top: 1px;
        padding-bottom: 1px;
      }

      </style>

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">

            <ul class="sidebar-nav">

                <li class="sidebar-brand">

                    <a href="#">
                        Bienvenidos al Sistema
                    </a>
                </li>
                <li>
                    <a href="servicios.php" target="display">Servicios</a>
                </li>
                <li>
                    <a href="clientes.php" target="display">Clientes</a>
                </li>
                <li>
                    <a href="proveedores.php" target="display">Proveedores</a>
                </li>
                <li>
                    <a href="choferes.php" target="display">Choferes</a>
                </li>
                <li>
                    <a href="transportes.php" target="display">Transportes</a>
                </li>
                
                <li>
                    <a href="gastos.php" target="display">Gastos</a>
                </li>

                <li>
                    <a href="#">Salir</a>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="jumbotron">
                    <h2>Transportes Suarez</h2>      
                    <p>Bienvenido !...</p>      
                    <!--<a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-search"></span> Search</a>-->
                </div>

                <div class="row">

                    <div class="col-lg-12">

                        <iframe onLoad="calcHeight();" id="display" name = "display" scrolling="no" frameborder="0" height="400" width="100%"></iframe>
                        <br>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Ocultar Menu</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>

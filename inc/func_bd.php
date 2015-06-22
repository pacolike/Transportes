<?PHP
   # --------------------------------------------------------------------------
   # func_bd.php
   # R. Medina M.
   # agosto, 2009
   # Funciones para BASES DE DATOS
   # --------------------------------------------------------------------------


   // Conexión al host y a la BD -------------------------------------------------------------------
   function conectar($host, $usuario, $password, $bd) {
      $link = mysql_connect($host, $usuario, $password);

      if (!$link) {
           $message  = "Error al tratar de conectarse al servidor de la Base de Datos<br>";
           $message  .= "Host: $host<br>Usuario: $usuario<br>Passwd: $password<br>BD: $bd<br>";
           $message .= "<font color='red'>" . mysql_error() . "</font>\n";
           die($message);
      }

      if (!mysql_select_db($bd)) {
           $message  = "Error al tratar de conectarse a la Base de Datos <b>$db</b><br>";
           $message .= "<font color='red'>" . mysql_error() . "</font>\n";
           die($message);
      }

      return $link;
   }
     function conectar2($host, $usuario, $password, $bd) {
      $link = mysql_connect($host, $usuario, $password);

      if (!$link) {
           $message  = "Error al tratar de conectarse al servidor de la Base de Datos<br>";
           $message  .= "Host: $host<br>Usuario: $usuario<br>Passwd: $password<br>BD: $bd<br>";
           $message .= "<font color='red'>" . mysql_error() . "</font>\n";
           die($message);
      }

      if (!mysql_select_db($bd)) {
           $message  = "Error al tratar de conectarse a la Base de Datos <b>$db</b><br>";
           $message .= "<font color='red'>" . mysql_error() . "</font>\n";
           die($message);
      }

      return $link;
      }


   // Ejecutar un Query SELECT
   function query_sel($query,$ver) {
      global $num_regs;
      
      $num_regs = -1;

      $result   = mysql_query($query);
      $num_regs = mysql_num_rows($result);

      if (!$result) { $message  = "Error al ejecutar el query.<br> ";
                      $message .= "Query: " . $query . "<br>";
                      $message .= "Error:<br><font color='red'>" . mysql_error() . "</font><br><br>\n";
                      die($message); }

      if ($ver == 1) { echo "Query:<BR>$query <br> No. Registros: $num_regs <br><br> \n"; }

      return $result;
   }


   function query_sel2($query,$ver) {
      global $num_regs, $link, $myError, $myErrorNum;
      
      $num_regs   = -1;
      $myError    = "";  
      $myErrorNum = 0; 

      $result   = mysql_query($query);

      if (!$result) {
         $myError    = mysql_error($link);  
         $myErrorNum = mysql_errno($link);
         return ; 
      }

      $num_regs = mysql_num_rows($result);

      if ($ver == 1) { echo "Query:<BR>$query <br> No. Registros: $num_regs <br><br> \n"; }

      return $result;
   }


   // Ejecutar un Query SELECT
   function query_idu($query,$ver) {
      global $num_regs, $link;

      $result   = mysql_query($query);
      $num_regs = mysql_affected_rows();

      if (!$result) { $message  = "Error al ejecutar el query.<br> ";
                      $message .= "Query: " . $query . "<br>";
                      $message .= "Error:<br><font color='red'>" . mysql_error() . "</font><br><br>\n";
                      die($message); }

      if ($ver == 1) { echo "Query:<BR>$query <br> Registros afectados: $num_regs <br><br> \n"; }
     
      return $result;
   }


   function query_idu2($query,$ver) {
      global $num_regs, $link, $myError, $myErrorNum ;

      $num_regs = -1;
      
      $result   = @mysql_query($query);

      if (!$result) {
         $myError    = mysql_error($link);  
         $myErrorNum = mysql_errno($link);
         return ;
      }

      $num_regs = mysql_affected_rows();

   }


   // Tomar un dato -------------------------------------------------------------------
   function registro($result,$reg,$campo,$ver=0) {
      $x = mysql_result($result, $reg, $campo);

      // Adicionado el 11-Sep-2010
      $x = htmlentities($x);

      if ($ver == 1) { echo "$campo = $x <br> \n"; }

      return $x;
   }

?>

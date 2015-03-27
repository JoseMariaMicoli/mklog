<?php
    include "connection.php";
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Autenticando usuario...</title>
    <script type="text/javascript">
    function loginsuccessfully() {
	setTimeout("window.location='busca.php'", 1500);
    }

    function loginfailed() {
	setTimeout("window.location='login.php'", 1500);
    }
    </script>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="Jose Maria Micoli">

   <!--link rel="stylesheet/less" href="static/less/bootstrap.less" type="text/css" /-->
   <!--link rel="stylesheet/less" href="static/less/responsive.less" type="text/css" /-->
   <!--script src="static/js/less-1.3.3.min.js"></script-->
   <!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
   <link href="static/css/bootstrap.min.css" rel="stylesheet">
   <link href="static/css/style.css" rel="stylesheet">

   <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
   <!--[if lt IE 9]>
   <script src="static/js/html5shiv.js"></script>
   <![endif]-->

   <!-- Fav and touch icons -->
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="static/img/apple-touch-icon-144-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="static/img/apple-touch-icon-114-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="static/img/apple-touch-icon-72-precomposed.png">
   <link rel="apple-touch-icon-precomposed" href="static/img/apple-touch-icon-57-precomposed.png">
   <link rel="shortcut icon" href="static/img/favicon.png">
  
   <script type="text/javascript" src="static/js/jquery.min.js"></script>
   <script type="text/javascript" src="static/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="static/js/scripts.js"></script>
</head>

<body>
<?php
    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];
    $sql = mysql_query("SELECT * FROM users WHERE user = '$usuario' && pass = '$senha'") or die(mysql_error());
    $row = mysql_num_rows($sql);
    if($row > 0) {
	session_start();
        $_SESSION['usuario']=$_POST['usuario'];
        $_SESSION['senha']=$_POST['senha'];
        echo "<div class='bs-example'>";
        echo "<div class='alert alert-success'>";
        echo "<a href='#' class='close' data-dismiss='alert'>&times;</a>";
        echo "<strong>Sucesso: </strong> Login efeituado com sucesso!";
        echo "</div>";
        echo "</div>";
	echo "<script>loginsuccessfully()</script>";
    } else {
	echo "<div class='bs-example'>";
        echo "<div class='alert alert-danger'>";
        echo "<a href='#' class='close' data-dismiss='alert'>&times;</a>";
        echo "<strong>Erro: </strong> Usuario ou senha invalida, por favor tente fazer login navamente.";
        echo "</div>";
        echo "</div>";
	echo "<script>loginfailed()</script>";
    }
?>
</body>
</html>

<?php
include "connection.php"
?>

<?php
    session_start();
    if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) {
        header("Location: login.php");
        exit;
    } else {

    }
?>


<html>

<head>
    <meta charset="utf-8">
    <title>Resultados da Pesquisa</title>
    <link rel="stylesheet" type="text/css" href="/static/css/main.css" title="main" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Jose Maria Micoli">

    <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
    <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
    <!--script src="static/js/less-1.3.3.min.js"></script-->
    <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/custom.css">

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
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="nav nav-justified">
        <a class="navbar-brand" href="mk-log.com.br">©MK-Log</a>

        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
            </div>
            <a href="busca.php" type="submit" class="btn btn-success">Nova Pesquisa</a>
	    <a href="logout.php" class="btn btn-danger">Sair</a>
        </form>
     </div>
</div>
<div class="container"> 
<?php
    $ip=$_POST['ip'];
    $data=$_POST['data'];
    $hora=$_POST['hora'];
    $sql = mysql_query("SELECT * FROM logs WHERE msg LIKE '%".$ip."%' && date = '$data' && time LIKE '%".$hora."%'");
    $row = mysql_num_rows($sql);
    if($row > 0){
        echo "<br/><br/><br/>";
        echo "<div class='panel panel-default'>";
	echo "<table class='table table-bordered table-striped'>";
	echo "<tbody>";
        echo "<tr class='success'><td><strong>Data </strong></td><td><strong>Hora </strong></td><td><strong>Roteador </strong></td><td><strong>Registro de log de conexão</strong><right></td></tr>";
	while($linha = mysql_fetch_array($sql)) {
	    $date = $linha['date'];
	    $time = $linha['time'];
	    $host = $linha['host'];
	    $msg = $linha['msg'];
            echo "<tr><td>".@$date."</td><td>".@$time."</td><td>".@$host."</td><td>".@$msg."</td></tr>";
	}
	echo "</tbody>";
	echo "</table>";
	echo "</br></br>";
        echo "</div>";
	echo "</div>";
    } else {
	echo "<h2>Desculpe, nenhum registro foi encontrado.</h2>";
    }
?>
</div>
<div class="navbar navbar-default navbar-fixed-bottom">
    <div class="navbar-header"></div>
     <center><p class="muted credit">©MK-Log 2015 José Maria Micoli todos os direitos reservados. Mais informação em: <a href="http://micoli.net.br">micoli.net.br</a></p></center>
</div>
</body>

</html>

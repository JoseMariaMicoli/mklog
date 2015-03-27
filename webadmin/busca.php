<?php
    include "connection.php";
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
	<title>MK-Log - Pesquisa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="MK-Connection Log System">
        <meta name="author" content="Jose Maria Micoli">
        <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
        <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
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
	<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <a class="navbar-brand" href="mk-log.com.br">©MK-Log</a>
       <div class="btn-group">
        <ul>
        </ul> 
      </div>
   </div>
</div>

	<div class="container">
	    <div class="row clearfix">
		<div class="col-md-12 column">
		    <div class="jumbotron">
			<h1>Precisando de ajuda?</h1>
			<p>
			    Para fazer uma pesquisa digite no campo IP o endereço IP de destino no formato xxx.xxx.xxx.xxx, no campo data digite a data no formato AAAA-MM-DD, no campo hora digite a hora no formato hh:mm:ss ou hh:mm e por ultimo é so clicar no botão Pesquisar.
			</p>
			<p>
			    <a class="btn btn-info btn-large" href="#">Suporte</a>
			</p>
		    </div><div class="jumbotron">
		    <form role="form" name="searchform" method="POST" action="results.php">
			<div class="form-group">
	                    <label for="ip">IP: </label><input class="form-control" type="text" name="ip" placeholder="exemplo: 192.168.88.115" autofocus required />
			</div>
			<div class="form-group">
                            <label for="data">Data: </label><input class="form-control" type="text" name="data" placeholder="exemplo: 2015-02-26" required/>
			</div>
			<div class="form-group">
	                    <label for="hora">Hora: </label><input class="form-control" type="text" name="hora" placeholder="exemplo: 19:22:23" required />
			</div>
	                <button type="submit"  class="btn btn-success">Pesquisar</button>
			<a href="logout.php" type="submit" class="btn btn-danger">Sair</a>
	            </form>
                </div>
		</div>
	    </div>
	</div>
	<div class="navbar navbar-default navbar-fixed-bottom">
    		<div class="navbar-header"></div>
     			<center><p class="muted credit">©MK-Log 2015 José Maria Micoli todos os direitos reservados. Mais informação em: <a href="http://micoli.net.br">micoli.net.br</a></p></center>
		</div>
       </div>
   </body>
</html>

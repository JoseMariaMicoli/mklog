<html>
<head>
    <meta charset="utf-8">
    <title>MK-Log - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Jose Maria Micoli">

  <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
  <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
  <!--script src="static/js/less-1.3.3.min.js"></script-->
  <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

  <link href="static/css/bootstrap.min.css" rel="stylesheet">
  <link href="static/css/style.css" rel="stylesheet">

  <link href="static/css/signin.css" rel="stylesheet">

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
<div class="container">
        <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <a class="navbar-brand" href="mk-log.com.br">©MK-Log</a>
       <div class="btn-group"> 
      </div>
   </div>
</div>

</div>
    <div class="container">
	<center><h1>MK-Log - WebAdmin</h1></center>
    		<form class="form-signin" name="loginform" method="POST" action="userauth.php">
		    <div class="form-group">
			<h2 class="form-signin-heading">Por favor faça login.</h2>
			<label class="sr-only" for="user">Usuario: </label><input class="form-control" type="text" name="usuario" placeholder="Nome de Usuario" required autofocus/><br/>
		    </div>
		    <div class="form-group">	
			<label class="sr-only" for="pass">Senha: </label><input class="form-control" type="password" name="senha" placeholder="Senha" required/><br/>
		    </div>
		    <center><button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button></center>
		</div>
   		</form>
    </div>
    <div class="navbar navbar-default navbar-fixed-bottom">
    	<div class="navbar-header"></div>
     		<center><p class="muted credit">©MK-Log 2015 José Maria Micoli todos os direitos reservados. Mais informação em: <a href="http://micoli.net.br">micoli.net.br</a></p></center>
	</div>
    </div>
</body>
</html>

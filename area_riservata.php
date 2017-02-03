<?php
# inizializzazione della sessione
@session_start();
# inclusione del file di funzione
@include_once 'functions.php';
# istanza della classe
$obj = new Iscrizioni();
# identificativo univoco dell'utente
$id_utente = $_SESSION['id_utente'];
# chiamata al metodo per la verifica della sessione
if (!$obj->verifica_sessione())
{
  #redirect in caso di sessione non verificata
  @header("location:autenticazione.php");
}
# controllo sul valore di input per il logout
if (isset($_GET['val']) && ($_GET['val'] == 'fine_sessione')) 
{
  # chiamata al metodo per il logout
  $obj->esci();
  # redirezione alla pagina di login
  @header("location:autenticazione.php");
}
# Area riservata
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>


    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<style>
    #exit{float: right;
    margin-right: 44px;}
</style>


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    
    
    <div id="container">
 		 <div id="header"><a id="exit" href="<?php echo $_SERVER['PHP_SELF']; ?>?val=fine_sessione" title="Logout">Esci</a></div>
  			<div id="main-body">
  </div>
	</div>
    
    

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
               
                <p class="lead">Benvenuto nell'area riservata <?php $obj->mostra_utente($id_utente);# visualizzazione del nome reale dell'utente ?></p>
                <ul class="list-unstyled">
                    <li>Bootstrap v3.3.7</li>
                    <li>jQuery v1.11.1</li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</body>

</html>

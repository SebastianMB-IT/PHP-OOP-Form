<?php
# inclusione del file di funzione
@include_once 'functions.php';
# istanza della classe
$obj = new Iscrizioni();
# chiamata al metodo per la verifica della sessione
if ($obj->verifica_sessione())
{
  #redirect in caso di esito negativo
  @header("location:area_riservata.php");
}
# chiamata al metodo per la registrazione
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $registrato = $obj->registra(htmlentities($_POST['nome_reale'], ENT_QUOTES), htmlentities($_POST['nome_utente'], ENT_QUOTES), htmlentities($_POST['password'], ENT_QUOTES), htmlentities($_POST['email'], ENT_QUOTES));
  # controllo sull'esito del metodo
  if ($registrato) {
    # notifica in caso di esito positivo
    echo 'Registrazione conclusa <a href="autenticazione.php">ora puoi loggarti</a>.';
  }else{
    # notifica in caso di esito negativo
    echo 'Il form non è stato compilato correttamente oppure stai cercando di registrarti con dei dati gi&aacute; presenti nel database.';
  }
}
# form per l'iscrizione
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Pagina per la registrazione</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
#container{
    width: 370px;
    margin: 0 auto;
    }
</style>
<body>
<div id="container">
	
  <form class="form-group" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="form_registrazione" name="registrazione">
    <div class="head"><br><h2>Registrazione iscritti</h2></div><br>
    <label>Nome</label><br/>
    <input type="text" class="form-control" name="nome_reale" /><br/>
    <label>Nome utente</label><br/>
    <input type="text" class="form-control" name="nome_utente" /><br/>
    <label>Password</label><br/>
    <input type="password" class="form-control" name="password" /><br/>
    <label>Il tuo indirizzo di posta elettronica</label><br/>
    <input type="text" class="form-control" name="email" id="email" /><br/><br/>
    <input type="submit" class="form-control" name="registra" value="Registrami"/><br/><br/>
    <label><a href="autenticazione.php" title="Login">Fail il login</a></label> 
  </form>

</div>
</body>
</html>
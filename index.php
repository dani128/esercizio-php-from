<?php

$nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$Cognome = (isset($_POST['Cognome'])) ? $_POST['Cognome'] : '';
$Indirizzo = (isset($_POST['Indirizzo'])) ? $_POST['Indirizzo'] : '';
print $nome;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<!--style.css-->
    <link rel="stylesheet" href="style.css">
    

    
    </head>
    <body>
      
    <div class="container">
    <div class="alert alert-primary">
    </div>
<?php 
   foreach ($_POST as $key => $value) {
   print $key . ': ' . $value . '<br>';
   }
?>

<div class="container">
 <h1>Inserisci le tue credenziali</h1>
<form> <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome" placeholder="Inserisci Nome">
    <small id="emailHelp" class="form-text text-muted">Inserisci il tuo nome</small>
  </div>
   
  </form>
</div>

<div class="container">
<form> <div class="form-group">
    <label for="exampleInputEmail1">Cognome</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="Cognome" placeholder="Inserisci Cognome">
    <small id="emailHelp" class="form-text text-muted">Inserisci il tuo Cognome</small>
  </div>
     
  </form>
</div>

<div class="container">
<form> <div class="form-group">
    <label for="exampleInputEmail1">Indirizo</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="Indirizzo" placeholder="Inserisci Indirizzo">
    <small id="emailHelp" class="form-text text-muted">Inserisci il tuo Indirizzo</small>
  </div>

<button type="Invia" class="btn btn-primary">Invia</button>

    </body>
     <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src=js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html

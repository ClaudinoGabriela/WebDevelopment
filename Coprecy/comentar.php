<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Coprecy | Comunidade</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #F9FAFC">

<?php include("menu.php")?>

<div class="container-fluid" id="criarforum">

<h2> Responder </h2>

  <form method="post" class="needs-validation" action="comentar_action.php" id="fforum">
    <div class="mb-3 mt-3">
      <label for="text"> Mensagem: </label>
      <textarea class="form-control" rows="8" id="texto" name="-------" style="resize: none" required></textarea>
    </div>
    <button type="submit" class="btn" id="btnpublicar">Publicar</button>
    <a href='abrir_forum.php' class='btn btn-rounded' id="btnvoltartwo">Voltar</a>
  </form>

</div>

<br><br>

<?php include("footer.php"); ?>

</body>
</html>

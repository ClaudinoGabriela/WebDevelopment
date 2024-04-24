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

<?php
date_default_timezone_set ("America/Sao_Paulo");
echo date_default_timezone_get ();
?>

<?php

try {
    include("conexao.php");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $dbh->prepare("insert into -------- (-------) values (?,?,?,?,?);");
    $stmt->bindParam(1, $-------);
    $stmt->bindParam(2, $-------);
    $stmt->bindParam(3, $-------);
    $stmt->bindParam(4, $-------);
    $stmt->bindParam(5, $-------);
    $-------=$_POST["-------"];
    $-------=$_SESSION["-------"];
    $------- = date('y-m-d');
    date_default_timezone_set('America/Sao_Paulo');
    $------- = date('h:i:s');
    $------- = $_SESSION["-------"];
    if($stmt->execute()) {
        header("Location: abrir_forum.php");
        ?>
        <?php
    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/><br><a href='comunidade.php'>Voltar</a>";
    die();
}

?>

</div>

<?php include("footer.php"); ?>

</body>
</html>
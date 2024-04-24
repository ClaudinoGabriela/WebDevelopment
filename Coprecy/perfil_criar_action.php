<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Coprecy | Perfil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #F9FAFC">

<?php include("menu.php"); ?>

<?php

    if(isset($_POST)) {

        try {
            include("conexao.php");
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $dbh->prepare("insert into ------ (------) values (?,?,?);");
            $stmt->bindParam(1, $------);
            $stmt->bindParam(2, $------);
            $stmt->bindParam(3, $------);
            $------=$_POST["------"];
            $------=$_POST["------"];
            $------=$_POST["------"];
            if($stmt->execute()) {
                
                header("Location: login.php");
                
            }
        } catch (PDOException $e) {

            print "Error!: " . $e->getMessage() . "<br/><br><a href='index.php'>voltar</a>";
            die();
              
        }
    }

    ?>
    
<?php include("footer.php"); ?>

</BODY>
</HTML>
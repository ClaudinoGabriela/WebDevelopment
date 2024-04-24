<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Coprecy | Pefil</title>
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

	
	include("conexao.php");

	try {

		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $dbh->prepare("select * from ------ where ------=? and ------=?");
        $stmt->bindParam(1, $------);
        $stmt->bindParam(2, $------);
        $------ = $_POST["------"];
        $------ = $_POST["------"];

		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if(!empty($result)){
        $_SESSION["------"] = $result[0]["------"];
        $_SESSION["------"] = $result[0]["------"];
        header("Location: painel.php");

        } else {

            echo "<div class='container-sm p-3 border border-secondary' id='login'>";
            echo "<div class='alert alert-danger'>
            <strong>Erro: </strong>usuário ou senha inválidos.</div>";

            echo "<p> <a href='login.php' class='btn btn-rounded' id='btnvoltar'> Voltar </a></p>";
            echo "</div>";
      
    }
		
		$dbh = null;
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/><br><a href='login.php'>voltar</a>";
		die();
	}

	?>

<?php include("footer.php"); ?>

</BODY>
</HTML>
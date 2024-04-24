<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Buscar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #F9FAFC">

<?php include("menu.php"); ?>

<div class="container-fluid" id="buscaresult">

	<?php
	
	include("conexao.php");	
	
	try {
	
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $dbh->prepare('SELECT * from - WHERE - LIKE ?');
		$stmt->bindParam(1, $-------);
		$------- = "%".$_POST["-------"]."%";
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		if(!empty($result)){
   
			foreach($result as $row) {

                echo '<a href="abrir_forum.php?id='.$row["-------"].'" style="text-decoration: none;color: #0f0f0f;font-weight: 600;"> <div class="container-sm" id="contsm">' . $row['-------'] . '<br><br>';    
                echo '<div class="row">';
                echo '<div class="col-sm-6"></div>';
                echo '<div class="col-sm-6" id="infos">'. $row['-------'] . "&nbsp   " . $row['-------'] .'</div>';
                echo '</div>';
                echo '</div></a><br>';
            }  
        }

		else{
			echo '<p>Nenhum resultado para a sua busca.</p>';
		}

		$dbh = null;
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/><br><a href='index.php'>voltar</a>";
		die();
    }
?>		
</div>

<?php include("footer.php"); ?>

</BODY>
</HTML>

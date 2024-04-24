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

<div class="container-fluid" id="comunidade">

<h2> Comunidade </h2><hr>
<p> Esta é a nossa comunidade. Aqui você pode desabafar sobre seus casos de bullying/cyberbullying,
ajudar e conscientizar outras pessoas. Tudo isso de forma anônima.</p><br>

    <form method="post" action="busca_result.php">
        <div class="row">
            <div class="col-sm-8">
		            <input type="text" class="form-control" id="titulo" name="-------" placeholder="Digite para buscar..." >
            </div>
            <div class="col-sm-4" id="colsearch">
                <input type="submit" name="buscar" value="Buscar" class="btn" id="bsearch">
            </div>
        </div>
    </form>
<br>

        <?php if(!empty($_SESSION["-------"]) ){ ?>
        <a href="criar_forum.php" class="btn" id="newforum">Novo Fórum</a><br><br>
        <?php } ?>

<div class="row" id="pforum">
    <div class="col-sm-8">

<?php 

include("conexao.php");
	
	try {	
		
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sth = $dbh->prepare('SELECT - from -');
		$sth->execute();
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);

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

		$dbh = null;
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/><br><a href='index.php'>voltar</a>";
		die();
    }
    
?>
    
</div>

<div class="col-sm-4" id="colad">
<img class="img-fluid" src="img/anuncio.jpg" id="ad1">
</div>

</div></div>

<?php include("footer.php"); ?>

</body>
</html>
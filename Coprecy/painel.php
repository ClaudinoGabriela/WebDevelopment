<?php session_start(); ?>
<?php include("login_verificar.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Coprecy | Painel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #F9FAFC">

<?php include("menu.php"); ?>

<div class="container-sm" id="painel">
    <div class="row" id="rowp">

<?php

include("conexao.php");

try {	
		
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sth = $dbh->prepare("select ------ from ------ where ------=------");
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result)){

        foreach($result as $row) {

            echo '<div class="col-sm-4" id="colonepainel">';
            echo '<div id="picpainel"><img class="img-fluid" src="img/'.$row['------'].'"></div>';
        
        }   
    }

    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/><br><a href='painel.php'>voltar</a>";
    die();
}

?>

<?php 

include("conexao.php");
	
	try {	
		
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sth = $dbh->prepare("select distinct ------ from ------ left join ------ on ------ = ------ where ------ = '".$_SESSION["------"]."' or ------  = '".$_SESSION["------"]."'");
		$sth->execute();
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($result)){

            foreach($result as $row) {

                echo '<div id="username">@' . $row['------'] . '</div></div>';                
                echo '<div class="col-sm-8" id="colforunsp">';
                echo '<a href="abrir_forum.php?id='.$row["------"].'" style="text-decoration: none;color: #0f0f0f;font-weight: 700;">';
                echo '<h4>Gerenciar meus fóruns</h4>';
                echo '<div class="container-sm" id="contsmpainel" style="font-weight: 600">' . $row['------'] . '<br><br>';
                echo '<div class="row">';
                echo '<div class="col-sm-6"></div>';
                echo '<div class="col-sm-6" id="infos">'. $row['------'] . "&nbsp   " . $row['------'] .'</div>';
                echo '</div>';
                echo '</div></div></a></div><br>';
            }
            
        }
        
		$dbh = null;
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/><br><a href='painel.php'>voltar</a>";
		die();
    }
    
?>

 <a class="btn" href="sair.php" id="btnsair">Sair</a>

</div></div></div>
<br><br>

<?php include("footer.php"); ?>

</BODY>
</HTML>
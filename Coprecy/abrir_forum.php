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

<?php include("menu.php"); ?>

<div class="container-sm" id="comunidade">

<h2> Comunidade </h2><hr>
<p> Esta é a nossa comunidade. Aqui você pode desabafar sobre seus casos de bullying/cyberbullying,
ajudar e conscientizar outras pessoas. Tudo isso feito de forma anônima.</p><br>

<?php
 
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (isset($_GET["-------"])){
    $_SESSION["-------"] = $_GET["-------"];
  }
}

?>
 
<?php
 
echo "<input type='hidden' id='id_ciclo' name='------' value='".$_SESSION["-------"]."'>";
 
include("conexao.php");
 
try {
  $sth = $dbh->prepare('select * from ------- where id = '.$_SESSION["-------"].' ');
  $sth->execute();
  $result = $sth->fetchAll(PDO::FETCH_ASSOC);
 
  if(!empty($result)){
   
    foreach($result as $row) {
 
              echo '<div class="container-sm" id="opnforum">';
 
              echo '<p><b>'. $------- = $result[0]["-------"] . '</b></p>';
              echo '<p>'. $------- = $result[0]["-------"] . '</p>';
          
              echo '<div class="row" id="rowinfos">';

          if(!empty($_SESSION["-------"]) ){
            if ( $row['-------'] == $_SESSION["-------"] || $_SESSION["-------"] == '-------' ) {            

                    echo '<div class="col-sm-6">';
                    echo "<a href='comunidade.php'><button class='btn' id='btnvoltar'> Voltar </button></a>";
                    echo '<a href="excluir_forum.php?id='.$row["-------"].'"><button class="btn" id="btnexcluir"> Excluir </button></a>';
            
            }
        }
 
  if(!empty($_SESSION["-------"]) ){

                    echo '<a href="comentar.php?id='.$row["-------"].'">
                    <button class="btn" id="btncomment"> Comentar </button></a></div>';
         }
                    echo '<div class="col-sm-6" id="infos">'. $row['-------'] . "&nbsp   " . $row['-------'] . '</div>';
                    echo '</div></div>';  
      }
    }
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/><br><a href='abrir_forum.php'>voltar</a>";
  die();
}
 
  try {
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    $sth = $dbh->prepare('select ------- from ------- where ------- = '.$_SESSION["-------"].' ');
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
       
        if(isset($_SESSION["-------"])) {
 
                foreach($result as $row) {

                    echo '<br><div class="container-sm" id="opnforumt">';
                    echo '<p>'. $------- = $result[0]["-------"] . '</p>';

            echo '<div class="row">';
            if(!empty($_SESSION["-------"]) ){
                if ( $row['-------'] == $_SESSION["-------"] || $_SESSION["-------"] == '-------' ) {
                          
                    echo '<div class="col-sm-3"><a href="excluir_forum.php?id='.$row["-------"].'">
                    <button class="btn" id="btnexcluir"> Excluir </button></a></div>';
                }
            }
                echo '<div class="col-sm-3" id="infos">'. $row['-------'] . "&nbsp   " . $row['-------'] . '</div>';
                echo '</div>';echo '</div>';            
        }
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/><br><a href='index.php'>voltar</a>";
    die();
}
echo '</div>';
?>

</div>

<?php include("footer.php"); ?>

</BODY>
</HTML>
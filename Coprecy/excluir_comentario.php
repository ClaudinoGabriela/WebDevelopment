<?php session_start(); ?>
<?php include("login_verificar.php"); ?>
<!DOCTYPE html>
<HTML lang="pt-br">
<HEAD>
    <TITLE> Comunidade </TITLE>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</HEAD>
<BODY id ="body">

<?php include("menu.php"); ?>

<?php

    if(isset($_POST)) {

        try {
            include("conexao.php");
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $dbh->prepare("delete from ------- where ------=?;");
            $stmt->bindParam(1, $------);
            $------=$_GET["------"];
            if($stmt->execute()) {
                header("Location: abrir_forum.php");
                ?>
                <?php
            }
        } catch (PDOException $e) {
            $message = $e->getMessage();
            $voltar = "comentar.php";
            echo "<br>";
            echo "<div class='alert alert-danger' role='alert'>";
            echo "<h4 class='alert-heading'>";
            echo $message;
            echo "</h4>";
            echo "<hr>";
            echo "<a href='$voltar' class='btn btn-secondary btn-rounded' >";
            echo "Voltar";
            echo "</a>";
            echo "</div>";
            die();
        }

    }
    
    ?>

<?php include("footer.php"); ?>

</BODY>
</HTML>
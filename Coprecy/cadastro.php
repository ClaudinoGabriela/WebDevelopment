<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Coprecy | Cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #F9FAFC">

<?php include("menu.php")?>

<div class="container-fluid" id="contlog">

    <div class="row" id="rowlog">
    
        <div class="col-sm-6" id="col7log">
            <div class="container-sm" id="contfigure1">
            </div>
        </div>

        <div class="col-sm-6" id="colog">
            <div class="container-sm" id="contlogin">
                <h3> Cadastro </h3>
                    <form class="needs-validation" method="post" action="perfil_criar_action.php">
                        <label for="text" style="padding-top: 0.5em">Nome de usuário:</label>
                            <input type="text" class="form-control" id="nome" placeholder="Digite seu nome de usuário" name="-------" style="border-bottom: solid 1px #000; border-left: none;  border-right: none;  border-top: none; border-radius: 0.1em; padding-top: 1em" required>
                            <label for="text" style="padding-top: 1em">E-mail:</label>
                            <input type="text" class="form-control" id="email" placeholder="Digite seu e-mail" name="-------" style="border-bottom: solid 1px #000; border-left: none;  border-right: none;  border-top: none; border-radius: 0.1em; padding-top: 1em" required>
                            <div class="mb-3 mt-3">
                            <label for="pwd" style="padding-top: 0.5em">Senha:</label>
                            <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" name="-------" style="border-bottom: solid 1px #000; border-left: none;  border-right: none;  border-top: none; border-radius: 0.1em; padding-top: 1em" required>
                        </div>  
                        <div class="mb-3">
                            <input type = "submit" class="btn btn-primary" value="Cadastrar" id="btnlog">
                        </div>
                        <div class="mb-3">
                            <p> Já tem conta? <a href="login.php" style="color: #e27a03;"><b>Faça o login</b></a></p>
                        </div>
                    </form>
            </div>
        </div>
    </div>  
</div>

<?php include("footer.php") ?>

</body>
</html>

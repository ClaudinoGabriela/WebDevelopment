
<?php if(empty($_SESSION["------"]) ){ ?>
    
  <nav class="navbar navbar-expand-sm" id="navbar">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php" id="brand">COPRECY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
	<input id="menu" type="checkbox"/>
    <label for="menu">
    <div id="iconmenu">
    <span class="hamburguer">
    </span></div></label></button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav" >
        <li class="nav-item">
          <a class="nav-link" href="index.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php #about">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="comunidade.php">Comunidade</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="width: 1.8em;"><g fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke="#000" stroke-width="1.4" class="stroke-000000"><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10Z"></path><path d="M12 16a5 5 0 1 1 0-10 5 5 0 0 1 0 10ZM5.5 19c1.401-2 3.57-3 6.505-3 2.929 0 5.094.996 6.495 2.987"></path></g></svg></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php } else if ($_SESSION["------"] == '------') { ?>

  <nav class="navbar navbar-expand-sm" id="navbar">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php" id="brand">COPRECY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
	<input id="menu" type="checkbox"/>
    <label for="menu">
    <div id="iconmenu">
    <span class="hamburguer">
    </span></div></label></button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav" >
        <li class="nav-item">
          <a class="nav-link" href="index.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php #about">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="comunidade.php">Comunidade</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="administracao.php"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="width: 1.8em;"><g fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke="#000" stroke-width="1" class="stroke-000000"><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10Z"></path><path d="M12 16a5 5 0 1 1 0-10 5 5 0 0 1 0 10ZM5.5 19c1.401-2 3.57-3 6.505-3 2.929 0 5.094.996 6.495 2.987"></path></g></svg></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php } else if ($_SESSION["------"] == '------') { ?>

  <nav class="navbar navbar-expand-sm" id="navbar">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php" id="brand">COPRECY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
	<input id="menu" type="checkbox"/>
    <label for="menu">
    <div id="iconmenu">
    <span class="hamburguer">
    </span></div></label></button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav" >
        <li class="nav-item">
          <a class="nav-link" href="index.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php #about">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="comunidade.php">Comunidade</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="painel.php"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="width: 1.8em;"><g fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke="#000" stroke-width="1" class="stroke-000000"><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10Z"></path><path d="M12 16a5 5 0 1 1 0-10 5 5 0 0 1 0 10ZM5.5 19c1.401-2 3.57-3 6.505-3 2.929 0 5.094.996 6.495 2.987"></path></g></svg></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php } ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Coprecy | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #F9FAFC">

<?php include("menu.php")?>

<div class="container-fluid" id="home">
    <div class="row" id="hrow">
        <div class="col-sm-6" id="colo">
            <h1>Sinta-se a vontade na Coprecy</h1>
            <p>Somos uma Comunidade de Prevenção ao Cyberbullying, uma equipe independente que tem como principal objetivo acabar com o ódio na internet!</p>
            <a href="#noticias" class="btn" id="btno">Ver mais</a>
        </div>
        <div class="col-sm-6" id="colt">

        <?php

include("conexao.php");

try {	
		
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sth = $dbh->prepare("select ------ from ------- where ------=----");
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result)){

        foreach($result as $row) {

            echo '<img class="img-fluid" src="img/'.$row['------'].'">';
        
        }   
    }

    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/><br><a href='index.php'>voltar</a>";
    die();
}

?>
        </div>
    </div>
</div>

<div class="container-fluid" id="noticias">
    <h2>Notícias</h2><br>
    <div class="row" id="nrow">
        <div class="col-sm-6" id="colth">

<?php

include("conexao.php");

try {	
		
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sth = $dbh->prepare("select ------ from ------ where id=----");
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result)){

        foreach($result as $row) {

            echo '<a href="materiaum.php">';
            echo '<img class="img-fluid" src="img/'.$row['------'].'"></a>';
        
        }   
    }

    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/><br><a href='index.php'>voltar</a>";
    die();
}

?>
        </div>
        <div class="col-sm-6" id="colf">
            <a href="materiaum.php"><div class="container-sm" id="newone">
                <p id="categoria"><u>Sociedade</u></p>
                <h1><a href="materiaum.php"><b>O que é o cyberbullying?</b></a></h1>
                <p><a href="materiaum.php">O ato pode ter sérias consequências emocionais, psicológicas e até mesmo físicas para as vítimas, e tornou-se uma preocupação significativa, especialmente entre adolescentes e jovens que são usuários frequentes de tecnologia digital e plataformas de mídia social.</a></p>
                <a href="materiaum.php"><u>Ler mais</u></a>
            </div></a>
        </div>
    </div>
</div>

<div class="container-fluid" id="about">
    <h2>Sobre nós</h2>
    <p>Todos sabemos o quão útil a tecnologia e a internet se tornaram em nossas vidas, afinal esse é o objetivo delas, certo? Pois bem, o crescimento deste foi tanto que até mesmo os próprios usuários perderam o foco de sua real utilidade. Ficamos tão empolgados tendo acesso a tantas redes sociais e jogos diferentes que conseguimos atribuir a essa tecnologia um outro significado. Uma ferramenta que inicialmente servia como ferramenta de trabalho e estudo, hoje em dia virou também um lugar para se passar o tempo e criar novas amizades.</p>
    <p>Constantemente somos atraidos para os pensamentos que os nossos amigos virtuais irão ter. "Será que essa foto esta boa o suficiente para o meu instagram?", "O que vão achar desse meu comentário?", "Será que gostarão menos de mim?". Esse medo que nos persegue não é em vão, ele não surgiu do nada. Estamos vivendo em uma época onde a supervisão e a exposição são tantas que, conscequentemente, somos duramente julgados se não agimos da maneira que os outros, uma grande maioria hipócrita, esperam.</p>
    <p>Os praticantes cyberbullying, como é chamada essa nova onda de ataques, são responsáveis por criar várias vítimas diariamente. E, como disse, estamos aqui com e para você. Saiba que não é o único a passar por esse tipo de situação. Nossa comunidade está aqui para te provar isso, lá você encontra várias pessoas que também foram alvos de ataques virtuais e o que podemos fazer para evitá-los.</p>
    <p>Se você um dia já se sentiu sozinho nesse grande mundo que se tornou a internet, saiba que estamos aqui com você!</p>

    <div class="row" id="rowt">
        <div class="col-sm-3" id="colfi">
            <div class="container-sm" id="contabout">
                <svg id="Layer_1" version="1.1" viewBox="0 0 48 48" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 48 48"><path d="M32 15.4c-.8-3.7-4.1-6.4-8-6.4-3.9 0-7.2 2.7-8 6.4h16z" fill="#ffffff" class="fill-ff7170"></path><path d="M46.5 42.2c-.8-3.7-4.1-6.4-8-6.4s-7.2 2.7-8 6.4h16z" fill="#ffffff" class="fill-64d3ff"></path><path d="M17.5 42.2c-.8-3.7-4.1-6.4-8-6.4s-7.2 2.7-8 6.4h16z" fill="#ffffff" class="fill-ffbf5b"></path><path d="M27.8 5.3c0 2.1-1.7 3.8-3.8 3.8s-3.8-1.7-3.8-3.8 1.7-3.8 3.8-3.8 3.8 1.7 3.8 3.8zM42.3 32c0 2.1-1.7 3.8-3.8 3.8-2.1 0-3.8-1.7-3.8-3.8 0-2.1 1.7-3.8 3.8-3.8 2.1.1 3.8 1.7 3.8 3.8zM13.3 32c0 2.1-1.7 3.8-3.8 3.8S5.7 34.1 5.7 32c0-2.1 1.7-3.8 3.8-3.8s3.8 1.7 3.8 3.8z" fill="#e27a03" class="fill-ffbea0"></path><path d="M32.7 15.3c-.7-3.1-3-5.5-5.9-6.5 1-.8 1.7-2.1 1.7-3.5 0-2.5-2-4.5-4.5-4.5s-4.5 2-4.5 4.5c0 1.4.7 2.7 1.7 3.5-2.9 1-5.2 3.4-5.9 6.5l-.3.9h18l-.3-.9zM21 5.3c0-1.7 1.4-3 3-3s3 1.4 3 3-1.4 3-3 3-3-1.4-3-3zm-4 9.4c1.1-2.9 3.8-4.9 7-4.9s5.9 2 7 4.9H17zM47.2 42c-.7-3.1-3-5.5-5.9-6.5 1-.8 1.7-2.1 1.7-3.5 0-2.5-2-4.5-4.5-4.5S34 29.5 34 32c0 1.4.7 2.7 1.7 3.5-2.9 1-5.2 3.4-5.9 6.5l-.2.9h17.9l-.3-.9zM35.5 32c0-1.7 1.4-3 3-3s3 1.4 3 3-1.4 3-3 3-3-1.3-3-3zm-4 9.4c1.1-2.9 3.8-4.9 7-4.9s5.9 2 7 4.9h-14zM18.3 42c-.7-3.1-3-5.5-5.9-6.5 1-.8 1.7-2.1 1.7-3.5 0-2.5-2-4.5-4.5-4.5S5 29.5 5 32c0 1.4.7 2.7 1.7 3.5-2.9 1-5.2 3.4-5.9 6.5l-.2.9h17.9l-.2-.9zM6.5 32c0-1.7 1.4-3 3-3s3 1.4 3 3-1.4 3-3 3-3-1.3-3-3zm-4 9.4c1.1-2.9 3.8-4.9 7-4.9s5.9 2 7 4.9h-14zM17.5 7.7 17 6.3c-8.4 3-14 11-14 19.9 0 .8 0 1.6.1 2.5l1.5-.2c-.1-.8-.1-1.5-.1-2.3-.1-8.3 5.2-15.7 13-18.5zM31.9 45.7l-.6-1.4c-4.8 1.9-10.3 1.9-15.1-.2l-.6 1.4c2.6 1.1 5.4 1.7 8.3 1.7 2.8.1 5.5-.5 8-1.5zM45 28.3c.1-.7.1-1.4.1-2.2 0-9.1-5.8-17.1-14.4-20l-.5 1.4c8 2.7 13.4 10.1 13.4 18.6 0 .7 0 1.3-.1 2l1.5.2z" fill="#000000" class="fill-000000"></path></svg>
            </div>
        </div>
        <div class="col-sm-3" id="colfi">
            <div class="container-sm" id="contabout">
                <svg data-name="Layer 1" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"><path d="M39.995 40.039C43.45 38.028 45.5 34.9 45.5 31.6c0-5.875-6.332-10.654-14.116-10.654-.32 0-.633.021-.948.036a8.793 8.793 0 0 0 2.3-5.832C32.733 9.279 26.4 4.5 18.616 4.5S4.5 9.279 4.5 15.154c0 3.294 2.05 6.422 5.506 8.435a12.734 12.734 0 0 1-2.663 4.624.5.5 0 0 0 .37.837h.024a14.505 14.505 0 0 0 8.838-3.362 18.038 18.038 0 0 0 3 .1 8.845 8.845 0 0 0-2.307 5.812c0 5.875 6.332 10.656 14.116 10.656a18.312 18.312 0 0 0 2.042-.122 14.494 14.494 0 0 0 8.838 3.366h.024a.5.5 0 0 0 .37-.837 12.7 12.7 0 0 1-2.663-4.624Z" fill="#000000" class="fill-231f20"></path><path d="M16.469 24.667a.491.491 0 0 0-.4.13 13.013 13.013 0 0 1-7.207 3.15 13.85 13.85 0 0 0 2.223-4.457.5.5 0 0 0-.241-.579C7.5 21.089 5.5 18.188 5.5 15.154 5.5 9.831 11.384 5.5 18.616 5.5s13.117 4.331 13.117 9.654a8.09 8.09 0 0 1-2.724 5.884.462.462 0 0 0-.057.082 15.638 15.638 0 0 0-8.3 3.576.164.164 0 0 1-.022 0 16.976 16.976 0 0 1-4.161-.029Z" fill="#e27a03" class="fill-ffba50"></path><path d="M33.935 41.248a.5.5 0 0 0-.341-.134.417.417 0 0 0-.061 0 17.752 17.752 0 0 1-2.149.142c-7.233 0-13.116-4.331-13.116-9.656s5.883-9.654 13.116-9.654S44.5 26.281 44.5 31.6c0 3.037-2 5.936-5.34 7.757a.5.5 0 0 0-.241.579 13.835 13.835 0 0 0 2.223 4.464 13.007 13.007 0 0 1-7.207-3.152Z" fill="#ffffff" class="fill-ffffff"></path><circle cx="28.867" cy="31.605" r=".502" fill="#000000" class="fill-231f20"></circle><circle cx="31.408" cy="31.605" r=".502" fill="#000000" class="fill-231f20"></circle><circle cx="33.902" cy="31.605" r=".502" fill="#000000" class="fill-231f20"></circle><path d="M16.1 14.653a.5.5 0 1 0 .5.5.5.5 0 0 0-.5-.5Z" fill="#000000" class="fill-231f20"></path><circle cx="18.641" cy="15.154" r=".502" fill="#000000" class="fill-231f20"></circle><path d="M21.134 15.656a.5.5 0 1 0-.5-.5.5.5 0 0 0 .5.5Z" fill="#000000" class="fill-231f20"></path></svg>
            </div>
        </div>
            <div class="col-sm-3" id="colfi">
                <div class="container-sm" id="contabout">
                    <svg viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64"><path d="M62 38V26l-6.16-1.54a24.813 24.813 0 0 0-1.655-3.98l3.27-5.45-8.485-8.485-5.45 3.27a24.813 24.813 0 0 0-3.98-1.655L38 2H26l-1.54 6.16a24.813 24.813 0 0 0-3.98 1.655l-5.45-3.27-8.485 8.485 3.27 5.45a24.813 24.813 0 0 0-1.655 3.98L2 26v12l6.16 1.54a24.813 24.813 0 0 0 1.655 3.98l-3.27 5.45 8.485 8.485 5.45-3.27a24.813 24.813 0 0 0 3.98 1.655L26 62h12l1.54-6.16a24.813 24.813 0 0 0 3.98-1.655l5.45 3.27 8.485-8.485-3.27-5.45a24.813 24.813 0 0 0 1.655-3.98L62 38zM32 53c-11.598 0-21-9.402-21-21s9.402-21 21-21 21 9.402 21 21-9.402 21-21 21z" fill="#e27a03" class="fill-ffcb57"></path><path d="M38.781 63H25.219l-1.595-6.382c-1.05-.358-2.09-.79-3.104-1.291l-5.646 3.388-9.037-9.037 1.414-1.414 7.934 7.934 5.26-3.157.497.259a23.764 23.764 0 0 0 3.819 1.587l.533.169L26.781 61h10.438l1.487-5.945.533-.169a23.764 23.764 0 0 0 3.819-1.587l.497-.259 5.26 3.157 7.382-7.382-3.157-5.26.259-.497a23.892 23.892 0 0 0 1.588-3.819l.168-.534L61 37.219V26.781l-5.945-1.487-.169-.533a23.764 23.764 0 0 0-1.587-3.819l1.773-.924a25.967 25.967 0 0 1 1.546 3.606L63 25.219v13.562l-6.382 1.595a25.882 25.882 0 0 1-1.291 3.104l3.388 5.646-9.589 9.589-5.646-3.388a25.854 25.854 0 0 1-3.104 1.291L38.781 63zM8.928 43.982a26.106 26.106 0 0 1-1.546-3.606L1 38.781V25.219l6.382-1.595c.358-1.05.79-2.09 1.291-3.104l-3.388-5.646 9.589-9.589 5.646 3.388a25.854 25.854 0 0 1 3.104-1.291L25.219 1h13.562l1.595 6.382c1.05.358 2.09.79 3.104 1.291l5.646-3.388 9.037 9.037-1.414 1.414-7.934-7.934-5.26 3.157-.497-.259a23.764 23.764 0 0 0-3.819-1.587l-.533-.169L37.219 3H26.781l-1.487 5.945-.533.169c-1.295.408-2.58.942-3.819 1.587l-.497.259-5.26-3.157-7.382 7.382 3.157 5.26-.259.497a23.764 23.764 0 0 0-1.587 3.819l-.169.533L3 26.781v10.438l5.945 1.486.168.534c.41 1.297.944 2.582 1.588 3.819l-1.773.924z" fill="#000000" class="fill-3f3a34"></path><path d="M32 54c-12.131 0-22-9.869-22-22s9.869-22 22-22 22 9.869 22 22-9.869 22-22 22zm0-42c-11.028 0-20 8.972-20 20s8.972 20 20 20 20-8.972 20-20-8.972-20-20-20zM31 5h2v2h-2z" fill="#000000" class="fill-3f3a34"></path><path transform="rotate(-45.001 13.615 13.615)" d="M12.615 12.615h2v2h-2z" fill="#000000" class="fill-3f3a34"></path><path d="M5 31h2v2H5z" fill="#000000" class="fill-3f3a34"></path><path transform="rotate(-45.001 13.615 50.385)" d="M12.615 49.385h2v2h-2z" fill="#000000" class="fill-3f3a34"></path><path d="M31 57h2v2h-2z" fill="#000000" class="fill-3f3a34"></path><path transform="rotate(-45.001 50.384 50.386)" d="M49.385 49.385h2v2h-2z" fill="#000000" class="fill-3f3a34"></path><path d="M57 31h2v2h-2z" fill="#000000" class="fill-3f3a34"></path><path transform="rotate(-45.001 50.385 13.616)" d="M49.385 12.615h2v2h-2z" fill="#000000" class="fill-3f3a34"></path><path d="M38 38H26V26h12v12zm-10-2h8v-8h-8v8z" fill="#000000" class="fill-3f3a34"></path><path d="M42 22h-5v-3h-2v3h-2v-3h-2v3h-2v-3h-2v3h-5v5h-3v2h3v2h-3v2h3v2h-3v2h3v5h5v3h2v-3h2v3h2v-3h2v3h2v-3h5v-5h3v-2h-3v-2h3v-2h-3v-2h3v-2h-3v-5zm-2 18H24V24h16v16zM27 15h2v2h-2zM31 15h2v2h-2zM35 15h2v2h-2zM15 35h2v2h-2zM15 31h2v2h-2zM15 27h2v2h-2zM35 47h2v2h-2zM31 47h2v2h-2zM27 47h2v2h-2zM47 27h2v2h-2zM47 31h2v2h-2zM47 35h2v2h-2z" fill="#e27a03" class="fill-e56565"></path></svg>
                </div>
        </div>
            <div class="col-sm-3" id="colfi">
                <div class="container-sm" id="contabout">
                    <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><g data-name="katman 2"><path d="M23 51v-4.56M43.87 40.83A7.26 7.26 0 0 0 41 46.44" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" fill="none" class="stroke-434a54"></path><path d="M35 54.46V57a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-2.54a4 4 0 0 0 2 .54h2a4 4 0 0 0 2-.54Z" fill="#ecf0f1" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" class="fill-ecf0f1 stroke-434a54"></path><path d="M37 47v4a4 4 0 0 1-4 4h-2a4 4 0 0 1-4-4v-4Z" fill="#ecf0f1" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" class="fill-ecf0f1 stroke-434a54"></path><path d="M47 25.82a15 15 0 0 1-5.63 11.89A11.24 11.24 0 0 0 37 46.44V47H27v-.56a10.65 10.65 0 0 0-4.08-8.5A15 15 0 1 1 47 25.82Z" fill="#e27a03" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" class="fill-f1c40f stroke-434a54"></path><path d="M30 47V35M34 47V35M30 35l-6-6M34 35l6-6M26 15.61A11.94 11.94 0 0 1 32 14M20 26a12 12 0 0 1 2.57-7.42M32 8V4M19.27 13.27l-2.83-2.83M14 26h-4M50 26h4M44.73 13.27l2.83-2.83M27 50h10" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" fill="none" class="stroke-434a54"></path><path d="M0 0h64v64H0z" fill="none"></path></g></svg>
                </div>
        </div>
    </div>


</div>

<?php include("footer.php") ?>

</body>
</html>



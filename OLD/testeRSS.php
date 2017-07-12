<html xmlns="http://w3.org/1999/xhtml" xml:lang="pt-br">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

   <title>Teste...</title>

   <!-- jQuery library (served from Google) -->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <!-- bxSlider Javascript file -->
   <script type="text/javascript" src="javascripts/jquery.bxslider.js"></script>
   <!-- bxSlider CSS file -->
   <link type="text/css" rel="stylesheet" href="stylesheets/jquery.bxslider.css" />

   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
         integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
         integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

   <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
         integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

   <!-- Folha de Estilo Personalizada -->
   <link type="text/css" rel="stylesheet" href="stylesheets/style_commom.css" />

   <!-- Classe HostRSS.php -->
   <?php require_once("requires/HostRSS.php"); ?>

   <!-- Variáveis do Sistema -->
   <?php require_once("requires/definitions.php"); ?>

   <!-- Javascript do Relógio -->
   <?php include("includes/inc_Relogio.js"); ?>

   <!-- Javascript de Rolagem de texto -->
   <?php include("includes/inc_bxSlider.js"); ?>
</head>

<!--
<body onLoad="initTimer();">
-->
<body>
   <!--
   <div class="col-lg-1 cabecalho"><span class="relogio" id="timer">00:00:00</span></div>
   -->

   <?php $rssTV = new HostRSS($_RSSURL); ?>

   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 cabecalho">
            .:: MURAL DE NOTÍCIAS ::.
         </div>
      </div>

      <div class="row">
         <div class="col-lg-4 conteudo">
            <br/>
            <!--------------------------------------------------->
            <!-- INÍCIO: Painel com NOTÍCIAS -->
            <div class="panel panel-danger">
               <?php $rssTV->setTypeFeed("Notícias"); ?>
               <div class="panel-heading">
                  <span class="glyphicon glyphicon-pushpin titulo_painel_noticias" aria-hidden="true"></span>
                  <span class="titulo_painel_noticias">&nbsp;&nbsp;&nbsp;<?php echo "Notícias";//$rssTV->getTypFeed(); ?></span>
               </div>
               <div class="panel-body">
                  <?php include("includes/inc_Noticias.php"); ?>
               </div>
            </div>
            <!-- INÍCIO: Painel com EDITAIS -->
            <div class="panel panel-info">
               <?php $rssTV->setTypeFeed("Notícias"); ?>
               <div class="panel-heading">
                   <span class="glyphicon glyphicon-th-list titulo_painel_editais" aria-hidden="true"></span>
                   <span class="titulo_painel_editais">&nbsp;&nbsp;&nbsp;<?php echo "Editais"; //$rssTV->getTypFeed(); ?></span>
               </div>
               <div class="panel-body">
                  <?php include("includes/inc_Editais.php"); ?>
               </div>
            </div>
            <!-- INÍCIO: Painel com PORTARIAS -->
            <div class="panel panel-success">
               <?php $rssTV->setTypeFeed("Notícias"); ?>
               <div class="panel-heading">
                   <span class="glyphicon glyphicon-th-list titulo_painel_editais" aria-hidden="true"></span>
                   <span class="titulo_painel_editais">&nbsp;&nbsp;&nbsp;<?php echo "Portarias"; // $rssTV->getTypFeed(); ?></span>
               </div>
               <div class="panel-body">
                  <?php include("includes/inc_Portarias.php"); ?>
               </div>
            </div>
            <!--------------------------------------------------->
         </div>
         <div class="col-lg-8 conteudo">
            <br/>
            <!--------------------------------------------------->
            <!-- INÍCIO: Painel com VÍDEOS -->
            <div class="panel panel-primary">
               <div class="panel-heading">
                  <span class="glyphicon glyphicon-film titulo_painel_videos" aria-hidden="true"></span>
                  <span class="titulo_painel_videos">&nbsp;&nbsp;&nbsp;IFRN em Pauta</span>
               </div>
               <div class="panel-body">
                  <iframe width="70%" height="56%" src="https://www.youtube.com/embed/videoseries?list=PLXGSAKnrdZXmUOUeEG5-qs0HsDkn-Fuyn&autoplay=1" frameborder="0" allowfullscreen>
               </div>
            </div>
            <!-- FIM: Painel com VÍDEOS -->
            <!--------------------------------------------------->
         </div>
      </div>

      <div class="row">
         <div class="col-lg-12 rodape">
            IFRN ©2017. Todos os direitos reservados. - GRUPO DE PESQUISA EM SEGURANÇA, INOVAÇÃO TECNOLÓGICA e ENGENHARIA DE COMPUTAÇÃO / CAMPUS EaD<br/>
         </div>
      </div>
   </div>

   <?php $rssTV = NULL; ?>

</body>

</html>

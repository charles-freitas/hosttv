
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.or/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://w3.org/1999/xhtml" xml:lang="pt-br">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

   <title>Teste...</title>

   <link type="text/css" rel="stylesheet" href="stylesheets/style_commom.css" />
   <link type="text/css" rel="stylesheet" href="stylesheets/style_layout_box_news.css" />
   <link type="text/css" rel="stylesheet" href="stylesheets/style_layout_box_editais.css" />
   <link type="text/css" rel="stylesheet" href="stylesheets/style_layout_box_destaques.css" />
   <link type="text/css" rel="stylesheet" href="stylesheets/style_layout_box_videos.css" />

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

   <!-- Classe HostRSS.php -->
   <?php require_once("HostRSS.php"); ?>

   <!-- Variáveis do Sistema -->
   <?php require_once("definitions.php"); ?>

   <!-- Javascript do Relógio -->
   <?php include("includes/inc_Relogio.js") ?>

   <!-- Javascript de Rolagem de texto -->
   <?php include("includes/inc_bxSlider.js") ?>
</head>

<body onLoad="initTimer();">
   <?php $rssTV = new HostRSS($_RSSURL); ?>

   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-2 cabecalho"><span class="logo_ifrn">IFRN</span></div>
         <div class="col-lg-8 cabecalho">.:: MURAL DE NOTÍCIAS ::.</div>
         <div class="col-lg-2 cabecalho"><span class="relogio" id="timer">00:00:00</span></div>
      </div>

      <div class="row">
         <div class="col-lg-4 conteudo">
            <br/>
            <!-- INÍCIO: Painel com DESTAQUES -->
            <div class="panel panel-danger">
               <?php $rssTV->setTypeFeed("Destaques"); ?>
               <div class="panel-heading">
                  <span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>
                  <b>&nbsp;&nbsp;&nbsp;<?php echo $rssTV->getTypFeed(); ?></b>
               </div>
               <div class="panel-body">
                  <?php include("includes/inc_Box_Destaques.php") ?>
               </div>
            </div>
            <!--------------------------------------------------->
            <!-- INÍCIO: Painel com NOTÍCIAS -->
            <div class="panel panel-success">
               <?php $rssTV->setTypeFeed("Notícias"); ?>
               <div class="panel-heading">
                  <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                  <b>&nbsp;&nbsp;&nbsp;<?php echo $rssTV->getTypFeed(); ?></b>
               </div>
               <div class="panel-body">
                  <?php include("includes/inc_Box_News.php") ?>
               </div>
            </div>
            <!--------------------------------------------------->
            <!-- INÍCIO: Painel com EDITAIS -->
            <div class="panel panel-danger">
               <?php $rssTV->setTypeFeed("Editais"); ?>
               <div class="panel-heading">
                   <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
                   <b>&nbsp;&nbsp;&nbsp;<?php echo $rssTV->getTypFeed(); ?></b>
               </div>
               <div class="panel-body">
                  <?php include("includes/inc_Box_Editais.php") ?>
               </div>
            </div>
            <!--------------------------------------------------->
         </div>
         <div class="col-lg-8 conteudo">
            <br/>
            <!-- INÍCIO: Painel com VÍDEOS -->
            <div class="panel panel-primary">
               <div class="panel-heading">
                  <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                  <b>&nbsp;&nbsp;&nbsp;IFRN em Pauta</b>
               </div>
               <div class="panel-body">Panel content</div>
            </div>
            <!--------------------------------------------------->
         </div>
      </div>

      <div class="row">
         <div class="col-lg-12 rodape">
            Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte ©20176. Todos os direitos reservados.<br/>
            Av. Senador Salgado Filho, 1559 - Tirol Natal / RN<br/>
            CEP: 59015-000
         </div>
      </div>
   </div>

   <?php $rssTV = NULL; ?>

</body>

</html>

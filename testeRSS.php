
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

   <div id="geral">
      <div id="cabecalho">
        .:: MURAL DE NOTÍCIAS ::.
        <div id="relogio"><span id="timer">00:00:00</span></div>
      </div>
      <div id="principal">
         <div id="conteudo-1">
            <br/>
            <!-- =========================================================== -->
            <!-- INÍCIO: Box com DESTAQUES -->
            <?php include("includes/inc_Box_Destaques.php") ?>
            <!-- TÉRMINO: Box com os PORTARIAS -->
            <!-- =========================================================== -->
            <br/><br/>
            <!-- =========================================================== -->
            <!-- INÍCIO: Box com as NOTÍCIAS -->
            <?php include("includes/inc_Box_News.php") ?>
            <!-- TÉRMINO: Box com as NOTÍCIAS -->
            <!-- =========================================================== -->
            <br/><br/>
            <!-- =========================================================== -->
            <!-- INÍCIO: Box com os EDITAIS -->
            <?php include("includes/inc_Box_Editais.php") ?>
            <!-- TÉRMINO: Box com os EDITAIS -->
            <!-- =========================================================== -->
         </div> <!-- Fim da DIV:conteudo-1 -->
         <div id="conteudo-2">
           <br/>
           <?php include("includes/inc_Box_Videos.php") ?>
         </div> <!-- Fim da DIV:conteudo-2 -->
      </div> <!-- Fim da DIV:principal -->
      <div id="rodape">
          Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte ©20176. Todos os direitos reservados.<br/>
          Av. Senador Salgado Filho, 1559 - Tirol Natal / RN<br/>
          CEP: 59015-000
        </ul>
      </div>
   </div> <!-- Fim da DIV:geral -->

   <?php $rssTV = NULL; ?>

</body>

</html>

<!DOCTYPE html>
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

   <!-- Folha de Estilo Personalizada -->
   <link type="text/css" rel="stylesheet" href="stylesheets/style_mural.css" />
   <link type="text/css" rel="stylesheet" href="stylesheets/style_common.css" />

   <!-- Classe HostRSS.php -->
   <?php require_once("requires/hostrss.php"); ?>

   <!-- Variáveis do Sistema -->
   <?php require_once("requires/definitions.php"); ?>

   <!-- Javascript do Relógio -->
   <?php include("includes/inc_relogio.js"); ?>

   <!-- Javascript de Rolagem de texto -->
   <?php include("includes/inc_bxslider.js"); ?>
</head>

<body onLoad="initTimer();">
   <?php $rssTV = new HostRSS($_RSSURL); ?>

   <footer>
      IFRN ©2017. Todos os direitos reservados. - Desenvolvido por: GRUPO DE PESQUISA EM SEGURANÇA, INOVAÇÃO TECNOLÓGICA & ENGENHARIA DE COMPUTAÇÃO (LabSITEC)<br/>
   </footer>

   <header>
      <div class="icon">
         <!-- Logomarca do IFRN -->
      </div>
      <div class="title">
         <p class="texto-titulo">Mural do Campus EaD</p>
      </div>
      <div class="hora">
         <span class="texto-hora-icon" id="timer">00:00:00</span>
      </div>
   </header>

   <div class="esquerda">
      <div class="cartao">
         <div class="barra vermelho">
            <h2>Notícias</h2>
         </div>
         <?php include("includes/inc_noticias.php"); ?>
      </div>

      <div class="cartao">
         <div class="barra verde">
            <h2>Editais</h2>
         </div>
         <?php include("includes/inc_editais.php"); ?>
      </div>

      <div class="cartao">
         <div class="barra azul">
            <h2>Portarias</h2>
         </div>
         <?php include("includes/inc_portarias.php"); ?>
      </div>
   </div>

   <div class="direita">
      <div class="video">
         <div class="barra amarelo">
            <h2>Vídeos Institucionais</h2>
         </div>
         <!--
         <iframe width="90%" height="90%" src="https://www.youtube.com/embed/videoseries?list=PLXGSAKnrdZXmUOUeEG5-qs0HsDkn-Fuyn&autoplay=1" frameborder="0" allowfullscreen></iframe>
         -->
      </div>
   </div>
   <?php $rssTV = NULL; ?>

</body>

</html>

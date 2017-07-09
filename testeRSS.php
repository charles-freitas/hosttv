
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.or/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://w3.org/1999/xhtml" xml:lang="pt-br">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

   <title>Teste...</title>

   <link type="text/css" rel="stylesheet" href="stylesheets/style_commom.css" />
   <link type="text/css" rel="stylesheet" href="stylesheets/style_layout_box_news.css" />
   <link type="text/css" rel="stylesheet" href="stylesheets/style_layout_box_editais.css" />

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

   <script type="text/javascript">
      $(document).ready(function(){
         $('#slider1').bxSlider({
            mode: 'fade',
            auto: true,
            autoControls: false,
            pause: 10000, // texto para 10segundos
            controls: false
         });

         $('#slider2').bxSlider({
            mode: 'fade',
            auto: true,
            autoControls: false,
            pause: 10000, // texto para 10segundos
            controls: false
         });

         $('#slider3').bxSlider({
            mode: 'fade',
            auto: true,
            autoControls: false,
            pause: 10000, // texto para 10segundos
            controls: false
         });
      });
   </script>
</head>

<body>
   <?php $rssTV = new HostRSS($RSSURL); ?>

   <div id="geral">
      <div id="cabecalho">.:: MURAL DE NOTÍCIAS ::.</div>
      <div id="principal">
         <div id="conteudo-1">
            <br/>
            <!-- =========================================================== -->
            <!-- INÍCIO: Box com DESTAQUES -->
            <?php include("includes/inc_Box_Destaques.php") ?>
            <!-- TÉRMINO: Box com os PORTARIAS -->
            <!-- =========================================================== -->
            <br/>
            <!-- =========================================================== -->
            <!-- INÍCIO: Box com as NOTÍCIAS -->
            <?php include("includes/inc_Box_News.php") ?>
            <!-- TÉRMINO: Box com as NOTÍCIAS -->
            <!-- =========================================================== -->
            <br/>
            <!-- =========================================================== -->
            <!-- INÍCIO: Box com os EDITAIS -->
            <?php include("includes/inc_Box_Editais.php") ?>
            <!-- TÉRMINO: Box com os EDITAIS -->
            <!-- =========================================================== -->
         </div> <!-- Fim da DIV:conteudo-1 -->
         <div id="conteudo-2">tste
            <!--
            <div id="conteudo-2-1">teste</div>
            <div id="conteudo-2-2"></div>
         -->
         </div> <!-- Fim da DIV:conteudo-2 -->
      </div> <!-- Fim da DIV:principal -->
      <div id="rodape"></div>
   </div> <!-- Fim da DIV:geral -->

   <?php $rssTV = NULL; ?>

</body>

</html>

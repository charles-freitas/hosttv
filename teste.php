
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.or/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://w3.org/1999/xhtml" xml:lang="pt-br">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

   <title>Teste...</title>

   <link type="text/css" rel="stylesheet" href="stylesheets/style_tags.css">
   <link type="text/css" rel="stylesheet" href="stylesheets/style_id.css">
   <link type="text/css" rel="stylesheet" href="stylesheets/style_class.css">

   <?php require_once("classes/HostRSS.php"); ?>
</head>

<body>
   <?php
      // Instanciando o objeto que irá receber o feed de notícias
      $rssTV = new HostRSS("https://ead.ifrn.edu.br/portal/feed/");

      //tamanho do qrCode
      //$size = 150;

      /*
      //Cria um laÃ§o para cada <item> dentro do <channel>, que representa cada registro
      //foreach($rss->channel->item as $item){
          //Montando o qrCode apartir do link (usando API do Google)
          $qrcode = "http://chart.apis.google.com/chart?cht=qr&chl=".$item->guid."&chs=".$size."x".$size."";
      */

      //$rssTV->setTypeFeed("Destaques");
      //$rssTV->setArrayFeed();
      //echo "<h3>".$rssTV->getTypFeed()."</h3>";
      //echo $rssTV->getArrayFeed2();
      //echo $rssTV->getElemArrayFeed('title')."</h3>";
      //foreach ($rssTV->getElemArrayFeed('title') as $var) {
      //   echo $var."<br/><br/>";
      //}

      echo "<hr/>";
      echo "<hr/>";

      $rssTV->setTypeFeed("Notícias");
      $rssTV->setArrayFeed();
      echo "<h3>".$rssTV->getTypFeed()."</h3>";
      //echo $rssTV->getArrayFeed2();
      //echo $rssTV->getElemArrayFeed('title')."</h3>";
      $iPosicao = 0;
      foreach ($rssTV->getElemArrayFeed('title') as $var) {
         echo $var[$iPosicao]."<br/>";
         echo $iPosicao."<br/><br/>"
         iPosicao <- iPosicao + 1;
      }

      //<div class="box_news">
         //echo "<img style=\"-webkit-user-select: none\" src=".$qrcode." align=\"right\">";
         //echo "<h3>".$item->title."</h3
         //echo "<p>".$item->description."</p
      //</div>
      //}

      $rssTV = NULL;
   ?>

</body>

</html>

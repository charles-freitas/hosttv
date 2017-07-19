<?php
   $rssTV->setTypeFeed("Notícias");
?>

<ul id="slider1">
   <?php
      // Montando o array
      $rssTV->setArrayFeed();

      // Montando a lista
      foreach ($rssTV->getArrayFeed() as $var) {
         //Montando o qrCode apartir do link (usando API do Google)
         $qrcode = $_QRCODEURLBASE.$var['guid']."&chs=".$_QRCODESIZE."x".
                   $_QRCODESIZE."";

         echo "\t \t<li>";
         echo "<img style=\"-webkit-user-select: none\" src=".$qrcode.
              " align=\"right\">";

         $partText = explode("–", $var['title']);

         if (empty($partText[1]))  {
            echo "<p class=\"titulo_slider titulo_noticias\">...</p>".
            "<p class=\"corpo_slider corpo_noticias\">".$partText[0].
            "<br/><br/></p>";
         } else {
            echo "<p class=\"titulo_slider titulo_noticias\">".
            $partText[0]."</p><p class=\"corpo_slider corpo_noticias\">".
            $partText[1]."<br/><br/></p>";
         }
         echo "</li> \n";
      }
   ?>
</ul>

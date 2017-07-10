<ul id="slider1">
   <?php
      // Montando o array de NOTÍCIAS
      $rssTV->setArrayFeed();

      // Montando a lista de notícias
      foreach ($rssTV->getArrayFeed() as $var) {
         //Montando o qrCode apartir do link (usando API do Google)
         $qrcode = $_QRCODEURLBASE.$var['guid']."&chs=".$_QRCODESIZE."x".
                   $_QRCODESIZE."";

         echo "\t \t<li>";
         echo "<img style=\"-webkit-user-select: none\" src=".$qrcode.
              " align=\"right\">";

         $partText = explode("–", $var['title']);

         if (empty($partText[1]))  {
            echo "<span class=\"box_news_newstitle\">...".
            "</span><br/><span class=\"box_news_newstext\">".
            $partText[0]."</span>";
         } else {
            echo "<span class=\"box_news_newstitle\">".$partText[0].
            "</span><br/><span class=\"box_news_newstext\">".
            $partText[1]."</span>";
         }
         echo "</li> \n";
      }
   ?>
</ul>

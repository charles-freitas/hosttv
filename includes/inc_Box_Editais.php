<ul id="slider2">
   <?php
      // Montando o array de EDITAIS
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
            echo "<span class=\"box_editais_title_editais\">...".
            "</span><br/><span class=\"box_editais_text_editais\">".
            $partText[0]."</span>";
         } else {
            echo "<span class=\"box_editais_title_editais\">".$partText[0].
            "</span><br/><span class=\"box_editais_text_editais\">".
            $partText[1]."</span>";
         }
         echo "</li> \n";
      }
   ?>
</ul>

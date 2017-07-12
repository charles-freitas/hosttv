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
            echo "<span class=\"titulo_editais\"><br/>...".
            "</span><br/><br/><span class=\"corpo_editais\">".
            $partText[0]."</span>";
         } else {
            echo "<span class=\"titulo_editais\"><br/>".$partText[0].
            "</span><br/><br/><span class=\"corpo_editais\">".
            $partText[1]."</span>";
         }
         echo "</li> \n";
      }
   ?>
</ul>

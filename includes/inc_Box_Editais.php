<div class="box_editais">
   <?php $rssTV->setTypeFeed("Editais"); ?>
   <span class="box_editais_title">
      .:: <?php echo $rssTV->getTypFeed(); ?>
   </span>

   <ul id="slider2">
      <?php
         // Montando o array de EDITAIS
         $rssTV->setArrayFeed();

         // Montando a lista de notícias
         foreach ($rssTV->getArrayFeed() as $var) {
            // Tamanho do qrCode
            $size = 110;

            //Montando o qrCode apartir do link (usando API do Google)
            $qrcode = $QRCODEURLBASE.$var['guid']."&chs=".$QRCODESIZE."x".
                      $QRCODESIZE."";

            echo "\t \t<li>";
            echo "<img style=\"-webkit-user-select: none\" src=".$qrcode.
                 " align=\"right\">";

            $partText = explode("–", $var['title']);

            if (empty($partText[1]))  {
               echo "<span class=\"box_news_newstitle\">...".
               "</span><br/><span class=\"box_news_newstext\">".
               $partText[0]."</span><br/>";
            } else {
               echo "<span class=\"box_editais_newstitle\">".$partText[0].
               "</span><br/><span class=\"box_editais_newstext\">".
               $partText[1]."</span><br/>";
            }
            echo "</li> \n";
         }
      ?>
   </ul>
</div>

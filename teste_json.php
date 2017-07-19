<?php

$json_file = file_get_contents(
     "https://ead.ifrn.edu.br/portal/wp-json/ifrn-ead/v1/edital/");

     $json_str = json_decode($json_file, true);

     $itens = $json_str['nodes'];

     var_dump($json_str);

     $this->ArrayFeed = array();
     foreach ($this->rss->channel->item as $itemArray) {
        if ($itemArray->category == $this->TypeFeed) {
           array_push($this->ArrayFeed, Array(
                          "category"    => $itemArray->category,
                          "guid"        => $itemArray->guid,
                          "title"       => $itemArray->title,
                          "description" => $itemArray->description));
        };
     }

     //foreach ( $itens as $e )
      //   { echo $e['title']."<br>"; }
?>

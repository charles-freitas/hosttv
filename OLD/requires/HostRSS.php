<?php

class HostRSS {

   // Atributos Privados
   private $RssUrl;
   private $rss;
   private $TypeFeed;
   private $ArrayFeed = array();

   // Método Construtor
   public function __construct($url) {
      $this->RssUrl = $url;
      $this->rss = simplexml_load_file($url);
   }

   // Método de Define o valor do atributo -> $RssUrl
   public function setRssUrl($url) {
      $this->RssUrl = $url;
      $this->rss = simplexml_load_file($url);
   }

   // Método de Define o valor do atributo -> $TypeFeed
   public function setTypeFeed($feedtype) {
      $this->TypeFeed = $feedtype;
   }

   // Método de Retorna o valor do atributo -> $RssUrl
   public function getRssUrl() {
      return $this->RssUrl;
   }

   // Método de Retorna o valor do atributo -> $TypeFeed
   public function getTypFeed() {
      return $this->TypeFeed;
   }

   // Método para montar Array com o feed selecionado
   public function setArrayFeed() {
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
   }


   public function getArrayFeed() {
      return array_values($this->ArrayFeed);
   }

   public function getArrayFeed2(){
      foreach ( $this->ArrayFeed as $var ) {
         echo $var['category']."<br/>".$var['title']."<br/>".$var['guid']."<br/>".$var['description']."<br/><br/><br/>";
      }
   }


} // Fim da classe

?>

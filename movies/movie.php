<?php
class Movie{
    protected $title;
    protected $type;
    protected $genre;


    public function __construct($_title,$_genre){
        $this->title = $_title;
        $this -> type = $_genre;
    }

   public function getTitle(){
       return $this->title;
   }
}
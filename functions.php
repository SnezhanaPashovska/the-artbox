<?php


function getArtwork(array $oeuvres):array{
  foreach ($oeuvres as $oeuvre){
    echo $oeuvre['title'].['author'].['description'].['image'];
  }
}

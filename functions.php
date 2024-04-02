<?php


function getArtwork(array $oeuvres):array{
  foreach ($oeuvres as $oeuvre){
    echo $oeuvre['nom_oeuvre'].['author'].['description'].['image'];
  }
}

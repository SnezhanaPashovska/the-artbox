<?php
include('header.php');
include ('bdd.php');

$id = $_GET['id'];
$id = (int) $id;
$isOeuvre = null; 

foreach ($oeuvres as $oeuvre){  
  if($id == $oeuvre['id']){
      $isOeuvre = $oeuvre;   
  }
}  
?>
    <article id="detail-oeuvre"> 
     <?php   if ($isOeuvre){?>
    
        <div id="img-oeuvre">
            <img src='<?= $isOeuvre['image'];?>' alt='<?php echo $isOeuvre['title']?>'>
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $isOeuvre['title']?></h1>
            <p class="description"><?php echo $isOeuvre['author']?></p>
            <p class="description-complete"><?php echo $isOeuvre['description']?>
            </p>
        </div>
    </article>  
    
   <?php } else{
    echo "Empty page";
   }?>
 
<?php include('footer.php') ?>

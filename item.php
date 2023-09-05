<?php
    include('header.php');
    include('my-functions.php');
    $nom = "Vélo";
    $prix = 1500;
    $photo = "images/velo.jpg";
?>
    <div class="produit">
        <h2 class="titre-produit"><?php echo $nom ?></h2>
        <p>description produit</p>
        <img src="<?php echo $photo ?>" alt="vélo">
        <p class="prix-ttc"><?php echo formatPrice($prix) ?></p>
    </div>
<?php
    include('footer.php');
?>
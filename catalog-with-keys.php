<?php
    include('my-functions.php');
    include('header.php');
    $product = [
        "nom" => "Vélo",
        "prix" => 1500,
        "poids" => 2500,
        "ristourne" => 10,
        "photo" => "images/velo.jpg",
    ];
?>
<div class="produit">
    <h2 class="titre-produit"><?php print_r($product['nom']) ?></h2>
    <p>description produit</p>
    <img src="<?php print_r($product['photo']) ?>" alt="photo produit">
    <p class = "prix-ttc">Prix TTC : <?php formatPrice($product['prix']) ?></p>
    <p class = "prix-ht">Prix HT : <?php formatPrice(priceExcludingVAT($product['prix'])) ?></p>
    <p class="ristourne">RISTOURNE : <?php echo $product['ristourne'] ?><?php if ($product['ristourne'] == null) echo "0" ?> %</p>
    <p class = "prix-ristourne-ttc">Prix TTC après ristourne : <?php formatPrice(discountedPrice($product['prix'], $product['ristourne']))?></p>
    <p class = "prix-ristourne-ht">Prix TTC après ristourne : <?php formatPrice(priceExcludingVAT(discountedPrice($product['prix'], $product['ristourne'])))?></p>
</div>
<?php
    include('footer.php');
?>
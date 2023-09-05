<?php
    include('my-functions.php');
    include('header.php')
?>

<pre>
    <?php

    $products = ["Vélo", "Trottinette", "Scooter"];


    sort($products);
    print_r($products[0]);
    print_r($products[2]); ?>
</pre>
<pre>
    Boucle for :
    <?php
    for ($i = 0; $i < count($products); $i++)
        echo $products[$i];
    ?>
</pre>
<pre>
    Boucle while :
    <?php
    $i = 0;
    while ($i <= count($products)) {
        echo $products[$i];
        $i++;
    }
    ?>
</pre>
<pre>
    Boucle do-while :
    <?php
    $i = 0;
    do {
        echo $products[$i];
        $i++;
    } while ($i <= count($products))
    ?>
</pre>
<?php
    include('footer.php');
?>
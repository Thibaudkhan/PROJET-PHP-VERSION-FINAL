<?php

require '../ThibaudBase.php';

     $db = Database::connect();

    $statement = $db->query('SELECT nom, sPontoise, sChamperet FROM personnes WHERE sPontoise= 1 AND sChamperet = 1');

    echo '<h1>Champeret et Pontoise </h1>';

    while($test = $statement->fetch()){
    	?>
    
    <ul>
    	<?php echo $test['nom']; ?>
    </ul>

   <?php

}

?>


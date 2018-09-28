<?php

require '../ThibaudBaseTEST.php';

     $db = Database::connect();

    $statement = $db->query('SELECT nom,sPontoise, sChamperet FROM personnes WHERE sPontoise= 0 AND sChamperet = 1');

    echo '<h1>Champeret</h1>';

    while($test = $statement->fetch()){
    	?>
    
    <ul>
    	<?php echo $test['nom']; ?>
    </ul>

   <?php

}

?>


<?php

require '../ThibaudBaseTEST.php';

     $db = Database::connect();

    $statement = $db->query('SELECT nom,sPontoise FROM personnes WHERE sPontoise= 1 AND sChamperet = 0');

    echo '<h1>Pontoise</1>';

    while($test = $statement->fetch()){
    	?>
    
    <ul>
    	<?php echo $test['nom']; ?>
    </ul>

   <?php

}

?>


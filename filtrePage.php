<?php

    require 'ThibaudBase.php';
     $db = Database::connect();

     echo '<h1>Résumé</h1> ';

    if(isset($_GET['id'])){
        $delete = $db->prepare('DELETE FROM cours WHERE id = ?');
        $delete->execute(array($_GET['id']));
    }

   
    $statement = $db->query('SELECT * FROM cours');

    $nbr = $statement->RowCount();
    if($nbr == 0)
    {
        echo "Il n'y a aucune donnée pour la table cours";
    }

     if(isset($_GET['id'])){
        $delete = $db->prepare('DELETE FROM personnes WHERE id = ?');
        $delete->execute(array($_GET['id']));
    }

   
    $statement = $db->query('SELECT * FROM personnes');

    $nbr = $statement->RowCount();
    if($nbr == 0)
    {
        echo "Il n'y a aucune donnée pour la table personnes";
    }





    



?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<p> Bouton Recherche du nom et de Pontoise <a href="lien/Pontoise.php"><input type="button" class="btn" value="Click Me" /></a> </p>
		<p> Bouton Recherche du nom et de Champeret <a href="lien/Champeret.php"><input type="button" class="btn" value="Click Me" /></a> </p>
		<p> Bouton Recherche du nom et des sites <a href="lien/PontoiseChamperet.php"><input type="button" class="btn" value="Click Me" /></a> </p>


		 <?php 
            while($fetch = $statement->fetch() )
            {
            ?>
                <form method="POST" action="filtrePage.php?id= <?= $fetch['id']; ?>" >
                     <?= $fetch['nom']; ?> : <input type="submit" value="Supprimer">

           
                </form>
                
                <?php

            }


        ?>

</body>
</html>


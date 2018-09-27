<!DOCTYPE html>
<html>
    <head>
        <title>BDD</title>
        
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/Thibaud.css">
 
    </head>
    
    <body>
        
    	<h1> Tableau Intervenants </h1>
        <div class="container admin">

                	<div class="bouton"> <a href="insert.php" class="bouton btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> Add</a> </div>    
                	<table class="table table-striped table-bordered">
                  <thead>
                    <tr >
                      <div class="center">
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Mail</th>
                      <th>Télephone</th>
                      <th>Site Pontoise</th>
                      <th>Site Champeret</th>
                      <th>Nom du Cours</th>
                      </div>
                     
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                        require 'Thibaudbase.php';
                        require 'Form.php';

                        $db = Database::connect();
                        $statement = $db->query('SELECT DISTINCT  nom, prenom, mail, tel, sPontoise, sChamperet, nCours FROM personnes');
                        while($item = $statement->fetch()) 
                        {
                            
                            echo '<tr class="ligneTab">';

                            echo '<td>'. $item['nom'] . '</td>';

                            echo '<td>'. $item['prenom'] . '</td>';
                            echo '<td>'. $item['mail'] . '</td>';
                            echo '<td>'. $item['tel'] . '</td>';
                            echo '<td>'. $item['sPontoise'] . '</td>';
                            echo '<td>'. $item['sChamperet'] . '</td>';
                            echo '<td>'. $item['nCours'] . '</td>';

                           

                            
                            echo '</td>';
                            echo '</tr>';
                            echo "</div>";
                        }
                        
                      ?>
                  </tbody>
                </table>
            
        </div>
    </body>
</html>
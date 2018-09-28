<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title></title>
        <meta charset="utf-8"/>
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styleF.css">  
    </head>    
    
    <body class="bodyPersonnes"> 
    <a href="indexPersonnes.php"> <img class="logocoding" src="./Image/logo2.jpg" alt="Logo Coding Factory"></a>

     <div class="boiteHeader">

    <div class="dn">

    <div class="menu1 surv surv:hover" ">
        <a href="https://codingfactory.fr/concept/" class="menu3">
            <div class="menu2">CONCEPT</div></a>
    </div>

    <div class="menu1 surv surv:hover">
        <a href="https://codingfactory.fr/developpeur/" class="menu3">
            <div class="menu2">FORMATIONS</div></a>
    </div>

    <div class="menu1 surv surv:hover">
        <a href="https://codingfactory.fr/equipe/" class="menu3">
            <div class="menu2">EQUIPE</div></a>
    </div>

    <div class="menu1 surv surv:hover">
        <a href="https://codingfactory.fr/entreprises/" class="menu3">
            <div class="menu2">ENTREPRISE</div></a>
    </div>

    <div class="menu1 surv surv:hover">
        <a href="https://codingfactory.fr/presse/" class="menu3">
            <div class="menu2">PRESSE</div></a>
    </div>
</div>
</div>
</div>

    <ul class="topnav">
        <li><a class="accueilnav" href="indexPersonnes.php">INTERVENANTS</a></li>
        <li><a class="calendriernav" href="./Calendrier/9Septembre.html">CALENDRIER</a></li>
        <li><a class="intervenantsnav" href="indexCours.php">MATIERE</a></li>
        <li><a class="intervenantsnav" href="filtrePage.php">RESUME</a></li>
    </ul>
            <h1>Personnes</h1>


        <?php
            require "database.php";
            require "Form.php";
            require "personnes.php";
            require "Thibaudbase.php";

            $myForm = new Form('post');
            $bdd = new data('mysql', 'localhost', 'intervenants', 'root', '');
            $bdd->getmybdd();
            $bdd->getAllRow('personnes');
        ?> 

        <form method="post" id="contact-formPersonnes">

        <?php        

            $myForm->input('Nom');echo '<p class="test">Ex : "Votre Nom"</p>';
            $myForm->input('Prenom');echo '<p class="test">Ex : "Votre Prenom"</p>';
            $myForm->input('Mail');echo '<p class="test">Ex : "exemple@gmail.com"</p>';
            $myForm->input('Tel');echo '<p class="test">Ex : "0666666666"</p>';
            $myForm->input('Site_Pontoise');echo '<p class="test">Ex : "0=non 1=oui"</p>';
            $myForm->input('Site_Champeret');echo '<p class="test">Ex : "0=non 1=oui"</p>';
            $myForm->input('Nom_Cours');echo '<p class="test">Ex : "Sujet du Cours"</p>';
            $myForm->submit();          
        ?>

        

        </form>

        <?php
       
        if(sizeof($_POST)>0){
      
        $perso = new personnes($_POST['Nom'],$_POST['Prenom'],$_POST['Mail'],$_POST['Tel'],$_POST['Site_Pontoise'],$_POST['Site_Champeret'],$_POST['Nom_Cours']);
        $bdd->setInsertPersonnes($perso->getNom(),$perso->getPrenom(), $perso->getMail(), $perso->getTel(), $perso->getSPontoise(), $perso->getSChamperet(), $perso->getNCours());
        $bdd->getAllRow("personnes");       
        }
        ?>  
        <h1> Tableau Intervenants </h1>


            <table class="tabCours">
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

                $db = Database::connect();
                $statement = $db->query('SELECT * FROM personnes');
                while($item = $statement->fetch()) 
                {
                    if($item['id'] % 2 == 0){
                        echo '<tr class="pair">';
                    }
                    else {
                        echo '<tr class="impair">';
                    }

                    echo '<td>'. $item['nom'] . '</td>';

                    echo '<td>'. $item['prenom'] . '</td>';
                    echo '<td>'. $item['mail'] . '</td>';
                    echo '<td>'. $item['tel'] . '</td>';
                    echo '<td>'. $item['sPontoise'] . '</td>';
                    echo '<td>'. $item['sChamperet'] . '</td>';
                    echo '<td>'. $item['nCours'] . '</td>';

                
                    echo '</tr>';
                    echo "</div>";
                }
                
              ?>
          </tbody>
        </table>
        

            
        
        <footer>
			<p>
			<img src="./Image/logos1.jpg" class="footerimg1"><br>
			</p>
			<p>La Coding Factory by ITESCIA est une école du code créée à l'initiative d'<span>ITESCIA</span> , école de la <span>CCI Paris Ile-de-France.</span></p>

			<div class="section_footer_colored">
				<p class="mention_padding"><a href="#" class="linkfooter">Mention Légales</a> - <a href="#" class="linkfooter">Plan du Site</a> - <a href="#" class="linkfooter">Contact</a></p>
				<p>Copyright 2018 SMARTACUS</p>	
				<a href="https://www.facebook.com/itescia/"> <p><i class="fab fa-facebook-f"></i></a>
				<a href="https://twitter.com/itescia"> <i class="fab fa-twitter"></i></a>
				<a href="https://www.linkedin.com/school/itescia/"> <i class="fab fa-linkedin-in"></i></a>
				<a href="https://www.instagram.com/itescia_officiel/"> <i class="fab fa-instagram"></i></p></a>
			</div>
	
        </footer>
        
    </body>
</html>
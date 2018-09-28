<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title></title>
        <meta charset="utf-8"/>
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styleF.css">      
    </head>    
    
    <body class="bodyCours">
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
        <li><a class="accueilnav" href="indexPersonnes.php">ACCUEIL</a></li>
        <li><a class="calendriernav" href="./Calendrier/9Septembre.html">CALENDRIER</a></li>
        <li><a class="intervenantsnav" href="indexCours.php">INTERVENANTS</a></li>
    </ul>
        
        <?php
		    require "database.php";
            require "Form.php";
            require "matiere.php";

            $myForm = new Form('post');
            $bdd = new data('mysql', 'localhost', 'intervenants', 'root', '');
            $bdd->getmybdd();
            $bdd->getAllRow('cours');
        ?> 

        <form method="post" id="contact-formPersonnes">

        <?php        

        $myForm->input('Nom');echo '<p class="test">Ex : "Votre Nom"</p>';
        $myForm->input('Description');echo '<p class="test">Ex : "Description du cours"</p>';
        $myForm->input('Date');echo '<p class="test">Ex : "YYYY/MM/DD"</p>';
        $myForm->submit();
        ?>

        </form>

        <?php
       
        if(sizeof($_POST)>0){
      
        $mat = new matiere($_POST['Nom'],$_POST['Description'],$_POST['Date']);
        $bdd->setInsert($mat->getNom(),$mat->getDescription(), $mat->getaDate());
        $bdd->getAllRow("cours");        
        }
        ?>
        
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
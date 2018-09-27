<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Contactez-Moi !</title>
        <meta charset="utf-8"/>

        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/styleF.css">
      
    </head>
    
    
    <body>
        
        <?php

            require "database.php";
            require "Form.php";
            require "personnes.php";




            $myForm = new Form('post');
            $bdd = new data('mysql', 'localhost', 'intervenants', 'root', '');

            $bdd->getmybdd();
            $bdd->getAllRow('personnes'); // SI personne alors remplacer par peersonnes.



            ?> 

            <form method="post" id="contact-form">

        <?php
        

        $myForm->input('Nom');
        $myForm->input('Prenom');
        $myForm->input('Mail');
        $myForm->input('Tel');
        $myForm->input('sPontoise');
        $myForm->input('sChamperet');
        $myForm->input('nCours');
      
        $myForm->submit();

        ?>

        </form>

        <?php
       
        if(sizeof($_POST)>0){
      
        $perso = new personnes($_POST['Nom'],$_POST['Prenom'],$_POST['Mail'],$_POST['Tel'],$_POST['sPontoise'],$_POST['sChamperet'],$_POST['nCours']);
        $bdd->setInsertPersonnes($perso->getNom(),$perso->getPrenom(), $perso->getMail(), $perso->getTel(), $perso->getSPontoise(), $perso->getSChamperet(), $perso->getNCours());
        $bdd->getAllRow("personnes");

        
        
        }
        ?>

          <!-- <div class="container">
                
                <div class="heading">
                    <h1>Formulaire cours</h1>
                </div>
                    
               <div class="row">
                   
                        <form id="contact-form" method="post" action="" role="form">
                            
                                <div >
                                    <label for="firstname">Prénom <span class="blue">*</span></label>
                                    <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom">
                                    <p class="comments"></p>
                                </div>
                                <div class="col-md-6">
                                    <label for="name">Nom <span class="blue">*</span></label>
                                    <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom">
                                    <p class="comments"></p>
                                </div>
                                
                                <div class="col-md-12">
                                    <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="button1" value="Envoyer">
                                </div>    
                            </div>
                        </form> 
                    
            </div> -->
        
    </body>

</html>
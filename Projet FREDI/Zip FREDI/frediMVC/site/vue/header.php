<!DOCTYPE html>

<html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css"/>
    <meta charset="UTF-8">
    <title>FREDI</title>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="">
        <h1><b>FREDI</b></h1>
      </a>
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="./?action=accueilUser">
           Accueil
        </a>
        <?php
        if($_SESSION['transfert']==1 || $_SESSION['ouvert']==false){

        }else{
           echo('<a class="navbar-item" href="./?action=profil">
            Mes coordonnées
            </a>');

          echo('<a class="navbar-item"  href="./?action=accueilBordereau">
             Mon bordereau
              </a>');

           echo('<a class="navbar-item"  href="./?action=transfert">
               Transférer mon bordereau
              </a>');
        }
        ?>
        <a class="navbar-item"  href="./?action=disconnect">
         Se déconnecter
        </a>
      </div>
    </div>
  </nav>
  <hr/>
  </head>

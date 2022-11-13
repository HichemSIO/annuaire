<?php
/**
* Teste si un quelconque visiteur est connecté
* @return vrai ou faux
*/
function estConnecte(){
return isset($_SESSION['idVisiteur']);
}
/**
* Enregistre dans une variable session les infos d'un visiteur

* @param $id
* @param $nom
* @param $prenom
*/
function connecter($id,$nom,$prenom){
$_SESSION['idVisiteur']= $id;
$_SESSION['nom']= $nom;
$_SESSION['prenom']= $prenom;
}

/**
* Détruit la session active
*/
function deconnecter(){
session_destroy();
}

function ajouterErreur($msg)
{
    if (!isset($_REQUEST['erreurs'])) {
        $_REQUEST['erreurs'] = array();
    }
    $_REQUEST['erreurs'][] = $msg;
}
/**
 * Retoune le nombre de lignes du tableau des erreurs 
 
 * @return le nombre d'erreurs
 */
function nbErreurs()
{
    if (!isset($_REQUEST['erreurs'])) {
        return 0;
    } else {
        return count($_REQUEST['erreurs']);
    }
}

?>
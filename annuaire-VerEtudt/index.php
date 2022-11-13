<?php
if (session_status() === PHP_SESSION_NONE) { session_start(); }
include 'models/m_model.php';
include 'models/fct.inc.php';
include 'views/v_gabarit_entete.php';


$pdo= PdoBridge::getPdoBridge();
$estConnecte = estConnecte();
if(!$estConnecte)
{
    
        include 'views/v_menu.php';
    
}
$uc = 'Connection';
$action = 'demandeConnexion';
if (isset($_REQUEST['action'])) {
    $action=$_REQUEST['action'];
}

if (isset($_REQUEST['uc'])) {
    $uc=$_REQUEST['uc'];
}
include "controllers/c_$uc.php";

include("views/v_gabarit_pied.php");
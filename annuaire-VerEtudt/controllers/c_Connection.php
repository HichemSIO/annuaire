<?php
switch($action){
	case 'demandeConnexion':{
		include("views/v_Connection.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		$visiteur = $pdo->getInfosVisiteur($login,$mdp);
		if(!is_array( $visiteur)){
			ajouterErreur("Login ou mot de passe incorrect");
			include("views/v_erreur.php");
			include("views/v_Connection.php");
		}
		else{
			$id = $visiteur['id'];
			$nom =  $visiteur['nom'];
			$prenom = $visiteur['prenom'];
			connecter($id,$nom,$prenom);
			include("views/v_menu.php");
		}
		break;
	}
	default :{
		include("views/v_Connection.php");
		break;
	}
}
?>
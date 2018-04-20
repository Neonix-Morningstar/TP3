<?php

	if (!isset($_GET['pro_id']))
	{
		header('Location: index.php');
	}
	
	require '../library/function.php';
	require '../src/autoload.php';


	use repository\Promotion;		
	use repository\Etudiant;

	$pro_id = getInputGet('pro_id');

	$reponse_promo = Promotion::getNomPromotion($pro_id);
	$nom_promo = $reponse_promo->fetch();
	

	$reponse_etu = Etudiant::getEtudiantPromo(getInputGet('pro_id'));
	$nb_etu = $reponse_etu->rowCount();

	require '../view/view_promotion.php';				

?>
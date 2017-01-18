<?php
	namespace ETU2_42;
	/*
	 * CONFIGURATION SAISIE DES NOTES / VALIDATION DES SEMESTRES
	 *
	 * Contient la configuration de l'application :
	 * - la configuration de la base de données
	 * - diverses options de configuration
	 */

	// Configuration de la base de données MySQL
	define('BDD_USERNAME', 'copie_tdf');                 //nom d'utilisateur
	define('BDD_PASSWORD', 'copie_tdf');                     //mot de passe
	define('BDD_HOSTNAME', 'localhost');            //nom d'hôte du serveur MySQL
	define('BDD_DATABASE', 'xe');     //nom de la base de données

	// Affiche chaque requête SQL sur la page.
	define('DEBUG_PDO', false);

	// Active l'affichage des erreurs/warnings PHP.
	define('DEBUG_PHP', true);

	//Durée minimale d'une session en minutes.
	define('SESSION_TIMEOUT', 2 * 60 * 60);

	// Préfixe des tables de la base de données (Saisie des Notes et Validation des Semestres)
	define('BDD_PREFIX_G', 'g_');


	/*// Noms des tables pour Validation des Semestres
	define('TAB_G_ADMINISTRATEUR', BDD_PREFIX_G . 'administrateur');
	define('TAB_G_CATEGORIE', BDD_PREFIX_G . 'categorie');
	define('TAB_G_CLUB', BDD_PREFIX_G . 'club');
	define('TAB_G_EST_INTERESSE', BDD_PREFIX_G . 'est_interesse');
	define('TAB_VAL_G_PRODUIT', BDD_PREFIX_G . 'produit');
	define('TAB_VAL_G_PROPOSERPRODUIT', BDD_PREFIX_G . 'proposerproduit');*/
?>

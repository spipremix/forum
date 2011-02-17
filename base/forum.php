<?php

/***************************************************************************\
 *  SPIP, Systeme de publication pour l'internet                           *
 *                                                                         *
 *  Copyright (c) 2001-2011                                                *
 *  Arnaud Martin, Antoine Pitrou, Philippe Riviere, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribue sous licence GNU/GPL.     *
 *  Pour plus de details voir le fichier COPYING.txt ou l'aide en ligne.   *
\***************************************************************************/

/**
 * Interfaces de la table forum pour le compilateur
 *
 * @param array $interfaces
 * @return array
 */
function forum_declarer_tables_interfaces($interfaces){

	$interfaces['table_des_tables']['forums']='forum';

	$interfaces['exceptions_des_tables']['forums']['date']='date_heure';
	$interfaces['exceptions_des_tables']['forums']['nom']='auteur';
	$interfaces['exceptions_des_tables']['forums']['email']='email_auteur';

	#$interfaces['table_titre']['forums']= "titre, '' AS lang";

	#$interfaces['table_date']['forums']='date_heure';

	$interfaces['tables_jointures']['spip_forum'][]= 'mots_liens';
	$interfaces['tables_jointures']['spip_forum'][]= 'mots';
	$interfaces['tables_jointures']['spip_forum'][]= 'documents_liens';
	$interfaces['tables_jointures']['spip_articles'][] = 'forums';
	$interfaces['tables_jointures']['spip_breves'][] = 'forums';
	$interfaces['tables_jointures']['spip_rubriques'][] = 'forums';
	$interfaces['tables_jointures']['spip_syndic'][] = 'forums';
	$interfaces['tables_jointures']['spip_messages'][] = 'forums';

	$interfaces['table_statut']['spip_forum'][] = array('champ'=>'statut','publie'=>'publie','previsu'=>'publie,prop','exception'=>'statut');

	$interfaces['table_des_traitements']['PARAMETRES_FORUM'][]= 'htmlspecialchars(%s)';
	$interfaces['table_des_traitements']['TEXTE']['forums']= "safehtml("._TRAITEMENT_RACCOURCIS.")";
	$interfaces['table_des_traitements']['TITRE']['forums']= "safehtml("._TRAITEMENT_TYPO.")";
	$interfaces['table_des_traitements']['NOTES']['forums']= "safehtml("._TRAITEMENT_RACCOURCIS.")";
	$interfaces['table_des_traitements']['NOM_SITE']['forums']=  "safehtml("._TRAITEMENT_TYPO.")";
	$interfaces['table_des_traitements']['URL_SITE']['forums']= 'safehtml(vider_url(%s))';
	$interfaces['table_des_traitements']['AUTEUR']['forums']= 'safehtml(vider_url(%s))';
	$interfaces['table_des_traitements']['EMAIL_AUTEUR']['forums']= 'safehtml(vider_url(%s))';

	// gerer les sauts de ligne dans les textes des forums
	$interfaces['table_des_traitements']['TEXTE']['forums'] =
		str_replace('%s', 'post_autobr(%s)',
		$interfaces['table_des_traitements']['TEXTE']['forums']
	);

	return $interfaces;
}


function forum_declarer_tables_objets_sql($tables){
	$tables['spip_forum'] = array(
		'table_objet'=>'forums', # ??? hum hum redevient spip_forum par table_objet_sql mais casse par un bete "spip_".table_objet()
		'type'=>'forum',
	  'url_voir'=>'controler_forum',
	  'url_edit'=>'controler_forum',
	  'editable'=>'non',
	  'principale' => 'oui',
		'page'=>'', // pas de page editoriale pour un forum

		'texte_retour' => 'icone_retour',
		'texte_objets' => 'titre_page_statistiques_messages_forum',
		'info_aucun_objet'=> 'aucun_message_forum',
		'info_1_objet' => 'info_1_message_forum',
		'info_nb_objets' => 'info_nb_message_forum',
		'titre' => "titre, '' AS lang",
		'date' => 'date_heure',

		'field'=> array(
			"id_forum"	=> "bigint(21) NOT NULL",
			"id_objet"	=> "bigint(21) DEFAULT '0' NOT NULL",
			"objet"		=> "VARCHAR (25) DEFAULT '' NOT NULL",
			"id_parent"	=> "bigint(21) DEFAULT '0' NOT NULL",
			"id_thread"	=> "bigint(21) DEFAULT '0' NOT NULL",
			"date_heure"	=> "datetime DEFAULT '0000-00-00 00:00:00' NOT NULL",
			"date_thread"	=> "datetime DEFAULT '0000-00-00 00:00:00' NOT NULL",
			"titre"	=> "text DEFAULT '' NOT NULL",
			"texte"	=> "mediumtext DEFAULT '' NOT NULL",
			"auteur"	=> "text DEFAULT '' NOT NULL",
			"email_auteur"	=> "text DEFAULT '' NOT NULL",
			"nom_site"	=> "text DEFAULT '' NOT NULL",
			"url_site"	=> "text DEFAULT '' NOT NULL",
			"statut"	=> "varchar(8) DEFAULT '0' NOT NULL",
			"ip"	=> "varchar(40) DEFAULT '' NOT NULL",
			"maj"	=> "TIMESTAMP",
			"id_auteur"	=> "bigint DEFAULT '0' NOT NULL"
		),
		'key' => array(
			"PRIMARY KEY"	=> "id_forum",
			"KEY id_auteur"	=> "id_auteur",
			"KEY id_parent"	=> "id_parent",
			"KEY id_thread"	=> "id_thread",
			"KEY optimal" => "statut,id_parent,id_objet,objet,date_heure"
		),
		'join' => array(
			"id_forum"=>"id_forum",
			"id_parent"=>"id_parent",
			"id_article"=>"id_article",
			"id_breve"=>"id_breve",
			"id_message"=>"id_message",
			"id_syndic"=>"id_syndic",
			"id_rubrique"=>"id_rubrique"
		),
		'rechercher_champs' => array(
	    'titre' => 3, 'texte' => 1, 'auteur' => 2, 'email_auteur' => 2, 'nom_site' => 1, 'url_site' => 1
		),
	);

	return $tables;
}

?>

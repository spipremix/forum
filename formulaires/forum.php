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

function formulaires_forum_charger_dist($objet,$id_objet, $id_forum,
$ajouter_mot, $ajouter_groupe, $afficher_texte, $retour) {

	if (!$titre = forum_recuperer_titre($objet,$id_objet,$id_forum))
		return false;

	// ca s'apparenterait presque a une autorisation...
	// si on n'avait pas a envoyer la valeur $accepter_forum au formulaire
	$accepter_forum = substr($GLOBALS['meta']["forums_publics"], 0, 3);
	// il y a un cas particulier pour l'acceptation de forum d'article...
	if ($f = charger_fonction($objet . '_accepter_forums_publics', 'inc', true)){
		$accepter_forum = $f($id_objet);
	}
	if ($accepter_forum == 'non') {
		return false;
	}

	$primary = id_table_objet($objet);

	// table a laquelle sont associ�s les mots :
	if ($GLOBALS['meta']["mots_cles_forums"] != "oui")
		$table = '';
	else
		$table = table_objet($objet);

	// exiger l'authentification des posteurs pour les forums sur abo
	if ($accepter_forum == "abo") {
		if (!$GLOBALS["visiteur_session"]['statut']) {
			return array(
				'action' => '', #ne sert pas dans ce cas, on la vide pour mutualiser le cache
				'editable'=>false,
				'login_forum_abo'=>' ',
				'inscription' => generer_url_public('identifiants', 'lang='.$GLOBALS['spip_lang']),
				'oubli' => generer_url_public('spip_pass','lang='.$GLOBALS['spip_lang'],true),
				);
		}
	}


	// Tableau des valeurs servant au calcul d'une signature de securite.
	// Elles seront placees en Input Hidden pour que inc/forum_insert
	// recalcule la meme chose et verifie l'identite des resultats.
	// Donc ne pas changer la valeur de ce tableau entre le calcul de
	// la signature et la fabrication des Hidden
	// Faire attention aussi a 0 != ''

	$ids = array();

	$ids[$primary] = ($x = intval($id_objet)) ? $x : '';
	$ids['id_objet'] = ($x = intval($id_objet)) ? $x : '';
	$ids['objet'] = $objet;
	$ids['id_forum'] = ($x = intval($id_forum)) ? $x : '';

	// ne pas mettre '', sinon le squelette n'affichera rien.
	$previsu = ' ';

	// au premier appel (pas de Post-var nommee "retour_forum")
	// memoriser eventuellement l'URL de retour pour y revenir apres
	// envoi du message ; aux appels suivants, reconduire la valeur.
	// Initialiser aussi l'auteur

	// par defaut, on veut prendre url_forum(), mais elle ne sera connue
	// qu'en sortie, on inscrit donc une valeur absurde ("!")
	$retour_forum = "!";
	// sauf si on a passe un parametre en argument (exemple : {#SELF})
	if ($retour)
		$retour_forum = str_replace('&amp;', '&', $retour);
	$retour_forum = rawurlencode($retour_forum);

	if (_request('retour_forum')){
		$arg = forum_fichier_tmp(join('', $ids));

		$securiser_action = charger_fonction('securiser_action', 'inc');
		// on sait que cette fonction est dans le fichier associe
		$hash = calculer_action_auteur("ajout_forum-$arg");
	}

	// pour les hidden
	$script_hidden = "";
	foreach ($ids as $id => $v)
		$script_hidden .= "<input type='hidden' name='$id' value='$v' />";

	$script_hidden .= "<input type='hidden' name='arg' value='$arg' />";
	$script_hidden .= "<input type='hidden' name='hash' value='$hash' />";
	$script_hidden .= "<input type='hidden' name='verif_$hash' value='ok' />";
	$script_hidden .= "<input type='hidden' name='afficher_texte' value='$afficher_texte' />";
	$script_hidden .= "<input type='hidden' name='retour_forum' value='$retour_forum' />";

	if ($formats = forum_documents_acceptes()) {
		include_spip('inc/securiser_action');
		$cle = calculer_cle_action('ajouter-document-'.$objet.'-'.$id_objet);
	}
	// Valeurs par defaut du formulaire
	// si le formulaire a ete sauvegarde, restituer les valeurs de session
	$vals = array(
		'titre' => str_replace('~', ' ', extraire_multi($titre)),
		'texte' => '',
		'nom_site' => '',
		'url_site' => 'http://'
	);

	return array_merge($vals, array(
		'modere' => (($accepter_forum != 'pri') ? '' : ' '),
		'table' => $table,
		'config' => array('afficher_barre' => ($GLOBALS['meta']['forums_afficher_barre']!='non'?' ':'')),
		'_hidden' => $script_hidden, # pour les variables hidden
		'cle_ajouter_document' => $cle,
		'formats_documents_forum' => forum_documents_acceptes(),
		'ajouter_document' => $_FILES['ajouter_document']['name'],
		'nobot' => ($cle ? _request($cle) : _request('nobot')),
		'ajouter_groupe' => $ajouter_groupe,
		'ajouter_mot' => (is_array($ajouter_mot) ? $ajouter_mot : array($ajouter_mot)),
		'id_forum' => $id_forum, // passer id_forum au formulaire pour lui permettre d'afficher a quoi l'internaute repond
		'_sign'=>implode('_',$ids),
		'_autosave_id' => $ids,
	));
}


function forum_recuperer_titre($objet, $id_objet, $id_forum=0) {
	include_spip('inc/filtres');
	$titre = "";

	if ($f = charger_fonction($objet.'_forum_extraire_titre', 'inc', true)){
		$titre = $f($id_objet);
	}
	else {
		include_spip('base/objets');
		if (!objet_test_si_publie($objet, $id_objet))
			return false;

		$titre = generer_info_entite($id_objet, $objet,'titre','*');
	}

	if ($titre AND $id_forum){
		$titre_m = sql_getfetsel('titre', 'spip_forum', "id_forum = " . intval($id_forum));
		if (!$titre_m) {
			return false; // URL fabriquee
		}
		$titre = $titre_m;
	}

	$titre = supprimer_numero($titre);

	return $titre;
}


// Une securite qui nous protege contre :
// - les doubles validations de forums (derapages humains ou des brouteurs)
// - les abus visant a mettre des forums malgre nous sur un article (??)
// On installe un fichier temporaire dans _DIR_TMP (et pas _DIR_CACHE
// afin de ne pas bugguer quand on vide le cache)
// Le lock est leve au moment de l'insertion en base (inc-messforum)
// Ce systeme n'est pas fonctionnel pour les forums sans previsu (notamment
// si $afficher_texte = 'non')

// http://doc.spip.org/@forum_fichier_tmp
function forum_fichier_tmp($arg)
{
# astuce : mt_rand pour autoriser les hits simultanes
	while (($alea = time() + @mt_rand()) + intval($arg)
	       AND @file_exists($f = _DIR_TMP."forum_$alea.lck"))
	  {};
	spip_touch ($f);

# et maintenant on purge les locks de forums ouverts depuis > 4 h

	if ($dh = @opendir(_DIR_TMP))
		while (($file = @readdir($dh)) !== false)
			if (preg_match('/^forum_([0-9]+)\.lck$/', $file)
			AND (time()-@filemtime(_DIR_TMP.$file) > 4*3600))
				spip_unlink(_DIR_TMP.$file);
	return $alea;
}

function formulaires_forum_verifier_dist($objet,$id_objet, $id_forum,
	$ajouter_mot, $ajouter_groupe, $afficher_texte, $retour)
{
	include_spip('inc/acces');
	include_spip('inc/texte');
	include_spip('inc/forum');
	include_spip('inc/session');
	include_spip('base/abstract_sql');

	$erreurs = array();

	// desactiver id_rubrique si un id_article ou autre existe dans le contexte
	// if ($id_article OR $id_breve OR $id_forum OR $id_syndic)
	//	$id_rubrique = 0;

	// stocker un eventuel document dans un espace temporaire
	// portant la cle du formulaire ; et ses metadonnees avec

	if (!isset($GLOBALS['visiteur_session']['tmp_forum_document']))
		session_set('tmp_forum_document',
		sous_repertoire(_DIR_TMP,'documents_forum').md5(uniqid(rand())));
	$tmp = $GLOBALS['visiteur_session']['tmp_forum_document'];
	$doc = &$_FILES['ajouter_document'];
	if (isset($_FILES['ajouter_document'])
	AND $_FILES['ajouter_document']['tmp_name']) {
		// securite :
		// verifier si on possede la cle (ie on est autorise a poster)
		// (sinon tant pis) ; cf. charger.php pour la definition de la cle
		if (_request('cle_ajouter_document') != calculer_cle_action($a = "ajouter-document-$objet-$id_objet")) {
			$erreurs['document_forum'] = _T('forum:documents_interdits_forum');
			unset($_FILES['ajouter_document']);
		} else {
			include_spip('inc/joindre_document');
			include_spip('action/ajouter_documents');
			list($extension,$doc['name']) = fixer_extension_document($doc);
			$acceptes = forum_documents_acceptes();

			if (!in_array($extension, $acceptes)) {
				# normalement on n'arrive pas ici : pas d'upload si aucun format
				if (!$formats = join(', ',$acceptes))
					$formats = '-'; //_L('aucun');
				$erreurs['document_forum'] = _T('public:formats_acceptes', array('formats' => $formats));
			}
			else {
				include_spip('inc/getdocument');
				if (!deplacer_fichier_upload($doc['tmp_name'], $tmp.'.bin'))
					$erreurs['document_forum'] = _T('copie_document_impossible');

#		else if (...)
#		verifier le type_document autorise
#		retailler eventuellement les photos
			}

			// si ok on stocke les meta donnees, sinon on efface
			if (isset($erreurs['document_forum'])) {
				spip_unlink($tmp.'.bin');
				unset ($_FILES['ajouter_document']);
			} else {
				$doc['tmp_name'] = $tmp.'.bin';
				ecrire_fichier($tmp.'.txt', serialize($doc));
			}
		}
	}
	// restaurer le document uploade au tour precedent
	else if (file_exists($tmp.'.bin')) {
		if (_request('supprimer_document_ajoute')) {
			spip_unlink($tmp.'.bin');
			spip_unlink($tmp.'.txt');
		} else if (lire_fichier($tmp.'.txt', $meta))
			$doc = @unserialize($meta);
	}

	if (strlen($texte = _request('texte')) < 10
	AND !$ajouter_mot AND $GLOBALS['meta']['forums_texte'] == 'oui')
		$erreurs['texte'] = _T('forum:forum_attention_dix_caracteres');
	else if (defined('_FORUM_LONGUEUR_MAXI')
	AND _FORUM_LONGUEUR_MAXI > 0
	AND strlen($texte) > _FORUM_LONGUEUR_MAXI)
		$erreurs['texte'] = _T('forum:forum_attention_trop_caracteres',
			array(
				'compte' => strlen($texte),
				'max' => _FORUM_LONGUEUR_MAXI
			));

	if (strlen($titre=_request('titre')) < 3
	AND $GLOBALS['meta']['forums_titre'] == 'oui')
		$erreurs['titre'] = _T('forum:forum_attention_trois_caracteres');

	if (!count($erreurs) AND !_request('confirmer_previsu_forum')){
		if ($afficher_texte != 'non') {
			$previsu = inclure_previsu($texte, $titre, _request('url_site'), _request('nom_site'), _request('ajouter_mot'), $doc,
				$objet, $id_objet, $id_forum);
			$erreurs['previsu'] = $previsu;
		}
	}

	return $erreurs;
}

function forum_documents_acceptes()
{
	$formats = trim($GLOBALS['meta']['formats_documents_forum']);
	if (!$formats) return array();
	if ($formats !== '*')
		$formats = array_filter(preg_split(',[^a-zA-Z0-9/+_],', $formats));
	else {
		include_spip('base/typedoc');
		$formats =  array_keys($GLOBALS['tables_mime']);
	}
	sort($formats);
	return $formats;
}

// http://doc.spip.org/@inclure_previsu
function inclure_previsu($texte,$titre, $url_site, $nom_site, $ajouter_mot, $doc,
$objet, $id_objet, $id_forum) {
	global $table_des_traitements;

	$bouton = _T('forum:forum_message_definitif');
	include_spip('public/assembler');
	include_spip('public/composer');

	// appliquer les traitements de #TEXTE a la previsu
	// comme on voit c'est complique... y a peut-etre plus simple ?
	// recuperer les filtres eventuels de 'mes_fonctions.php' sur les balises
	include_spip('public/parametrer');
	$evaltexte = isset($table_des_traitements['TEXTE']['forums'])
		? $table_des_traitements['TEXTE']['forums']
		: $table_des_traitements['TEXTE'][0];
	$evaltexte = '$tmptexte = '.str_replace('%s', '$texte', $evaltexte).';';
	// evaluer...
	eval($evaltexte);

	// supprimer les <form> de la previsualisation
	// (sinon on ne peut pas faire <cadre>...</cadre> dans les forums)
	return preg_replace("@<(/?)form\b@ism",
			    '<\1div',
		inclure_balise_dynamique(array('formulaires/inc-forum_previsu',
		      0,
		      array(
			'titre' => safehtml(typo($titre)),
			'texte' => $tmptexte,
			'notes' => safehtml(calculer_notes()),
			'url_site' => vider_url($url_site),
			'nom_site' => safehtml(typo($nom_site)),
			'ajouter_mot' => (is_array($ajouter_mot) ? $ajouter_mot : array($ajouter_mot)),
			'ajouter_document' => $doc,
			'erreur' => $erreur,
			'bouton' => $bouton,
		    'objet' => $objet,
			'id_objet' => $id_objet,
			'id_forum' => $id_forum
		     )
		), false));
}


function formulaires_forum_traiter_dist($objet,$id_objet, $id_forum,
	$ajouter_mot, $ajouter_groupe, $afficher_texte, $retour) {

	$forum_insert = charger_fonction('forum_insert', 'inc');

	list($redirect,$id_forum) = $forum_insert();

	if ($id_forum)
		$res = array('redirect'=>$redirect,'id_forum'=>$id_forum);
	else
		$res = array('message_erreur'=>_T('forum:erreur_enregistrement_message'));
	return $res;
}


?>

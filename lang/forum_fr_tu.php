<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://www.spip.net/trad-lang/
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'aucun_message_forum' => 'Aucun message de forum', # NEW

	// B
	'bouton_radio_articles_futurs' => 'aux articles futurs uniquement (pas d\'action sur la base de données).',
	'bouton_radio_articles_tous' => 'à tous les articles sans exception.',
	'bouton_radio_articles_tous_sauf_forum_desactive' => 'à tous les articles, sauf ceux dont le forum est désactivé.',
	'bouton_radio_enregistrement_obligatoire' => 'Enregistrement obligatoire (les
		utilisateurs doivent s\'abonner en fournissant leur adresse e-mail avant de
		pouvoir poster des contributions).',
	'bouton_radio_moderation_priori' => 'Modération à priori (les
	contributions ne s\'affichent publiquement qu\'après validation par les
	administrateurs).',
	'bouton_radio_modere_abonnement' => 'sur abonnement',
	'bouton_radio_modere_posteriori' => 'modération à posteriori',
	'bouton_radio_modere_priori' => 'modération à priori',
	'bouton_radio_publication_immediate' => 'Publication immédiate des messages
	(les contributions s\'affichent dès leur envoi, les administrateurs peuvent
	les supprimer ensuite).',

	// D
	'documents_interdits_forum' => 'Documents interdits dans le forum',

	// E
	'erreur_enregistrement_message' => 'Votre message n\'a pas pu être enregistré en raison d\'un problème technique', # NEW

	// F
	'form_forum_message_commentaire' => 'Un message, un commentaire ?',
	'forum' => 'Forum',
	'forum_acces_refuse' => 'Tu n\'as plus accès à ces forums.',
	'forum_attention_dix_caracteres' => '<b>Attention !</b> ton message doit contenir au moins dix caractères.',
	'forum_attention_trois_caracteres' => '<b>Attention !</b> ton titre doit contenir au moins trois caractères.',
	'forum_attention_trop_caracteres' => '<b>Attention !</b> ton message est trop long (@compte@ caractères) : pour pouvoir être enregistré, il ne doit pas dépasser @max@ caractères.',
	'forum_avez_selectionne' => 'Tu as sélectionné :',
	'forum_cliquer_retour' => 'Clique <a href=\'@retour_forum@\'>ici</a> pour continuer.',
	'forum_forum' => 'forum',
	'forum_info_modere' => 'Ce forum est modéré à priori : ta contribution n\'apparaîtra qu\'après avoir été validée par un administrateur du site.',
	'forum_lien_hyper' => '<b>Lien hypertexte</b> (optionnel)',
	'forum_message_definitif' => 'Message définitif : envoyer au site',
	'forum_message_trop_long' => 'Ton message est trop long. La taille maximale est de 20000 caractères.',
	'forum_ne_repondez_pas' => 'Ne réponds pas à ce mail, mais sur le forum à l\'adresse suivante:',
	'forum_page_url' => '(Si ton message se réfère à un article publié sur le Web, ou à une page fournissant plus d\'informations, indique ci-après le titre de la page et son adresse.)',
	'forum_poste_par' => 'Message posté@parauteur@ à la suite de ton article « @titre@ ».',
	'forum_qui_etes_vous' => '<b>Qui es-tu ?</b> (optionnel)',
	'forum_texte' => 'Texte de ton message :',
	'forum_titre' => 'Titre :',
	'forum_url' => 'URL :',
	'forum_valider' => 'Valider ce choix',
	'forum_voir_avant' => 'Voir ce message avant de le poster',
	'forum_votre_email' => 'Ton adresse email :',
	'forum_votre_nom' => 'Ton nom (ou pseudonyme) :',
	'forum_vous_enregistrer' => 'Pour participer à
		ce forum, tu dois t\'enregistrer au préalable. Merci
		d\'indiquer ci-dessous l\'identifiant personnel qui t\'a
		été fourni. Si tu n\'es pas enregistré, tu dois',
	'forum_vous_inscrire' => 't\'inscrire.',

	// I
	'icone_bruler_message' => 'Signaler comme Spam', # NEW
	'icone_bruler_messages' => 'Signaler comme Spam', # NEW
	'icone_legitimer_message' => 'Signaler comme licite', # NEW
	'icone_poster_message' => 'Poster un message',
	'icone_suivi_forum' => 'Suivi du forum public : @nb_forums@ contribution(s)',
	'icone_suivi_forums' => 'Suivre/gérer les forums',
	'icone_supprimer_message' => 'Supprimer ce message',
	'icone_supprimer_messages' => 'Supprimer ces messages', # NEW
	'icone_valider_message' => 'Valider ce message',
	'icone_valider_messages' => 'Valider ces messages', # NEW
	'icone_valider_repondre_message' => 'Valider &amp; Répondre à ce message', # NEW
	'info_1_message_forum' => '1 message de forum', # NEW
	'info_activer_forum_public' => '<i>Pour activer les forums publics, choisis leur mode
 de modération par défaut:</i>',
	'info_appliquer_choix_moderation' => 'Appliquer ce choix de modération :',
	'info_config_forums_prive' => 'Dans l’espace priv&eacute; du site, tu peux activer plusieurs types de forums&nbsp;:',
	'info_config_forums_prive_admin' => 'Un forum réservé aux administrateurs du site :',
	'info_config_forums_prive_global' => 'Un forum global, ouvert à tous les rédacteurs :',
	'info_config_forums_prive_objets' => 'Un forum sous chaque article, brève, site référencé, etc. :',
	'info_desactiver_forum_public' => 'Désactiver l\'utilisation des forums
	publics. Les forums publics pourront être autorisés au cas par cas
	sur les articles ; ils seront interdits sur les rubriques, brèves, etc.',
	'info_envoi_forum' => 'Envoi des forums aux auteurs des articles',
	'info_fonctionnement_forum' => 'Fonctionnement du forum :',
	'info_forums_liees_mot' => 'Les messages de forum liés à ce mot', # NEW
	'info_gauche_suivi_forum_2' => 'La page de <i>suivi des forums</i> est un outil de gestion de ton site (et non un espace de discussion ou de rédaction). Elle affiche toutes les contributions des forums du site, aussi bien celles du site public que de l\'espace privé et te permet de gérer ces contributions.',
	'info_liens_syndiques_3' => 'forums',
	'info_liens_syndiques_4' => 'sont',
	'info_liens_syndiques_5' => 'forum',
	'info_liens_syndiques_6' => 'est',
	'info_liens_syndiques_7' => 'en attente de validation',
	'info_liens_texte' => 'Lien(s) contenu(s) dans le texte du message', # NEW
	'info_liens_titre' => 'Lien(s) contenu(s) dans le titre du message', # NEW
	'info_mode_fonctionnement_defaut_forum_public' => 'Mode de fonctionnement par défaut des forums publics',
	'info_nb_messages_forum' => '@nb@ messages de forum', # NEW
	'info_option_email' => 'Lorsqu\'un visiteur du site poste un nouveau message dans le forum associé à un article, les auteurs de l\'article peuvent être prévenus de ce message par e-mail. Indiquer pour chaque type de forum s\'il faut utiliser cette option.',
	'info_pas_de_forum' => 'pas de forum',
	'info_question_visiteur_ajout_document_forum' => 'Si tu souhaites autoriser les visiteurs à joindre des documents (images, sons...) à leurs messages de forums, indique ci-dessous la liste des extensions de documents autorisés pour les forums (ex: gif, jpg, png, mp3).',
	'info_question_visiteur_ajout_document_forum_format' => 'Si tu souhaites autoriser tous les types de documents considérés comme fiables par SPIP, mettre une étoile. Pour ne rien autoriser, ne rien indiquer',
	'interface_formulaire' => 'Interface formulaire', # NEW
	'interface_onglets' => 'Interface avec onglets', # NEW
	'item_activer_forum_administrateur' => 'Activer le forum des administrateurs',
	'item_config_forums_prive_global' => 'Activer le forum des rédacteurs',
	'item_config_forums_prive_objets' => 'Activer ces forums',
	'item_desactiver_forum_administrateur' => 'Désactiver le forum des administrateurs',
	'item_non_config_forums_prive_global' => 'Désactiver le forum des rédacteurs',
	'item_non_config_forums_prive_objets' => 'Désactiver ces forums',

	// L
	'lien_reponse_article' => 'Réponse à l\'article',
	'lien_reponse_breve_2' => 'Réponse à la brève',
	'lien_reponse_rubrique' => 'Réponse à la rubrique',
	'lien_reponse_site_reference' => 'Réponse au site référencé :',

	// M
	'messages_aucun' => 'Aucun', # NEW
	'messages_meme_auteur' => 'Tous les messages de cet auteur', # NEW
	'messages_meme_email' => 'Tous les messages de cet email', # NEW
	'messages_meme_ip' => 'Tous les messages de cette IP', # NEW
	'messages_off' => 'Supprimés', # NEW
	'messages_perso' => 'Personnels', # NEW
	'messages_privadm' => 'Administrateurs', # NEW
	'messages_prive' => 'Privés', # NEW
	'messages_privoff' => 'Supprimés', # NEW
	'messages_privrac' => 'Généraux', # NEW
	'messages_prop' => 'Proposés', # NEW
	'messages_publie' => 'Publiés', # NEW
	'messages_spam' => 'Spam', # NEW
	'messages_tous' => 'Tous', # NEW

	// O
	'onglet_messages_internes' => 'Messages internes',
	'onglet_messages_publics' => 'Messages publics',
	'onglet_messages_vide' => 'Messages sans texte',

	// R
	'repondre_message' => 'Répondre à ce message',

	// S
	'statut_off' => 'Supprimé', # NEW
	'statut_original' => 'original',
	'statut_prop' => 'Proposé', # NEW
	'statut_publie' => 'Publié', # NEW
	'statut_spam' => 'Spam', # NEW

	// T
	'text_article_propose_publication_forum' => 'N\'hésite pas à donner ton avis grâce au forum attaché à cet article (en bas de page).',
	'texte_en_cours_validation' => 'Les articles, brèves, forums ci dessous sont proposés à la publication.', # NEW
	'texte_en_cours_validation_forum' => 'N\'hésite pas à donner ton avis grâce aux forums qui leur sont attachés.',
	'texte_messages_publics' => 'Messages publics sur&nbsp;:', # NEW
	'titre_cadre_forum_administrateur' => 'Forum privé des administrateurs',
	'titre_cadre_forum_interne' => 'Forum interne',
	'titre_config_forums_prive' => 'Forums de l’espace priv&eacute;',
	'titre_forum' => 'Forum',
	'titre_forum_suivi' => 'Suivi des forums',
	'titre_page_forum_suivi' => 'Suivi des forums',
	'tout_voir' => 'Voir tous les messages', # NEW

	// V
	'voir_messages_objet' => 'voir les messages' # NEW
);

?>

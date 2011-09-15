<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://www.spip.net/trad-lang/
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'aucun_message_forum' => 'Aucun message de forum', # NEW

	// B
	'bouton_radio_articles_futurs' => 'a los artículos futuros solamente (no modifica la base de datos).',
	'bouton_radio_articles_tous' => 'a todos los artículos sin excepción.',
	'bouton_radio_articles_tous_sauf_forum_desactive' => 'a todos los artículos, salvo aquellos cuyo foro está desactivado.',
	'bouton_radio_enregistrement_obligatoire' => 'Inscripción obligatoria (es necesario inscribirse dando su correo electrónico antes de poder participar en el foro).',
	'bouton_radio_moderation_priori' => 'Moderado a priori (las contribuciones no aparecen hasta ser validadas por una persona con derechos de administración en el sitio).',
	'bouton_radio_modere_abonnement' => 'sólo para inscritos',
	'bouton_radio_modere_posteriori' => 'moderado a posteriori',
	'bouton_radio_modere_priori' => 'moderado a priori',
	'bouton_radio_publication_immediate' => 'Publicación inmediata de los mensajes (las contribuciones aparecen en cuanto enviadas, pueden suprimirse posteriormente desde la administración).',

	// D
	'documents_interdits_forum' => 'Documentos prohibidos en el foro',

	// E
	'erreur_enregistrement_message' => 'Votre message n\'a pas pu être enregistré en raison d\'un problème technique', # NEW

	// F
	'form_pet_message_commentaire' => '¿Un mensaje, un comentario?',
	'forum' => 'Foro',
	'forum_acces_refuse' => 'Ya no tienes acceso a estos foros.',
	'forum_attention_dix_caracteres' => '<b>¡Atención!</b> tu mensaje debe tener al menos diez caracteres.',
	'forum_attention_message_non_poste' => 'Attention, vous n\'avez pas posté votre message !', # NEW
	'forum_attention_trois_caracteres' => '<b>¡Atención!</b> el título debe tener al menos tres caracteres.',
	'forum_attention_trop_caracteres' => '<b>¡Atención!</b> el mensaje es demasiado largo (@compte@ caracteres): para poder guardarlo, no debe sobrepasar los @max@ caracteres.',
	'forum_avez_selectionne' => 'Has seleccionado:',
	'forum_cliquer_retour' => 'Pinchar <a href=\'@retour_forum@\'>aquí</a> para continuar.',
	'forum_forum' => 'foro',
	'forum_info_modere' => 'Este foro está moderado a priori: tu contribución no aparecerá hasta haber sido validada por la administración del sitio.',
	'forum_lien_hyper' => '<b>Enlace hipertexto</b> (opcional)', # MODIF
	'forum_message' => 'Votre message', # NEW
	'forum_message_definitif' => 'Mensaje definitivo: enviar al sitio',
	'forum_message_trop_long' => 'Tu mensaje es demasiado largo. Sólo se admite un máximo de 20.000 caracteres.',
	'forum_ne_repondez_pas' => 'No conteste a este correo, sino el foro en la dirección siguiente:',
	'forum_page_url' => '(Si tu mensaje se refiere a un artículo publicado en Internet, o a una página que contiene más informaciones, indica a continuación el título de la página y su dirección URL.)',
	'forum_permalink' => 'Lien permanent vers le commentaire', # NEW
	'forum_poste_par' => 'Mensaje enviado @parauteur@ a como respuesta al artículo <i>@titre@</i>.',
	'forum_qui_etes_vous' => '<b>¿Quién eres?</b> (opcional)', # MODIF
	'forum_saisie_texte_info' => 'Ce formulaire accepte les raccourcis SPIP <code>[-&gt;url] {{gras}} {italique} &lt;quote&gt; &lt;code&gt;</code> et le code HTML <code>&lt;q&gt; &lt;del&gt; &lt;ins&gt;</code>. Pour créer des paragraphes, laissez simplement des lignes vides.', # NEW
	'forum_texte' => 'Texto de tu mensaje:', # MODIF
	'forum_titre' => 'Título:', # MODIF
	'forum_url' => 'URL:', # MODIF
	'forum_valider' => 'Validar la elección',
	'forum_voir_avant' => 'Ver este mensaje antes de enviarlo', # MODIF
	'forum_votre_email' => 'Tu dirección de correo electrónico:', # MODIF
	'forum_votre_nom' => 'Tu nombre (o seudónimo):', # MODIF
	'forum_vous_enregistrer' => 'Para participar en este foro, previamente debes registrarte.
Gracias por indicar a continuación el identificador personal que se te ha
suministrado. Si no estás inscrito/a, debes',
	'forum_vous_inscrire' => 'inscribirte.',

	// I
	'icone_bruler_message' => 'Signaler comme Spam', # NEW
	'icone_bruler_messages' => 'Signaler comme Spam', # NEW
	'icone_legitimer_message' => 'Signaler comme licite', # NEW
	'icone_poster_message' => 'Enviar un mensaje',
	'icone_suivi_forum' => 'Actualidad del foro público: @nb_forums@ contribución(es)',
	'icone_suivi_forums' => 'Seguir y administrar los foros',
	'icone_supprimer_message' => 'Suprimir este mensaje',
	'icone_supprimer_messages' => 'Supprimer ces messages', # NEW
	'icone_valider_message' => 'Validar este mensaje',
	'icone_valider_messages' => 'Valider ces messages', # NEW
	'icone_valider_repondre_message' => 'Valider &amp; Répondre à ce message', # NEW
	'info_1_message_forum' => '1 message de forum', # NEW
	'info_activer_forum_public' => '<i>Para activar los foros públicos, seleccionar un modo de moderación por omisión:</i>',
	'info_appliquer_choix_moderation' => 'Aplicar este tipo de moderación',
	'info_config_forums_prive' => 'En el espacio privado del sitio, se pueden activar varios tipos de foros :',
	'info_config_forums_prive_admin' => 'Un foro reservado a los administradores del sitio :',
	'info_config_forums_prive_global' => 'Un foro global, abierto a todos los redactores :',
	'info_config_forums_prive_objets' => 'Un foro para cada artículo, breve, sitio referenciado, etc. :',
	'info_desactiver_forum_public' => 'Desactivar los foros públicos. Podrán ser activados puntualmente para los artículos, pero no para las breves o las secciones.',
	'info_envoi_forum' => 'Seguimiento de los foros',
	'info_fonctionnement_forum' => 'Funcionamiento del foro:',
	'info_forums_liees_mot' => 'Les messages de forum liés à ce mot', # NEW
	'info_gauche_suivi_forum_2' => 'La página de <i>seguimiento de los foros</i> es una herramienta de gestión de tu sitio (y no un espacio de diálogo o de redacción). Muestra todas las contribuciones del foro público de este artículo y te permite gestionar administrarlas.',
	'info_liens_syndiques_3' => 'foros',
	'info_liens_syndiques_4' => 'están',
	'info_liens_syndiques_5' => 'foro',
	'info_liens_syndiques_6' => 'está',
	'info_liens_syndiques_7' => 'en espera de validación',
	'info_liens_texte' => 'Lien(s) contenu(s) dans le texte du message', # NEW
	'info_liens_titre' => 'Lien(s) contenu(s) dans le titre du message', # NEW
	'info_mode_fonctionnement_defaut_forum_public' => 'Modo de funcionamiento de los foros públicos',
	'info_nb_messages_forum' => '@nb@ messages de forum', # NEW
	'info_option_email' => 'Cuando se deposita una nueva contribución en un foro asociado a un artículo, se puede notificarlo por correo electrónico a los autores y autoras del artículo. ¿Deseas utilizar esta opción?',
	'info_pas_de_forum' => 'sin foro',
	'info_question_visiteur_ajout_document_forum' => 'Si desea autorizar que los visitantes puedan depositar documentos (imágenes, sonidos...) en sus mensajes sobre los foros, indique aquí debajo la lista de extensiones para los docuemnos autorizados en los foros (por ejemplo: gif, jpg, png, mp3).',
	'info_question_visiteur_ajout_document_forum_format' => 'Si desea autorizar todos los tipos de documentos considerados como fiables por SPIP, coloque un asterisco. Para no autorizar ninguno, dejar en blanco.',
	'interface_formulaire' => 'Interface formulaire', # NEW
	'interface_onglets' => 'Interface avec onglets', # NEW
	'item_activer_forum_administrateur' => 'Activar el foro del equipo de administración.',
	'item_config_forums_prive_global' => 'Activar el foro de los redactores',
	'item_config_forums_prive_objets' => 'Activar estos foros',
	'item_desactiver_forum_administrateur' => 'Desactivar el foro de administración',
	'item_non_config_forums_prive_global' => 'Desactivar el foro de los redactores',
	'item_non_config_forums_prive_objets' => 'Desactivar estos foros',

	// L
	'lien_reponse_article' => 'Respuesta al artículo',
	'lien_reponse_breve_2' => 'Respuesta a la breve',
	'lien_reponse_message' => 'Réponse au message', # NEW
	'lien_reponse_rubrique' => 'Respuesta a la sección',
	'lien_reponse_site_reference' => 'Respuesta al sitio referenciado', # MODIF

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
	'onglet_messages_internes' => 'Mensajes internos',
	'onglet_messages_publics' => 'Mensajes públicos',
	'onglet_messages_vide' => 'Mensajes sin texto',

	// R
	'repondre_message' => 'Responder este mensaje',

	// S
	'statut_off' => 'Supprimé', # NEW
	'statut_original' => 'original',
	'statut_prop' => 'Proposé', # NEW
	'statut_publie' => 'Publié', # NEW
	'statut_spam' => 'Spam', # NEW

	// T
	'text_article_propose_publication_forum' => 'Expresa tu opinión mediante el foro adjunto al artículo (en la parte inferior de la página).',
	'texte_en_cours_validation' => 'Les articles, brèves, forums ci dessous sont proposés à la publication.', # NEW
	'texte_en_cours_validation_forum' => 'No dudes en dar tu opinión mediante los foros adjuntos.',
	'texte_messages_publics' => 'Messages publics sur&nbsp;:', # NEW
	'titre_cadre_forum_administrateur' => 'Foro administradores',
	'titre_cadre_forum_interne' => 'Foro interno',
	'titre_config_forums_prive' => 'Foros del espacio privado',
	'titre_forum' => 'Foro interno',
	'titre_forum_suivi' => 'Gestión de los foros',
	'titre_page_forum_suivi' => 'Seguimiento de los foros',
	'titre_selection_action' => 'Sélection', # NEW
	'tout_voir' => 'Voir tous les messages', # NEW

	// V
	'voir_messages_objet' => 'voir les messages' # NEW
);

?>

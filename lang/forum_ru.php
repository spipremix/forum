<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://trad.spip.org/tradlang_module/forum?lang_cible=ru
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'aucun_message_forum' => 'Aucun message de forum', # NEW

	// B
	'bouton_radio_articles_futurs' => 'только для новых материалов (текущие настройки не изменятся).',
	'bouton_radio_articles_tous' => 'для всех статей без исключения.',
	'bouton_radio_articles_tous_sauf_forum_desactive' => 'для всех статей, кроме тех, в которых комментирование отключено.',
	'bouton_radio_enregistrement_obligatoire' => 'Только для зарегистрированных пользователей. Посетитель должен зарегистрироваться перед тем как оставить комментарий.',
	'bouton_radio_moderation_priori' => 'Комментарии публикуются на сайте после проверки администратором (пре-модерация).',
	'bouton_radio_modere_abonnement' => 'только пользователи сайта',
	'bouton_radio_modere_posteriori' => 'размещать без проверки',
	'bouton_radio_modere_priori' => 'проверять перед размещением',
	'bouton_radio_publication_immediate' => 'Новые комментарии сразу публикуются на сайте без проверки (пост-модерация). Администраторы потом могут удалить комментарии.',

	// D
	'documents_interdits_forum' => 'Запрещенно добавлять документы к сообщениям форума',

	// E
	'erreur_enregistrement_message' => 'Votre message n\'a pas pu être enregistré en raison d\'un problème technique', # NEW

	// F
	'form_pet_message_commentaire' => 'Комментарии',
	'forum' => 'Форум',
	'forum_acces_refuse' => 'Вы больше не имеете доступа к этим форумам.',
	'forum_attention_dix_caracteres' => '<b>Внимание!</b> Сообщение должно быть не менее десяти символов.',
	'forum_attention_message_non_poste' => 'Attention, vous n\'avez pas posté votre message !', # NEW
	'forum_attention_trois_caracteres' => '<b>Внимание!</b> Заголовок должен быть не менее трех символов.',
	'forum_attention_trop_caracteres' => '<b>Внимание !</b> Ваше сообщение слишком длинно (@compte@ букв) : чтобы было можно его сохранить, сообщение должно состоять не  более чем из @max@ букв.', # MODIF
	'forum_avez_selectionne' => 'Вы выбрали:',
	'forum_cliquer_retour' => 'Нажмите  <a href=\'@retour_forum@\'>сюда</a> для продолжения.',
	'forum_forum' => 'форум',
	'forum_info_modere' => 'Комментарии проверяются администрацией сайта. Ваше сообщение появится после проверки администратором.',
	'forum_lien_hyper' => 'Ссылка',
	'forum_message' => 'Votre message', # NEW
	'forum_message_definitif' => 'Всё верно. Отправить!',
	'forum_message_trop_long' => 'Ваше сообщение слишком длинно. Максимальная длина 20000 символов.', # MODIF
	'forum_ne_repondez_pas' => 'Не отвечайте на это письмо - перейдите по ссылке:',
	'forum_page_url' => '(Если ваше сообщение обращено к статьям изданным в сети или к странице, обеспечивающей дальнейшую информацию, пожалуйста введите заголовок страницы и ее URL ниже).',
	'forum_permalink' => 'Lien permanent vers le commentaire', # NEW
	'forum_poste_par' => '@parauteur@ прокомментировал вашу статью.',
	'forum_qui_etes_vous' => 'Кто вы?',
	'forum_saisie_texte_info' => 'Ce formulaire accepte les raccourcis SPIP <code>[-&gt;url] {{gras}} {italique} &lt;quote&gt; &lt;code&gt;</code> et le code HTML <code>&lt;q&gt; &lt;del&gt; &lt;ins&gt;</code>. Pour créer des paragraphes, laissez simplement des lignes vides.', # NEW
	'forum_texte' => 'Комментарий:',
	'forum_titre' => 'Тема:',
	'forum_url' => 'URL:',
	'forum_valider' => 'Подтвердите выбор',
	'forum_voir_avant' => 'Предварительный просмотр',
	'forum_votre_email' => 'Ваш e-mail',
	'forum_votre_nom' => 'Ваше имя',
	'forum_vous_enregistrer' => 'Оставлять комментарии могут только зарегистрированные пользователи. Если вы еще не зарегистрировались на сайте, вы можете',
	'forum_vous_inscrire' => 'зарегистрироваться.',

	// I
	'icone_bruler_message' => 'Signaler comme Spam', # NEW
	'icone_bruler_messages' => 'Signaler comme Spam', # NEW
	'icone_legitimer_message' => 'Signaler comme licite', # NEW
	'icone_poster_message' => 'Разместить сообщение',
	'icone_suivi_forum' => 'Комментарии: @nb_forums@',
	'icone_suivi_forums' => 'Управление форумами',
	'icone_supprimer_message' => 'Удалить это сообщение',
	'icone_supprimer_messages' => 'Supprimer ces messages', # NEW
	'icone_valider_message' => 'Подтвердить сообщение',
	'icone_valider_messages' => 'Valider ces messages', # NEW
	'icone_valider_repondre_message' => 'Valider & Répondre à ce message', # NEW
	'info_1_message_forum' => '1 message de forum', # NEW
	'info_activer_forum_public' => 'Включить комментарии - выберите режим модерации для новых сообщений:',
	'info_appliquer_choix_moderation' => 'Применить этот тип модерации:',
	'info_config_forums_prive' => 'В области редактирования сайта может быть включено несколько видов форума:', # MODIF
	'info_config_forums_prive_admin' => 'Форум для администраторов сайта:',
	'info_config_forums_prive_global' => 'Общий форум, открыт для всех авторов:',
	'info_config_forums_prive_objets' => 'Форум, прикрепленный к каждой статье, новости, ссылочному сайту, и т. д.:',
	'info_desactiver_forum_public' => 'Отключить комментарии по сайту. Вы можете отдельно разрешить комментировать конкретные статьи, но в целом комментарии на сайте отключены.',
	'info_envoi_forum' => 'Отправлять сообщения форумов авторам статей',
	'info_fonctionnement_forum' => 'Модерация комментариев:',
	'info_forums_liees_mot' => 'Les messages de forum liés à ce mot', # NEW
	'info_gauche_suivi_forum_2' => '<i>Продолжение форумов </i> страница - инструмент управления Вашего сайта (не обсуждается или редактируется). Она показывает все записи основного форума этой статьи и позволяет Вам управлять этими записями.', # MODIF
	'info_liens_syndiques_3' => 'форумы',
	'info_liens_syndiques_4' => 'есть',
	'info_liens_syndiques_5' => 'форум',
	'info_liens_syndiques_6' => 'есть',
	'info_liens_syndiques_7' => 'ожидание утверждения.',
	'info_liens_texte' => 'Lien(s) contenu(s) dans le texte du message', # NEW
	'info_liens_titre' => 'Lien(s) contenu(s) dans le titre du message', # NEW
	'info_mode_fonctionnement_defaut_forum_public' => 'Настройки комментариев на сайте',
	'info_nb_messages_forum' => '@nb@ messages de forum', # NEW
	'info_option_email' => 'Когда посетитель сайта размещает сообщение на 
 форуме  связанного со статьей, автор статьи может быть 
 проинформирован о нем по электронной почте. Укажите для каждого вида форума, если эта опция должна быть включена.',
	'info_pas_de_forum' => 'отключить комментарии',
	'info_question_visiteur_ajout_document_forum' => 'Если Вы хотите разрешить Вашим посетителям прикреплять документы (изображения, звуковые файлы, ...) к ихним сообщениям форума, укажите ниже список расширения имени файла, которые являются авторизованными(e.g. gif, jpg, png, mp3).', # MODIF
	'info_question_visiteur_ajout_document_forum_format' => 'Если вы хотите разрешить загрузку всех типов файлов - поставьте звездочку. Что бы запретить загрузку файлов - оставьте поле пустым.
',
	'interface_formulaire' => 'Interface formulaire', # NEW
	'interface_onglets' => 'Interface avec onglets', # NEW
	'item_activer_forum_administrateur' => 'Включить форум администраторов',
	'item_config_forums_prive_global' => 'Включить форум авторов',
	'item_config_forums_prive_objets' => 'Включить эти форумы',
	'item_desactiver_forum_administrateur' => 'Отключить форум администраторов',
	'item_non_config_forums_prive_global' => 'Отключить форум авторов',
	'item_non_config_forums_prive_objets' => 'отключить эти форумы',

	// L
	'lien_reponse_article' => 'Ответить на статью',
	'lien_reponse_breve_2' => 'Ответить на новость',
	'lien_reponse_message' => 'Réponse au message', # NEW
	'lien_reponse_rubrique' => 'Ответить на раздел',
	'lien_reponse_site_reference' => 'Комментировать сайт:',

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
	'messages_tous' => 'Все',

	// O
	'onglet_messages_internes' => 'Внутреняя переписка',
	'onglet_messages_publics' => 'Общественные сообщения',
	'onglet_messages_vide' => 'Сообщения без текста',

	// R
	'repondre_message' => 'Ответить на это сообщение',

	// S
	'statut_off' => 'Supprimé', # NEW
	'statut_original' => 'Исходник',
	'statut_prop' => 'Proposé', # NEW
	'statut_publie' => 'Publié', # NEW
	'statut_spam' => 'Спам',

	// T
	'text_article_propose_publication_forum' => 'Вы можете прокомментировать эту статью, используя прикрепленный форум (внизу страницы).',
	'texte_en_cours_validation' => 'Les articles, brèves, forums ci dessous sont proposés à la publication.', # NEW
	'texte_en_cours_validation_forum' => 'Вы можете оставлять Ваши комментарии, используя прикрепленные к ним форумы',
	'texte_messages_publics' => 'Messages publics sur :', # NEW
	'titre_cadre_forum_administrateur' => 'Административный форум администраторов',
	'titre_cadre_forum_interne' => 'Внутренний форум',
	'titre_config_forums_prive' => 'Форумы в редакторской части',
	'titre_forum' => 'Комментарии',
	'titre_forum_suivi' => 'Дополнительные форумы',
	'titre_page_forum_suivi' => 'Дополнительные форумы',
	'titre_selection_action' => 'Sélection', # NEW
	'tout_voir' => 'Voir tous les messages', # NEW

	// V
	'voir_messages_objet' => 'voir les messages' # NEW
);

?>

<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://www.spip.net/trad-lang/
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'aucun_message_forum' => 'Aucun message de forum', # NEW

	// B
	'bouton_radio_articles_futurs' => 'これから作られる記事のみ（今データベースにある記事はそのまま除外）。',
	'bouton_radio_articles_tous' => 'すべての記事、特例を認めない、全部。',
	'bouton_radio_articles_tous_sauf_forum_desactive' => 'すべての記事、掲示板機能を使っていない記事は除く。',
	'bouton_radio_enregistrement_obligatoire' => '必要な登録 (
  ユーザは、寄稿することができる前に彼らのe-mailアドレスを提供することによって、
  定期受信すべきです)。',
	'bouton_radio_moderation_priori' => '事前に適正検査 (
 投稿物は、管理者によって適正検査された後、表示されます)。',
	'bouton_radio_modere_abonnement' => '会員だけ投稿可能',
	'bouton_radio_modere_posteriori' => 'コメントを投稿後に検査',
	'bouton_radio_publication_immediate' => '投稿と同時に表示
（投稿すると瞬時に表示するため、管理者は投稿を削除することは可能ですが投稿後になるでしょう）。',

	// D
	'documents_interdits_forum' => 'Documents interdits dans le forum', # NEW

	// E
	'erreur_enregistrement_message' => 'Votre message n\'a pas pu être enregistré en raison d\'un problème technique', # NEW

	// F
	'forum' => 'フォーラム',
	'forum_acces_refuse' => 'あなたはもうこれらの掲示板にアクセスできません。',
	'forum_attention_dix_caracteres' => '<b>警告 !</b> あなたのメッセージは長さが１０文字以下です。',
	'forum_attention_trois_caracteres' => '<b>警告 !</b> あなたの題名は長さが３文字以下です。',
	'forum_attention_trop_caracteres' => '<b>‚&sup2;’ˆ&Oacute;&nbsp;!</b> ‚&plusmn;‚&Igrave;ƒƒbƒZ[ƒW‚&Iacute;’&middot;‰&szlig;‚&not;‚&Uuml;‚&middot;i@compte@ •&para;&#381;&#353;jBƒƒbƒZ[ƒW‚&eth;&#147;o˜&nbsp;‚&middot;‚&eacute;‚&frac12;‚&szlig;‚&Eacute;@max@•&para;&#381;&#353;ˆ&Egrave;‰&ordm;‚&Eacute;‚&micro;‚&Auml;‰&ordm;‚&sup3;‚&cent;B',
	'forum_avez_selectionne' => 'あなたの選択:',
	'forum_cliquer_retour' => '<a href=\'@retour_forum@\'>ここ</a> を押して続けて下さい。',
	'forum_forum' => '掲示板',
	'forum_info_modere' => 'この掲示板への投稿はあらかじめ検査されます: あなたの投稿は、サイトの管理者によって適性検査されてから表示されます。',
	'forum_lien_hyper' => '<b>リンク</b> (オプション)',
	'forum_message_definitif' => '最後のメッセージ: サイトへ送る',
	'forum_message_trop_long' => 'あなたのメッセージは長すぎます。最大20000文字(全角は２つ分)であるべきです。',
	'forum_ne_repondez_pas' => 'このメールに返信しないで、次のアドレスの掲示板で:', # MODIF
	'forum_page_url' => '(もしあなたのメッセージがウェブに公表されている記事、更なる情報が提供されているページを参照するなら、ページのタイトルとその下にURLを入力してください)。',
	'forum_poste_par' => 'あなたの記事の後に投稿された@parauteur@ メッセージ。', # MODIF
	'forum_texte' => 'あなたのメッセージテキスト:',
	'forum_titre' => '件名:',
	'forum_voir_avant' => '投稿する前にメッセージをプレビュー',
	'forum_vous_enregistrer' => 'この掲示板に投稿する前に
  あなたは登録しなければなりません。あなたに与えられた個人的なIDを入力してくれてありがとう。もしまだ登録してないなら、あなたはするべきです。',
	'forum_vous_inscrire' => '登録者。',

	// I
	'icone_bruler_message' => 'Signaler comme Spam', # NEW
	'icone_bruler_messages' => 'Signaler comme Spam', # NEW
	'icone_legitimer_message' => 'Signaler comme licite', # NEW
	'icone_poster_message' => 'メッセージの投稿',
	'icone_suivi_forum' => '公開掲示板の追跡: @nb_forums@ 投稿',
	'icone_supprimer_message' => 'このメッセージを削除',
	'icone_supprimer_messages' => 'Supprimer ces messages', # NEW
	'icone_valider_message' => 'このメッセージを確認',
	'icone_valider_messages' => 'Valider ces messages', # NEW
	'icone_valider_repondre_message' => 'Valider &amp; Répondre à ce message', # NEW
	'info_1_message_forum' => '1 message de forum', # NEW
	'info_activer_forum_public' => '<i>公開掲示板を利用可能にするため、それらの検査方法の標準を選択して下さい:</i>',
	'info_appliquer_choix_moderation' => 'この検査方法を使う:',
	'info_config_forums_prive' => 'Dans l’espace privé du site, vous pouvez activer plusieurs types de forums :', # NEW
	'info_config_forums_prive_admin' => 'Un forum réservé aux administrateurs du site :', # NEW
	'info_config_forums_prive_global' => 'Un forum global, ouvert à tous les rédacteurs :', # NEW
	'info_config_forums_prive_objets' => 'Un forum sous chaque article, brève, site référencé, etc. :', # NEW
	'info_desactiver_forum_public' => '公開掲示板は使わない。公開掲示板は記事ごとに許可する。それらはセクション、ニュース、その他によって禁止できる。',
	'info_envoi_forum' => '記事の著者たちに掲示板を送る',
	'info_fonctionnement_forum' => '掲示板の操作:',
	'info_forums_liees_mot' => 'Les messages de forum liés à ce mot', # NEW
	'info_gauche_suivi_forum_2' => '<i>掲示板の続報</i>ページはあなたのサイトの管理道具です。（議論したり編集できません）。この記事の公開掲示板のすべての投稿を表示して、それらの投稿を管理することが可能です。',
	'info_liens_syndiques_3' => '掲示板',
	'info_liens_syndiques_4' => 'are',
	'info_liens_syndiques_5' => '掲示板',
	'info_liens_syndiques_6' => 'is',
	'info_liens_syndiques_7' => '適正検査前。',
	'info_liens_texte' => 'Lien(s) contenu(s) dans le texte du message', # NEW
	'info_liens_titre' => 'Lien(s) contenu(s) dans le titre du message', # NEW
	'info_mode_fonctionnement_defaut_forum_public' => '公開掲示板の標準の操作方法',
	'info_nb_messages_forum' => '@nb@ messages de forum', # NEW
	'info_option_email' => 'サイトの訪問者が、記事に関連している掲示板にメッセージを投稿した時、記事の著者たちにe-mailによってこのメッセージを通知できます。あなたはこのオプションを使いたいですか ？', # MODIF
	'info_pas_de_forum' => '掲示板無し',
	'info_question_visiteur_ajout_document_forum' => 'Si vous souhaitez autoriser les visiteurs à joindre des documents (images, sons...) à leurs messages de forum, indiquer ci-dessous la liste des extensions de documents autorisés pour les forums (ex: gif, jpg, png, mp3).', # NEW
	'info_question_visiteur_ajout_document_forum_format' => 'Si vous souhaitez autoriser tous les types de documents considérés comme fiables par SPIP, mettre une étoile. Pour ne rien autoriser, ne rien indiquer.', # NEW
	'interface_formulaire' => 'Interface formulaire', # NEW
	'interface_onglets' => 'Interface avec onglets', # NEW
	'item_activer_forum_administrateur' => '管理者用の掲示板を作る',
	'item_config_forums_prive_global' => 'Activer le forum des rédacteurs', # NEW
	'item_config_forums_prive_objets' => 'Activer ces forums', # NEW
	'item_desactiver_forum_administrateur' => '管理者用の掲示板を作らない',
	'item_non_config_forums_prive_global' => 'Désactiver le forum des rédacteurs', # NEW
	'item_non_config_forums_prive_objets' => 'Désactiver ces forums', # NEW

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
	'onglet_messages_internes' => '内部のメッセージ',
	'onglet_messages_publics' => '公開されているメッセージ',
	'onglet_messages_vide' => 'テキストがないメッセージ',

	// R
	'repondre_message' => 'このメッセージに返信',

	// S
	'statut_off' => 'Supprimé', # NEW
	'statut_prop' => 'Proposé', # NEW
	'statut_publie' => 'Publié', # NEW
	'statut_spam' => 'Spam', # NEW

	// T
	'text_article_propose_publication_forum' => 'N\'hésitez pas à donner votre avis grâce au forum attaché à cet article (en bas de page).', # NEW
	'texte_en_cours_validation' => 'Les articles, brèves, forums ci dessous sont proposés à la publication.', # NEW
	'texte_en_cours_validation_forum' => 'N\'hésitez pas à donner votre avis grâce aux forums qui leur sont attachés.', # NEW
	'texte_messages_publics' => 'Messages publics sur&nbsp;:', # NEW
	'titre_cadre_forum_administrateur' => '管理者のプライベートな掲示板',
	'titre_cadre_forum_interne' => '関係者用の掲示板',
	'titre_config_forums_prive' => 'Forums de l’espace privé', # NEW
	'titre_forum' => '掲示板',
	'titre_forum_suivi' => '掲示板の続報',
	'titre_page_forum_suivi' => '掲示板の続報',
	'tout_voir' => 'Voir tous les messages', # NEW

	// V
	'voir_messages_objet' => 'voir les messages' # NEW
);

?>

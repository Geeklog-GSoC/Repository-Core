<?php

###############################################################################
# french_canada.php
# This is a french language version for GeekLog!
#
#
# Copyright (C) 2006 Jean-Francois Allard
# info@jfallard.com
#
# Original translation work by Florent Guiliani
# flyer@perinfo.com
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
#
###############################################################################

$LANG_CHARSET = 'iso-8859-1';

###############################################################################
# Array Format:
# $LANGXX[YY]:  $LANG - variable name
#               XX    - file id number
#               YY    - phrase id number
###############################################################################

###############################################################################
# USER PHRASES - These are file phrases used in end user scripts
###############################################################################

###############################################################################
# lib-common.php

$LANG01 = array(
    1 => 'Contribution de:',
    2 => 'Suite de l\'artcle',
    3 => 'commentaires',
    4 => 'Modifier',
    5 => 'Voter',
    6 => 'R&eacute;sultats',
    7 => 'R&eacute;sultats du sondage',
    8 => 'votes',
    9 => 'Fonctions Admin:',
    10 => 'Propositions',
    11 => 'articles',
    12 => 'Blocs',
    13 => 'Sujets',
    14 => 'Liens',
    15 => 'Activit&eacute;s',
    16 => 'Sondages',
    17 => 'Membres',
    18 => 'Requ�te SQL',
    19 => 'Se d&eacute;connecter',
    20 => 'Infos personnelles:',
    21 => 'Nom d\'utilisateur',
    22 => 'Num&eacute;ro d\'utilisateur:',
    23 => 'Niveau de s&eacute;curit&eacute;',
    24 => 'Anonyme',
    25 => 'R&eacute;pondre',
    26 => 'Ce site n\'est pas responsable du contenu des commentaires. Ceux-ci sont de la responsabilit&eacute; des auteurs',
    27 => 'Commentaire le plus r&eacute;cent',
    28 => 'Effacer',
    29 => 'Aucuns commentaires.',
    30 => 'Vieux articles',
    31 => 'Balises HTML autoris&eacute;es:',
    32 => 'Erreur: Nom d\'utilisateur erron&eacute;',
    33 => 'Erreur: Impossibilit&eacute; d\'enregistrer la r&eacute;f&eacute;rence',
    34 => 'Erreur',
    35 => 'Se d&eacute;connecter',
    36 => 'sur',
    37 => 'Aucun article d\'utilisateur',
    38 => 'Diffusion du contenu',
    39 => 'Rafra&icirc;chir',
    40 => 'Vos param�tres sont &agrave; <tt>register_globals = Off</tt> dans le fichier <tt>php.ini</tt> alors que le syst&egrave;me requiers que les param�tres <tt>register_globals</tt> soient &agrave; <strong>on</strong>. Avant de poursuivre, r&eacute;glez-les &agrave; <strong>on</strong> et red&eacute;marrez votre serveur.',
    41 => 'Visiteur(s)',
    42 => 'Cr&eacute;&eacute; par:',
    43 => 'Pour y r&eacute;pondre',
    44 => 'Parent',
    45 => 'Num&eacute;ro d\'erreur MySQL',
    46 => 'Message d\'erreur MySQL',
    47 => 'Espace Membres',
    48 => 'Informations personnelles',
    49 => 'Pr&eacute;f&eacute;rences d\'affichage',
    50 => 'Erreur dans la requ�te SQL',
    51 => 'aide',
    52 => 'Nouveau',
    53 => 'Centre administratif',
    54 => 'Fichier impossible &agrave; ouvrir.',
    55 => 'Erreur &agrave;',
    56 => 'Voter',
    57 => 'Mot de passe',
    58 => 'Connexion',
    59 => "Pas encore de compte?  Enregistrez-vous comme <a href=\"{$_CONF['site_url']}/users.php?mode=new\">nouveau membre</a>",
    60 => 'Ajouter un commentaire',
    61 => 'Cr&eacute;er un nouveau compte',
    62 => 'mots suppl&eacute;mentaires',
    63 => 'Commentaires pr&eacute;f&eacute;r&eacute;s',
    64 => 'Envoyer cet article &agrave; un ami',
    65 => 'Version imprimable',
    66 => 'Mon calendrier',
    67 => ' vous souhaite la bienvenue',
    68 => 'entr&eacute;e',
    69 => 'contact',
    70 => 'chercher',
    71 => 'contribuer',
    72 => 'ressources internet',
    73 => 'sondages pr&eacute;c&eacute;dents',
    74 => 'calendrier',
    75 => 'recherche avanc&eacute;e',
    76 => 'statistiques du site',
    77 => 'Plugins',
    78 => 'Pour bient&ocirc;t',
    79 => 'Quoi de neuf ?',
    80 => 'derniers articles',
    81 => 'dernier article',
    82 => 'heures',
    83 => 'COMMENTAIRES',
    84 => 'LIENS',
    85 => 'derni&egrave;res 48 heures',
    86 => 'Pas de nouveau commentaires',
    87 => '2 derni&egrave;res semaines',
    88 => 'Pas de liens r&eacute;cents',
    89 => 'Il n\'y a pas d\'&eacute;v&egrave;nement &agrave; venir',
    90 => 'Entr&eacute;e',
    91 => 'Page g&eacute;n&eacute;r&eacute;e en',
    92 => 'secondes',
    93 => 'Tout droits r&eacute;serv&eacute;s',
    94 => 'Toutes les marques cit&eacute;es apartiennent &agrave; leurs propri&eacute;taires respectifs.',
    95 => 'G&eacute;n&eacute;r&eacute; par',
    96 => 'Groupes',
    97 => 'Liste de mots',
    98 => 'Plug-ins',
    99 => 'ARTICLES',
    100 => 'Pas de nouveaux articles',
    101 => 'Vos activit&eacute;s',
    102 => 'Activit&eacute;s g&eacute;n&eacute;rales',
    103 => 'Sauvegarde de la BDD',
    104 => 'par',
    105 => 'Courriel aux membres',
    106 => 'Vu',
    107 => 'Version GL',
    108 => 'Vider la cache',
    109 => 'Rapportez un abus',
    110 => 'D&eacute;noncez ce message &agrave; l\'administrateur',
    111 => 'Version PDF',
    112 => 'Utilisateurs enregistr&eacute;s',
    113 => 'Documentation',
    114 => 'PISTELS',
    115 => 'Pas de nouveau pistel',
    116 => 'Pistel',
    117 => 'r&eacute;pertoire',
    118 => 'Suite &agrave; la page suivante :',
    119 => "Vous avez oubli&eacute; votre <a href=\"{$_CONF['site_url']}/users.php?mode=getpassword\">mot de passe</a> ?",
    120 => 'Lien permanent vers ce commentaire',
    121 => 'Commetaire (%d)',
    122 => 'Pistel (%d)',
    123 => 'Tout code HTML accept&eacute;.',
    124 => 'Cliquez pour effacer tous les articles s&eacute;lectionn&eacute;s',
    125 => '�tes-vous certain de vouloir effacer tous les articles s&eacute;lectionn&eacute;s ?',
    126 => 'S&eacute;lectionnez ou d&eacute;s&eacute;lectionnez tous les articles'
);


###############################################################################
# comment.php

$LANG03 = array(
    1 => 'Ajoutez un commentaire',
    2 => 'Format',
    3 => 'Se d&eacute;connecter',
    4 => 'Cr&eacute;ez un compte',
    5 => 'Nom d\'utilisateur',
    6 => 'L\'envoi d\'un commentaire requiers que vous soyez enregistr&eacute; et connect&eacute;. Si vous n\'avez pas encore de compte, vous pouvez vous inscrire &agrave; l\'aide du formulaire ci-dessous.',
    7 => 'Votre dernier commentaire &eacute;tait il y a ',
    8 => " secondes. Vous devez attendre au moins {$_CONF['commentspeedlimit']} secondes entre chaque commentaire.",
    9 => 'Commenter',
    10 => 'Envoyer un rapport',
    11 => 'Envoyer le commentaire',
    12 => 'Vous devez obligatoirement compl&eacute;ter les champs Titre et Commentaire avant d\'envoyer.',
    13 => 'Vos infos',
    14 => 'Aper&ccedil;u',
    15 => 'Rapportez ce commentaire',
    16 => 'Titre',
    17 => 'Erreur',
    18 => 'Remarque importante',
    19 => 'Essayez de respecter le sujet de l\'article dans votre r&eacute;ponse.',
    20 => 'Essayez de r&eacute;pondre aux commentaires des autres plut&ocirc;t qu\'&agrave; l\'article lui m�me.',
    21 => 'Merci de lire les messages pr&eacute;c&eacute;dants avant d\'envoyer votre propre message afin de ne pas faire de r&eacute;p&eacute;tition.',
    22 => 'Veuillez utiliser un titre en lien avec votre message.',
    23 => 'Votre adresse courriel NE SERA PAS rendue publique.',
    24 => 'Utilisateur anonyme',
    25 => '�tes-vous certain de vouloir rapporter cet abus &agrave; l\'administrateur du site ?',
    26 => '%s &agrave; rapport&eacute; ce message abusif :',
    27 => 'Rapportez un abus'
);

###############################################################################
# users.php

$LANG04 = array(
    1 => 'Profil membre de',
    2 => 'Nom d\'utilisateur',
    3 => 'Nom complet',
    4 => 'Mot de passe',
    5 => 'Courriel',
    6 => 'Site Internet',
    7 => 'Biographie',
    8 => 'Cl&eacute; PGP',
    9 => 'Mettre &agrave; jour',
    10 => 'Les 10 derniers commentaires de l\'utilisateur',
    11 => 'Aucun commentaire',
    12 => 'Pr&eacute;f&eacute;rences d\'utilisation de',
    13 => 'Courriel temporis&eacute; la nuit',
    14 => 'Ce mot de passe a &eacute;t&eacute; g&eacute;n&eacute;r&eacute; automatiquement. Il est recommend&eacute; que vous le changiez imm&eacute;diatement. Pour ce faire, connectez-vous et cliquez sur &laquo;informations personnelles&raquo; dans le menu &laquo;membre&raquo;.',
    15 => "Votre compte, nomm&eacute; {$_CONF['site_name']}, a &eacute;t&eacute; cr&eacute;&eacute; avec succ&egrave;s. Vous devez utiliser les informations ci-dessous pour vous connecter. Veuillez sauvegarder ce message pour vous y r&eacute;f&eacute;rer.",
    16 => 'Informations sur votre compte',
    17 => 'Ce compte n\'existe pas',
    18 => 'L\'adresse courriel semble ne pas �tre valide.',
    19 => 'L\'adresse courriel fournie est d&eacute;j&agrave; utilis&eacute;e par un autre membre.',
    20 => 'L\'adresse courriel fournie ne semble pas �tre valide.',
    21 => 'Erreur',
    22 => "Enregistrez-vous avec {$_CONF['site_name']}!",
    23 => "Apr&egrave;s avoir cr&eacute;&eacute; votre compte {$_CONF['site_name']} vous pourrez envoyer des commentaires et d'autres &eacute;l&eacute;ments. Si vous n'avez pas de compte, vous ne pourrez seulement qu'envoyer des commentaires anonymes. Votre adresse courriel ne sera jamais publi&eacute;e sur ce site.",
    24 => 'Le mot de passe vous sera envoy&eacute; par courriel &agrave; l\'adresse enregistr&eacute;e.',
    25 => 'Avez-vous oubli&eacute; votre mot de passe?',
    26 => 'Saisissez <em>soit</em> votre nom d\'utilisateur <em>soit</em> l\'adresse courriel enregistr&eacute;e &agrave; ce compte, et cliquez &laquo;Envoi du mot de passe&raquo;. Des instructions &agrave; suivre concernant l\'enregistrement d\'un nouveau mot de passe vous seront adress&eacute;es par courriel.',
    27 => 'Enregistrez-vous maintenant!',
    28 => 'Envoi du mot de passe',
    29 => 'd&eacute;connect&eacute; de',
    30 => 'connect&eacute; &agrave;',
    31 => 'Vous devez �tre connect&eacute; pour ex&eacute;cuter cette fonction',
    32 => 'Signature',
    33 => 'Jamais affich&eacute;e publiquement',
    34 => 'Votre nom v&eacute;ritable',
    35 => 'Entrez votre mot de passe afin de le changer',
    36 => 'Commence par http://',
    37 => 'Appliquer &agrave; vos commentaires',
    38 => 'Tout sur vous! Accessible par tous',
    39 => 'Votre cl&eacute; puplique PGP &agrave; partager',
    40 => 'Pas d\'ic&ocirc;ne de sujet',
    41 => 'En attente d\'autorisation',
    42 => 'Format de date',
    43 => 'Nombre maximal d\'articles',
    44 => 'Pas de bo&icirc;tes',
    45 => 'Pr&eacute;f&eacute;rences d\'affichage pour',
    46 => 'El&eacute;ments &agrave; exclure pour',
    47 => 'Configuration de la bo&icirc;te des Nouvelles pour',
    48 => 'Sujets',
    49 => 'Pas d\'ic&ocirc;ne dans les articles',
    50 => 'D&eacute;cocher les cases si vous n\'�tes pas inter&eacute;ss&eacute;',
    51 => 'Seulement les articles de Nouvelles',
    52 => 'Par d&eacute;faut',
    53 => 'Recevoir les articles du jour chaque nuit',
    54 => 'Cocher les cases pour les auteurs et les articles que vous ne voulez pas voir appara&icirc;tre',
    55 => 'Si vous laissez toutes les cases d&eacute;coch&eacute;es, cela signifie que vous souhaitez la s&eacute;lection par d&eacute;faut. Si vous s&eacute;lectionnez au moins une case, n\'oubliez pas de s&eacute;lectionner toutes celles qui vous int&eacute;ressent car les autres seront ignor&eacute;es. Les cases s&eacute;lectionn&eacute;es par d&eacute;faut apparaissent en gras.',
    56 => 'Auteur',
    57 => 'Format',
    58 => 'Ordre de tri',
    59 => 'Nombre maximum de commentaires',
    60 => 'Comment souhaitez vous que vos commentaires appara&icirc;ssent?',
    61 => 'Les plus r&eacute;cents ou les plus anciens en premier?',
    62 => '100 par d&eacute;faut',
    63 => "Votre mot de passe vous a &eacute;t&eacute; envoy&eacute; par courriel et ne devrait pas tarder. Suivez les instructions du message et encore merci d'utiliser {$_CONF['site_name']}",
    64 => 'Pr&eacute;f&eacute;rences des commentaires pour',
    65 => 'Essayez de vous connecter &agrave; nouveau',
    66 => "Vous avez peut-�tre mal saisi le nom de votre compte. Essayer encore de vous connecter &agrave; l'aide du formulaire ci-dessous. Pas encore membre? Inscrivez-vous comme <a href=\"{$_CONF['site_url']}/users.php?mode=new\">ici</a>?",
    67 => 'Membre depuis',
    68 => 'S\'en souvenir pour moi',
    69 => 'Combien de temps devrions-nous garder votre connection  active?',
    70 => "Personnaliser l'aspect et le contenu de {$_CONF['site_name']}",
    71 => "Une fonctionnalit&eacute; int&eacute;ressante de {$_CONF['site_name']} est que vous pouvez en personnaliser l'aspect et le contenu. Afin de pouvoir utiliser ces fonctionnalit&eacute;s vous devez vous <a href=\"{$_CONF['site_url']}/users.php?mode=new\">enregistrer</a> au pr&egrave;s de {$_CONF['site_name']}.  Vous �tes d&eacute;j&agrave; membre?  Alors utilisez la passerelle de connection dans la barre de gauche pour vous connecter!",
    72 => 'Aspect',
    73 => 'Langue',
    74 => 'Changez l\'aspect de ce site!',
    75 => 'Envoyez des courriel &agrave; ces sujets',
    76 => 'Si vous s&eacute;lectionnez un (des) sujet(s) parmi ceux ci-dessous, vous recevrez par courriel &agrave; la fin de chaque journ&eacute;e (vers 22H) les nouveaux articles concerant ces sujets. Choisissez uniquement les sujets qui vous int&eacute;ressent !',
    77 => 'Photo',
    78 => 'Ajouter votre propre photo!',
    79 => 'Cochez ici pour effacer cette photo',
    80 => 'Nom de connexion',
    81 => 'Envoyer courriel',
    82 => '10 derniers article du membre',
    83 => 'Statistiques du membre',
    84 => 'Nombre total d\'articles:',
    85 => 'Nombre total de commentaires:',
    86 => 'Chercher les articles par',
    87 => 'Votre nom de membre',
    88 => "Quelqu'un (possiblement vous-m�me) avez demand&eacute; un nouveau mot de passe pour le compte '%s' sur {$_CONF['site_name']}, <{$_CONF['site_url']}>.\n\nSi vous d&eacute;sirez r&eacute;ellement que cette action soit entreprise, nous vous prions de cliquer sur ce lien:\n\n",
    89 => "Pour refuser d\'entreprendre cette action, vous n\'avez simplement qu\'&agrave; ignorer ce message, ainsi aucune nouvelle action ne sera alors entreprise (votre mot de passe demeurera inchang&eacute;).\n\n",
    90 => 'Vous pouvez choisir un nouveau mot de passe pour le compte ci-dessous. Pri&egrave;re de noter que l\'ancien mot de passe demeurera actif jusqu\'&agrave; ce que vous soumettiez ce formulaire.',
    91 => 'R&eacute;glez le nouveau mot de passe',
    92 => 'Entrez le nouveau mot de passe',
    93 => 'Votre derni&egrave;re requ�te pour l\'obtention d\'un nouveau mot de passe &eacute;tait il y a %d secondes de cela. Ce site requiers que s\'&eacute;coule au moins %d secondes entre les requ�tes de nouveaux mots de passe.',
    94 => 'Effacer le compte "%s"',
    95 => 'Cliquez sur "Effacer le compte" ci-dessous pour effacer votre compte de notre banque de donn&eacute;es. Notez que toutes vos interventions sur ce site seront conserv&eacute;es, &eacute;tant attribu&eacute;es &agrave; un utilisateur &laquo;Anonyme&raquo; en remplacement de votre nom de membre.',
    96 => 'effacer le compte',
    97 => 'Confirmez l\'effacement de votre compte',
    98 => '�tes-vous certain de vouloir effacer ce compte? Car ce faisant, vous ne pourrez alors plus acc&eacute;der aux fonctions de ce site (sauf en cr&eacute;ant un nouveau compte). Si vous en �tes certain, cliquez alors sur "effacer le compte" une derni&egrave;re fois ci-dessous.',
    99 => 'Options de s&eacute;curit&eacute; pour',
    100 => '&eacute;crivez &agrave; l\'administrateur du site',
    101 => 'Autorisez les courriels provenant de l\'administrateur du site',
    102 => 'Courriels des membres',
    103 => 'Allouez la r&eacute;ception de courriels provenant d\'autre membres',
    104 => 'Affichez votre pr&eacute;sence en ligne',
    105 => 'Affichez ma pr&eacute;sence dans le bloc &laquo;En ligne&raquo;',
    106 => 'Localisation',
    107 => 'Affich&eacute; dans votre profil',
    108 => 'Confirmez le nouveau mot de passe',
    109 => 'R&eacute;-inscrivez votre nouveau mot de passe',
    110 => 'Mot de passe actuel',
    111 => 'R&eacute;-inscrivez votre nouveau mot de passe actuel',
    112 => 'Vous ne semblez pas �tre celui ou celle que vous pr&eacute;tendez �tre. Merci de cr&eacute;er un nouveau compte ou de r&eacute;-essayer plus tard.',
    113 => 'Tentative avort&eacute;e',
    114 => 'Compte d&eacute;sactiv&eacute;',
    115 => 'Votre compte &agrave; &eacute;t&eacute; d&eacute;sactiv&eacute;, il vous est donc impossible de vous connecter. Merci de contacter un des administrateurs du site.',
    116 => 'Votre compte est en attente d\'activation',
    117 => 'Votre compte est en attente d\'activation, il doit �tre approuv&eacute; par un admistrateur. Vous ne pourrez y acc&eacute;der avant son activation.',
    118 => "Votre compte {$_CONF['site_name']} est d&eacute;sormais activ&eacute;. Vous pourrez y acc&eacute;der en utilisant votre nom de membre (<username>) et votre mot de passe, tel que re&ccedil;u par courriel.",
    119 => 'En cas d\'oubli de votre mot de passe, vous pourrez en cr&eacute;er un nouveau &agrave; cette adresse :',
    120 => 'Compte activ&eacute;',
    121 => 'Service',
    122 => 'D&eacute;sol&eacute;, mais nous n\'acceptons pas de nouveaux membres en ce moment.',
    123 => "�tes-vous un <a href=\"{$_CONF['site_url']}/users.php?mode=new\">nouveau membre</a> ?",
    124 => 'Confirmez le courriel',
    125 => 'Vous avez inscrit la m�me adresse couriel dans les deux champs !',
    126 => 'Pri&egrave;re de r&eacute;p&eacute;ter pour confirmer',
    127 => 'Mot de passe requis pour effectuer des changements.',
    128 => 'Votre nom',
    129 => 'Mot de passe et courriel',
    130 => '&agrave; propos de vous',
    131 => 'Options du r&eacute;sum&eacute; quotidien',
    132 => 'Fonction de r&eacute;sum&eacute; quotidien',
    133 => 'Affichage des commentaires',
    134 => 'Options des commentaires',
    135 => '<li>Mode d\'affichage des commentaires par d&eacute;faut</li><li>Ordre d\'affichage des commentaires par d&eacute;faut</li><li>R&eacute;glage du maximum de commentaires &agrave; afficher - 100 par d&eacute;faut</li>',
    136 => 'Exclure les sujets et leurs auteurs',
    137 => 'Filtrez le contenu',
    138 => 'Autres r&eacute;glages',
    139 => 'Th&egrave;mes et langues',
    140 => '<li>N\'affiche pas les ic�nes du sujet si coch&eacute;</li><li>N\'affiche pas les cadres si coch&eacute; - seulement le menu admin, le menu utilisateur et les sujets<li>S&eacute;lectionnez le nombre maximum d\'histoires &agrave; afficher</li><li>S&eacute;lectionnez votre th&egrave;me et l\'affichage de la date pr&eacute;f&eacute;r&eacute;s.</li>',
    141 => 'Vie priv&eacute;e',
    142 => 'Par d&eacute;faut, les utilisateurs et les administrateurs peuvent vous envoyer des courriels et voir si vous �tes en ligne. D&eacute;selectionnez pour prot&eacute;ger votre vie priv&eacute;e.',
    143 => 'Filtrez le contenu des cadres',
    144 => 'Cachez ou montrez des cadres',
    145 => 'Votre profil public',
    146 => 'Mot de passe et courriel',
    147 => '&eacute;ditez votre mot de passe, votre courriel ou la fonction autologin. Vous devrez inscrire votre courriel ou mot de passe deux fois pour confirmer.',
    148 => 'Informations d\'utilisateur',
    149 => 'Modifiez les informations personnelles que les autres pourront voir.<li>La signature sera ajout&eacute;e &agrave; toutes vos interventions sur ce site.</li><li>La BIO est une courte description de vous-m�me que vous d&eacute;sirez partager avec les autres.</li><li>Partage de votre cl&eacute; PGP</li>',
    150 => 'Avertissement: utiliser la fonction Javascript de votre navigateur pour de meilleurs r&eacute;sultats',
    151 => 'Pr&eacute;visualisation',
    152 => 'Nom d\'utilisateur et mot de passe',
    153 => 'Th&egrave;mes et langues',
    154 => 'Contenu',
    155 => 'Vie priv&eacute;e',
    156 => 'Fermez mon compte'
);

###############################################################################
# index.php

$LANG05 = array(
    1 => 'Aucun article &agrave; afficher',
    2 => 'Il n\'y a pas de nouveaux articles &agrave; afficher. Il n\'y a peut-�tre pas de nouveaut&eacute;s pour ce sujet ou alors vos pr&eacute;f&eacute;rences sont trop restrictives.',
    3 => ' pour le sujet %s',
    4 => 'Article du jour',
    5 => 'Suivant',
    6 => 'Pr&eacute;c&eacute;dent',
    7 => 'Premier',
    8 => 'Dernier'
);

###############################################################################
# profiles.php

$LANG08 = array(
    1 => 'Une erreur s\'est produite lors de l\'envoi de votre message. Veuillez r&eacute;essayer.',
    2 => 'Message a &eacute;t&eacute; envoy&eacute; avec succ&egrave;s.',
    3 => 'V&eacute;rifiez que l\'adresse du champ &laquo;r&eacute;pondre &agrave;&raquo; est valide.',
    4 => 'Veuillez compl&eacute;ter les champs: &laquo;Votre nom&raquo;, &laquo;r&eacute;ponse &agrave;&raquo;, &laquo;sujet&raquo; et &laquo;message&raquo;',
    5 => 'Erreur: membre inconnu.',
    6 => 'Il y a eu une erreur.',
    7 => 'Profil membre de ',
    8 => 'Nom de connexion',
    9 => 'URL membre',
    10 => 'Envoyer un courriel &agrave;',
    11 => 'Votre nom:',
    12 => 'R&eacute;pondre &agrave;:',
    13 => 'Subject:',
    14 => 'Message:',
    15 => 'Les balises HTML ne seront pas traduites.',
    16 => 'Envoyer Message',
    17 => 'Envoyer cette article &agrave; un ami',
    18 => 'Pour',
    19 => 'Adresse courriel',
    20 => 'De',
    21 => 'Adresse courriel',
    22 => 'Tous les champs sont obligatoires',
    23 => "Ce courriel vous a &eacute;t&eacute; envoy&eacute; de la part de %s at %s car il pensait que vous pourriez �tre int&eacute;ress&eacute; par {$_CONF['site_url']}. Ce n'est pas un SPAM et l'adresse courriel utilis&eacute;e n'est pas stok&eacute;e dans une liste d'envoi.",
    24 => 'Commentaire sur cet article &agrave;',
    25 => 'Vous devez �tre connect&eacute; pour utiliser cette fonction. Votre identification permettra de contr&ocirc;ler tout abus du syst&egrave;me',
    26 => 'Ce formulaire vous permet d\'envoyer un courriel &agrave; tous les membres s&eacute;lectionn&eacute;s. Tous les champs sont obligatoires.',
    27 => 'Message court',
    28 => '%s a &eacute;crit: ',
    29 => "Voici les articles du jour {$_CONF['site_name']} pour ",
    30 => ' lettre d\'information de ',
    31 => 'Titre',
    32 => 'Date',
    33 => 'Lire l\'article complet &agrave;',
    34 => 'Fin du message',
    35 => 'D&eacute;sol&eacute;, ce membre ne d&eacute;sire pas recevoir de messages.'
);

###############################################################################
# search.php

$LANG09 = array(
    1 => 'Recherche avanc&eacute;e',
    2 => 'Mots cl&eacute;s',
    3 => 'Sujet',
    4 => 'Tous',
    5 => 'Type',
    6 => 'Articles',
    7 => 'Commentaires',
    8 => 'Auteurs',
    9 => 'Tous',
    10 => 'Chercher',
    11 => 'R&eacute;sultats de recherche',
    12 => 's&eacute;lections',
    13 => 'Aucun r&eacute;sultats n\'a &eacute;t&eacute; trouv&eacute;',
    14 => 'Aucun r&eacute;sultat ne correspond &agrave; vos crit&egrave;res',
    15 => 'Veuillez r&eacute;essayer.',
    16 => 'Titre',
    17 => 'Date',
    18 => 'Auteur',
    19 => "Chercher dans toute la base de donn&eacute;es de {$_CONF['site_name']} des articles anciens ou recents.",
    20 => 'Date',
    21 => '&agrave;',
    22 => '(Format des dates AAAA-MM-JJ)',
    23 => 'Actions',
    24 => 'Trouv&eacute; %d items',
    25 => 'R&eacute;sultats pour',
    26 => 'Items',
    27 => 'secondes',
    28 => 'Il n\'y a pas d\'articles ou de commentaires correspondant &agrave; vos crit&egrave;res',
    29 => 'Articles et commentaires trouv&eacute;s',
    30 => 'Aucun lien trouv&eacute;',
    31 => 'Aucun lien trouv&eacute; pour ce plugin',
    32 => 'Activit&eacute;',
    33 => 'URL',
    34 => 'Localisation',
    35 => 'Tous les jours',
    36 => 'Aucune activit&eacute; trouv&eacute;e',
    37 => 'Activit&eacute;s trouv&eacute;es',
    38 => 'Liens trouv&eacute;s',
    39 => 'Liens',
    40 => 'Activit&eacute;s',
    41 => 'Votre sujet de recherche devrait comporter au moins 3 caract&egrave;res.',
    42 => 'Pri&egrave;re d\'utiliser une date exprim&eacute;e comme suit: AAAA-MM-JJ (ann&eacute;e-mois-jour).',
    43 => 'phrase exacte',
    44 => 'tous ces mots',
    45 => 'n\'importe quel mot',
    46 => 'Suivant',
    47 => 'Pr&eacute;c&eacute;dant',
    48 => 'Auteur',
    49 => 'Date',
    50 => 'Clics',
    51 => 'Lien',
    52 => 'Localisation',
    53 => 'R&eacute;sultats d\'articles',
    54 => 'R&eacute;sultats de commentaires',
    55 => 'la phrase',
    56 => 'ET',
    57 => 'OU',
    58 => 'Plus de r&eacute;sultats &gt;&gt;',
    59 => 'R&eacute;sultats',
    60 => 'par page',
    61 => 'Recherche &eacute;tendue'
);

###############################################################################
# stats.php

$LANG10 = array(
    1 => 'Statistiques du site',
    2 => 'Nombre de clics sur le site',
    3 => 'Nombre d\'articles',
    4 => 'Nombre de sondages',
    5 => 'Nombre de liens',
    6 => 'Nombre d\'activit&eacute;s',
    7 => 'Top-10 des articles les plus regard&eacute;s',
    8 => 'Titre d\'article',
    9 => 'Pages regard&eacute;es',
    10 => 'Soit il n\'y a pas d\'article sur ce site, soit ils n\'ont pas &eacute;t&eacute; regard&eacute;s',
    11 => 'Top-10 des articles les plus comment&eacute;s',
    12 => 'Commentaires',
    13 => 'Soit il n\'y a pas d\'article sur ce site, soit aucun commentaires n\'a encore &eacute;t&eacute; fait.',
    14 => 'Top-10 des sondages les populaires',
    15 => 'Questions des sondages',
    16 => 'Votes',
    17 => 'Soit il n\'y a aucun sondage sur ce site, soit personne n\'a encore vot&eacute;',
    18 => 'Top-10 des liens les plus populaires',
    19 => 'Liens',
    20 => 'Clics',
    21 => 'Soit il n\'y a encore aucun lien, soit personne n\'a encore cliqu&eacute; dessus',
    22 => 'Top-10 des articles les plus envoy&eacute;s par courriel',
    23 => 'Courriels',
    24 => 'Personne n\'a encore envoy&eacute; d\'article par courriel',
    25 => 'Top-10 des meilleurs pistels comment&eacute;s',
    26 => 'Personne n\'a encore comment&eacute; un pistel',
    27 => 'Nombre d\'utilisateurs actifs',
    28 => 'Top-10 des &eacute;v&egrave;nements',
    29 => '&eacute;v&egrave;nements',
    30 => 'Clics',
    31 => 'Soit il n\'y a encore aucun &eacute;v&egrave;nement, soit personne n\'a encore cliqu&eacute; dessus'
);

###############################################################################
# article.php

$LANG11 = array(
    1 => 'Sujets voisins',
    2 => 'Envoyer cet article &agrave; un ami',
    3 => 'Version imprimable',
    4 => 'Option des articles',
    5 => 'Article en format PDF'
);

###############################################################################
# submit.php

$LANG12 = array(
    1 => 'Pour envoyer un %s vous devez vous identifier comme membre.',
    2 => 'Nom de membre',
    3 => 'Nouveau membre',
    4 => 'Soumettre une activit&eacute;',
    5 => 'Soumettre un lien',
    6 => 'Soumettre un article',
    7 => 'Identification requise',
    8 => 'Envoyer',
    9 => 'Veuillez compl&eacute;ter tous les champs et v&eacute;rifier &agrave; deux fois TOUTES les informations.',
    10 => 'Titre',
    11 => 'Lien',
    12 => 'D&eacute;but',
    13 => 'Fin',
    14 => 'Localisation',
    15 => 'Description',
    16 => 'Si autre, pr&eacute;cisez',
    17 => 'Cat&eacute;gorie',
    18 => 'Autre',
    19 => 'Avant toute chose',
    20 => 'Erreur: cat&eacute;gorie manquante',
    21 => 'Si vous s&eacute;lectionnez &laquo;Autre&raquo; veuillez indiquer une cat&eacute;gorie',
    22 => 'Erreur: champs manquants',
    23 => 'Veuillez compl&eacute;ter tous les champs du formulaire. Ils sont tous obligatoires.',
    24 => 'Proposition enregistr&eacute;e',
    25 => 'Vos propositions %s ont &eacute;t&eacute; sauvegard&eacute;es avec succ&egrave;s.',
    26 => 'Vitesse limite',
    27 => 'Membre',
    28 => 'Sujet',
    29 => 'Article',
    30 => 'Votre derni&egrave;re proposition &eacute;tait il y a',
    31 => " secondes. Vous devez attendre au moins {$_CONF['speedlimit']} secondes entre chaque propositions",
    32 => 'Aper&ccedil;u',
    33 => 'Aper&ccedil;u de l\'article',
    34 => 'Se d&eacute;connecter',
    35 => 'Les balises HTML ne sont pas accept&eacute;es',
    36 => 'Format',
    37 => "Le fait de sugg&eacute;rer une activit&eacute;e &agrave; {$_CONF['site_name']} aura pour effet d'inclure cette activit&eacute; dans le calendrier g&eacute;n&eacute;ral. Les membres pourront alors ajouter cette activit&eacute; dans leur calendrier personnel. Cette fonctionnalit&eacute; <b>ne doit pas</b> servir aux anniversaires.<br><br>L'administrateur du site se r&eacute;serve le droit d'accepter ou de refuser toute proposition",
    38 => 'Ajouter l\'activit&eacute; &agrave;',
    39 => 'Calendrier g&eacute;n&eacute;ral',
    40 => 'Calendrier personnel',
    41 => 'Fin',
    42 => 'D&eacute;but',
    43 => 'Activit&eacute;s aujourd\'hui',
    44 => 'Adresse (ligne 1)',
    45 => 'Adresse (ligne 2)',
    46 => 'Ville',
    47 => 'R&eacute;gion',
    48 => 'Code postal',
    49 => 'Type d\'activit&eacute;',
    50 => 'Modifier le type',
    51 => 'Localisation',
    52 => 'Supprimer',
    53 => 'Cr&eacute;er un compte'
);

###############################################################################
# ADMIN PHRASES - These are file phrases used in admin scripts
###############################################################################

###############################################################################
# admin/auth.inc.php

$LANG20 = array(
    1 => 'Identification requise',
    2 => 'Utilisateur ou mot de passe incorrect',
    3 => 'Mot de passe incorrect',
    4 => 'Nom du membre:',
    5 => 'Mot de passe:',
    6 => 'Toutes tentatives d\'acc&egrave;s &agrave; cette portion du site est enregistr&eacute;e et analys&eacute;e.<br>Cette page est r&eacute;serv&eacute;e aux personnes autoris&eacute;es.',
    7 => 'Connexion'
);

###############################################################################
# admin/block.php

$LANG21 = array(
    1 => 'Droits insuffisants',
    2 => 'Vous n\'avez pas les droits n&eacute;cessaires pour modifier ce bloc',
    3 => 'Editeur de bloc',
    4 => 'Un probl&egrave;me est survenu &agrave; la lecture de cet envoi. Voir error.log.',
    5 => 'titre du bloc',
    6 => 'sujet',
    7 => 'tous',
    8 => 'niveau de s&eacute;curit&eacute; du bloc',
    9 => 'Ordre du bloc',
    10 => 'type du bloc',
    11 => 'Bloc Portail',
    12 => 'Bloc Normal',
    13 => 'Bloc portail d\'option',
    14 => 'URL RDF',
    15 => 'Derni&egrave;re MAJ RDF',
    16 => 'Bloc normal d\'option',
    17 => 'Contenu du bloc',
    18 => 'Veuillez remplir les champs: titre, niveau de s&eacute;curit&eacute; et contenu du bloc',
    19 => 'Contr&ocirc;leur de bloc',
    20 => 'Bloc titre',
    21 => 'Bloc niv. sec.',
    22 => 'Bloc type',
    23 => 'Bloc ordre',
    24 => 'Bloc sujet',
    25 => 'Cliquez sur le lien ci-dessous pour modifier ou supprimer un bloc.  Cliquez sur le lien nouveau bloc pour cr&eacute;er un nouveau bloc.',
    26 => 'Bloc d\'affichage',
    27 => 'Bloc PHP',
    28 => 'Option du bloc PHP',
    29 => 'Bloc fonction',
    30 => 'Si vous voulez que l\'un de vos blocs utilise du PHP, saisissez le nom de la fonction &agrave; utiliser.  Le nom de la fonction doit commencer par \'phpblock_\' (ex: phpblock_getweather).  Si ce n\'est pas le cas, votre fonction NE SERA PAS appell&eacute;e, ceci pour des raisons de s&eacute;curit&eacute;.  Ne mettez pas de parenth&egrave;ses vides \'()\' apr&egrave;s le nom de votre fonction.  Enfin, nous vous recommandons de mettre tout le code des bloc PHP dans /path/to/geeklog/system/lib-custom.php.  Cela permettera de garder votre code m�me apr&egrave;s une mise &agrave; jour du syst&egrave;me.',
    31 => 'Erreur dans le bloc PHP.  La fonction, %s, n\'existe pas.',
    32 => 'Erreur: champs manquant',
    33 => 'Vous devez mettre l\'URL dans le fichier .rdf pour le bloc portail.',
    34 => 'Vous devez renseigner le titre et la fonction du bloc PHP.',
    35 => 'Vous devez entrer le titre et le contenu du bloc normal.',
    36 => 'Vous devez entrer le contenu pour le bloc d\'affichage.',
    37 => 'Nom erron&eacute; dans la fonction du bloc PHP',
    38 => 'Les fonctions des blocs PHP doivent commencer par "phpblock_" (ex: phpblock_getweather).  Le pr&eacute;fixe "phpblock_" est n&eacute;cessaire pour des raisons de s&eacute;curit&eacute; qui emp�che l\'ex&eacute;cution de code arbitraire.',
    39 => 'C&ocirc;t&eacute;',
    40 => 'Gauche',
    41 => 'Droit',
    42 => 'Vous devez saisir l\'ordre et le niveau de s&eacute;curit&eacute; pour les blocs par d&eacute;faut du syst&egrave;me',
    43 => 'Accueil seulement',
    44 => 'Acc&egrave;s interdit',
    45 => "Vous essayez d'acc&eacute;der &agrave; un bloc auquel vous n'avez pas droit.  Cette tentative est enregistr&eacute;e. Veuillez <a href=\'{$_CONF['site_admin_url']}/block.php\'>retourner &agrave; la page de controle des blocs</a>.",
    46 => 'Nouveau bloc',
    47 => 'Accueil admin',
    48 => 'Nom du bloc',
    49 => ' (pas d\'espace et doit �tre unique)',
    50 => 'URL d\'aide',
    51 => 'inclure http:// ',
    52 => 'Laisser vide pour ne pas afficher l\'icone d\'aide',
    53 => 'Activ&eacute;',
    54 => 'enregistrer',
    55 => 'annuler',
    56 => 'supprimer',
    57 => 'Bougez le bloc vers le bas',
    58 => 'Bougez le bloc vers le haut',
    59 => 'Bougez le bloc vers la droite',
    60 => 'Bougez le bloc vers la gauche',
    61 => 'Sans titre',
    62 => 'Article limit&eacute; &agrave;',
    63 => 'Nom de bloc non-valide',
    64 => 'Il doit y avoir un titre. Le code HTML est interdit!',
    65 => 'Commandez',
    66 => 'Autotags',
    67 => 'V&eacute;rifiez si vous acceptez les autotags'
);


###############################################################################
# admin/story.php

$LANG24 = array(
    1 => 'Articles pr&eacute;c&eacute;dents',
    2 => 'Articles suivants',
    3 => 'Mode',
    4 => 'Format',
    5 => 'Editeur d\'articles',
    6 => 'Il n\'y a pas d\'articles dans le syst&egrave;me',
    7 => 'Auteur',
    8 => 'Enregistrer',
    9 => 'Pr&eacute;-visualisation',
    10 => 'Annuler',
    11 => 'Supprimer',
    12 => 'Num&eacute;ro',
    13 => 'Titre',
    14 => 'Sujet',
    15 => 'Date',
    16 => 'Texte d\'intro',
    17 => 'Texte int&eacute;gral',
    18 => 'Clics',
    19 => 'Commentaires',
    20 => 'Ping',
    21 => 'Envoyez un ping',
    22 => 'Liste des articles',
    23 => 'Pour modifier ou supprimer un article, cliquez sur son num&eacute;ro. Pour visionner un article, cliquez sur le titre de l\'article. Pour cr&eacute;er un nouvel article, cliquez sur le bouton &eacute;crire un article.',
    24 => 'Le num&eacute;ro choisi pour cet article est d&eacute;j&agrave; utilis&eacute;. Merci d\'en choisir un autre.',
    25 => 'Une erreur s\'est produite lors de la sauvegarde',
    26 => 'Aper&ccedil;u de l\'article',
    27 => 'Si vous utilisez [unscaledX] au lieu de [imageX], votre image appara�tra dans ses dimensions originales.',
    28 => '<p><b>Pr&eacute;-visualisation</b>: La pr&eacute;-visualisation d\'un article pourvu d\'images est facilit&eacute; si on le sauvegarde comme brouillon AU LIEU DE le pr&eacute;-visualiser. Ne pr&eacute;-visualisez qu\'en absence d\'image.',
    29 => 'Pistel',
    30 => 'Erreur de sauvegarde',
    31 => 'Veuillez inscrire le titre et le texte d\'introduction.',
    32 => 'T�te d\'affiche',
    33 => 'Il ne peut y avoir qu\'un seul article en t�te d\'affiche',
    34 => 'Brouillon',
    35 => 'Oui',
    36 => 'Non',
    37 => '',
    38 => '',
    39 => 'Courriels',
    40 => 'Acc&egrave;s refus&eacute;',
    41 => "Vous essayez d'acc&eacute;der &agrave; un article auqule vous n'avez pas droit.  Cette tentative est enregistr&eacute;e.  Vous pouvez voir cet article en lecture seule uniquement. Veuillez <a href=\'{$_CONF['site_admin_url']}/story.php\'>retourner sur la page de contr&ocirc;le des article</a> lorsque vous aurez fini.",
    42 => "Vous essayez d'acc&eacute;der &agrave; un article auquel vous n'avez pas droit.  Cette tentative est enregistr&eacute;e.  Veuillez <a href=\'{$_CONF['site_admin_url']}/story.php\'>retourner &agrave; la page de contr&ocirc;le des articles</a>.",
    43 => 'Nouvel article',
    44 => 'Accueil Admin',
    45 => 'Acc&egrave;s',
    46 => '<b>REMARQUE:</b> si vous indiquez une date future, cet article n\'appara&icirc;tra qu\'&agrave; partir de cette date. Cela signifie aussi que l\'article sera ignor&eacute; des recherches et des statistiques.',
    47 => 'Images',
    48 => 'image',
    49 => 'droite',
    50 => 'gauche',
    51 => 'Pour ajouter une des images que vous avez fournies vous devez ins&eacute;rer un texte sp&eacute;cial dans votre article. Vous devez ins&eacute;rer [imageX], [imageX_right] ou [imageX_left] o&ugrave; X est le num&eacute;ro de l\'image que vous avez fournie.  REMARQUE: vous devez utiliser toutes les images fournies.  Si vous ne le faites pas vous ne pourrez pas enregistrer votre article.<BR><P><B>APERCU</B>: lors de l\'utilisation d\'images il est pr&eacute;f&eacute;rables de faire un brouillon plut&ocirc;t que d\'utiliser la fonction d\'apercu.  Utilisez le bouton d\'apercu uniquement lorsqu\'il n\'y a pas d\'image.',
    52 => 'Supprimer',
    53 => 'n\'est pas utilis&eacute;e.  Vous devez ins&eacute;rer l\'image dans le texte de votre article avant de l\'enregistrer.',
    54 => 'Image fournie non utilis&eacute;e',
    55 => 'L\'erreur suivante est apparue lors de l\'enregistrement de votre article.  Veuillez corriger ces erreurs et r&eacute;essayer',
    56 => 'Montrer l\'ic&ocirc;ne',
    57 => 'Montrer l\'image originale',
    58 => 'Gestion des articles',
    59 => 'Option',
    60 => 'Activ&eacute;',
    61 => 'Auto-archiv&eacute;',
    62 => 'Auto-effac&eacute;',
    63 => '',
    64 => '',
    65 => '',
    66 => '',
    67 => 'Augmentez le contenu en r&eacute;visant la taille de l\'article',
    68 => 'R&eacute;duisez le contenu en r&eacute;visant la taille de l\'article',
    69 => 'Publiez la date de l\'article',
    70 => 'S&eacute;lectionnez une barre d\'outils',
    71 => 'Barre d\'outils de base',
    72 => 'Barre d\'outils normale',
    73 => 'Barre d\'outils avanc&eacute;e',
    74 => 'Barre d\'outils experte',
    75 => 'Toutes les options',
    76 => 'Options de publication',
    77 => 'L\'option Javascript est n&eacute;cessaire pour que cet &eacute;diteur fonctionne. Cette option peut-�tre d&eacute;sactiv&eacute;e dans config.php',
    78 => 'Cliquez <a href="%s/story.php?mode=edit&amp;sid=%s&amp;editopt=default">ici</a> pour utiliser l\'&eacute;diteur par d&eacute;faut',
    79 => 'Pr&eacute;vision',
    80 => '&eacute;dition',
    81 => 'Options de publication',
    82 => 'Images',
    83 => 'Options d\'archive',
    84 => 'Permissions',
    85 => 'Montrez tout',
    86 => '&eacute;dition avanc&eacute;e',
    87 => 'Statistiques'
);

###############################################################################
# admin/topic.php

$LANG27 = array(
    1 => 'Editeur de sujet',
    2 => 'Num&eacute;ro',
    3 => 'Nom',
    4 => 'Image',
    5 => '(ne pas utiliser d\'espaces)',
    6 => 'Supprimer un sujet supprimera tous les articles et blocs en relations avec celui-ci',
    7 => 'Veuillez renseigner le num&eacute;ro et le nom du sujet.',
    8 => 'Contr&ocirc;leur de sujet',
    9 => 'Cliquez sur un sujet pour le modifier ou le supprimer.  Cliquez sur le bouton &laquo;Nouveau Sujet&raquo; &agrave; gauche pour cr&eacute;er un sujet. Vos droits d\'acc&egrave;s concernent tout sujet apparaissant entre parenth&egrave;ses.',
    10 => 'Ordre de tri',
    11 => 'Articles/Page',
    12 => 'Acc&egrave;s interdit',
    13 => "vous essayez d'acc&eacute;der &agrave; un sujet auquel vous n'avez pas droit.  Cette tentative est enregistr&eacute;e. Veuillez <a href=\'{$_CONF['site_admin_url']}/topic.php\'>retourner &agrave; la page de contr&ocirc;le des sujets</a>.",
    14 => 'M&eacute;thode de tri',
    15 => 'alphab&eacute;tique',
    16 => 'par d&eacute;faut:',
    17 => 'Nouveau Sujet',
    18 => 'Accueil Admin',
    19 => 'Enregistrer',
    20 => 'Annuler',
    21 => 'Supprimer',
    22 => 'Par d&eacute;faut',
    23 => 'Faites de ce sujet le choix par d&eacute;faut pour la cr&eacute;ation de nouveaux articles',
    24 => '(*)',
    25 => 'Archivez le sujet',
    26 => 'faites-en le sujet par d&eacute;faut pour vos archives. Un seul sujet n\'est admis.',
    27 => 'Ou alors t&eacute;l&eacute;chargez votre ic�ne pour ce sujet',
    28 => 'Maximum',
    29 => 'Erreur de t&eacute;l&eacute;chargement'
);

###############################################################################
# admin/user.php

$LANG28 = array(
    1 => 'Editeur du membre',
    2 => 'Num&eacute;ro',
    3 => 'Nom de connexion',
    4 => 'Nom complet',
    5 => 'Mot de passe',
    6 => 'Niveau de s&eacute;curit&eacute;',
    7 => 'Adresse courriel',
    8 => 'Page d\'accueil',
    9 => '(ne pas utiliser d\'espaces)',
    10 => 'Veuillez renseigner le nom de connexion, le nom complet, le nom complet et l\'adresse courriel.',
    11 => 'Contr&ocirc;leur des membres',
    12 => 'Cliquez sur un membre pour le modifier ou le supprimer.  Cliquez sur le bouton Nouveau membre &agrave; gauche pour cr&eacute;er un compte. Vous pouvez faire des recherches simple en entrant une partie du nom de connexion, du nom complet ou de l\'adresse courriel (ex:*son* ou *.edu) dans le formulaire ci-dessous.',
    13 => 'Niv. Sec.',
    14 => 'Date d\'enregistrement',
    15 => 'Nouveau membre',
    16 => 'Accueil Admin',
    17 => 'Changer le mot de passe',
    18 => 'Annuler',
    19 => 'Supprimer',
    20 => 'Enregistrer',
    21 => 'Le nom de connexion est d&eacute;j&agrave; utilis&eacute;.',
    22 => 'Erreur',
    23 => 'Ajout par lot',
    24 => 'Importation par lot d\'utilisateurs',
    25 => 'Vous pouvez importer un lot d\'utilisateur dans le syst&egrave;me.  Les champ du fichier d\'import doivent �tre s&eacute;par&eacute;s par une tabulation. Ils doivent appara&icirc;tre dans l\'ordre suivant: Nom complet, nom de connexion, adresse courriel.  Chaque utilisateur import&eacute; sera averti par courriel et aura un mot de passe auto-g&eacute;n&eacute;r&eacute;.  Il ne doit y avoir qu\'un seul utilisateur par ligne.  Ne pas respecter ces consignes peut entra&icirc;ner des d&eacute;gat qui ne seront r&eacute;parables que manuellement, alors redoublez de vigilance!',
    26 => 'Chercher',
    27 => 'Nb de r&eacute;sultats max',
    28 => 'Coche la case pour supprimer la photo',
    29 => 'Chemin',
    30 => 'Importer',
    31 => 'Nouveaux membres',
    32 => 'Traitement termin&eacute;. %d membres ont &eacute;t&eacute; import&eacute;s et il y a %d erreurs',
    33 => 'envoyer',
    34 => 'Erreur: Vous devez pr&eacute;ciser un fichier &agrave; t&eacute;l&eacute;charger.',
    35 => 'Dernier acc&egrave;s',
    36 => '(jamais)',
    37 => 'UID',
    38 => 'Liste group&eacute;e',
    39 => 'Mot de passe (encore)',
    40 => 'Date d\'enregistrement',
    41 => 'Date du dernier acc&egrave;s',
    42 => 'Banni',
    43 => 'En attente d\'activation',
    44 => 'En attente d\'autorisation',
    45 => 'Activ&eacute;',
    46 => 'Statut du membre',
    47 => '&eacute;ditez',
    48 => 'Montrez les groupes Admin',
    49 => 'Groupe Admin',
    50 => 'Check to allow filtering this group as an Admin Use Group',
    51 => 'Jours en ligne',
    52 => '<br>Note: Les "jours en ligne", c\'est le total de jours entre la cr&eacute;ation du compte et le dernier acc&egrave;s.',
    53 => 'enregistr&eacute;',
    54 => 'Tous effac&eacute;s',
    55 => '&Ccedil;a ne fonctionnera seulement que si vous avez le code <code>$_CONF[\'lastlogin\'] = true;</code> dans config.php',
    56 => 'Pri&egrave;re de s&eacute;lectionner le type d\'utilisateur que vous d&eacute;sirez effacer et cliquez sur "Mise &agrave; jour de la liste". Ensuite, d&eacute;selectionnez les utilisateurs que vous ne d&eacute;sirez pas effacer et cliquez sur "Effacer". Merci de noter que si la liste s\'&eacute;tend sur plusieurs pages, vous n\'effacerez que les noms pr&eacute;sents sur la page actuelle. R&eacute;p&eacute;tez pour les autres pages.',
    57 => 'Utilisateurs fant�me',
    58 => 'Utilisateurs de courte dur&eacute;e',
    59 => 'Anciens utilisateurs',
    60 => 'Utilisateurs entregistr&eacute;s il y a plus de ',
    61 => ' mois, mais qui n\'ont jamais acc&eacute;d&eacute; au service.',
    62 => 'Utilisateurs entregistr&eacute;s il y a plus de ',
    63 => ' mois, qui ont ensuite acc&eacute;d&eacute; au syst&egrave;me dans les 24 heures, mais qui n\'ont jamais acc&eacute;d&eacute; au service par la suite.',
    64 => 'Utilisateurs normaux qui n\'ont pas acc&eacute;d&eacute; au service depuis ',
    65 => ' mois.',
    66 => 'Mise &agrave; jour de la liste',
    67 => 'Mois depuis enregistrement',
    68 => 'Mois en ligne',
    69 => 'Mois hors-ligne',
    70 => 'n\'ont pu �tre effac&eacute;s',
    71 => 'effac&eacute;s avec succ&egrave;s',
    72 => 'Aucun utilisateur s&eacute;lectionn&eacute;',
    73 => '�tes-vous certain de vouloir effacer TOUS ces utilisateurs ?',
    74 => 'Utilisateurs r&eacute;cents',
    75 => 'Utilisateurs enregistr&eacute;s lors des derniers ',
    76 => ' mois'

);

###############################################################################
# admin/moderation.php

$LANG29 = array(
    1 => 'Valider',
    2 => 'Supprimer',
    3 => 'Modifier',
    4 => 'Profil',
    10 => 'Titre',
    11 => 'D&eacute;but',
    12 => 'URL',
    13 => 'Cat&eacute;gorie',
    14 => 'Date',
    15 => 'Sujet',
    16 => 'Membre',
    17 => 'Nom Complet',
    18 => 'Courriel',
    34 => 'Commandes et Contr&ocirc;les',
    35 => 'Soumissions d\'articles',
    36 => 'Soumission de liens',
    37 => 'Soumission d\'activit&eacute;s',
    38 => 'Envoyer',
    39 => 'Il n\'y a aucune soumission &agrave; administrer pour le moment',
    40 => 'Soumissions des membres'
);


###############################################################################
# admin/mail.php

$LANG31 = array(
    1 => "Envoyer un mail aux membres de {$_CONF['site_name']}",
    2 => 'De',
    3 => 'Adresse de r&eacute;ponse',
    4 => 'Sujet',
    5 => 'Message',
    6 => '&agrave;:',
    7 => 'Tous les membres',
    8 => 'Admin',
    9 => 'Options',
    10 => 'HTML',
    11 => 'message urgent!',
    12 => 'Envoyer',
    13 => 'Effacer',
    14 => 'Ignorer les pr&eacute;f&eacute;rences membre',
    15 => 'Erreur lors de l\'envoi d\'un message &agrave;: ',
    16 => 'Message envoy&eacute; avec succ&egrave;s &agrave;: ',
    17 => "<a href=\"{$_CONF['site_admin_url']}/mail.php\">Envoyer un autre message</a>",
    18 => '&agrave;',
    19 => 'Remarque: si vous voulez envoyer un message &agrave; tous les membres, utilisez le groupe Logged-in dans le champ A.',
    20 => "<successcount> messages ont &eacute;t&eacute; envoy&eacute;s avec succ&egrave;s et <failcount> n'ont pas pu �tre envoy&eacute;s.  Vous trouverez le d&eacute;tail de chaque tentative ci-dessous.  Vous pouvez &eacute;galement <a href=\"{$_CONF['site_admin_url']}/mail.php\">envoyer un autre message</a> ou <a href=\"{$_CONF['site_admin_url']}/moderation.php\">revenir &agrave; la page d'administration</a>.",
    21 => '&eacute;checs',
    22 => 'Succ&egrave;s',
    23 => 'Pas d\'&eacute;checs',
    24 => 'Pas de succ&egrave;s',
    25 => '-- Choisir un groupe --',
    26 => 'Remplissez tous les champs et choisissez un groupe parmi la liste.'
);

###############################################################################
# admin/plugins.php

$LANG32 = array(
    1 => 'L\'installation de plugins peut endommager le syst&egrave;me.  Il est important de n\'installer que des plugins approuv&eacute;s par <a href=\'http://www.geeklog.net\' target=\'_blank\'>le syst&egrave;me</a> car nous les testons sur plusieurs syst&egrave;mes. Installer des plugins requiert l\'ex&eacute;cution de plusieurs commandes syst&egrave;mes qui peuvent poser des probl&egrave;mes de s&eacute;curit&eacute;, particuli&egrave;rement si vous utilisez des plugins de provenances inconnues. Vous �tes averti des domages que peut causer l\'installation d\'un plugin. En d\'autres termes, vous installez des plugins &agrave; vos propres risques. Les instructions d\'installation des plugins sont incluses dans chaque plugin.',
    2 => 'Instructions d\'installation d\'un plugin',
    3 => 'Formulaire d\'installation d\'un plugin',
    4 => 'Fichier du plugin',
    5 => 'Liste des plugins',
    6 => 'Attention: plugin d&eacute;j&agrave; install&eacute;!',
    7 => 'Le plugin que vous essayez d\'installer existe d&eacute;j&agrave;.  Veuillez supprimer le plugin avant de le r&eacute;installer.',
    8 => 'Test de compatibilit&eacute; du plugin &eacute;chou&eacute;',
    9 => 'Ce plugin requiert une version plus r&eacute;cente du syst&egrave;me. Vous pouvez mettre &agrave; jour votre <a href=\'http://www.geeklog.net\'>syst&egrave;me</a> ou obtenir une autre version du plugin.',
    10 => '<br><b>Aucun plugin n\'est actuellement install&eacute;.</b><br><br>',
    11 => 'Cliquez sur le num&eacute;ro du plugin pour le modifier ou le supprimer. Pour en savoir d\'avantage sur les plugins, cliquez sur le nom du plugin et vous serez redirig&eacute; vers le site web du plugin. Pour installer ou mettre &agrave; jour un plugin veuillez vous r&eacute;f&eacute;rer &agrave; la documentation du plugin.',
    12 => 'Aucun nom de plugin n\'a &eacute;t&eacute; pass&eacute; &agrave; plugineditor()',
    13 => 'Editeur de plugin',
    14 => 'Nouveau plugin',
    15 => 'Accueil Admin',
    16 => 'Nom du plugin',
    17 => 'Version du plugin',
    18 => 'Version de GL',
    19 => 'Activ&eacute;',
    20 => 'Oui',
    21 => 'Non',
    22 => 'Installer',
    23 => 'Enregistrer',
    24 => 'Annuler',
    25 => 'Supprimer',
    26 => 'Nom du plugin',
    27 => 'Site web du plugin',
    28 => 'Version du plugin',
    29 => 'Version de GL',
    30 => 'Supprimer le plugin ?',
    31 => 'Etes-vous s&ucircr de vouloir supprimer ce plugin? Toutes les donn&eacute;es, fiches et structures utilis&eacute;s par ce plugin seront d&eacute;truites.  Si vous �tes certain de vouloir supprimer le plugin, cliquez sur le bouton &laquo;Supprimer&raquo;.',
    32 => '<p><b>Erreur de format du lien automatique</b></p>',
    33 => 'Version du code',
    34 => 'Mise &agrave; jour',
    35 => '&eacute;dition',
    36 => 'Code',
    37 => 'Donn&eacute;es',
    38 => 'Mettre &agrave; jour!'
);

###############################################################################
# admin/syndication.php

$LANG33 = array(
    1 => 'cr&eacute;ez un flux',
    2 => 'sauvegardez',
    3 => 'effacez',
    4 => 'annulez',
    10 => 'flux du contenu',
    11 => 'Nouveau flux',
    12 => 'Contr�les de l\'administration',
    13 => 'Cliquez sur le titre d\'un flux pour l\'effacer ou le modifier. Cliquez sur <b>Nouveau flux</b> pour en cr&eacute;er un nouveau.',
    14 => 'Titre',
    15 => 'Type',
    16 => 'Nom du fichier',
    17 => 'Format',
    18 => 'derni&egrave;re mise &agrave; jour',
    19 => 'Activ&eacute;',
    20 => 'Oui',
    21 => 'Non',
    22 => '<i>(pas de flux)</i>',
    23 => 'tous les sujets',
    24 => '&eacute;diteur de flux',
    25 => 'Titre du flux',
    26 => 'Limite',
    27 => 'Taille des entr&eacute;es',
    28 => '(0 = sans texte, 1 = plein texte, autre = limite du nombre de caract&egrave;res.)',
    29 => 'Description',
    30 => 'Derni&egrave;re mise &agrave; jour',
    31 => 'Jeu de caract&egrave;res',
    32 => 'Langue',
    33 => 'Contenu',
    34 => 'Entr&eacute;es',
    35 => 'Heures',
    36 => 'S&eacute;lectionnez le type de flux',
    37 => 'Vous avez au moins un plugin autorisant le partge de l\'information. Vous devrez choisir plus bas si vous d&eacute;sirez un flux du syst&egrave;me ou celui d\'un autre plugin.',
    38 => 'Erreur : champs incomplets',
    39 => 'Merci d\'inscrire le titre du flux, sa description, et son nom de fichier.',
    40 => 'Merci d\.inscrire un nombre d\'entr&eacute;s ou un nombre d\'heures.',
    41 => 'Liens',
    42 => '&eacute;v&egrave;nements',
    43 => 'Tout',
    44 => 'Rien',
    45 => 'Lien d\'ent�te dans le sujet',
    46 => 'Limite des r&eacute;sultats',
    47 => 'Recherche',
    48 => '&eacute;dition',
    49 => 'Logo du flux',
    50 => "URL du site ({$_CONF['site_url']})",
    51 => 'Le nom de fichier choisi est pr&eacute;sentement utilis&eacute; par un autre flux. Merci de choisir un nom diff&eacute;rent.',
    52 => 'Erreur: nom de fichier existant'
);

###############################################################################
# confirmation and error messages

$MESSAGE = array(
    1 => "Votre mot de passe a &eacute;t&eacute; envoy&eacute; par courriel et devrait vous parvenir sous peu. Suivez les instructions incluses dans le message et encore merci d'utiliser {$_CONF['site_name']}",
    2 => "Merci de proposer un article &agrave; {$_CONF['site_name']}.  Il a &eacute;t&eacute; envoy&eacute; &agrave; notre &eacute;quipe qui en disposera. Votre article sera publi&eacute; s'il est retenu.",
    3 => "Merci de proposer un lien &agrave; {$_CONF['site_name']}.  Il a &eacute;t&eacute; envoy&eacute; &agrave; notre &eacute;quipe qui en disposera.  S'il est retenu, votre lien sera affich&eacute; <a href={$_CONF['site_url']}/links.php>ici</a>.",
    4 => "Merci de proposer une activit&eacute; &agrave; {$_CONF['site_name']}.  Elle a &eacute;t&eacute; envoy&eacute;e &agrave; notre &eacute;quipe qui en disposera. Si elle est retenue, votre activit&eacute; sera affich&eacute;e <a href={$_CONF['site_url']}/calendar.php>ici</a>.",
    5 => 'Vos informations ont &eacute;t&eacute; mises &agrave; jour avec succ&egrave;s.',
    6 => 'Vos pr&eacute;f&eacute;rences d\'affichage ont &eacute;t&eacute; mises &agrave; jour avec succ&egrave;s.',
    7 => 'Vos pr&eacute;f&eacute;rences de commentaire ont &eacute;t&eacute; mises &agrave; jour avec succ&egrave;s.',
    8 => 'Vous avez &eacute;t&eacute; d&eacute;connect&eacute; avec succ&egrave;s.',
    9 => 'Votre article a &eacute;t&eacute; enregistr&eacute; avec succ&egrave;s.',
    10 => 'L\'article a &eacute;t&eacute; supprim&eacute; avec succ&egrave;s.',
    11 => 'Votre bloc a &eacute;t&eacute; enregistr&eacute; avec succ&egrave;s.',
    12 => 'Le bloc a &eacute;t&eacute; supprim&eacute; avec succ&egrave;s.',
    13 => 'Votre sujet a &eacute;t&eacute; enregistr&eacute; avec succ&egrave;s.',
    14 => 'Le sujet et tous ses articles ainsi que ses blocs ont &eacute;t&eacute; supprim&eacute;s avec succ&egrave;s.',
    15 => 'Votre lien a &eacute;t&eacute; enregistr&eacute; avec succ&egrave;s.',
    16 => 'Le lien a &eacute;t&eacute; supprim&eacute; avec succ&egrave;s.',
    17 => 'Votre activit&eacute; a &eacute;t&eacute; enregistr&eacute;e avec succ&egrave;s.',
    18 => 'L\'activit&eacute; a &eacute;t&eacute; supprim&eacute;e avec succ&egrave;s.',
    19 => 'Votre sondage a &eacute;t&eacute; enregistr&eacute; avec succ&egrave;s.',
    20 => 'Le sondage a &eacute;t&eacute; supprim&eacute; avec succ&egrave;s.',
    21 => 'Le nouveau membre a &eacute;t&eacute; enregistr&eacute; avec succ&egrave;s.',
    22 => 'L\'utilisateur a &eacute;t&eacute; supprim&eacute; avec succ&egrave;s.',
    23 => 'Erreur durant l\'ajout d\'une activit&eacute; &agrave; votre calendrier. Aucun identifiant d\'activit&eacute; n\'a &eacute;t&eacute; transmis.',
    24 => 'L\'activit&eacute; a &eacute;t&eacute; enregistr&eacute;e dans votre calendrier.',
    25 => 'Vous devez vous connecter pour consulter votre calendrier',
    26 => 'L\'activit&eacute; a &eacute;t&eacute; supprim&eacute;e de votre calendrier avec succ&egrave;s.',
    27 => 'Message envoy&eacute; avec succ&egrave;s.',
    28 => 'Le plugin a &eacute;t&eacute; supprim&eacute; avec succ&egrave;s.',
    29 => 'Les calendriers personnels ne sont pas activ&eacute;s.',
    30 => 'Acc&egrave;s interdit',
    31 => 'Vous n\'avez pas acc&egrave;s &agrave; la page d\'administration des articles. Toutes les tentatives d\'acc&egrave;s &agrave; des parties non autoris&eacute;es sont enregistr&eacute;es.',
    32 => 'Vous n\'avez pas acc&egrave;s &agrave; la page d\'administration des sujets. Toutes les tentatives d\'acc&egrave;s &agrave; des parties non autoris&eacute;es sont enregistr&eacute;es.',
    33 => 'Vous n\'avez pas acc&egrave;s &agrave; la page d\'administration des blocs. Toutes les tentatives d\'acc&egrave;s &agrave; des parties non autoris&eacute;es sont enregistr&eacute;es.',
    34 => 'Vous n\'avez pas acc&egrave;s &agrave; la page d\'administration des liens. Toutes les tentatives d\'acc&egrave;s &agrave; des parties non autoris&eacute;es sont enregistr&eacute;es.',
    35 => 'Vous n\'avez pas acc&egrave;s &agrave; la page d\'administration des activit&eacute;s. Toutes les tentatives d\'acc&egrave;s &agrave; des parties non autoris&eacute;es sont enregistr&eacute;es.',
    36 => 'Vous n\'avez pas acc&egrave;s &agrave; la page d\'administration des sondages. Toutes les tentatives d\'acc&egrave;s &agrave; des parties non autoris&eacute;es sont enregistr&eacute;es.',
    37 => 'Vous n\'avez pas acc&egrave;s &agrave; la page d\'administration des membres. Toutes les tentatives d\'acc&egrave;s &agrave; des parties non autoris&eacute;es sont enregistr&eacute;es.',
    38 => 'Vous n\'avez pas acc&egrave;s &agrave; la page d\'administration des plugins. Toutes les tentatives d\'acc&egrave;s &agrave; des parties non autoris&eacute;es sont enregistr&eacute;es.',
    39 => 'Vous n\'avez pas acc&egrave;s &agrave; la page d\'administration des courriels. Toutes les tentatives d\'acc&egrave;s &agrave; des parties non autoris&eacute;es sont enregistr&eacute;es.',
    40 => 'Message syst&egrave;me',
    41 => 'Vous n\'avez pas acc&egrave;s &agrave; la page d\'administration des substitutions de mots. Toutes les tentatives d\'acc&egrave;s &agrave; des parties non autoris&eacute;es sont enregistr&eacute;ss.',
    42 => 'Votre mot a &eacute;t&eacute; enregistr&eacute; avec succ&egrave;s.',
    43 => 'Le mot a &eacute;t&eacute; supprim&eacute; avec succ&egrave;s.',
    44 => 'Le plugin a &eacute;t&eacute; install&eacute; avec succ&egrave;s!',
    45 => 'Le plugin a &eacute;t&eacute; supprim&eacute; avec succ&egrave;s.',
    46 => 'Vous n\'avez pas acc&egrave;s &agrave; l\'utilitaire de sauvegarde de la base de donn&eacute;es. Toutes les tentatives d\'acc&egrave;s &agrave; des parties non autoris&eacute;es sont enregistr&eacute;es.',
    47 => 'Cet option ne fonctionne que sur *nix. Si vous utilisez *nix alors votre cache a &eacute;t&eacute; vid&eacute;e avec succ&egrave;s. Si vous utilisez Windows, vous devez chercher les fichiers adodb_*.php et les supprimer &agrave; la main.',
    48 => "Merci d'avoir demand&eacute; un compte membre sur {$_CONF['site_name']}. La demande a &eacute;t&eacute; envoy&eacute;e &agrave; notre &eacute;quipe qui en disposera. Lorsque la demande sera accept&eacute;e, votre mot de passe vous sera envoy&eacute; par courriel &agrave; l'adresse que vous avez fournie.",
    49 => 'Votre groupe a &eacute;t&eacute; enregistr&eacute; avec succ&egrave;s.',
    50 => 'Le groupe a &eacute;t&eacute; supprim&eacute; avec succ&egrave;s.',
    51 => 'Ce nom de membre existe d&eacute;j&agrave;. Pri&egrave;re d\'en choisir un nouveau.',
    52 => 'Le courriel fourni ne para&icirc;t pas �tre valide.',
    53 => 'Votre nouveau mot de passe &agrave; &eacute;t&eacute; accept&eacute;. Pri&egrave;re de l\'inscrire ci-dessous pour acc&eacute;der au site.',
    54 => 'Votre requ�te pour l\'obtention d\'un nouveau mot de passe est expir&eacute;e. Pri&egrave;re d\'essayer de nouveau ci-dessous.',
    55 => 'Un courriel qui vient de vous �tre envoy&eacute; devrait vous parvenir sous peu. Pri&egrave;re de suivre les instructions du message et de proc&eacute;der &agrave; l\'enregistrement de votre nouveau mot de passe.',
    56 => 'L\'adresse courriel fournie est d&eacute;j&agrave; utilis&eacute;e par un autre compte.',
    57 => 'Votre compte &agrave; &eacute;t&eacute; effac&eacute; avec succ&egrave;s.',
    58 => 'Votre flux a &eacute;t&eacute; enregistr&eacute; avec succ&egrave;s.',
    59 => 'Votre flux a &eacute;t&eacute; effac&eacute; avec succ&egrave;s.',
    60 => 'La mise &agrave; jour de ce plugin est un succ&egrave;s',
    61 => 'Plugin %s: coordonn&eacute;es de ce message inconnues',
    62 => 'Le commentaire du pistel &agrave; &eacute;t&eacute; effac&eacute;.',
    63 => 'Une erreur est survenue et le commentaire du pistel n\'&agrave; pas &eacute;t&eacute; effac&eacute;.',
    64 => 'Le commentaire du pistel &agrave; &eacute;t&eacute; envoy&eacute;.',
    65 => 'Le directoire Weblog a bien &eacute;t&eacute; sauvegard&eacute;.',
    66 => 'Le directoire Weblog a bien &eacute;t&eacute; effac&eacute;.',
    67 => 'Le nouveau mot de passe semble diff&eacute;rent de celui confirm&eacute;!',
    68 => 'Vous avez correctement inscrit le mot de passe actuel.',
    69 => 'Votre compte &agrave; &eacute;t&eacute; bloqu&eacute;!',
    70 => 'Votre compte est en attente d\'activation',
    71 => 'Votre compte est en attente d\'activation, il doit �tre approuv&eacute; par un admistrateur.',
    72 => 'Une erreur s\'est produite lors de l\'installation de ce plugin. Voyez error.log pour les d&eacute;tails.',
    73 => 'Une erreur s\'est produite lors de de la d&eacute;sinstallation de ce plugin. Voyez error.log pour les d&eacute;tails.',
    74 => 'Le ping-pong &agrave; &eacute;t&eacute; envoy&eacute; avec succ&egrave;s.',
    75 => 'Les pistels doivent �tre envoy&eacute;s suivant une requ�te POST.',
    76 => 'D&eacute;sirez-vous vraiment effacer cet article ?',
    77 => 'ATTENTION:<br>Vous avez choisi UTF-8 comme encodage par d&eacute;faut, malgr&eacute; le fait que vos serveurs ne supportent pas un encodage multi-bit. Pri&egrave;re d\'installer les fonctions mbstring pour PHP ou choisissez une langue diff&eacute;rente.',
    78 => 'Pri&egrave;re de vous assurer que l\'adresse courriel et le courriel de confirmation soient le m�mes.',
    79 => 'La page que vous tentez d\'ouvrir r&eacute;f&egrave;re &agrave; une fonctionalit&eacute; d&eacute;sinstall&eacute;e de ce site.',
    80 => 'Le plugin qui a cr&eacute;&eacute; ce lien a &eacute;t&eacute; d&eacute;sinstall&eacute;. Merci de r&eacute;installer le plugin avant toute chose.',
    81 => 'Votre code d\'acc&egrave;s est erron&eacute;. Merci de r&eacute;essayer.',
    82 => 'ACC&egrave;S REFUS&eacute;. Merci d\'attendre quelques temps avant de r&eacute;essayer.',
    83 => 'Merci d\'utiliser votre mot de passe actuel si vous d&eacute;sirez changer votre profil.',
    84 => 'Merci d\'utiliser votre mot de passe actuel si vous d&eacute;sirez fermer votre compte.'
);

###############################################################################

$LANG_ACCESS = array(
    'access' => 'Acc&egrave;s',
    'ownerroot' => 'Propri&eacute;taire/Admin',
    'group' => 'Groupe',
    'readonly' => 'Lecture seule',
    'accessrights' => 'Droits d\'acc&egrave;s',
    'owner' => 'Propri&eacute;taire',
    'grantgrouplabel' => 'Autorisation au del&agrave; du groupe d\'&eacute;dition',
    'permmsg' => 'REMARQUE: les membres sont tous les utilisateurs identifi&eacute;s et les anonymes sont tous les autres.',
    'securitygroups' => 'Groupe de s&eacute;curit&eacute;',
    'editrootmsg' => "Except&eacute; si vous �tes administrateur, vous ne pouvez pas modifier un autre administrateur. Vous pouvez modifier tous les utilisateurs except&eacute;s les administrateurs. Toutes tentatives de modifications d\'un administrateur sont enregistr&eacute;es. Retournez sur la <a href=\'{$_CONF['site_admin_url']}/user.php\'>page d'administration</a>.",
    'securitygroupsmsg' => 'S&eacute;lectionner les cases des groupes auxquels l\'utilisateur appartient',
    'groupeditor' => 'Editeur de groupe',
    'description' => 'Description',
    'name' => 'Nom',
    'rights' => 'Droits',
    'missingfields' => 'Champs manquants',
    'missingfieldsmsg' => 'Vous devez saisir un nom et une description',
    'groupmanager' => 'Administrateur de groupe',
    'newgroupmsg' => 'Pour modifier ou supprimer un groupe, cliquez sur le groupe ci-dessous. Pour cr&eacute;er un nouveu groupe, cliquez sur Nouveau Groupe. Les groupes natifs ne peuvent pas �tre supprim&eacute;s car ils sont utilis&eacute;s par le syst&egrave;me.',
    'groupname' => 'Nom du groupe',
    'coregroup' => 'Groupe syst&egrave;me',
    'yes' => 'Oui',
    'no' => 'Non',
    'corerightsdescr' => "Ce groupe est un groupe syst&egrave;me de {$_CONF['site_name']}.  Les droits de ce groupe ne peuvent pas �tre modifi&eacute;s.  La liste ci-dessous des droits d'acc&egrave;s du groupe n'est pas modifiable.",
    'groupmsg' => 'Les droits des groupes sont hi&eacute;rarchiques.  En ajoutant un groupe &agrave; un autre vous ajoutez tous les droits de ce groupe &agrave; l\'autre.  Lorsque c\'est possible, utilisez les groupes d&eacute;ja d&eacute;finis.  Si vous avez besoin de droits sp&eacute;cifiques, vous pouvez les choisir dans la liste ci-dessous.  Pour Ajouter un groupe &agrave; celui-ci cliquez sur la case du groupe &agrave; ajouter.',
    'coregroupmsg' => "Ce groupe est un groupe syst&egrave;me de {$_CONF['site_name']}.  Les droits de ce groupe ne peuvent pas �tre modifi&eacute;s. La liste ci-dessous des groupes inclus de ce groupe n'est pas modifiable.",
    'rightsdescr' => 'Les droits suivants peuvent �tre donn&eacute;s directement au groupe OU provenir d\'un groupe inclus. Les droits sans case &agrave; cocher proviennent de groupe inclus. Les droits qui ont des cases &agrave; cocher sont donn&eacute;s directement au groupe.',
    'lock' => 'Bloquer',
    'members' => 'Membres',
    'anonymous' => 'Anonymes',
    'permissions' => 'Permissions',
    'permissionskey' => 'R = lecture, E = modification, le droit de modification implique le droit de lecture',
    'edit' => 'Modifier',
    'none' => 'Rien',
    'accessdenied' => 'Acc&egrave;s interdit',
    'storydenialmsg' => "vous n'avez pas le droit de lire cette article. Peut-�tre que vous n'�tes pas membre de {$_CONF['site_name']}.  Vous pouvez <a href=users.php?mode=new>vous enregistrer</a> sur {$_CONF['site_name']} pour obtenir un compte membre!",
    'eventdenialmsg' => "vous n'avez pas acc&egrave;s &agrave; cet &eacute;v&egrave;nement. Peut-�tre que vous n'�tes pas membre de {$_CONF['site_name']}.  Vous pouvez <a href=users.php?mode=new>vous enregistrer</a> sur  pour obtenir un compte membre!",
    'nogroupsforcoregroup' => 'Le groupe n\'inclue aucun autre groupe',
    'grouphasnorights' => 'Le groupe n\'a pas acc&egrave;s aux fonctions administratives',
    'newgroup' => 'Nouveau Groupe',
    'adminhome' => 'Accueil Admin',
    'save' => 'enregistrer',
    'cancel' => 'annuler',
    'delete' => 'supprimer',
    'canteditroot' => 'Vous avez essay&eacute; de modifier le groupe administrateur mais vous n\'en faites pas partie. Vous n\'avez pas acc&egrave;s &agrave; ce groupe. Veuillez contacter l\'administrateur si vous pensez que c\'est une erreur.',
    'listusers' => 'Liste des utilisateurs',
    'listthem' => 'liste',
    'usersingroup' => 'Utilisateurs dans le groupe "%s"',
    'usergroupadmin' => 'Administration du groupe des utilisateurs',
    'add' => 'Ajoutez',
    'remove' => 'Enlevez',
    'availmembers' => 'Membres disponibles',
    'groupmembers' => 'Membres du groupe',
    'canteditgroup' => 'Vous devez �tre un membre de ce groupe pour l\'&eacute;diter.',
    'cantlistgroup' => 'Vous devez �tre un membre de ce groupe pour en voir les autres membres.',
    'editgroupmsg' => 'Cliquez sur le nom des membres et sur <b>Ajouter</b> ou <b>Enlevez</b> pour modifier le membership du groupe. Si le membre est un membre du groupe, son nom appara�tra sur le c�t&eacute; droit seulement. Une fois le processus termin&eacute;, cliquez sur <b>enregister</b> pour mettre &agrave; jour et revenir au d&eacute;but.',
    'listgroupmsg' => 'Liste des membres actuels du groupe : <b>%s</b>',
    'search' => 'Recherche',
    'submit' => 'Soumettre',
    'limitresults' => 'Limite des resultats',
    'group_id' => 'Groupe ID',
    'plugin_access_denied_msg' => 'Tentative ill&eacute;gale d\'acc&egrave;s aux donn&eacute;es!  Toutes les tentatives sont prise en note.',
    'groupexists' => 'Nom de groupe d&eacute;j&agrave; existant',
    'groupexistsmsg' => 'Il y a d&eacute;j&agrave; un groupe portant ce nom. Merci d\'en choisir un autre.'
);

###############################################################################
# admin/database.php

$LANG_DB_BACKUP = array(
    'last_ten_backups' => '10 dernieres sauvegardes',
    'do_backup' => 'Faire une sauvegarde',
    'backup_successful' => 'Sauvegarde de la base de donn&eacute;e effectu&eacute;e avec succ&egrave;s',
    'db_explanation' => 'Cliquez sur le bouton ci-dessous pour effectuer une sauvegarde de votre syst&egrave;me',
    'not_found' => "Chemin incorecte ou le fichier mysqldump n'est pas ex&eacute;cutable.<br>V&eacute;rifiez le param&egrave;tre <strong>\$_DB_mysqldump_path</strong> dans le fichier config.php.<br>Ce param&egrave;tre est actuellement positionn&eacute; &agrave; : <var>{$_DB_mysqldump_path}</var>",
    'zero_size' => 'Sauvegarde &eacute;chou&eacute;e: la taille du fichier &eacute;tait de 0 octets.',
    'path_not_found' => "{$_CONF['backup_path']} n'existe pas ou n'est pas un r&eacute;pertoire.",
    'no_access' => "Erreur: le r&eacute;pertoire {$_CONF['backup_path']} n'est pas accessible.",
    'backup_file' => 'Fichier de sauvegarde',
    'size' => 'Taille',
    'bytes' => 'Octets',
    'total_number' => 'Nombre total de sauvegardes : %d'
);

###############################################################################

$LANG_BUTTONS = array(
    1 => 'Entr&eacute;e',
    2 => 'Contacts',
    3 => 'Ecrire un article',
    4 => 'Liens',
    5 => 'Sondages',
    6 => 'Calendrier',
    7 => 'Statistiques du site',
    8 => 'Personnaliser',
    9 => 'Chercher',
    10 => 'Recherche',
    11 => 'Directoire'
);

###############################################################################
# 404.php

$LANG_404 = array(
    1 => 'Erreur 404',
    2 => 'Le syst&egrave;me ne trouve pas <b>http://</b>.',
    3 => "<p>Le fichier que vous demandez n'existe pas. Allez &agrave; la <a href=\'{$_CONF['site_url']}\'>page principale</a> ou la <a href=\'{$_CONF['site_url']}/search.php\'>page de recherche</a> afin de retrouver ce que vous avez perdu."
);

###############################################################################
# login form

$LANG_LOGIN = array(
    1 => 'Vous devez vous connecter',
    2 => 'Vous devez vous identifier &agrave; l\'aide de l\'espace membre pour acc&eacute;der &agrave; cette partie du site.',
    3 => 'Accueil',
    4 => 'Nouveau membre'
);

###############################################################################
# pdfgenerator.php

$LANG_PDF = array(
    1 => 'La fonction PDF a &eacute;t&eacute; d&eacute;sactiv&eacute;e',
    2 => 'Le document fourni a &eacute;t&eacute; re&ccedil;u mais n\'a pu �tre trait&eacute;. Merci de ne soumettre que des documents HTML trait&eacute;s selon les standards xHTML. Prenez note que les documents trop complexes peuvent g&eacute;n&eacute;rer des erreurs ou ne pas �tre trait&eacute;s. Un document produit par vos soins mesurait 0 bytes et &agrave; &eacute;t&eacute; effac&eacute;. Si vous �tes certain de la qualit&eacute; de votre document, vous pouvez essayer de le soumettre de nouveau.',
    3 => 'Erreur inconnue lors de la conversion PDF',
    4 => "Aucune page soumise, ou alors vous pr&eacute;f&eacute;rez utiliser l\'outil PDF ci-dessous. Si vous pensez qu\'une erreur est survenue et que cette page\n          s\'affiche sans raison, contactez l\'administrateur du site.   Siinon, vous �tes pri&eacute; d\'utiliser l\'outil PDF ci-dessous.",
    5 => 'Chargement du document.',
    6 => 'Merci de patienter lors du chargement.',
    7 => 'Vous pouvez cliquer avec le bouton de droite et choisir \'sauvegarde...\' ou \'sauvegarde du lien...\' pour sauvegarder une copie de votre document.',
    8 => "Le chemin d\'acc&egrave;s fourni au moment de configurer le fichier au format binaire est non-valide, ou le syst&egrave;me ne peut l\'ex&eacute;cuter. Contactez l\'administrateur du site si le probl&egrave;me\n          persiste.",
    9 => 'G&eacute;n&eacute;rateur PDF',
    10 => "Voici l\'outil de conversion PDF. Il est programm&eacute; pour convertir un URL en un fichier PDF. Notez que certaines pages mal programm&eacute;es ne donnent pas de bons r&eacute;sultats. Ceci\n           repr&eacute;sente une limite inh&eacute;rente &agrave; cet outil de conversion PDF et ne constitue pas une erreur du syst&egrave;me en soi",
    11 => 'URL',
    12 => 'Convertir en PDF!',
    13 => 'La configuration PHP sur ce serveur ne permet pas l\'utilisation de la commande fopen(). L\'administrateur du site doit modifier le fichier php.ini et permettre allow_url_fopen &agrave; On',
    14 => 'Soit le fichier PDF demand&eacute; n\'existe pas, soit vous avez essay&eacute; d\'y acc&eacute;der de fa&ccedil;on ill&eacute;gale.'
);

###############################################################################
# trackback.php

$LANG_TRB = array(
    'trackback' => 'Pistel',
    'from' => 'de',
    'tracked_on' => 'Pist&eacute; sur',
    'read_more' => '[lire plus]',
    'intro_text' => 'Voici ce que les autres ont &agrave; dire de \'%s\':',
    'no_comments' => 'Pas de commentaire de pistel pour cette soumission.',
    'this_trackback_url' => 'L\'URL du pistel pour cette soumission :',
    'num_comments' => '%d commentaires au sujet du pistel',
    'send_trackback' => 'Envoyez un ping',
    'preview' => 'Pr&eacute;-visualisez',
    'editor_title' => 'Envoyez un commentaire au sujet du pistel',
    'trackback_url' => 'URL du pistel',
    'entry_url' => 'URL de la soumission',
    'entry_title' => 'Titre de la soumission',
    'blog_name' => 'Nom du site',
    'excerpt' => 'Extrait',
    'truncate_warning' => 'Note: le site r&eacute;cepteur peut raccoucir votre extrait',
    'button_send' => 'Envoyez',
    'button_preview' => 'Pr&eacute;-visualisez',
    'send_error' => 'Erreur',
    'send_error_details' => 'Erreur dans l\'envoi du commentaire de ce pistel :',
    'url_missing' => 'Pas d\'URL de soumission',
    'url_required' => 'Merci d\'inscrire un URL pour cette soumission.',
    'target_missing' => 'Pas d\'URL de pistel',
    'target_required' => 'Merci d\'inscrire un URL pour ce pistel',
    'error_socket' => 'N\'a pu acc&eacute;d&eacute; aux donn&eacute;es.',
    'error_response' => 'R&eacute;ponse incomprise.',
    'error_unspecified' => 'Erreur non sp&eacute;cifique.',
    'select_url' => 'S&eacute;lectionnez un URL pour ce pistel',
    'not_found' => 'L\'URL de ce pistel est inconnu',
    'autodetect_failed' => 'Le syst&egrave;me n\'a pu d&eacute;tecter l\'URL du pistel que vous d&eacute;sirez commenter. Merci de l\'inscrire manuellement.',
    'trackback_explain' => 'Merci de s&eacute;lectionner l\'URL vers lequel vous souhaitez envoyer votre pistel &agrave; partir des liens ci-dessous, ou alors inscrivez-le manuellement <a href="%s"> en cliquant ici</a> s\'il ne s\'y trouve pas.',
    'no_links_trackback' => 'Aucun lien trouv&eacute;. Vous ne pouvez commenter le pistel li&eacute; &agrave; cette soumission.',
    'pingback' => 'Ping-pong',
    'pingback_results' => 'R&eacute;sultat des ping-pongs',
    'send_pings' => 'Envoyez un ping',
    'send_pings_for' => 'Envoyez un ping &agrave; "%s"',
    'no_links_pingback' => 'Aucun lien trouv&eacute;. Vous ne pouvez envoyer un ping-pong li&eacute; &agrave; cette soumission.',
    'pingback_success' => 'Ping-pong envoy&eacute;.',
    'no_pingback_url' => 'Aucun URL li&eacute; &agrave; ce ping-pong n\'a &eacute;t&eacute; identifi&eacute;.',
    'resend' => 'Renvoi',
    'ping_all_explain' => 'Vous pouvez maintenant avertir les sites auquels vous vous �tes li&eacute;s (<a href="http://en.wikipedia.org/wiki/Pingback">ping-pong</a>), avertir que votre site &agrave; &eacute;t&eacute; modifi&eacute; en lan&ccedil;ant un ping aux r&eacute;pertoires de blog, ou alors envoyer un <a href="http://en.wikipedia.org/wiki/Trackback">pistel</a> au cas o&ugrave; vous ayez comment&eacute; les propos trouv&eacute;s sur un autre site.',
    'pingback_button' => 'Envoyez un ping-pong',
    'pingback_short' => 'Envoyez un ping-pong &agrave; tous les sites li&eacute;s &agrave; cette soumission.',
    'pingback_disabled' => '(Ping-pongs d&eacute;sactiv&eacute;s)',
    'ping_button' => 'Envoyez un ping',
    'ping_short' => 'Envoyez un ping aux r&eacute;pertoires de blog.',
    'ping_disabled' => '(Pings d&eacute;sactiv&eacute;s)',
    'trackback_button' => 'Envoyez un pistel',
    'trackback_short' => 'Envoyez un commentaire de pistel.',
    'trackback_disabled' => '(Pistels d&eacute;sactiv&eacute;s)',
    'may_take_a_while' => 'Merci de noter que l\'envoi de pings et de ping-pongs peut prendre un certain temps.',
    'ping_results' => 'R&eacute;sultats des pings',
    'unknown_method' => 'M&eacute;thode de ping inconnue',
    'ping_success' => 'Ping envoy&eacute;.',
    'error_site_name' => 'Inscrire le nom du site.',
    'error_site_url' => 'Inscrire l\'URL du site.',
    'error_ping_url' => 'Inscrire un URL de ping valide.',
    'no_services' => 'Aucun r&eacute;pertoire de blog n\'a &eacute;t&eacute; configur&eacute;.',
    'services_headline' => 'R&eacute;pertoire de blog',
    'service_explain' => 'Cliquez sur l\'ic�ne correspondant au r&eacute;pertoire de blog que vous souhaitez modifier ou effacer. Cliquez sur "Cr&eacute;ez" pour ajouter un nouveau r&eacute;pertoire de blog.',
    'service' => 'Service',
    'ping_method' => 'M&eacute;thode de ping',
    'service_website' => 'Site web',
    'service_ping_url' => 'Je ping cet URL',
    'ping_standard' => 'Ping standard',
    'ping_extended' => 'Ping &eacute;tendu',
    'ping_unknown' => '(m&eacute;thode inconnue)',
    'edit_service' => '&eacute;ditez les r&eacute;pertoires de blog',
    'trackbacks' => 'Pistels',
    'editor_intro' => 'Pr&eacute;parez vos commentaires de pistel pour <a href="%s">%s</a>.',
    'editor_intro_none' => 'Pr&eacute;parez vos commentaires de pistel.',
    'trackback_note' => 'Si vous d&eacute;sirez envoyer un pistel, voyez la liste des articles et cliquez sur "Envoyez un ping" correspondant &agrave; l\'article que vous souhaitez commenter. <a href="%s">Cliquez ici</a> pour envoyer un pistel qui n\'est li&eacute; &agrave; aucun article.',
    'pingback_explain' => 'Inscrivez l\'URL &agrave; qui il faudra envoyer le ping-pong. Le ping-pong pointera en direction de la page d\'accueil de votre site.',
    'pingback_url' => 'URL du ping-pong',
    'site_url' => 'URL du site',
    'pingback_note' => 'Si vous d&eacute;sirez envoyer un ping-pong, voyez la liste des articles et cliquez sur "Envoyez un ping" correspondant &agrave; l\'article que vous souhaitez commenter. <a href="%s">Cliquez ici</a> pour envoyer un ping-pong qui n\'est li&eacute; &agrave; aucun article.',
    'pbtarget_missing' => 'Aucun URL pour ce ping-pong',
    'pbtarget_required' => 'Merci d\'inscrire un URL pour ce ping-pong',
    'pb_error_details' => 'Une erreur est survenue dans l\'envoi de ce ping-pong :',
    'delete_trackback' => 'Cliquez pour effacer ce pistel: '
);

###############################################################################
# directory.php

$LANG_DIR = array(
    'title' => 'Liste des articles',
    'title_year' => 'Liste des articles en %d',
    'title_month_year' => 'Liste des articles en %s %d',
    'nav_top' => 'Retour &agrave; la liste des articles',
    'no_articles' => 'Pas d\'articles.'
);

###############################################################################
# "What's New" Time Strings
# 
# For the first two strings, you can use the following placeholders.
# Order them so it makes sense in your language:
# %i    item, "Stories"
# %n    amount, "2", "20" etc.
# %t    time, "2" (weeks)
# %s    scale, "hrs", "weeks"

$LANG_WHATSNEW = array(
    'new_string' => '%n nouveau(x) %i depuis %t %s',
    'new_last' => 'depuis %t %s',
    'minutes' => 'minutes',
    'hours' => 'heures',
    'days' => 'jours',
    'weeks' => 'semaines',
    'months' => 'mois',
    'minute' => 'minute',
    'hour' => 'heure',
    'day' => 'jour',
    'week' => 'semaine',
    'month' => 'mois'
);

###############################################################################
# Month names

$LANG_MONTH = array(
    1 => 'Janvier',
    2 => 'F&eacute;vrier',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Ao&ucirct',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'D&eacute;cembre'
);

###############################################################################
# Weekdays

$LANG_WEEK = array(
    1 => 'Dimanche',
    2 => 'Lundi',
    3 => 'Mardi',
    4 => 'Mercredi',
    5 => 'Jeudi',
    6 => 'Vendredi',
    7 => 'Samedi'
);


###############################################################################
# Admin - Strings
# 
# These are some standard strings used by core functions as well as plugins to
# display administration lists and edit pages

$LANG_ADMIN = array(
    'search' => 'Recherche',
    'limit_results' => 'Limite des r&eacute;sultats',
    'submit' => 'Soumettre',
    'edit' => '&eacute;diter',
    'admin_home' => 'Menu administratif',
    'create_new' => 'Cr&eacute;er un nouveau',
    'enabled' => 'Activer',
    'title' => 'Titre',
    'type' => 'Type',
    'topic' => 'Sujet',
    'help_url' => 'URL d\'aide',
    'save' => 'Sauvegarder',
    'cancel' => 'Annuler',
    'delete' => 'Effacer',
    'copy' => 'Copier',
    'no_results' => '- Aucune entr&eacute;e -',
    'data_error' => 'Il y a eu erreur dans le traitement des donn&eacute;es. Merci d\'en v&eacute;rifier la source.'
);

###############################################################################
# Localisation of the texts for the various drop-down menus that are actually
# stored in the database. If these exist, they override the texts from the
# database.

$LANG_commentcodes = array(
    0 => 'Avec commentaires',
    -1 => 'Sans commentaires'
);


$LANG_commentmodes = array(
    'flat' => 'Liss&eacute;s',
    'nested' => 'Nich&eacute;s',
    'threaded' => 'Regroup&eacute;s',
    'nocomment' => 'Absents'
);

$LANG_cookiecodes = array(
    0 => '(non)',
    3600 => '1 heure',
    7200 => '2 heures',
    10800 => '3 heures',
    28800 => '8 heures',
    86400 => '1 jour',
    604800 => '1 semaine',
    2678400 => '1 mois'
);

$LANG_dateformats = array(
    0 => 'D&eacute;faut du syst&egrave;me'
);

$LANG_featurecodes = array(
    0 => 'Pas en vedette',
    1 => 'En vedette'
);

$LANG_frontpagecodes = array(
    0 => 'Afficher avec le sujet seulement',
    1 => 'Afficher en page d\'accueil'
);

$LANG_postmodes = array(
    'plaintext' => 'Texte seul',
    'html' => 'Format HTML'
);

$LANG_sortcodes = array(
    'ASC' => 'Anciens en premier',
    'DESC' => 'Nouveaux en premier'
);

$LANG_trackbackcodes = array(
    0 => 'Pistel activ&eacute;',
    -1 => 'Pistel d&eacute;sactiv&eacute;'
);

?>
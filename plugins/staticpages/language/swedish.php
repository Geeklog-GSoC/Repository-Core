<?php

###############################################################################
# swedish.php
# This is the swedish language page for the Geeklog Static Page Plug-in!
#
# Copyright (C) 2001 Tony Bibbs
# tony@tonybibbs.com
# Copyright (C) 2003 Markus Berg
# kelvin@lysator.liu.se
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

global $LANG32;

###############################################################################
# Array Format:
# $LANGXX[YY]:  $LANG - variable name
#               XX    - file id number
#               YY    - phrase id number
###############################################################################

$LANG_STATIC = array(
    'newpage' => 'Ny sida',
    'adminhome' => 'Administrat�rsmeny',
    'staticpages' => 'Statiska sidor',
    'staticpageeditor' => 'Redigera statisk sida',
    'writtenby' => 'Skriven av',
    'date' => 'Senast uppdaterad',
    'title' => 'Titel',
    'content' => 'Inneh�ll',
    'hits' => 'Tr�ffar',
    'staticpagelist' => 'Lista �ver statiska sidor',
    'url' => 'URL',
    'edit' => 'Editera',
    'lastupdated' => 'Senast uppdaterad',
    'pageformat' => 'Sidformat',
    'leftrightblocks' => 'V�nster- och h�gerblock',
    'blankpage' => 'Tom sida',
    'noblocks' => 'Inga block',
    'leftblocks' => 'V�nsterblock',
    'addtomenu' => 'L�gg till i meny',
    'label' => 'Etikett',
    'nopages' => 'Inga statiska sidor �n �nnu inlagda i systemet',
    'save' => 'spara',
    'preview' => 'f�rhandsgranska',
    'delete' => 'radera',
    'cancel' => 'avbryt',
    'access_denied' => '�tkomst nekas',
    'access_denied_msg' => 'Du f�rs�ker f� tillg�ng till en administrationssida f�r de statiska sidorna.  Detta �ger du inte r�tt att g�ra.  Alla dylika f�rs�k loggas.',
    'all_html_allowed' => 'All HTML till�ten',
    'results' => 'Statiska sidor resultat',
    'author' => 'F�rfattare',
    'no_title_or_content' => 'Du m�ste �tminstone fylla i <b>titel-</b> och <b>inneh�lls</b>f�lten.',
    'no_such_page_anon' => 'Du m�ste logga in..',
    'no_page_access_msg' => "Detta kan bero p� att du inte �r inloggad, eller att du inte �rmedlem i {$_CONF['site_name']}.  <a href=\"{$_CONF['site_url']}/users.php?mode=new\">Bli medlem</a> i {$_CONF['site_name']} f�r att f� �tkomst till medlemssidorna",
    'php_msg' => 'PHP: ',
    'php_warn' => 'Varning: PHP-kod i din sida kommer att exekveras om du aktiverar detta.  Anv�nd med f�rsiktighet !!',
    'exit_msg' => 'Avslutstyp: ',
    'exit_info' => 'Aktivera f�r "inloggning kr�vs"-meddelande.  Avaktivera f�r normal s�kerhetskontroll och meddelande.',
    'deny_msg' => '�tkomst till denna sida nekas.  Antingen har sidan flyttats/raderats, eller s� �ger du inte r�ttigheter att se den.',
    'stats_headline' => 'Topp tio statiska sidor',
    'stats_page_title' => 'Titel',
    'stats_hits' => 'Tr�ffar',
    'stats_no_hits' => 'Inga statiska sidor existerar p� den h�r sajten, eller s� har inga av dom l�sts.',
    'id' => 'ID',
    'duplicate_id' => 'Det ID du valt f�r denna sida anv�nds redan.  V�lj ett nytt ID.',
    'instructions' => 'Klicka p� den statiska sidans nummer nedan f�r att modifiera eller radera den.  Klicka p� sidans titel f�r att se sidan.  Klicka p� ny sida ovan f�r att skapa en ny statisk sida.  Klicka p� [C] f�r att kopiera en sida.',
    'centerblock' => 'Centerblock: ',
    'centerblock_msg' => 'N�r detta �r aktiverat kommer denna statiska sida att visas i centerblocket p� indexsidan.',
    'topic' => '�mne: ',
    'position' => 'Position: ',
    'all_topics' => 'Alla',
    'no_topic' => 'Endast hemsidan',
    'position_top' => 'H�gst upp p� sidan',
    'position_feat' => 'Efter huvudartikeln',
    'position_bottom' => 'L�ngst ner p� sidan',
    'position_entire' => 'Hela sidan',
    'head_centerblock' => 'Centerblock',
    'centerblock_no' => 'Nej',
    'centerblock_top' => 'H�gst upp',
    'centerblock_feat' => 'Huvudartikel',
    'centerblock_bottom' => 'L�ngst ner',
    'centerblock_entire' => 'Hela sidan',
    'inblock_msg' => 'In a block: ',
    'inblock_info' => 'Wrap Static Page in a block.',
    'title_edit' => 'Edit page',
    'title_copy' => 'Make a copy of this page',
    'title_display' => 'Display page',
    'select_php_none' => 'do not execute PHP',
    'select_php_return' => 'execute PHP (return)',
    'select_php_free' => 'execute PHP',
    'php_not_activated' => "The use of PHP in static pages is not activated. Please see the <a href=\"{$_CONF['site_url']}/docs/english/staticpages.html#php\">documentation</a> for details.",
    'printable_format' => 'Printable Format',
    'copy' => 'Copy',
    'limit_results' => 'Limit Results',
    'search' => 'Search',
    'submit' => 'Submit',
    'no_new_pages' => 'No new pages',
    'pages' => 'Pages',
    'comments' => 'Comments',
    'draft' => 'Draft',
    'draft_yes' => 'Yes',
    'draft_no' => 'No'
);

$PLG_staticpages_MESSAGE15 = 'Your comment has been submitted for review and will be published when approved by a moderator.';
$PLG_staticpages_MESSAGE19 = 'Your page has been successfully saved.';
$PLG_staticpages_MESSAGE20 = 'Your page has been successfully deleted.';
$PLG_staticpages_MESSAGE21 = 'This page does not exist yet. To create the page, please fill in the form below. If you are here by mistake, click the Cancel button.';

// Messages for the plugin upgrade
$PLG_staticpages_MESSAGE3001 = 'Plugin upgrade not supported.';
$PLG_staticpages_MESSAGE3002 = $LANG32[9];

// Localization of the Admin Configuration UI
$LANG_configsections['staticpages'] = array(
    'label' => 'Static Pages',
    'title' => 'Static Pages Configuration'
);

$LANG_confignames['staticpages'] = array(
    'allow_php' => 'Allow PHP?',
    'sort_by' => 'Sort Centerblocks by',
    'sort_menu_by' => 'Sort Menu Entries by',
    'sort_list_by' => 'Sort Admin List by',
    'delete_pages' => 'Delete Pages with Owner?',
    'in_block' => 'Wrap Pages in Block?',
    'show_hits' => 'Show Hits?',
    'show_date' => 'Show Date?',
    'filter_html' => 'Filter HTML?',
    'censor' => 'Censor Content?',
    'default_permissions' => 'Page Default Permissions',
    'aftersave' => 'After Saving Page',
    'atom_max_items' => 'Max. Pages in Webservices Feed',
    'meta_tags' => 'Enable Meta Tags',
    'comment_code' => 'Comment Default',
    'draft_flag' => 'Draft Flag Default',
    'newstaticpagesinterval' => 'New Static Page Interval',
    'hidenewstaticpages' => 'Hide New Static Pages',
    'title_trim_length' => 'Title Trim Length',
    'includecenterblocks' => 'Include Center Block Static Pages',
    'includephp' => 'Include Static Pages with PHP',
    'includesearch' => 'Enable Static Pages in Search',
    'includesearchcenterblocks' => 'Include Center Block Static Pages',
    'includesearchphp' => 'Include Static Pages with PHP'
);

$LANG_configsubgroups['staticpages'] = array(
    'sg_main' => 'Main Settings'
);

$LANG_fs['staticpages'] = array(
    'fs_main' => 'Static Pages Main Settings',
    'fs_whatsnew' => 'What\'s New Block',
    'fs_search' => 'Search Results',
    'fs_permissions' => 'Default Permissions'
);

// Note: entries 0, 1, 9, 12, 17 are the same as in $LANG_configselects['Core']
$LANG_configselects['staticpages'] = array(
    0 => array('True' => 1, 'False' => 0),
    1 => array('True' => true, 'False' => false),
    2 => array('Date' => 'date', 'Page ID' => 'id', 'Title' => 'title'),
    3 => array('Date' => 'date', 'Page ID' => 'id', 'Title' => 'title', 'Label' => 'label'),
    4 => array('Date' => 'date', 'Page ID' => 'id', 'Title' => 'title', 'Author' => 'author'),
    9 => array('Forward to page' => 'item', 'Display List' => 'list', 'Display Home' => 'home', 'Display Admin' => 'admin'),
    12 => array('No access' => 0, 'Read-Only' => 2, 'Read-Write' => 3),
    17 => array('Comments Enabled' => 0, 'Comments Disabled' => -1)
);

?>

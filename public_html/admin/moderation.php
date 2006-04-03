<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog 1.4                                                               |
// +---------------------------------------------------------------------------+
// | moderation.php                                                            |
// |                                                                           |
// | Geeklog main administration page.                                         |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2000-2006 by the following authors:                         |
// |                                                                           |
// | Authors: Tony Bibbs        - tony AT tonybibbs DOT com                    |
// |          Mark Limburg      - mlimburg AT users DOT sourceforge DOT net    |
// |          Jason Whittenburg - jwhitten AT securitygeeks DOT com            |
// |          Dirk Haun         - dirk AT haun-online DOT de                   |
// +---------------------------------------------------------------------------+
// |                                                                           |
// | This program is free software; you can redistribute it and/or             |
// | modify it under the terms of the GNU General Public License               |
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
// | GNU General Public License for more details.                              |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software Foundation,   |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.           |
// |                                                                           |
// +---------------------------------------------------------------------------+
//
// $Id: moderation.php,v 1.88 2006/04/03 11:40:51 dhaun Exp $

require_once ('../lib-common.php');
require_once ('auth.inc.php');
require_once ($_CONF['path_system'] . 'lib-user.php');
require_once ($_CONF['path_system'] . 'lib-story.php');

// Uncomment the line below if you need to debug the HTTP variables being passed
// to the script.  This will sometimes cause errors but it will allow you to see
// the data being passed in a POST operation
// echo COM_debug($_POST);

define ('ICONS_PER_ROW', 6);

/**
* Renders an entry (icon) for the "Command and Control" center
*
* @param    template    $template   template to use
* @param    string      $url        URL the entry links to
* @param    string      $image      URL of the icon
* @param    string      $label      text to use under the icon
* @return   void
*
*/
function render_cc_item (&$template, $url = '', $image = '', $label = '')
{

    if (!empty ($url)) {
        $template->set_var ('page_url', $url);
        $template->set_var ('page_image', $image);
        $template->set_var ('option_label', $label);
        $template->set_var ('cell_width', ((int)(100 / ICONS_PER_ROW)) . '%');
        return $template->parse ('cc_main_options', 'ccitem', false);
    } else {
        return '';
    }
}

/**
* Prints the command & control block at the top
*
*/
function commandcontrol()
{
    global $_CONF, $_TABLES, $LANG01, $LANG29, $_IMAGE_TYPE;

    $retval = '';

    $admin_templates = new Template($_CONF['path_layout'] . 'admin/moderation');
    $admin_templates->set_file (array ('cc'     => 'moderation.thtml',
                                       'ccrow'  => 'ccrow.thtml',
                                       'ccitem' => 'ccitem.thtml'));

    $retval .= COM_startBlock ('Geeklog ' . VERSION . ' -- ' . $LANG29[34], '',
                               COM_getBlockTemplate ('_admin_block', 'header'));

    $showTrackbackIcon = (($_CONF['trackback_enabled'] ||
                          $_CONF['pingback_enabled'] || $_CONF['ping_enabled'])
                         && SEC_hasRights('story.ping'));
    $cc_arr = array(
                  array('condition' => SEC_hasRights('story.edit'),
                        'url' => $_CONF['site_admin_url'] . '/story.php',
                        'lang' => $LANG01[11], 'image' => '/images/icons/story.'),
                  array('condition' => SEC_hasRights('block.edit'),
                        'url' => $_CONF['site_admin_url'] . '/block.php',
                        'lang' => $LANG01[12], 'image' => '/images/icons/block.'),
                  array('condition' => SEC_hasRights('topic.edit'),
                        'url' => $_CONF['site_admin_url'] . '/topic.php',
                        'lang' => $LANG01[13], 'image' => '/images/icons/topic.'),
                  array('condition' => SEC_hasRights('event.edit'),
                        'url' => $_CONF['site_admin_url'] . '/event.php',
                        'lang' => $LANG01[15], 'image' => '/images/icons/event.'),
                  array('condition' => SEC_hasRights('user.edit'),
                        'url' => $_CONF['site_admin_url'] . '/user.php',
                        'lang' => $LANG01[17], 'image' => '/images/icons/user.'),
                  array('condition' => SEC_hasRights('group.edit'),
                        'url' => $_CONF['site_admin_url'] . '/group.php',
                        'lang' => $LANG01[96], 'image' => '/images/icons/group.'),
                  array('condition' => SEC_hasRights('user.mail'),
                        'url' => $_CONF['site_admin_url'] . '/mail.php',
                        'lang' => $LANG01[105], 'image' => '/images/icons/mail.'),
                  array('condition' => SEC_inGroup('Root'),
                        'url' => $_CONF['site_admin_url'] . '/syndication.php',
                        'lang' => $LANG01[38], 'image' => '/images/icons/syndication.'),
                  array('condition' => $showTrackbackIcon,
                        'url' => $_CONF['site_admin_url'] . '/trackback.php',
                        'lang' => $LANG01[116], 'image' => '/images/icons/trackback.'),
                  array('condition' => SEC_hasRights('plugin.edit'),
                        'url' => $_CONF['site_admin_url'] . '/plugins.php',
                        'lang' => $LANG01[98], 'image' => '/images/icons/plugins.')
    );

    for ($i = 0; $i < count ($cc_arr); $i++) {
        if ($cc_arr[$i]['condition']) {
            $item = render_cc_item ($admin_templates, $cc_arr[$i]['url'],
                    $_CONF['layout_url'] . $cc_arr[$i]['image'] . $_IMAGE_TYPE,
                    $cc_arr[$i]['lang']);
            $items[$cc_arr[$i]['lang']] = $item;
        }
    }

    // now add the plugins
    $plugins = PLG_getCCOptions ();
    for ($i = 0; $i < count ($plugins); $i++) {
        $cur_plugin = current ($plugins);
        $item = render_cc_item ($admin_templates, $cur_plugin->adminurl,
                        $cur_plugin->plugin_image, $cur_plugin->adminlabel);
        $items[$cur_plugin->adminlabel] = $item;
        next ($plugins);
    }

    // and finally, add the remaining admin items
    $cc_arr = array(
                  array('condition' => ($_CONF['allow_mysqldump'] == 1) && SEC_inGroup ('Root'),
                        'url' => $_CONF['site_admin_url'] . '/database.php',
                        'lang' => $LANG01[103], 'image' => '/images/icons/database.'),
                  array('condition' => ($_CONF['link_documentation'] == 1),
                        'url' => $_CONF['site_url'] . '/docs/',
                        'lang' => $LANG01[113], 'image' => '/images/icons/docs.'),
                  array('condition' => (SEC_inGroup ('Root')),
                        'url' => 'http://www.geeklog.net/versionchecker.php?version=' . VERSION,
                        'lang' => $LANG01[107], 'image' => '/images/icons/versioncheck.')
    );

    for ($i = 0; $i < count ($cc_arr); $i++) {
        if ($cc_arr[$i]['condition']) {
            $item = render_cc_item ($admin_templates, $cc_arr[$i]['url'],
                    $_CONF['layout_url'] . $cc_arr[$i]['image'] . $_IMAGE_TYPE,
                    $cc_arr[$i]['lang']);
            $items[$cc_arr[$i]['lang']] = $item;
        }
    }

    if ($_CONF['sort_admin'])
    {
        ksort($items);
    }
     // logout is always the last entry
    $item = render_cc_item ($admin_templates,
                    $_CONF['site_url'] . '/users.php?mode=logout',
                    $_CONF['layout_url'] . '/images/icons/logout.' . $_IMAGE_TYPE,
                    $LANG01[35]);
    $items[$LANG01[35]] = $item;
    reset($items);
    $cols = 0;
    $cc_main_options = '';
    while (list($key, $val) = each($items))
    {
        $cc_main_options .= $val . LB;
        $cols++;
        if ($cols == ICONS_PER_ROW)
        {
            $admin_templates->set_var('cc_main_options', $cc_main_options);
            $admin_templates->parse ('cc_rows', 'ccrow', true);
            $admin_templates->clear_var ('cc_main_options');
            $cc_main_options = '';
            $cols = 0;
        }
    }
    // "flush out" any unrendered entries
    $admin_templates->set_var('cc_main_options', $cc_main_options);
    $admin_templates->parse ('cc_rows', 'ccrow', true);
    $admin_templates->clear_var ('cc_main_options');

    $retval .= $admin_templates->parse('output','cc');

    $retval .= COM_endBlock (COM_getBlockTemplate ('_admin_block', 'footer'));

    if (SEC_hasRights('story.moderate')) {
        $retval .= itemlist('story');
    }

    if (SEC_hasRights('story.edit')) {
        if ($_CONF['listdraftstories'] == 1) {
            $retval .= draftlist ();
        }
    }
    if (SEC_hasRights('event.moderate')) {
        $retval .= itemlist('event');
    }
    if ($_CONF['usersubmission'] == 1) {
        if (SEC_hasRights ('user.edit') && SEC_hasRights ('user.delete')) {
            $retval .= userlist ();
        }
    }

    $retval .= PLG_showModerationList();

    return $retval;
}

/**
* Diplays items needing moderation
*
* Displays the moderation list of items from the submission tables
*
* @type     string      Type of object to build list for
*
*/
function itemlist($type)
{
    global $_TABLES, $LANG29, $_CONF, $LANG_ADMIN;
    require_once( $_CONF['path_system'] . 'lib-admin.php' );
    $isplugin = false;
    $retval = '';

    switch ($type) {
    case 'event':
        $sql = "SELECT eid AS id,title,datestart as day,url FROM {$_TABLES['eventsubmission']} ORDER BY datestart ASC";
        $H = array($LANG29[10],$LANG29[11],$LANG29[12]);
        $section_title = $LANG29[37];
        $section_help = 'cceventsubmission.html';
        break;
    default:
        if ((strlen($type) > 0) && ($type <> 'story')) {
            $function = 'plugin_itemlist_' . $type;
            if (function_exists($function)) {
                // Great, we found the plugin, now call it's itemlist method
                $plugin = new Plugin();
                $plugin = $function();
                $helpfile = $plugin->submissionhelpfile;
                $sql = $plugin->getsubmissionssql;
                $H = $plugin->submissionheading;
                $isplugin = true;
                $section_title = $plugin->submissionlabel;
                $section_help = $helpfile;
                break;
            }
        } else { # story submission
            $sql = "SELECT sid AS id,title,date,tid FROM {$_TABLES['storysubmission']}" . COM_getTopicSQL ('WHERE') . " ORDER BY date ASC";
            $H =  array($LANG29[10],$LANG29[14],$LANG29[15]);
            $section_title = $LANG29[35];
            $section_help = 'ccstorysubmission.html';
            break;
        }
    }

    // run SQL but this time ignore any errors
    if (!empty ($sql)) {
        $result = DB_query($sql,1);
    }
    if (empty ($sql) || DB_error()) {
        // was more than likely a plugin that doesn't need moderation
        //$nrows = -1;
        return;
    } else {
        $nrows = DB_numRows($result);
    }
    $data_arr = array();
    for ($i = 0; $i < $nrows; $i++) {
        $A = DB_fetchArray($result);
        if ($isplugin)  {
            $A['edit'] = $_CONF['site_admin_url'] . '/plugins/' . $type
                     . '/index.php?mode=editsubmission&amp;id=' . $A[0];
        } else {
            $A['edit'] = $_CONF['site_admin_url'] . '/' .  $type
                     . '.php?mode=editsubmission&amp;id=' . $A[0];
        }
        $A['row'] = $i;
        $data_arr[$i] = $A;
    }

    $header_arr = array(      # dislay 'text' and use table field 'field'
        array('text' => $LANG_ADMIN['edit'], 'field' => 0),
        array('text' => $H[0], 'field' => 1),
        array('text' => $H[1], 'field' => 2),
        array('text' => $H[2], 'field' => 3),
        array('text' => $LANG29[2], 'field' => 'delete'),
        array('text' => $LANG29[1], 'field' => 'approve'));

    $text_arr = array('has_menu'    => false,
                      'title'       => $section_title,
                      'help_url'    => $section_help,
                      'no_data'     => $LANG29[39]);

    $table = ADMIN_simpleList("ADMIN_getListField_moderation", $header_arr, $text_arr, $data_arr, array());
    if ($nrows > 0) {
        $retval .= LB . '<form action="' . $_CONF['site_admin_url']
                . '/moderation.php" method="POST">' . LB
                . '<input type="hidden" name="type" value="' . $type . '">' . LB
                . '<input type="hidden" name="mode" value="moderation">' . LB
                . '<input type="hidden" name="count" value="' . $nrows . '">'
                . LB . $table . LB
                . '<p align="center"><input type="submit" value="'
                . $LANG_ADMIN['submit'] . '"></p></form>' . LB;
    } else {
        $retval .= $table;
    }
    return $retval;
}

/**
* Displays new user submissions
*
* When enabled, this will list all the new users which have applied for a
* site membership. When approving an application, an email containing the
* password is sent out immediately.
*
*/
function userlist ()
{
    global $_CONF, $_TABLES, $LANG29, $LANG_ADMIN;

    require_once ($_CONF['path_system'] . 'lib-admin.php');

    $retval = '';

    $sql = "SELECT uid as id,username,fullname,email FROM {$_TABLES['users']} WHERE status = 2";
    $result = DB_query ($sql);
    $nrows = DB_numRows($result);
    $data_arr = array();
    for ($i = 0; $i < $nrows; $i++) {
        $A = DB_fetchArray($result);
        $A['edit'] = $_CONF['site_admin_url'].'/user.php?mode=edit&amp;uid='.$A['id'];
        $A['row'] = $i;
        $A['fullname'] = stripslashes($A['fullname']);
        $A['email'] = stripslashes($A['email']);
        $data_arr[$i] = $A;
    }
    $header_arr = array(
        array('text' => $LANG_ADMIN['edit'], 'field' => 0),
        array('text' => $LANG29[16], 'field' => 1),
        array('text' => $LANG29[17], 'field' => 2),
        array('text' => $LANG29[18], 'field' => 3),
        array('text' => $LANG29[2], 'field' => 'delete'),
        array('text' => $LANG29[1], 'field' => 'approve')
    );

    $text_arr = array('has_menu'    => false,
                        'title'     => $LANG29[40],
                        'help_url'  => '',
                        'no_data'   => $LANG29[39]
    );
    $table = ADMIN_simpleList("ADMIN_getListField_moderation", $header_arr, $text_arr, $data_arr, array());
    if ($nrows > 0) {
        $retval .= LB . '<form action="' . $_CONF['site_admin_url']
                . '/moderation.php" method="POST">' . LB
                . '<input type="hidden" name="type" value="user">' . LB
                . '<input type="hidden" name="mode" value="moderation">' . LB
                . '<input type="hidden" name="count" value="' . $nrows . '">'
                . LB . $table . LB
                . '<p align="center"><input type="submit" value="'
                . $LANG_ADMIN['submit'] . '"></p></form>' . LB;
    } else {
        $retval .= $table;
    }

    return $retval;
}

/**
* Displays a list of all the stories that have the 'draft' flag set.
*
* When enabled, this will list all the stories that have been marked as
* 'draft'. Approving a story from this list will clear the draft flag and
* thus publish the story.
*
*/
function draftlist ()
{
    global $_CONF, $_TABLES, $LANG24, $LANG29, $LANG_ADMIN;
    require_once( $_CONF['path_system'] . 'lib-admin.php' );
    $retval = '';

    $result = DB_query ("SELECT sid AS id,title,UNIX_TIMESTAMP(date) AS day,tid FROM {$_TABLES['stories']} WHERE (draft_flag = 1)" . COM_getTopicSQL ('AND') . COM_getPermSQL ('AND', 0, 3) . " ORDER BY date ASC");
    $nrows = DB_numRows($result);
    $data_arr = array();

    for ($i = 0; $i < $nrows; $i++) {
        $A = DB_fetchArray($result);
        $A['edit'] = $_CONF['site_admin_url'] . '/story.php?mode=edit&amp;sid='
                    . $A['id'];
        $A['row'] = $i;
        $A['title'] = stripslashes($A['title']);
        $A['tid'] = stripslashes($A['tid']);
        $data_arr[$i] = $A;
    }

    $header_arr = array(
        array('text' => $LANG_ADMIN['edit'], 'field' => 0),
        array('text' => $LANG29[10], 'field' => 'title'),
        array('text' => $LANG29[14], 'field' => 'day'),
        array('text' => $LANG29[15], 'field' => 'tid'),
        array('text' => $LANG29[2], 'field' => 'delete'),
        array('text' => $LANG29[1], 'field' => 'approve'));

    $text_arr = array('has_menu'    => false,
                        'title'     => $LANG29[35] . ' (' . $LANG24[34] . ')',
                        'help_url'  => '',
                        'no_data'   => $LANG29[39]);

    $table = ADMIN_simpleList("ADMIN_getListField_moderation", $header_arr, $text_arr, $data_arr, array());
    if ($nrows > 0) {
        $retval .= "\n\n<form action=\"{$_CONF['site_admin_url']}/moderation.php\" method=\"POST\">"
                    ."<input type=\"hidden\" name=\"type\" value=\"draft\">"
                    ."<input type=\"hidden\" name=\"mode\" value=\"moderation\">"
                    .$table
                    ."<center><input type=\"submit\" value=\"{$LANG_ADMIN['submit']}\"></center></form>\n\n";
    } else {
        $retval .= $table;
    }

    return $retval;
}

/**
* Moderates an item
*
* This will actually perform moderation (approve or delete) one or more items
*
* @param    array   $mid        Array of items
* @param    array   $action     Array of actions to perform on items
* @param    string  $type       Type of items ('story', 'event', etc.)
* @param    int     $count      Number of items to moderate
* @return   string              HTML for "command and control" page
*
*/
function moderation ($mid, $action, $type, $count)
{
    global $_CONF, $_TABLES;

    $retval = '';

    switch ($type) {
    case 'event':
        $id = 'eid';
        $table = $_TABLES['events'];
        $submissiontable = $_TABLES['eventsubmission'];
        $fields = 'eid,title,description,location,address1,address2,city,state,zipcode,datestart,timestart,dateend,timeend,url';
        break;
    case 'story':
        $id = 'sid';
        $table = $_TABLES['stories'];
        $submissiontable = $_TABLES['storysubmission'];
        $fields = 'sid,uid,tid,title,introtext,date,postmode';
        break;
    default:
        if (strlen($type) <= 0) {
            // something is terribly wrong, bail
            $retval .= COM_errorLog("Unable to find type of $type in moderation() in moderation.php");
            return $retval;
        }
        list($id, $table, $fields, $submissiontable) = PLG_getModerationValues($type);
    }

    for ($i = 0; $i < $count; $i++) {
        switch ($action[$i]) {
        case 'delete':
            if (!empty ($type) && ($type <> 'story') && ($type <> 'draft')) {
                // There may be some plugin specific processing that needs to
                // happen first.
                $retval .= PLG_deleteSubmission($type, $mid[$i]);
            }
            if (empty($mid[$i])) {
                $retval .= COM_errorLog("moderation.php just tried deleting everything in table $submissiontable because it got an empty id.  Please report this immediately to your site administrator");
                return $retval;
            }
            if ($type == 'draft') {
                STORY_deleteStory($mid[$i]);
            } else {
                DB_delete($submissiontable,"$id",$mid[$i]);
            }
            break;
        case 'approve':
            if ($type == 'story') {
                $result = DB_query ("SELECT * FROM {$_TABLES['storysubmission']} WHERE sid = '$mid[$i]'");
                $A = DB_fetchArray ($result);
                $A['related'] = addslashes (implode ("\n", STORY_extractLinks ($A['introtext'])));
                $A['owner_id'] = $A['uid'];
                $A['title'] = addslashes ($A['title']);
                $A['introtext'] = addslashes ($A['introtext']);
                $result = DB_query ("SELECT group_id,perm_owner,perm_group,perm_members,perm_anon,archive_flag FROM {$_TABLES['topics']} WHERE tid = '{$A['tid']}'");
                $T = DB_fetchArray ($result);
                if ($T['archive_flag'] == 1) {
                    $frontpage = 0;
                } else {
                    $frontpage = 1;
                }
                DB_save ($_TABLES['stories'],'sid,uid,tid,title,introtext,related,date,show_topic_icon,commentcode,trackbackcode,postmode,frontpage,owner_id,group_id,perm_owner,perm_group,perm_members,perm_anon',
                "'{$A['sid']}',{$A['uid']},'{$A['tid']}','{$A['title']}','{$A['introtext']}','{$A['related']}','{$A['date']}','{$_CONF['show_topic_icon']}','{$_CONF['comment_code']}','{$_CONF['trackback_code']}','{$A['postmode']}',$frontpage,{$A['owner_id']},{$T['group_id']},{$T['perm_owner']},{$T['perm_group']},{$T['perm_members']},{$T['perm_anon']}");
                DB_delete($_TABLES['storysubmission'],"$id",$mid[$i]);

                COM_rdfUpToDateCheck ();
                COM_olderStuff ();
            } else if ($type == 'event') {
                // first, copy entry from the submission to the events table
                DB_copy ($table, $fields, $fields, $submissiontable, $id,
                         $mid[$i]);
                // then set the default permissions
                $A = array ();
                SEC_setDefaultPermissions ($A,
                                           $_CONF['default_permissions_event']);
                DB_query ("UPDATE {$_TABLES['events']} SET perm_owner = {$A['perm_owner']}, perm_group = {$A['perm_group']}, perm_members = {$A['perm_members']}, perm_anon = {$A['perm_anon']} WHERE eid = {$mid[$i]}");
            } else if ($type == 'draft') {
                DB_query ("UPDATE {$_TABLES['stories']} SET draft_flag = 0 WHERE sid = '{$mid[$i]}'");

                COM_rdfUpToDateCheck ();
                COM_olderStuff ();
            } else {
                // This is called in case this is a plugin. There may be some
                // plugin specific processing that needs to happen.
                DB_copy($table,$fields,$fields,$submissiontable,$id,$mid[$i]);
                $retval .= PLG_approveSubmission($type,$mid[$i]);
            }
            break;
        }
    }

    $retval .= commandcontrol();

    return $retval;
}

/**
* Moderate user submissions
*
* Users from the user submission queue are either appoved (an email containing
* the password is sent out) or deleted.
*
* @param    int     $uid        Array of items
* @param    array   $action     Action to perform ('delete', 'approve')
* @param    int     $count      Number of items
* @return   string              HTML for "command and control" page
*
*/
function moderateusers ($uid, $action, $count)
{
    global $_CONF, $_TABLES, $LANG04;

    $retval = '';

    for ($i = 0; $i < $count; $i++) {
        switch ($action[$i]) {
            case 'delete': // Ok, delete everything related to this user
                if ($uid[$i] > 1) {
                    USER_deleteAccount ($uid[$i]);
                }
                break;
            case 'approve':
                $result = DB_query ("SELECT email,username, uid FROM {$_TABLES['users']} WHERE uid = $uid[$i]");
                $nrows = DB_numRows($result);
                if ($nrows == 1) {
                    $A = DB_fetchArray($result);
                    $sql = "UPDATE {$_TABLES['users']} SET status=3 WHERE uid={$A['uid']}";
                    DB_Query($sql);
                    USER_createAndSendPassword ($A['username'], $A['email'], $A['uid']);
                }
                break;
        }
    }

    $retval .= commandcontrol();

    return $retval;
}

// MAIN

$display = '';
$display .= COM_siteHeader ('menu', $LANG29[34]);
if (isset ($_GET['msg'])) {
    $display .= COM_showMessage ($_GET['msg']);
}

if (isset ($_POST['mode']) && ($_POST['mode'] == 'moderation')) {
    if ($_POST['type'] == 'user') {
        $display .= moderateusers ($_POST['id'], $_POST['action'],
                                  COM_applyFilter ($_POST['count'], true));
    } else {
        $display .= moderation ($_POST['id'], $_POST['action'], $_POST['type'],                                 COM_applyFilter ($_POST['count'], true));
    }
} else {
    $display .= commandcontrol();
}

$display .= COM_siteFooter();

echo $display;

?>

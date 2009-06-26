<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog 1.6                                                               |
// +---------------------------------------------------------------------------+
// | pmanager.php                                                              |
// |                                                                           |
// | Geeklog plugin management tool                                            |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2000-2009 by the following authors:                         |
// |                                                                           |
// | Authors: timpatrick12 AT gmail DOT com                                    |
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

/**
* Plugin Management Page - Install / Download plugins from the repository, add plugins, or uninstall plugins
*
*/

require_once '../../../lib-common.php';

require_once '../../auth.inc.php';

$display = '';

/*
if (!SEC_hasRights('pmanager.manage')) {
    $display .= COM_siteHeader('menu', $MESSAGE[30])
             . COM_showMessageText($MESSAGE[29], $MESSAGE[30])
             . COM_siteFooter();
    COM_accessLog("User {$_USER['username']} tried to illegally access the plugin administration screen.");
    COM_output($display);
    exit;
}
*/

$display = '';

$display .= COM_siteHeader('');

// Is a GET parameter indicating an action to take?
if (isset($_GET['do_sometjg']))
{

}
else
{
    // Print out loading page
    $data = new Template($_CONF['path'].'plugins/pmanager/templates');
    $data->set_file(array('index'=>'ldock.thtml'));
    $data->set_var('lang_0', $LANG_PMANAGER_GEN[0]);
    $data->set_var('lang_1', $LANG_PMANAGER_GEN[1]);
    $data->set_var('lang_2', $LANG_PMANAGER_GEN[2]);
    $data->set_var('lang_3', $LANG_PMANAGER_GEN[3]);
    $data->set_var('lang_4', $LANG_PMANAGER_GEN[4]);
    $data->set_var('lang_5', $LANG_PMANAGER_GEN[5]);
    $data->set_var('lang_6', $LANG_PMANAGER_GEN[6]);
    $data->set_var('lang_7', $LANG_PMANAGER_GEN[7]);
    $data->set_var('lang_8', $LANG_PMANAGER_GEN[8]);
    $data->set_var('lang_9', $LANG_PMANAGER_GEN[9]);
    $data->set_var('lang_10', $LANG_PMANAGER_GEN[10]);


    $data->parse('output','index');
    $display .= $data->finish($data->get_var('output'));
}






$display .= COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));
$display .= COM_siteFooter();
COM_output($display);
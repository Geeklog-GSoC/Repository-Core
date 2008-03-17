<?php

###############################################################################
# chinese_traditional_utf-8.php
# This is the Chinese Traditional Unicode (utf-8) language set
# for the Geeklog Static Page Plug-in!
#
# Last updated January 10, 2006
#
# Copyright (C) 2005 Samuel M. Stone
# sam@stonemicro.com
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

###############################################################################
# Array Format: 
# $LANGXX[YY]:	$LANG - variable name
#		  	XX - file id number
#			YY - phrase id number
###############################################################################


$LANG_STATIC= array(
    'newpage' => '新頁',
    'adminhome' => '管理處',
    'staticpages' => '靜態頁',
    'staticpageeditor' => '靜態頁編輯器',
    'writtenby' => '作者',
    'date' => '更新日期',
    'title' => '標題',
    'content' => '內容',
    'hits' => '採樣數',
    'staticpagelist' => '靜態頁目錄',
    'url' => '網址',
    'edit' => '編輯',
    'lastupdated' => '更新日期',
    'pageformat' => '網頁各式',
    'leftrightblocks' => '左右組件',
    'blankpage' => '空頁',
    'noblocks' => '無組件',
    'leftblocks' => '左組件',
    'addtomenu' => '加入菜單',
    'label' => '標簽',
    'nopages' => '此系統無靜態頁',
    'save' => '存續',
    'preview' => '預覽',
    'delete' => '刪除',
    'cancel' => '取消',
    'access_denied' => '拒絕入門',
    'access_denied_msg' => '你在非法進入靜態頁管理處. 請注意，你企圖非法的進入此頁的資料會被記錄下來',
    'all_html_allowed' => '所有 HTML 代號讀可用',
    'results' => '靜態頁結果',
    'author' => '作者',
    'no_title_or_content' => '你最少要填入<b>標題</b> 和 <b>內容</b>.',
    'no_such_page_anon' => '請登入..',
    'no_page_access_msg' => "這也許是你未登入, 或不是此站的用戶. 請 <a href=\"{$_CONF['site_url']}/users.php?mode=new\"> 申請成為用戶 </a> 來得到登入權",
    'php_msg' => 'PHP: ',
    'php_warn' => '注意: 你的靜態頁上的 PHP 代號將會被評價. 請小心 !!',
    'exit_msg' => 'Exit 類型: ',
    'exit_info' => '啟動 需要登入 的通知.  不勾此框便即用正常安全檢查.',
    'deny_msg' => '拒絕進入此頁.  也許此頁也被搬移，刪除，或你無足夠許可進入此頁.',
    'stats_headline' => '頭十個靜態頁',
    'stats_page_title' => '網頁標題',
    'stats_hits' => '採樣數',
    'stats_no_hits' => '看來此站沒有靜態頁或無人曾看過任何靜態頁.',
    'id' => 'ID',
    'duplicate_id' => '你選的 ID 已經被用，請選另一個.',
    'instructions' => '若要更改或刪除一個靜態頁，在它旁邊的編輯圖上點擊。若要看一個靜態頁，在它的標題上點擊。若要建立一個新的靜態頁，在以上的‘建新’上點距。若要複製一個靜態頁，再它旁邊的複製圖上點擊。',
    'centerblock' => '中組件: ',
    'centerblock_msg' => '若勾此匡，此靜態頁便會顯為‘中組件’，就是變成網頁中間的框框。',
    'topic' => '主題: ',
    'position' => '位置: ',
    'all_topics' => '所有',
    'no_topic' => '只顯在主頁',
    'position_top' => '頂部',
    'position_feat' => '在重要文章下面',
    'position_bottom' => '底部',
    'position_entire' => '整頁',
    'head_centerblock' => '中組件',
    'centerblock_no' => '不',
    'centerblock_top' => '頂',
    'centerblock_feat' => '重要文章',
    'centerblock_bottom' => '底',
    'centerblock_entire' => '整頁',
    'inblock_msg' => '在一個組件內: ',
    'inblock_info' => '將靜態頁包在組件框裏.',
    'title_edit' => '編輯此頁',
    'title_copy' => '複製此頁',
    'title_display' => '顯示此頁',
    'select_php_none' => '不要執行PHP',
    'select_php_return' => '執行 PHP (return)',
    'select_php_free' => '執行 PHP',
    'php_not_activated' => '使用 PHP 的功能為開啟.',
    'printable_format' => '打印格式',
    'edit' => '編輯',
    'copy' => '複製',
    'limit_results' => '限制結果',
    'search' => '搜尋',
    'submit' => '提交'
);

// Messages for the plugin upgrade
$PLG_staticpages_MESSAGE3001 = 'Plugin upgrade not supported.';
$PLG_staticpages_MESSAGE3002 = $LANG32[9];

?>

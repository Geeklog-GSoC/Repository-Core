<?php

###############################################################################
# chinese_big5.php
#
# Last Modified:20021023
# Version: 0.91
#
# This is the Chinese (big5) language page for GeekLog!
#
# Copyright (C) 2002 Jacky Chan
# jacky@netosoft.com
#
# Note: This is the first release. If you want to rephrase sentences, please 
#       drop me an email.
#
# Chinese punctuation used in this file
# ；︰、！，。？
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

$LANG_CHARSET = 'big5';

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
    1 => '貢獻者︰',
    2 => '讀多些',
    3 => '個意見',
    4 => '編輯',
    5 => '投票',
    6 => '結果',
    7 => '投票結果',
    8 => '投票',
    9 => '管理者功能︰',
    10 => '提交物',
    11 => '故事',
    12 => '組件',
    13 => '主題',
    14 => '連結',
    15 => '事件',
    16 => '投票',
    17 => '用戶',
    18 => 'SQL Query',
    19 => '登出',
    20 => '用戶資訊︰',
    21 => '用戶名',
    22 => '用戶識別號',
    23 => '安全等級',
    24 => '匿名',
    25 => '回復',
    26 => '以下意見只屬張貼者個人觀點。',
    27 => '最近發表的',
    28 => '刪除',
    29 => '沒有意見。',
    30 => '舊的故事',
    31 => '允許的 HTML 標記:',
    32 => '錯誤，無效的用戶名',
    33 => '錯誤，不能寫系統日誌;',
    34 => '錯誤',
    35 => '登出',
    36 => '于',
    37 => '沒有故事',
    38 => 'Content Syndication',
    39 => '使新',
    40 => 'You have <tt>register_globals = Off</tt> in your <tt>php.ini</tt>. However, Geeklog requires <tt>register_globals</tt> to be <strong>on</strong>. Before you continue, please set it to <strong>on</strong> and restart your web server.',
    41 => '客人',
    42 => '作者:',
    43 => '回復這個',
    44 => '父母',
    45 => 'MySQL 錯誤號碼',
    46 => 'MySQL 錯誤資訊',
    47 => '用戶功能',
    48 => '帳戶資訊',
    49 => '畫面設定',
    50 => '錯誤的 SQL statement',
    51 => '幫助',
    52 => '新',
    53 => '管理者首頁',
    54 => '不能打開文件。',
    55 => '錯處',
    56 => '投票',
    57 => '密碼',
    58 => '登入',
    59 => "沒有帳戶？<a href=\"{$_CONF['site_url']}/users.php?mode=new\">在此登記</a>",
    60 => '發表意見',
    61 => '新增帳戶',
    62 => '字',
    63 => '意見設定',
    64 => '把文章電郵給朋友',
    65 => '觀看可列印的版本',
    66 => '我的日曆',
    67 => '歡迎來到',
    68 => '首頁',
    69 => '聯絡',
    70 => '搜尋',
    71 => '貢獻',
    72 => '萬維網資源',
    73 => '投票中心',
    74 => '日曆',
    75 => '進階搜索',
    76 => '本站統計數據',
    77 => 'Plugins',
    78 => '即將發生的事',
    79 => '新鮮的東西',
    80 => '個新故事(',
    81 => '新的故事(',
    82 => ' 小時內)',
    83 => '意見',
    84 => '連結',
    85 => '最近四十八小時',
    86 => '沒有新的意見',
    87 => '最近兩個星期',
    88 => '沒有新的連結',
    89 => '沒有事發生',
    90 => '首頁',
    91 => '製作這頁用了',
    92 => '秒',
    93 => '版權',
    94 => 'All trademarks and copyrights on this page are owned by their respective owners.',
    95 => 'Powered By',
    96 => '小組',
    97 => '字詞單',
    98 => 'Plug-ins',
    99 => '故事',
    100 => '沒有新的故事',
    101 => '你的事件',
    102 => '本站的事件',
    103 => '資料庫備份',
    104 => '由',
    105 => '寄給用戶',
    106 => '觀看',
    107 => 'GL 版本測試',
    108 => '清除緩衝貯存區',
    109 => 'Report abuse',
    110 => 'Report this post to the site admin',
    111 => 'View PDF Version',
    112 => 'Registered Users',
    113 => 'Documentation'
);

###############################################################################
# calendar.php

$LANG02 = array(
    1 => '事件日曆',
    2 => '抱歉，沒有事件。',
    3 => '時',
    4 => '地',
    5 => '事',
    6 => '新增事件',
    7 => '即將發生的事',
    8 => '在將這事加進你的日曆之後，你可點擊 "我的日曆" 來觀看',
    9 => '加進我的日曆',
    10 => '從我的日曆中去除',
    11 => "把這事加進 {$_USER['username']} 的日曆",
    12 => '事件',
    13 => '開始',
    14 => '結束',
    15 => '回到日曆'
);

###############################################################################
# comment.php

$LANG03 = array(
    1 => '發表意見',
    2 => '發表方式',
    3 => '登出',
    4 => '新增帳戶',
    5 => '用戶名',
    6 => '本站需要登入才可發表意見，請登入。如果你沒有帳戶，請使用下面的表格登記。',
    7 => '你最後發表的意見是在 ',
    8 => " 秒之前。本站限定至少 {$_CONF['commentspeedlimit']} 秒後才可再發表意見",
    9 => '意見',
    10 => 'Send Report',
    11 => '發表意見',
    12 => '請填寫標題註意見欄',
    13 => '供你參考',
    14 => '預覽',
    15 => 'Report this post',
    16 => '標題',
    17 => '錯誤',
    18 => '重要的東西',
    19 => '請盡量不要離題。',
    20 => '盡可能回復別人的意見，而不是開新的意見。',
    21 => '為避免重複，發表意見之前請先讀別人所寫的。',
    22 => '請盡量用簡潔的標題。',
    23 => '我們不會公開你的電郵地址。',
    24 => '匿名用戶',
    25 => 'Are you sure you want to report this post to the site admin?',
    26 => '%s reported the following abusive comment post:',
    27 => 'Abuse report'
);

###############################################################################
# users.php

$LANG04 = array(
    1 => '用戶概況',
    2 => '用戶名',
    3 => '全名',
    4 => '密碼',
    5 => '電子郵件',
    6 => '首頁',
    7 => '小傳',
    8 => 'PGP 鑰匙',
    9 => '儲存資訊',
    10 => '給用戶的最後十個意見',
    11 => '沒有意見',
    12 => '用戶設定',
    13 => '每夜電郵文摘',
    14 => '這是個隨機的密碼，請盡快更改。要更改密碼請先登入系統，然後點擊帳戶資訊。',
    15 => "你在 {$_CONF['site_name']} 的帳戶已建立了。請使用以下資訊登入系統並保留這郵件作日後參考。",
    16 => '你的帳戶資訊',
    17 => '帳戶並不存在',
    18 => '你提供的不是一個有效的的電郵',
    19 => '用戶名或電郵已經存在',
    20 => '提供的不是一個有效的的電郵',
    21 => '錯誤',
    22 => "登記用 {$_CONF['site_name']} ！",
    23 => "在 {$_CONF['site_name']} 登記的用戶可享有的會員好處。他們可以用自己的名字發表意見和存取本站的資源。請注意本站<b><i>絕不會</i></b>公開用戶的電郵。",
    24 => '你的密碼將被送到你輸入的電郵信箱',
    25 => '忘記了你的密碼嗎？',
    26 => '請你輸入的用戶名和點擊電郵密碼，我們會發送一個新的密碼到你的電郵信箱。',
    27 => '現在就登記！',
    28 => '電郵密碼',
    29 => 'logout at',
    30 => 'login at',
    31 => '需要登入才可用',
    32 => '署名',
    33 => '絕不會公開',
    34 => '這是你的真名',
    35 => '要改變請輸入密碼',
    36 => '開始是 http://',
    37 => '將會附加在你發表的意見上',
    38 => '你的簡介',
    39 => '你的公共 PGP 鑰匙',
    40 => '沒有主題圖示',
    41 => '願意主持',
    42 => '日期格式',
    43 => '故事限度',
    44 => '沒有組件',
    45 => '顯示設定',
    46 => '不包括的',
    47 => '新組件配置為',
    48 => '主題',
    49 => '故事裡沒有圖像',
    50 => '不要打鉤如果你不感興趣',
    51 => '只是新故事',
    52 => '預設值是',
    53 => '每晚接收當日的故事',
    54 => '打鉤如果你不看這些主題或作者。',
    55 => '如果你沒有選擇，這意味你要用預設的組件。如果你選擇組件，所有預設的箱將被忽略。預設的東西會用粗筆畫顯示。',
    56 => '作者',
    57 => '顯示方式',
    58 => '排序方式',
    59 => '意見限制(個)',
    60 => '可顯示你的意見嗎？',
    61 => '最新或最舊的先？',
    62 => '預設是100',
    63 => '密碼已被發送，你會很快收到的。',
    64 => '意見設定',
    65 => '請嘗試再登入',
    66 => "你可能打錯了，請嘗試再登入。你是否<a href=\"{$_CONF['site_url']}/users.php?mode=new\">新用戶</a>？",
    67 => '成員自',
    68 => '記住我為',
    69 => '在登入以後，我們應該記住你多久？',
    70 => "定做 {$_CONF['site_name']} 的佈局和內容",
    71 => "一個 {$_CONF['site_name']} 的主要特點是你可以定做自己的佈局和內容，但是你必須是本站的會員。<a href=\"{$_CONF['site_url']}/users.php?mode=new\">在此登記</a>。如果你已經是登記，請使用左邊的區域登入。",
    72 => '題材',
    73 => '語言',
    74 => '改變本站外表',
    75 => '主題已電郵給',
    76 => '請只選擇你感興趣的主題，因為所有當日新張貼的故事將會電郵到你的信箱。',
    77 => '相片',
    78 => '你自己的圖片',
    79 => '要刪除圖片，在這裡打鉤',
    80 => '登入',
    81 => '發送電子郵件',
    82 => '用戶最近發表的十個故事為',
    83 => '用戶發表統計',
    84 => '文章總數︰',
    85 => '意見總數︰',
    86 => '尋找所有發表過的文章︰',
    87 => 'Your login name',
    88 => "Someone (possibly you) has requested a new password for your account \"%s\" on {$_CONF['site_name']}, <{$_CONF['site_url']}>.\n\nIf you really want this action to be taken, please click on the following link:\n\n",
    89 => "If you do not want this action to be taken, simply ignore this message and the request will be disregarded (your password will remain unchanged).\n\n",
    90 => 'You can enter a new password for your account below. Please note that your old password is still valid until you submit this form.',
    91 => 'Set New Password',
    92 => 'Enter New Password',
    93 => 'Your last request for a new password was %d seconds ago. This site requires at least %d seconds between password requests.',
    94 => 'Delete Account "%s"',
    95 => 'Click the "delete account" button below to remove your account from our database. Please note that any stories and comments you posted under this account will <strong>not</strong> be deleted but show up as being posted by "Anonymous".',
    96 => 'delete account',
    97 => 'Confirm Account Deletion',
    98 => 'Are you sure you want to delete your account? By doing so, you will not be able to log into this site again (unless you create a new account). If you are sure, click "delete account" again on the form below.',
    99 => 'Privacy Options for',
    100 => 'Email from Admin',
    101 => 'Allow email from Site Admins',
    102 => 'Email from Users',
    103 => 'Allow email from other users',
    104 => 'Show Online Status',
    105 => 'Show up in Who\'s Online block',
    106 => 'Location',
    107 => 'Shown in your public profile'
);

###############################################################################
# index.php

$LANG05 = array(
    1 => '沒有新聞可顯示',
    2 => '沒有新故事可顯示。',
    3 => '這也許是真的沒有新主題或是你的 %s 設定得太過限制性。',
    4 => '今天頭條',
    5 => '下一個',
    6 => '前一個',
    7 => 'First',
    8 => 'Last'
);

###############################################################################
# links.php

$LANG06 = array(
    1 => '萬維網資源',
    2 => '沒有資源可顯示',
    3 => '加一連結'
);

###############################################################################
# pollbooth.php

$LANG07 = array(
    1 => '投票儲存了',
    2 => '你的投票已被儲存了',
    3 => '投票',
    4 => '系統中的投票',
    5 => '投票',
    6 => 'View other poll questions'
);

###############################################################################
# profiles.php

$LANG08 = array(
    1 => '發送電子郵件時發生錯誤。請再嘗試。',
    2 => '電郵已送出。',
    3 => '請確定你在回復欄有一個可用的電子郵件地址。',
    4 => '請填寫你的名字、回復欄、主題和內容',
    5 => '錯誤：沒有這用戶。',
    6 => '發生錯誤。',
    7 => '用戶資料',
    8 => '用戶名',
    9 => '用戶名的 URL',
    10 => '發送郵件到',
    11 => '你的名字：',
    12 => '回復到：',
    13 => '主題：',
    14 => '內容：',
    15 => 'HTML 不會被翻譯。',
    16 => '發送郵件',
    17 => '把故事電郵給朋友',
    18 => '收件人名字',
    19 => '收件人電郵',
    20 => '寄件人名字',
    21 => '寄件人電郵',
    22 => '所有欄都要填寫',
    23 => "這電子郵件是由 %s (%s) 寄給你的，他認為你也許對這篇在 {$_CONF['site_url']} 的文章感興趣。這不是垃圾郵件(SPAM)，你的電郵地址也不會被紀錄。",
    24 => '關於這個故事的意見在',
    25 => '為幫助我們防止系統被濫用，你必須登入。',
    26 => '這個表格允許你送電子郵件到你選擇的用戶中。請填寫所有的欄位。',
    27 => '短信',
    28 => '%s 寫道：',
    29 => "來自於 {$_CONF['site_name']} 的每日文摘，給予：",
    30 => ' 每日的時事通訊，給予：',
    31 => '標題',
    32 => '日期',
    33 => '完整的文章在：',
    34 => '電郵結束',
    35 => 'Sorry, this user prefers not to receive any emails.'
);

###############################################################################
# search.php

$LANG09 = array(
    1 => '進階搜尋',
    2 => '關鍵詞',
    3 => '主題',
    4 => '所有',
    5 => '類型',
    6 => '故事',
    7 => '意見',
    8 => '作者',
    9 => '所有',
    10 => '搜尋',
    11 => '搜尋結果',
    12 => '相配',
    13 => '搜尋結果：沒有相配的',
    14 => '沒有你尋找的東西︰',
    15 => '請再嘗試',
    16 => '主題',
    17 => '日期',
    18 => '作者',
    19 => "搜尋整個 {$_CONF['site_name']} 的新舊故事資料庫",
    20 => '日期',
    21 => '到',
    22 => '(日期格式 YYYY-MM-DD)',
    23 => '采樣數',
    24 => '找到',
    25 => '個相配在',
    26 => '個項目中，共用了',
    27 => '秒',
    28 => '沒有你所尋找的故事或意見',
    29 => '故事和意見的結果',
    30 => '沒有你所尋找的連結',
    31 => '沒有你所尋找的 plug-in',
    32 => '事件',
    33 => 'URL',
    34 => '地點',
    35 => '所有日子',
    36 => '沒有你所尋找的事件',
    37 => '事件的結果',
    38 => '連結的結果',
    39 => '連結',
    40 => '事件',
    41 => '搜尋的關鍵詞最少要有三個字。',
    42 => '請使用 YYYY-MM-DD (年-月-日) 日期格式。',
    43 => 'exact phrase',
    44 => 'all of these words',
    45 => 'any of these words',
    46 => 'Next',
    47 => 'Previous',
    48 => 'Author',
    49 => 'Date',
    50 => 'Hits',
    51 => 'Link',
    52 => 'Location',
    53 => 'Story Results',
    54 => 'Comment Results',
    55 => 'the phrase',
    56 => 'AND',
    57 => 'OR'
);

###############################################################################
# stats.php

$LANG10 = array(
    1 => '本站統計數據',
    2 => '系統點擊總數',
    3 => '故事(意見)總數',
    4 => '投票(獲得投票)總數',
    5 => '連結(點擊)總數',
    6 => '事件總數',
    7 => '最多觀看的十個故事',
    8 => '故事標題',
    9 => '觀看',
    10 => '看來本站沒有故事或是沒人觀看過本站的故事。',
    11 => '最多意見的十個故事',
    12 => '意見',
    13 => '看來本站沒有故事或是沒人意見過本站的故事。',
    14 => '最多人投票的十個選舉',
    15 => '投票標題',
    16 => '投票',
    17 => '看來本站沒有投票或是沒人投過票。',
    18 => '最多人點擊的十個連結',
    19 => '連結',
    20 => '點擊',
    21 => '看來本站沒有連結或是沒人點擊過本站的連結。',
    22 => '最多人寄出的十個故事',
    23 => '電郵',
    24 => '看來沒人寄出過本站的故事'
);

###############################################################################
# article.php

$LANG11 = array(
    1 => '有什麼是相關的',
    2 => '寄故事給朋友',
    3 => '可印的故事格式',
    4 => '故事選項',
    5 => 'PDF Story Format'
);

###############################################################################
# submit.php

$LANG12 = array(
    1 => '你需要登入才可發表 %s ',
    2 => '登入',
    3 => '新用戶',
    4 => '發表一件事',
    5 => '發表一個連結',
    6 => '發表一個故事',
    7 => '你需要登入',
    8 => '發表',
    9 => '在本站發表東西時請跟隨以下建議...<ul><li>填寫所有的欄<li>提供完全和準確的資訊<li>再三檢查那些 URLs</ul>',
    10 => '標題',
    11 => '連結',
    12 => '開始日期',
    13 => '結束日期',
    14 => '地點',
    15 => '描述',
    16 => '如果是其他，請指定',
    17 => '類別',
    18 => '其他',
    19 => '讀這先',
    20 => '錯誤：缺少類別',
    21 => '當選擇"其他"請提供一個類別名',
    22 => '錯誤：缺少欄位',
    23 => '請填寫所有的欄位',
    24 => '你發表的已被儲存了',
    25 => '你的 %s 已被儲存了',
    26 => '限速',
    27 => '用戶名',
    28 => '主題',
    29 => '故事',
    30 => '你最後發表的是',
    31 => " 秒之前。本站限定至少 {$_CONF['speedlimit']} 秒後才可再發表",
    32 => '預覽',
    33 => '故事 預覽',
    34 => '登出',
    35 => '不准許 HTML 標記',
    36 => '發表模式',
    37 => "加事件到 {$_CONF['site_name']} 會將你的事件加到主日曆中，其他的用戶可隨意地把它加進自己的個人日曆。請<b>不要</b>把你的個人事件譬如生日和週年紀念加進去。<br><br>只要管理員批准你的事件它將出現在主日曆上。",
    38 => '加事件到',
    39 => '主日曆',
    40 => '個人日曆',
    41 => '結束時間',
    42 => '開始時間',
    43 => '整日的事件',
    44 => '地址 1',
    45 => '地址 2',
    46 => '城市/市鎮',
    47 => '州',
    48 => '郵政編碼',
    49 => '事件類型',
    50 => '編輯事件類型',
    51 => '地點',
    52 => '刪除',
    53 => '新加帳戶'
);

###############################################################################
# ADMIN PHRASES - These are file phrases used in admin scripts
###############################################################################

###############################################################################
# admin/auth.inc.php

$LANG20 = array(
    1 => '要求認證',
    2 => '拒絕！不正確的登入資料',
    3 => '無效的密碼',
    4 => '用戶名：',
    5 => '密碼：',
    6 => '這頁只供授權人員使用。<br>所有存取將被記錄和檢查。',
    7 => '登入'
);

###############################################################################
# admin/block.php

$LANG21 = array(
    1 => '權力不足',
    2 => '你沒有權去編輯這個組件。',
    3 => '組件編輯器',
    4 => 'There was a problem reading this feed (see error.log for details).',
    5 => '組件標題',
    6 => '主題',
    7 => '所有',
    8 => '組件安全水平',
    9 => '組件次序',
    10 => '組件類型',
    11 => '入口組件',
    12 => '正常組件',
    13 => '入口組件選項',
    14 => 'RDF URL',
    15 => '最後的 RDF 更新',
    16 => '正常組件選項',
    17 => '組件內容',
    18 => '請填寫組件的標題、安全水平和內容。',
    19 => '組件管理員',
    20 => '組件標題',
    21 => '組件安全水平',
    22 => '組件類型',
    23 => '組件次序',
    24 => '組件主題',
    25 => '點擊下面的組件可修改或刪除它，點擊上面的新組件可創造一個新的。',
    26 => '版面組件',
    27 => 'PHP 組件',
    28 => 'PHP 組件選項',
    29 => '組件函數',
    30 => '如果你想用自己的 PHP 函數組件，請在上面輸入函數的名字。為防止執行任性的編碼，PHP 組件函數名必須以 "phpblock_" 作開始 (e.g. phpblock_getweather)。請不要把空的圓括號 "()" 放在函數後。最後，建議你把所有的 PHP 組件放在 /path/to/geeklog/system/lib-custom.php 裡以方便系統升級。',
    31 => 'PHP 組件錯誤︰函數  並不存在。',
    32 => '錯誤︰缺少欄位。',
    33 => '在入口組件你必須把 URL 輸入到 .rdf 檔案',
    34 => '在 PHP 組件你必須輸入主題和函數',
    35 => '在正常組件你必須輸入主題和內容',
    36 => '在版面組件你必須輸入內容',
    37 => '不適當的 PHP 組件函數名',
    38 => '為防止執行任性的編碼，PHP 組件函數名必須以 "phpblock_" 作開始 (e.g. phpblock_getweather)。',
    39 => '放在那邊',
    40 => '左',
    41 => '右',
    42 => '在 Geeklog 預設組件你必須輸入組件次序和安全水平',
    43 => '只可是首頁',
    44 => '存取被拒絕',
    45 => "企圖存取不允許的組件已被記錄。請<a href=\"{$_CONF['site_admin_url']}/block.php\">反回組件管理員晝面</a>。",
    46 => '新組件',
    47 => '管理員首頁',
    48 => '組件名',
    49 => ' (不可有空隔和必須是唯一的)',
    50 => '求助文件的 URL',
    51 => '包括 http://',
    52 => '如果這裡留白，組件的求助文件圖示將不被顯示',
    53 => '使有效',
    54 => '儲存',
    55 => '取消',
    56 => '刪除',
    57 => 'Move Block Down',
    58 => 'Move Block Up',
    59 => 'Move block to the right side',
    60 => 'Move block to the left side'
);

###############################################################################
# admin/event.php

$LANG22 = array(
    1 => '事件編輯器',
    2 => 'Error',
    3 => '事件標題',
    4 => '事件 URL',
    5 => '事件開始日期',
    6 => '事件結束日期',
    7 => '事件地點',
    8 => '事件描述',
    9 => '(包括 http://)',
    10 => '你必須提供日期或時間、描述和事件地點！',
    11 => '事件管理員',
    12 => '點擊下面的事件可修改或刪除它，點擊上面的新事件可創造一個新的。',
    13 => '事件標題',
    14 => '開始日期',
    15 => '結束日期',
    16 => '存取被拒絕',
    17 => "企圖存取不允許的事件已被記錄。請<a href=\"{$_CONF['site_admin_url']}/event.php\">反回事件管理員晝面</a>。",
    18 => '新事件',
    19 => '管理員首頁',
    20 => '儲存',
    21 => '取消',
    22 => '刪除',
    23 => 'Bad start date.',
    24 => 'Bad end date.',
    25 => 'End date is before start date.'
);

###############################################################################
# admin/link.php

$LANG23 = array(
    1 => '連結編輯器',
    2 => '',
    3 => '連結標題',
    4 => '連結 URL',
    5 => '類別',
    6 => '(包括 http://)',
    7 => '其他',
    8 => '連結被擊次數',
    9 => '連結描述',
    10 => '你需要提供連結標題、 URL 和描述！',
    11 => '連結管理員',
    12 => '點擊下面的連結可修改或刪除它，點擊上面的新連結可創造一個新的。',
    13 => '連結標題',
    14 => '連結類別',
    15 => '連結 URL',
    16 => '存取被拒絕',
    17 => "企圖存取不允許的連結已被記錄。請<a href=\"{$_CONF['site_admin_url']}/link.php\">反回連結管理員晝面</a>。",
    18 => '新連結',
    19 => '管理員首頁',
    20 => '如果是其他，請指定',
    21 => '儲存',
    22 => '取消',
    23 => '刪除'
);

###############################################################################
# admin/story.php

$LANG24 = array(
    1 => '上一個故事',
    2 => '下一個故事',
    3 => '模式',
    4 => '發表模式',
    5 => '故事編輯器',
    6 => '沒有故事',
    7 => '作者',
    8 => '儲存',
    9 => '預覽',
    10 => '取消',
    11 => '刪除',
    12 => 'ID',
    13 => '標題',
    14 => '主題',
    15 => '日期',
    16 => '故事簡介',
    17 => '故事內容',
    18 => '點擊次數',
    19 => '意見',
    20 => '',
    21 => '',
    22 => '故事清單',
    23 => '點擊下面的故事編號可修改或刪除它，點擊下面的故事標題可觀看它，點擊上面的新故事可創造一個新的。',
    24 => 'The ID you chose for this story is already in use. Please use another ID.',
    25 => '',
    26 => '故事預覽',
    27 => '',
    28 => '',
    29 => '',
    30 => 'File Upload Errors',
    31 => '你需要提供作者、標題和故事簡介！',
    32 => '頭條的',
    33 => '只可有一個頭條故事',
    34 => '草稿',
    35 => '是',
    36 => '否',
    37 => '更多來自於',
    38 => '更多發表於',
    39 => '電郵',
    40 => '存取被拒絕',
    41 => "企圖存取不允許的故事已被記錄。你可以以唯讀模式觀看下面文章。看完後請<a href=\"{$_CONF['site_admin_url']}/story.php\">反回故事管理員晝面</a>。",
    42 => "企圖存取不允許的故事已被記錄。請<a href=\"{$_CONF['site_admin_url']}/story.php\">反回故事管理員晝面</a>。",
    43 => '新故事',
    44 => '管理員首頁',
    45 => '存取權',
    46 => '<b>注意︰</b>如果你把日期改成將來，在那個日期前這篇文章將不會被發表。並且 意味著這篇故事不會包括在你的 RDF 標題內，在搜尋和統計頁中會被忽略。',
    47 => '圖像',
    48 => 'image',
    49 => 'right',
    50 => 'left',
    51 => '請用特別格式的文字([imageX]、[imageX_right] 或 [imageX_left])來插入圖像， X 是你附加圖像的編號。注意︰你只可使用你附加的圖像否則你將無法儲存你的故事。<BR><P><B>預覽</B>︰最佳預覽故事的方法是把故事儲存成草稿而不是直擊預覽按鈕。只有沒有附加圖像時才用預覽按鈕。',
    52 => '刪除',
    53 => '沒有被使用。儲存前，你必須把這個圖像包含在故事簡介或故事內容中。',
    54 => '附加圖像未被使用',
    55 => '儲存你的故事時發生以下錯誤。請改正這些錯誤再儲存',
    56 => '顯示主題圖示',
    57 => 'View unscaled image',
    58 => 'Story Management',
    59 => 'Option',
    60 => 'Enabled',
    61 => 'Auto Archive',
    62 => 'Auto Delete'
);

###############################################################################
# admin/poll.php

$LANG25 = array(
    1 => '模式',
    2 => 'Please enter a question and at least one answer.',
    3 => '投票發起日',
    4 => '投票 %s 被儲存了',
    5 => '編輯投票',
    6 => '投票編號',
    7 => '(不可有空隔)',
    8 => '出現在首頁上',
    9 => '問題',
    10 => '答案 / 投票',
    11 => '取得投票 (%s) 答案時發生錯誤。',
    12 => '取得投票 (%s) 問題時發生錯誤。',
    13 => '新加投票',
    14 => '儲存',
    15 => '取消',
    16 => '刪除',
    17 => 'Please enter a Poll ID',
    18 => '投票清單',
    19 => '點擊下面的投票可修改或刪除它，點擊上面的新投票可創造一個新的。',
    20 => '投票者',
    21 => '存取被拒絕',
    22 => "企圖存取不允許的投票已被記錄。請<a href=\"{$_CONF['site_admin_url']}/poll.php\">反回投票管理員晝面</a>。",
    23 => '新投票',
    24 => '管理員首頁',
    25 => '是',
    26 => '否'
);

###############################################################################
# admin/topic.php

$LANG27 = array(
    1 => '主題編輯器',
    2 => '主題編號',
    3 => '主題名',
    4 => '主題圖像',
    5 => '(不可有空隔)',
    6 => '刪除主題會同時刪除所有有關的故事和組件！',
    7 => '你需要提供主題編號和主題名！',
    8 => '主題管理員',
    9 => '點擊下面的主題可修改或刪除它，點擊上面的新主題可創造一個新的。在括號裡你將發現你的存取級別。',
    10 => '排序次序',
    11 => '故事 / 頁',
    12 => '存取被拒絕',
    13 => "企圖存取不允許的主題已被記錄。請<a href=\"{$_CONF['site_admin_url']}/topic.php\">反回主題管理員晝面</a>.",
    14 => '排序方法',
    15 => '按字母排序',
    16 => '預設是',
    17 => '新主題',
    18 => '管理員首頁',
    19 => '儲存',
    20 => '取消',
    21 => '刪除',
    22 => 'Default',
    23 => 'make this the default topic for new story submissions',
    24 => '(*)',
    25 => 'Archive Topic',
    26 => 'make this the default topic for archived stories. Only one topic allowed.'
);

###############################################################################
# admin/user.php

$LANG28 = array(
    1 => '用戶編輯器',
    2 => '用戶編號',
    3 => '用戶名',
    4 => '全名',
    5 => '密碼',
    6 => '安全級別',
    7 => '電郵地址',
    8 => '首頁',
    9 => '(不可有空隔)',
    10 => '你需要提供用戶名、全名、安全級別和電郵地址。',
    11 => '用戶管理員',
    12 => '點擊下面的用戶可修改或刪除它，點擊上面的新用戶可創造一個新的。在下面的表格中輸入部份的用戶名、電郵地址或全名 (e.g.*son* or *.edu) ，可做簡單的尋找。',
    13 => '安全級別',
    14 => '登記日',
    15 => '新用戶',
    16 => '管理員首頁',
    17 => '改密碼',
    18 => '取消',
    19 => '刪除',
    20 => '儲存',
    21 => '用戶名已經存在',
    22 => '錯誤',
    23 => '大量增加',
    24 => '大量輸入用戶',
    25 => '你可一次過輸入大量的用戶到 Geeklog 。輸入檔案必須是一個用 tab 分隔的文字檔案，欄位的順序是︰全名、用戶名、電郵地址。每一個被輸入的用戶將會收到一個以電子郵件發送的隨機密碼。檔案中每一行是一個用戶。沒遵守這些要求將造成問題，也許需要手動作業，請再三檢查你檔案！',
    26 => '尋找',
    27 => '結果範圍',
    28 => '在這裡打鉤可刪除這張圖片',
    29 => '路徑',
    30 => '輸入',
    31 => '新用戶',
    32 => '處理完成。輸入了 %d 個；%d 個失敗',
    33 => '遞交',
    34 => '錯誤︰你必須指定上載檔案。',
    35 => 'Last Login',
    36 => '(never)'
);

###############################################################################
# admin/moderation.php

$LANG29 = array(
    1 => '批准',
    2 => '刪除',
    3 => '編輯',
    4 => '簡要描述',
    10 => '標題',
    11 => '開始日期',
    12 => 'URL',
    13 => '類別',
    14 => '日期',
    15 => '主題',
    16 => '用戶名',
    17 => '全名',
    18 => '電子郵件',
    34 => '命令和控制',
    35 => '已遞交的故事',
    36 => '已遞交的連結',
    37 => '已遞交的事件',
    38 => '遞交',
    39 => '此時沒有遞交的東西',
    40 => '申請的用戶'
);

###############################################################################
# calendar.php

$LANG30 = array(
    1 => '日',
    2 => '一',
    3 => '二',
    4 => '三',
    5 => '四',
    6 => '五',
    7 => '六',
    8 => '新增事件',
    9 => 'Geeklog 事件',
    10 => '事件給',
    11 => '主日曆',
    12 => '我的日曆',
    13 => '一月',
    14 => '二月',
    15 => '三月',
    16 => '四月',
    17 => '五月',
    18 => '六月',
    19 => '七月',
    20 => '八月',
    21 => '九月',
    22 => '十月',
    23 => '十一月',
    24 => '十二月',
    25 => '回到',
    26 => '整日',
    27 => '星期',
    28 => '個人日曆︰',
    29 => '公眾日曆',
    30 => '刪除事件',
    31 => '新增',
    32 => '事件',
    33 => '星期',
    34 => '時間',
    35 => '迅速增加',
    36 => '遞交',
    37 => '抱歉，本站並不提供個人日曆。',
    38 => '個人事件編輯器',
    39 => '日',
    40 => '周',
    41 => '月'
);

###############################################################################
# admin/mail.php

$LANG31 = array(
    1 => "{$_CONF['site_name']} 郵件程式",
    2 => '寄件人',
    3 => '回復到',
    4 => '主題',
    5 => '內容',
    6 => '收件人︰',
    7 => '所有用戶',
    8 => '管理員',
    9 => '選項',
    10 => 'HTML',
    11 => '迫切的訊息！',
    12 => '發送',
    13 => '重設',
    14 => '忽略用戶設定',
    15 => '錯誤，當發送到︰',
    16 => '訊息已發送到︰',
    17 => "<a href={$_CONF['site_admin_url']}/mail.php>發送其它信件</a>",
    18 => '收件人',
    19 => '注意︰如果你希望發送訊息到本站所有的成員，請在小組選擇欄位中選擇 Logged-in Users group。',
    20 => "已發送 <successcount> 個訊息，有 <failcount> 個不能發送。發送的細節在下面。如不想看細節，你可<a href=\"{$_CONF['site_admin_url']}/mail.php\">發送其它訊息</a> 或 <a href=\"{$_CONF['site_admin_url']}/moderation.php\">反回管理員首頁</a>。",
    21 => '失敗',
    22 => '成功 ',
    23 => '全部成功 ',
    24 => '全部失敗',
    25 => '-- 請選小組 --',
    26 => '請填寫所有表格上的欄位和選擇一個小組。'
);

###############################################################################
# admin/plugins.php

$LANG32 = array(
    1 => 'Installing plugins could possibly cause damage to your Geeklog installation and, possibly, to your system. It is important that you only install plugins downloaded from the <a href="http://www.geeklog.net" target="_blank">Geeklog Homepage</a> as we thoroughly test all plugins submitted to our site on a variety of operating systems. It is important that you understand that the plugin installation process will require the execution of a few filesystem commands which could lead to security problems particularly if you use plugins from third party sites. Even with this warning you are getting, we do not gaurantee the success of any installation nor are we liable for damage caused by installing a Geeklog plugin. In other words, install at your own risk.  For the wary, directions on how to manually install a plugin is included with each plugin package.',
    2 => 'Plug-in 安裝聲明',
    3 => 'Plug-in 安裝表格',
    4 => 'Plug-in 檔案',
    5 => 'Plug-in 清單',
    6 => '警告︰Plug-in 已經被安裝過！',
    7 => '你想安裝的 plug-in 已經存在，請先把它刪除再安裝。',
    8 => 'Plugin 不能通過兼容性校驗。',
    9 => '這 plugin 要求一個更新版本的 Geeklog. 你可以升級你的<a href="http://www.geeklog.net">Geeklog</a>或是另找一個適合的版本。',
    10 => '<br><b>沒有安裝的 plugin 。</b><br><br>',
    11 => '點擊下面 plugin 的編號可修改或刪除它，點擊 plugin 的名字會帶你到那 plugin 的網站。要安裝或升級 plugin 請咨詢它是文件。',
    12 => 'plugineditor() 找不到 plugin 名',
    13 => 'Plugin 編輯器',
    14 => '新 Plug-in',
    15 => '管理員首頁',
    16 => 'Plug-in 名字',
    17 => 'Plug-in 版本',
    18 => 'Geeklog 版本',
    19 => '使有效',
    20 => '是',
    21 => '否',
    22 => '安裝',
    23 => '儲存',
    24 => '取消',
    25 => '刪除',
    26 => 'Plug-in 名字',
    27 => 'Plug-in 首頁',
    28 => 'Plug-in 版本',
    29 => 'Geeklog 版本',
    30 => '刪除 Plug-in？',
    31 => '你肯定要刪除這個 Plug-in 嗎？這麼會刪除所有有關這 Plug-in 的文件、資料和資料結構。如果你肯定的，請再點擊下面表格中的刪除鈕。',
    32 => '<p><b>Error AutoLink tag not correct format</b></p>',
    33 => 'Code Version',
    34 => 'Update'
);

###############################################################################
# admin/syndication.php

$LANG33 = array(
    1 => 'create feed',
    2 => 'save',
    3 => 'delete',
    4 => 'cancel',
    10 => 'Content Syndication',
    11 => 'New Feed',
    12 => 'Admin Home',
    13 => 'To modify or delete a feed, click on the feed\'s title below. To create a new feed, click on New Feed above.',
    14 => 'Title',
    15 => 'Type',
    16 => 'Filename',
    17 => 'Format',
    18 => 'last updated',
    19 => 'Enabled',
    20 => 'Yes',
    21 => 'No',
    22 => '<i>(no feeds)</i>',
    23 => 'all Stories',
    24 => 'Feed Editor',
    25 => 'Feed Title',
    26 => 'Limit',
    27 => 'Length of entries',
    28 => '(0 = no text, 1 = full text, other = limit to that number of chars.)',
    29 => 'Description',
    30 => 'Last Update',
    31 => 'Character Set',
    32 => 'Language',
    33 => 'Contents',
    34 => 'Entries',
    35 => 'Hours',
    36 => 'Select type of feed',
    37 => 'You have at least one plugin installed that supports content syndication. Below you will need to select whether you want to create a Geeklog feed or a feed from one of the plugins.',
    38 => 'Error: Missing Fields',
    39 => 'Please fill in the Feed Title, Description, and Filename.',
    40 => 'Please enter a  number of entries or number of hours.',
    41 => 'Links',
    42 => 'Events'
);

###############################################################################
# confirmation and error messages

$MESSAGE = array(
    1 => "我們已電郵了你的密碼到你的電郵信箱，請跟隨郵件中的指示。多謝使用 {$_CONF['site_name']}",
    2 => "多謝遞交你的故事到 {$_CONF['site_name']} 。只要經過我們員工的核對，你的故事將出現在我們的綱頁上。",
    3 => "多謝遞交連結到 {$_CONF['site_name']} 。只要經過我們員工的核對，你的連結將出現在我們的綱頁上。",
    4 => "多謝遞交事件到 {$_CONF['site_name']} 。只要經過我們員工的核對，你的事件將出現在我們的<a href={$_CONF['site_url']}/calendar.php>日曆</a>上。",
    5 => '你的帳戶資訊已被儲存了。',
    6 => '你的畫面設定已被儲存了。',
    7 => '你的意見設定已被儲存了。',
    8 => '你已登出。',
    9 => '你的故事已被儲存了。',
    10 => '你的故事已被刪除了。',
    11 => '你的組件已被儲存了。',
    12 => '你的組件已被刪除了。',
    13 => '你的主題已被儲存了。',
    14 => '你的主題和所有相關的故事已被刪除了。',
    15 => '你的連結已被儲存了。',
    16 => '你的連結已被刪除了。',
    17 => '你的事件已被儲存了。',
    18 => '你的事件已被刪除了。',
    19 => '你的投票已被儲存了。',
    20 => '你的投票已被刪除了。',
    21 => '新用戶已被儲存了。',
    22 => '用戶已被刪除了。',
    23 => '增加事件到你的日曆時發生錯誤，缺少了事件編號。',
    24 => '事件已增加到你的日曆中。',
    25 => '你要登入才可開啟你的個人日曆。',
    26 => '事件已從你的日曆中移除。',
    27 => '信息已發送。',
    28 => 'Plug-in 已被儲存了。',
    29 => '抱歉，本站並不提供個人日曆。',
    30 => '存取被拒絕',
    31 => '抱歉，你不能進入故事管理的首頁。請注意你的企圖已被記錄。',
    32 => '抱歉，你不能進入主題管理的首頁。請注意你的企圖已被記錄。',
    33 => '抱歉，你不能進入組件管理的首頁。請注意你的企圖已被記錄。',
    34 => '抱歉，你不能進入連結管理的首頁。請注意你的企圖已被記錄。',
    35 => '抱歉，你不能進入事件管理的首頁。請注意你的企圖已被記錄。',
    36 => '抱歉，你不能進入投票管理的首頁。請注意你的企圖已被記錄。',
    37 => '抱歉，你不能進入用戶管理的首頁。請注意你的企圖已被記錄。',
    38 => '抱歉，你不能進入 Plug-in 管理的首頁。請注意你的企圖已被記錄。',
    39 => '抱歉，你不能進入電郵管理的首頁。請注意你的企圖已被記錄。',
    40 => '系統訊息',
    41 => '抱歉，你不能進入字詞替換的首頁。請注意你的企圖已被記錄。',
    42 => '你的字詞已被儲存了。',
    43 => '你的字詞已被刪除了。',
    44 => 'Plug-in 已被安裝了。',
    45 => 'Plug-in 已被刪除了。',
    46 => '抱歉，你不能進入資料庫備份程式。請注意你的企圖已被記錄。',
    47 => '這只適用於 *nix 如果你的作業系統是 *nix，那麼你的緩沖器已被清除了。如果你的作業系統是 Windows，你要手動尋找文件命名為 adodb _ *.php 的檔案並把它們除去。',
    48 => "感謝你申請成為 {$_CONF['site_name']} 的會員。只要經過我們員工的核對，我們會把密碼寄到你所登記的電郵中。",
    49 => '你的小組已被儲存了。',
    50 => '小組已被刪除了。',
    51 => 'This username is already in use. Please choose another one.',
    52 => 'The email address provided does not appear to be a valid email address.',
    53 => 'Your new password has been accepted. Please use your new password below to log in now.',
    54 => 'Your request for a new password has expired. Please try again below.',
    55 => 'An email has been sent to you and should arrive momentarily. Please follow the directions in the message to set a new password for your account.',
    56 => 'The email address provided is already in use for another account.',
    57 => 'Your account has been successfully deleted.',
    58 => 'Your feed has been successfully saved.',
    59 => 'The feed has been successfully deleted.',
    60 => 'The plugin was successfully updated',
    61 => 'Plugin %s: Unknown message placeholder'
);

###############################################################################

$LANG_ACCESS = array(
    'access' => '存取',
    'ownerroot' => '所有者/Root',
    'group' => '小組',
    'readonly' => '唯讀',
    'accessrights' => '存取權',
    'owner' => '所有者',
    'grantgrouplabel' => '給予之上小組編輯權利',
    'permmsg' => '注意︰會員是指所有註冊和登入的用戶；而匿名是指所有非註冊的瀏覽者或沒有登入的用戶。',
    'securitygroups' => '安全小組',
    'editrootmsg' => "即使你是用戶管理員；但你不能編輯 root 用戶。你能編輯所有的用戶除了 root 用戶。請注意所有企圖非法地編輯 root 用戶的動作已被記錄。請回到<a href=\"{$_CONF['site_admin_url']}/user.php\">用戶管理頁</a>去。",
    'securitygroupsmsg' => '選擇這位用戶屬於的小組。',
    'groupeditor' => '小組編輯器',
    'description' => '描述',
    'name' => '名字',
    'rights' => '權限',
    'missingfields' => '缺少欄位',
    'missingfieldsmsg' => '你必須提供小組的名字和描述',
    'groupmanager' => '小組管理員',
    'newgroupmsg' => '點擊下面的小組可修改或刪除它，點擊上面的新小組可創造一個新的。請注意所核心小組不能被刪除。',
    'groupname' => '組名',
    'coregroup' => '核心小組',
    'yes' => '是',
    'no' => '否',
    'corerightsdescr' => "這個小組的權限不能被編輯，因為這是個 {$_CONF['site_name']} 的核心小組。以下是這小組的權限清單(唯讀的)。",
    'groupmsg' => '安全小組在這綱站是有等級制度的。當增加這個小組到另一組別，這個小組將得到那組別的權限。請儘可能小組加下列的組別去。如果這小組需要特別的權限，你可以在以下的"權利"區域中挑選。要把小組加到組別去，你只需要在組別旁邊的挑選盒打鉤。',
    'coregroupmsg' => "因為這是個 {$_CONF['site_name']} 的核心小組，這個小組的權限不能被編輯。以下是這小組的組別清單(唯讀的)。",
    'rightsdescr' => '小組的權限可以是來自於小組本身或是這小組所屬的組別。以下的權限中如沒有檢驗盒即代表這權限是來自於小組所屬的組別；如有檢驗盒即代表你可以直接把權限給予這小組。',
    'lock' => '鎖住',
    'members' => '成員',
    'anonymous' => '匿名',
    'permissions' => '權限',
    'permissionskey' => 'R = 唯讀， E = 編輯，有編輯權即有唯讀權',
    'edit' => '編輯',
    'none' => '沒有',
    'accessdenied' => '存取被拒絕',
    'storydenialmsg' => "因未被批准，你不可以觀看這個故事。這是可能是因為你並不是 {$_CONF['site_name']} 的會員。請<a href=users.php?mode=new>成為會員</a>。",
    'eventdenialmsg' => "因未被批准，你不可以觀看這個事件。這是可能是因為你並不是 {$_CONF['site_name']} 的會員。請<a href=users.php?mode=new>成為會員</a>。",
    'nogroupsforcoregroup' => '這小組不屬於任何其它的小組',
    'grouphasnorights' => ' 這小組沒有管理權。',
    'newgroup' => '新小組',
    'adminhome' => '管理員首頁',
    'save' => '儲存',
    'cancel' => '取消',
    'delete' => '刪除',
    'canteditroot' => '因為你不屬于 Root 小組，所以你對 Root 小組的修改被拒絕了。如有問題請與系統管理員聯繫。',
    'listusers' => 'List Users',
    'listthem' => 'list',
    'usersingroup' => 'Users in group "%s"',
    'usergroupadmin' => 'User Group Administration',
    'add' => 'Add',
    'remove' => 'Remove',
    'availmembers' => 'Available Members',
    'groupmembers' => 'Group Members',
    'canteditgroup' => 'To edit this group, you have to be a member of the group. Please contact the system administrator if you feel this is an error.',
    'cantlistgroup' => 'To see the members of this group, you have to be a member yourself. Please contact the system administrator if you feel this is an error.'
);

###############################################################################
# admin/database.php

$LANG_DB_BACKUP = array(
    'last_ten_backups' => '最後十個備份',
    'do_backup' => '做備份',
    'backup_successful' => '資料庫備份完成。',
    'no_backups' => '沒有備份',
    'db_explanation' => '要做新的 Geeklog 備份，點擊以下的按鈕',
    'not_found' => "不正確的路徑或 mysqldump 程式不可執行。<br>檢查<strong>\$_DB_mysqldump_path</strong>定義在 config.php.<br>變數現在被定義為︰<var>{$_DB_mysqldump_path}</var>",
    'zero_size' => '備份失敗︰檔案是 0 大小',
    'path_not_found' => "{$_CONF['backup_path']} 不存在或不是目錄",
    'no_access' => "錯誤︰目錄 {$_CONF['backup_path']} ，不能存取。",
    'backup_file' => '備份檔案',
    'size' => '大小',
    'bytes' => '位元組',
    'total_number' => 'Total number of backups: %d'
);

###############################################################################

$LANG_BUTTONS = array(
    1 => '首頁',
    2 => '聯絡',
    3 => '出版',
    4 => '連結',
    5 => '投票',
    6 => '日曆',
    7 => '本站統計數據',
    8 => '個人化',
    9 => '搜尋',
    10 => '進階搜尋'
);

###############################################################################
# 404.php

$LANG_404 = array(
    1 => '404 錯誤',
    2 => '咦，我到處都看過了但找不到<b>%s</b>.',
    3 => "<p>很抱歉，但你要求的文件不存在。請檢查<a href=\"{$_CONF['site_url']}\">主頁</a>或<a href=\"{$_CONF['site_url']}/search.php\">搜尋頁</a>看看能發現什麼。"
);

###############################################################################
# login form

$LANG_LOGIN = array(
    1 => '要求登入',
    2 => '抱歉，要求登入才可存取這個區域。',
    3 => '登入',
    4 => '新用戶'
);

###############################################################################
# pdfgenerator.php

$LANG_PDF = array(
    1 => 'The PDF feature has been disabled',
    2 => 'The document provided was not rendered. The document was received but could not be processed.  Please make sure to submit only html formatted documents that have been written to the xHTML standard. Please note that overly complex html documents may not render correctly or at all.The document resulting from your attempt was 0 bytes in length, and has been deleted. If you\'re sure that your document should render fine, please re-submit it.',
    3 => 'Unknown error during PDF generation',
    4 => "No page data was given or you want to use the ad-hoc PDF generation tool below.  If you think you are getting this page\n          in error then please contact the system administrator.  Otherwise, you may use the form below to generate PDF's in an ad-hoc fashion.",
    5 => 'Loading your document.',
    6 => 'Please wait while your document is loaded.',
    7 => 'You may right click the button below and choose \'save target...\' or \'save link location...\' to save a copy of your document.',
    8 => "The path given in the configuration file to the HTMLDoc binary is invalid or this system cannot execute it.  Please contact the site administrator if this problem\n          persists.",
    9 => 'PDF Generator',
    10 => "This is the Ad-hoc PDF Generation tool. It will attempt to convert any URL you give into a PDF.  Please note that some web pages will not render properly with this feature.  This\n           is a limitation of the HTMLDoc PDF generation tool and such errors should not be reported to the administrators of this site",
    11 => 'URL',
    12 => 'Generate PDF!',
    13 => 'The PHP configuration on this server does not allow URLs to be used with the fopen() command.  The system administrator must edit the php.ini file and set allow_url_fopen to On',
    14 => 'The PDF you requested either does not exist or you tried to illegally access a file.'
);

?>
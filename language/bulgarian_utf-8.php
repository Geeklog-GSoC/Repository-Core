<?php

###############################################################################
# english.php
# This is the english language page for GeekLog!
# Special thanks to Mischa Polivanov for his work on this project
#
# Copyright (C) 2000 Jason Whittenburg
# jwhitten@securitygeeks.com
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

$LANG_CHARSET = 'UTF-8';

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
    1 => 'Изпратено от:',
    2 => 'прочети повече',
    3 => 'брой коментари',
    4 => 'Редактирай',
    5 => 'Гласувай',
    6 => 'Резултати',
    7 => 'Резултати от гласуването',
    8 => 'гласа',
    9 => 'Админ функции:',
    10 => 'Админ панел',
    11 => 'Текстове',
    12 => 'Блокове',
    13 => 'Теми',
    14 => 'Връзки',
    15 => 'Събития',
    16 => 'Гласувания',
    17 => 'Потребители',
    18 => 'SQL Query',
    19 => 'Изход',
    20 => 'Потребителска информация:',
    21 => 'Име',
    22 => 'User ID',
    23 => 'Ниво на сигурност',
    24 => 'Анонимен',
    25 => 'Отговори',
    26 => 'Екипът на Lameland не носи отговорност за коментарите, побликувани от посетителите.',
    27 => 'Най-нова публикация',
    28 => 'Изтрий',
    29 => 'Няма коментари.',
    30 => 'По-стари текстове',
    31 => 'HTML позволен:',
    32 => 'Грешка, невалидно име',
    33 => 'Грешка, log файлът не е достъпен за писане',
    34 => 'Грешка',
    35 => 'Изход',
    36 => 'да',
    37 => 'Няма потребителски текстове',
    38 => 'Content Syndication',
    39 => 'Обнови',
    40 => 'You have <tt>register_globals = Off</tt> in your <tt>php.ini</tt>. However, Geeklog requires <tt>register_globals</tt> to be <strong>on</strong>. Before you continue, please set it to <strong>on</strong> and restart your web server.',
    41 => 'Анонимни потребители',
    42 => 'Автор:',
    43 => 'Отговор',
    44 => 'Parent',
    45 => 'MySQL Error Number',
    46 => 'MySQL Error Message',
    47 => 'Потребителски функции',
    48 => 'Профил',
    49 => 'Настройки',
    50 => 'Error with SQL statement',
    51 => 'help',
    52 => 'Нов',
    53 => 'Admin Home',
    54 => 'Файлът не може да бъде отворен.',
    55 => 'Грешка при',
    56 => 'Гласувай',
    57 => 'Парола',
    58 => 'Вход',
    59 => "Все още нямате регистрация?  Регистрирайте се като <a href=\"{$_CONF['site_url']}/users.php?mode=new\">нов потребител</a>",
    60 => 'Коментар',
    61 => 'Регистрация',
    62 => 'думи',
    63 => 'Настройка на коментарите',
    64 => 'Изпрати на приятел',
    65 => 'Принтирай',
    66 => 'Моят календар',
    67 => 'Добре дошли в ',
    68 => 'home',
    69 => 'contact',
    70 => 'търсене',
    71 => 'изпрати публикация',
    72 => 'връзки',
    73 => 'стари анкети',
    74 => 'календар',
    75 => 'търсене',
    76 => 'статистика',
    77 => 'Plugins',
    78 => 'Предстоящи събития',
    79 => 'Какво ново',
    80 => 'публикации за последните',
    81 => 'публикации през последните',
    82 => 'часа',
    83 => 'КОМЕНТАРИ',
    84 => 'ВРЪЗКИ',
    85 => 'през последните 48 часа',
    86 => 'Няма нови коментари',
    87 => 'през последните две седмици',
    88 => 'Няма нови връзки',
    89 => 'Няма нови събития',
    90 => 'Home',
    91 => 'Страницата е генерирана за',
    92 => 'секунди',
    93 => 'Copyright ©2000 - 2003',
    94 => 'Всички права запазени.',
    95 => 'Powered By',
    96 => 'Групи',
    97 => 'Списък с думи',
    98 => 'Plug-ins',
    99 => 'ПУБЛИКАЦИИ',
    100 => 'Няма нови публикации',
    101 => 'Събития по сайта',
    102 => 'Събития по сайта',
    103 => 'Back-up на базата данни',
    104 => 'от',
    105 => 'Mail Users',
    106 => 'Прегледи',
    107 => 'GL Version Test',
    108 => 'Clear cache',
    109 => 'Report abuse',
    110 => 'Report this post to the site admin',
    111 => 'View PDF Version',
    112 => 'Registered Users',
    113 => 'Documentation',
    114 => 'TRACKBACKS',
    115 => 'No new trackback comments',
    116 => 'Trackback',
    117 => 'Directory',
    118 => 'Please continue reading on the next page:',
    119 => "Lost your <a href=\"{$_CONF['site_url']}/users.php?mode=getpassword\">password</a>?",
    120 => 'Permanent link to this comment',
    121 => 'Comments (%d)',
    122 => 'Trackbacks (%d)',
    123 => 'All HTML is allowed',
    124 => 'Click to delete all checked items',
    125 => 'Are you sure you want to Delete all checked items?',
    126 => 'Select or de-select all items'
);

###############################################################################
# comment.php

$LANG03 = array(
    1 => 'Публикувай коментар',
    2 => 'Post Mode',
    3 => 'Изход',
    4 => 'Създай акаунт',
    5 => 'Потребителско име',
    6 => 'За да публикувате коментар, е необходимо да се регистирани.Ако все още нямата акаунт, можете да създадете такъв като попълните празните полета отдолу.',
    7 => 'Последният ви коментар беше публикуван преди ',
    8 => " секунди.   Този сайт изисква да са изтекли най-малко\n{$_CONF['commentspeedlimit']} секунди, преди да публикувате нов коментар",
    9 => 'Коментар',
    10 => 'Send Report',
    11 => 'Изпрати коментар',
    12 => 'Моля попълнете полетата Title и Comment, за да изпратите вашият коментар успешно.',
    13 => 'Информация',
    14 => 'Преглед',
    15 => 'Report this post',
    16 => 'Заглавие',
    17 => 'Грешка',
    18 => 'Важно',
    19 => 'Моля не се отклонявайте от темата.',
    20 => 'Отговаряйте на вече публикувани теми, вслучай, че вашата публикация съвпада по съдържание с тях.',
    21 => 'Преди да постнете ваше собствено съобщение, прочетете тези, които вече са побликувани.',
    22 => 'Изберете кратка и точна тема, от която да става ясно за какво иде реч във вашето съобщение.',
    23 => 'Вашият e-mail адрес няма да бъде публикуван.',
    24 => 'Анонимен потребител',
    25 => 'Are you sure you want to report this post to the site admin?',
    26 => '%s reported the following abusive comment post:',
    27 => 'Abuse report'
);

###############################################################################
# users.php

$LANG04 = array(
    1 => 'User Profile for',
    2 => 'Потребителско Име',
    3 => 'Име',
    4 => 'Парола',
    5 => 'Email',
    6 => 'Сайт',
    7 => '(Авто)Биография',
    8 => 'PGP Key',
    9 => 'Запази',
    10 => 'Последните 10 коментара за потребителя',
    11 => 'Няма коментари',
    12 => 'User Preferences for',
    13 => 'Нощни известния по e-mail',
    14 => 'Тази парола е генерирана случайно. Желателно е да я смените незабавно. За да направите това, се логнете и след това влезте в \'Настройки\'.',
    15 => "Вашата {$_CONF['site_name']} регистрация бе създадена успешно. За да я използвате, трябва да се логнете, използвайки информацията по-долу.",
    16 => 'Инфо за вашия акаунт',
    17 => 'Такъв акаунт не съществува !',
    18 => 'Посоченият от вас e-mail не е валиден',
    19 => 'Такова име и/или регистрация вече съществуват !',
    20 => 'Посоченият от вас e-mail не е валиден',
    21 => 'Грешка',
    22 => "Register with {$_CONF['site_name']}!",
    23 => "Регистрацията в {$_CONF['site_name']} ви дава правото да публикувате коментари и да изпращате логове/истории (ламерски, разбира се ;))",
    24 => 'Паролата ви ще бъде изпратена на посочения от вас e-mail адрес.',
    25 => 'Забравена парола ?',
    26 => 'Напишете вашето потребителско име <em>и</em> email адрес, с които сте се регистрирали. Инструкции как да смените паролата си ще откриете на вашия e-mail.',
    27 => 'Регистрирайте се сега !',
    28 => 'Изпрати парола',
    29 => 'logged out from',
    30 => 'логнати сте от',
    31 => 'Функцията, която избрахте изисква да сте логнати',
    32 => 'Подпис',
    33 => 'Never publicly displayed',
    34 => 'Това е вашето истинско име',
    35 => 'Нашишете парола, за да я промените',
    36 => 'Започва с http://',
    37 => 'Приложено към вашите коментари',
    38 => 'Това може да бъде прочетено от всеки !',
    39 => 'Your public PGP key to share',
    40 => 'Няма topic икони',
    41 => 'Възможности за модериране',
    42 => 'Формат на датата',
    43 => 'Максимален брой публикации',
    44 => 'No boxes',
    45 => 'Display опции за',
    46 => 'Игнориране на раздели/автори за',
    47 => 'News box Configuration for',
    48 => 'Теми',
    49 => 'Няма иконки в публикациите',
    50 => 'Не отмятайте, ако нямате интерес',
    51 => 'Само новини',
    52 => 'По подразбиране е',
    53 => 'Получавайте по e-mail дневните публикации всяка вечер',
    54 => 'Отбележете нещата и темите, които нямате желание да разгледате.',
    55 => 'Ако оставите всичко това неотбелязано се подразбира, че сте избрали стандартната селекция. Ако желаете индивидуални настройки, имайте предвид, че стандартната селекция става невалидна. Стандартните настойки са написани с удебелен шрифт (bold).',
    56 => 'Автори',
    57 => 'Display Mode',
    58 => 'Подредба',
    59 => 'Лимит на коментарите',
    60 => 'По какъв начин желаете да виждате коментарите си?',
    61 => 'Първо най-новите или най-старите ?',
    62 => 'По подразбиране е 100',
    63 => "Вашата парола беше изпратена на зададения от вас e-mail адрес. Моля следвайте инструкциите в съобщението. Благодаря че използвахте {$_CONF['site_name']}",
    64 => 'Настройки на коментарите за',
    65 => 'Опитайте да влезете отново',
    66 => "Вероятно сте сгрешили във въвеждането на вашето потребителско име и/или парола. Моля опитайте отново ! <a href=\"{$_CONF['site_url']}/users.php?mode=new\">Нов потребител</a>",
    67 => 'Member Since',
    68 => 'Запомни ме за',
    69 => 'Колко дълго след като излезете, желаете да бъдете запомнени от сървъра ?',
    70 => "Промени съдържанието и външният вид на {$_CONF['site_name']}",
    71 => "Една от най-хубавите благинки на {$_CONF['site_name']} е това, че можете да правите каквото си щете с външния вид на сайта. За целта трябва да се <a href=\"{$_CONF['site_url']}/users.php?mode=new\">регистрирате</a> в {$_CONF['site_name']}.  Имате регистрация ? Тогава се логнете чрез log-in формата отляво !",
    72 => 'Тема',
    73 => 'Език',
    74 => 'Променете изгледа на сайта !',
    75 => 'Emailed Topics for',
    76 => 'ако изберете тема от списъка ще получите всички постове, побликувани в нея за всички дни досега. Изберете темите, от които сте заинтересувани !',
    77 => 'Снимка',
    78 => 'Добавете снимка !',
    79 => 'Изберете тук, за да изтриете картинката.',
    80 => 'Вход',
    81 => 'Изпрати email',
    82 => 'Последните 10 публикации за потребителя',
    83 => 'Статистика за постовете за потребителя',
    84 => 'Общ брой на материалите:',
    85 => 'Общ брой на коментарите:',
    86 => 'Намери всички постове на',
    87 => 'Вашето потребителско име',
    88 => "Някой (вероятно вие) е пожелал да смени паролата на вашия акаунт \"%s\" на {$_CONF['site_name']}, <{$_CONF['site_url']}>.\n\nАко искате да промените вашата парола, моля кликнете на следния линк link:\n\n",
    89 => "Ако НЕ желаете промяна, ингорирайте това съобщение и вашата парола ще остане непроменена.\n\n",
    90 => 'Можете да въведете новата парола за вашия акаунт в полето по-долу.  Вашата стара парола ще е валидна докато не изпратите тази форма.',
    91 => 'Сложи нова парола',
    92 => 'Напиши новата си парола',
    93 => 'За последен път пожелахте да смените паролата си преди %d секунди. Необходими са минамално %d секунду между две промени.',
    94 => 'Изтриване на акаунт"%s"',
    95 => 'Изберете  бутона "изтриване на акаунт" , за да премахнтете вашата регистрацията си от нашата база с данни. Моля обърнете внимание, че всички текстове и коментари, изпратени от този акаунт <strong>няма</strong> да бъдат изтрити и ще бъдат публикувани като изпратени от анонимен посетител.',
    96 => 'изтриване на акаунт',
    97 => 'Потвърдете изтриването на акаунта си',
    98 => 'Сигурни ли сте, че желаете да изтриете вашата регистрация? Всучай че направите това, няма да можете да се логвате в този сайт отново (освен ако не си създадете друг акаунт). Ако сте сигурни, изберете бутона "изтриване на акаунт" по-горе.',
    99 => 'Privacy опции за',
    100 => 'Email from Admin',
    101 => 'Allow email from Site Admins',
    102 => 'Email от потребители',
    103 => 'Позволи email от други потребители',
    104 => 'Показвай потребителското ми име когато съм онлайн',
    105 => 'Показвай потребителското ми име в "Кой е онлайн"',
    106 => 'Location',
    107 => 'Shown in your public profile',
    108 => 'Confirm new password',
    109 => 'Enter the New password again here',
    110 => 'Current Password',
    111 => 'Please enter your Current password',
    112 => 'You have exceeded the number of allowed login attempts.  Please try again later.',
    113 => 'Login Attempt Failed',
    114 => 'Account Disabled',
    115 => 'Your account has been disabled, you may not login. Please contact an Administrator.',
    116 => 'Account Awaiting Activation',
    117 => 'Your account is currently awaiting activation by an administrator. You will not be able to login until your account has been approved.',
    118 => "Your {$_CONF['site_name']} account has now been activated by an administrator. You may now login to the site at the url below using your username (<username>) and password as previously emailed to you.",
    119 => 'If you have forgotten your password, you may request a new one at this url:',
    120 => 'Account Activated',
    121 => 'Service',
    122 => 'Sorry, new user registration is disabled',
    123 => "Are you a <a href=\"{$_CONF['site_url']}/users.php?mode=new\">new user</a>?",
    124 => 'Confirm Email',
    125 => 'You have to enter the same email address in both fields!',
    126 => 'Please repeat for confirmation',
    127 => 'To change any of these settings, you will have to enter your current password.',
    128 => 'Your Name',
    129 => 'Password &amp; Email',
    130 => 'About You',
    131 => 'Daily Digest Options',
    132 => 'Daily Digest Feature',
    133 => 'Comment Display',
    134 => 'Comment Options',
    135 => '<li>Default mode for how comments will be displayed</li><li>Default order to display comments</li><li>Set maximum number of comments to show - default is 100</li>',
    136 => 'Exclude Topics and Authors',
    137 => 'Filter Story Content',
    138 => 'Misc Settings',
    139 => 'Layout and Language',
    140 => '<li>No Topic Icons if checked will not display the story topic icons</li><li>No boxes if checked will only show the Admin Menu, User Menu and Topics<li>Set the maximum number of stories to show per page</li><li>Set your theme and perferred date format</li>',
    141 => 'Privacy Settings',
    142 => 'The default setting is to allow users & admins to email fellow site members and show your status as online. Un-check these options to protect your privacy.',
    143 => 'Filter Block Content',
    144 => 'Show & hide boxes',
    145 => 'Your Public Profile',
    146 => 'Password and email',
    147 => 'Edit your account password, email and autologin feature. You will need to enter the same password or email address twice as a confirmation.',
    148 => 'User Information',
    149 => 'Modify your user information that will be shown to other users.<li>The signature will be added to any comments or forum posts you made</li><li>The BIO is a brief summary of yourself to share</li><li>Share your PGP Key</li>',
    150 => 'Warning: Javascript recommended for enhanced functionality',
    151 => 'Preview',
    152 => 'Username & Password',
    153 => 'Layout & Language',
    154 => 'Content',
    155 => 'Privacy',
    156 => 'Delete Account'
);

###############################################################################
# index.php

$LANG05 = array(
    1 => 'Няма изпратени новини',
    2 => 'Няма изпратени новини.  Може би няма никакви новини в тази секция или сте забранили показването на такъв тип новини от личните ви настройки на акаунта.',
    3 => ' за тема %s',
    4 => 'Важно',
    5 => 'Следваща страница',
    6 => 'Предишна страница',
    7 => 'First',
    8 => 'Last'
);

###############################################################################
# profiles.php

$LANG08 = array(
    1 => 'Получи се грешка при изпращането на вашето съобщение. Моля опитайте отново.',
    2 => 'Съобщението бе изпратено успешно.',
    3 => 'Моля уверете се, че използвате валиден e-mail адрес в Reply формата.',
    4 => 'Please fill in the Your Name, Reply To, Subject and Message fields',
    5 => 'Грешка: няма такъв потребител.',
    6 => 'Грешка.',
    7 => 'Профил за',
    8 => 'Име',
    9 => 'Сайт',
    10 => 'Изпрати e-mail до',
    11 => 'Вашето име:',
    12 => 'Отговори на:',
    13 => 'Тема:',
    14 => 'Съобщение:',
    15 => 'HTML-ът няма да бъде преведен.',
    16 => 'Изпрати съобщение',
    17 => 'Изпрати на приятел',
    18 => 'До име',
    19 => 'До e-mail адрес',
    20 => 'От име',
    21 => 'От Email адрес',
    22 => 'Изисква се попълването на всички полета',
    23 => "Този e-mail е изпратен за вас от %s at %s заради породеният интерес от публикацията ви в {$_CONF['site_url']}.  Това не е спам и дадения e-mail не е запазен в списък за по-нататъшна употреба.",
    24 => 'Comment on this story at',
    25 => 'Трябва да сте логнати, за да използвате тази функция.',
    26 => 'Тази форма ще ви позволи да изпратите email до избрания от вас потребител.  Всички полета са задължителни.',
    27 => 'Кратко съобщение',
    28 => '%s wrote: ',
    29 => "This is the daily digest from {$_CONF['site_name']} for ",
    30 => ' Daily Newsletter for ',
    31 => 'Title',
    32 => 'Date',
    33 => 'Read the full article at',
    34 => 'End of Message',
    35 => 'Sorry, this user prefers not to receive any emails.'
);

###############################################################################
# search.php

$LANG09 = array(
    1 => 'сложно търсене',
    2 => 'ключови думи',
    3 => 'Тема',
    4 => 'Всички',
    5 => 'Тип',
    6 => 'Публикации',
    7 => 'Коментари',
    8 => 'Автори',
    9 => 'Всички',
    10 => 'Търси',
    11 => 'Резултати от търсенето',
    12 => 'съвпадения',
    13 => 'Резултати от търсенето: няма съвпадения',
    14 => 'Няма съвпадения от вашето търсене',
    15 => 'Опитайте отново.',
    16 => 'Заглавие',
    17 => 'Дата',
    18 => 'Автор',
    19 => "Търси из цялата база данни от {$_CONF['site_name']}",
    20 => 'Дата',
    21 => 'до',
    22 => '(Формат на датата ГГГГ-ММ-ДД)',
    23 => 'Прегледи',
    24 => 'Открити са %d резултата',
    25 => 'Търсехте за',
    26 => 'артикула ',
    27 => 'секунди',
    28 => 'Няма никаква публикация или коментар, съвпадащи с вашето търсене',
    29 => 'Резултати при публикациите и коментарите',
    30 => 'Няма открити резултати',
    31 => 'Този plug-in не откри нищо',
    32 => 'Събитие',
    33 => 'URL',
    34 => 'Район',
    35 => 'Всеки ден',
    36 => 'Няма открити събития',
    37 => 'Резултати в събитията',
    38 => 'Резултати във връзките',
    39 => 'Връзки',
    40 => 'Събития',
    41 => 'Вашото търсене трябва да е от минимум три символа.',
    42 => 'Моля използвайте следният формат на датата: ГГГГ-ММ-ДД (година-месец-ден).',
    43 => 'точна фраза',
    44 => 'всички думи',
    45 => 'коя да е от думите',
    46 => 'Напред',
    47 => 'Назад',
    48 => 'Автор',
    49 => 'Дата',
    50 => 'Посещения',
    51 => 'Линк',
    52 => 'Локация',
    53 => 'Резултат в публикациите',
    54 => 'Резултати в коментарите',
    55 => 'the phrase',
    56 => 'И',
    57 => 'ИЛИ',
    58 => 'More results &gt;&gt;',
    59 => 'Results',
    60 => 'per page',
    61 => 'Refine search'
);

###############################################################################
# stats.php

$LANG10 = array(
    1 => 'Статистики',
    2 => 'Общ брой посещения',
    3 => 'Публикации (коментари) с системата',
    4 => 'Анкети (отговори) в системата',
    5 => 'Връзки (посещения) в системата',
    6 => 'Събития в системата',
    7 => 'Десетте най-четени публикации',
    8 => 'Заглавие на публикацията',
    9 => 'Прегледи',
    10 => 'Изглежда няма никакви публикации на този сайт или вече някой ги е прегледал.',
    11 => 'Най-коментираните публикации.',
    12 => 'Коментари',
    13 => 'Изглежда няма никакви публикации на сайта или в никоя от тях не е постнат коментар.',
    14 => 'Десетте най-добри анкети',
    15 => 'Въпрос',
    16 => 'Гласове',
    17 => 'Изглежда няма никакви анкети или никой не е гласувал.',
    18 => 'Десетте най-посещавани сайта',
    19 => 'Връзки',
    20 => 'Посещения',
    21 => 'Изглежда че няма никакви връзки или никой не е посещавал никоя от тях.',
    22 => 'Десетте най-изпращаните по email публикации',
    23 => 'Email-и',
    24 => 'Изглежда че няма никакви изпратени по e-mail публикации.',
    25 => 'Top Ten Trackback Commented Stories',
    26 => 'No trackback comments found.',
    27 => 'Number of active users',
    28 => 'Top Ten Events',
    29 => 'Event',
    30 => 'Hits',
    31 => 'It appears that there are no events on this site or no one has ever clicked on one.'
);

###############################################################################
# article.php

$LANG11 = array(
    1 => 'Сходни връзки',
    2 => 'Изпрати на приятел',
    3 => 'Принтирай',
    4 => 'Опции за публикацията',
    5 => 'PDF Story Format'
);

###############################################################################
# submit.php

$LANG12 = array(
    1 => 'За да създадете %s трябва да сте влезли като потребител.',
    2 => 'Вход',
    3 => 'Нов потребител',
    4 => 'Изпрати събитие',
    5 => 'Изпрати линк',
    6 => 'Изпрати публикация',
    7 => 'Изисква се да сте логнати',
    8 => 'Изпрати',
    9 => 'Когато пускате информация в този сайт ви съветваме да ползвате следните предложения...<ul><li>Попълнете всички полета, те са задължителни<li>Осигурете точна информация<li>Проверявайте URL адресите</ul>',
    10 => 'Заглавие',
    11 => 'URL',
    12 => 'Дата на започване',
    13 => 'Дата на приключване',
    14 => 'Място',
    15 => 'Описание',
    16 => 'Ако има още нещо, моля уточнете',
    17 => 'Категория',
    18 => 'Друго',
    19 => 'Прочети първо',
    20 => 'Грешка: Няма такава категория',
    21 => 'Когато изберете "Други", моля също така дайте ново име на категорията.',
    22 => 'Грешка: Липсват някои полета',
    23 => 'Моля попълнете всички полета.  Всички полета са задължителни.',
    24 => 'Данните са запазени',
    25 => 'Вашите %s данни бяха запазени успешно.',
    26 => 'Speed Limit',
    27 => 'Име',
    28 => 'Раздел',
    29 => 'Публикация',
    30 => 'Последната ви публикация е преди ',
    31 => " секунди.  Изискват се поне {$_CONF['speedlimit']} секунди, докато можете да постнете отново",
    32 => 'Предварителен преглед',
    33 => 'Превю на публикацията',
    34 => 'Изход',
    35 => 'HTML не е позволено',
    36 => 'Режим на публикация',
    37 => "Submitting an event to {$_CONF['site_name']} will put your event on the master calendar where users can optionally add your event to their personal calendar. This feature is <b>NOT</b> meant to store your personal events such as birthdays and anniversaries.<br><br>Once you submit your event it will be sent to our administrators and if approved, your event will appear on the master calendar.",
    38 => 'Добова събитието към',
    39 => 'Общ календар',
    40 => 'Личен календар',
    41 => 'Край',
    42 => 'Начало',
    43 => 'Събитие през целият ден',
    44 => 'Адрес 1',
    45 => 'Адрес 2',
    46 => 'Град/Село',
    47 => 'Щат',
    48 => 'Пощенски код',
    49 => 'Тип на събитието',
    50 => 'Редактирай типа на събитието',
    51 => 'Място',
    52 => 'Изтрий',
    53 => 'Регистрация'
);

###############################################################################
# ADMIN PHRASES - These are file phrases used in admin scripts
###############################################################################

###############################################################################
# admin/auth.inc.php

$LANG20 = array(
    1 => 'Изисква се оторизация',
    2 => 'Отказ ! Грешна информация',
    3 => 'Невалидна потребителска парола',
    4 => 'Име:',
    5 => 'Парола:',
    6 => 'Всеки достъп до тази страница се регистрира и записва.<br>Тази страница е само за оторизирани потребители.',
    7 => 'вход'
);

###############################################################################
# admin/block.php

$LANG21 = array(
    1 => 'Недостатъчни административни права',
    2 => 'Нямате необходимите права за редакция на този блок.',
    3 => 'Редактор на блокове (и мивки секви)',
    4 => 'There was a problem reading this feed (see error.log for details).',
    5 => 'Име на блок',
    6 => 'Тема',
    7 => 'Всички',
    8 => 'Ниво на сигурност за блок',
    9 => 'Ред на блока',
    10 => 'Тип на блока',
    11 => 'Блок портал',
    12 => 'Нормален блок',
    13 => 'Опции за Блок Портал',
    14 => 'RDF URL',
    15 => 'Последна RDF актуализация',
    16 => 'Опции за Блок Нормален',
    17 => 'Съдържание на блок',
    18 => 'Моля попълнете заглавие на блок, ниво на сигурност за блок и полета съдържание на блок',
    19 => 'Блок мениджър',
    20 => 'Заглавие на блок',
    21 => 'Ниво на сигурност за блок',
    22 => 'Тип блок',
    23 => 'Блок ред',
    24 => 'Блок тема',
    25 => 'За да модифицирате или изтриете блок кликнете върху него по долу.  За да създадете нов кликнете на Нов Блок по горе.',
    26 => 'Блок Layout',
    27 => 'PHP блок',
    28 => 'Опции за PHP блок',
    29 => 'Функции на блок',
    30 => 'Ако искате един от блоковете да използва PHP, въведете името на функцията по-горе.  Функцията трябва да започва с представка "phpblock_" (e.g. phpblock_getweather).  Ако няма тази представка функцията НЯМА да бъде повикана.  Това е направено с цел хора, които може би са хакнали вашият сайт да не могат да извикат глобални функции. Не поставяйте празни скоби "()" след вашите функции.  Препоръчва се да слагате PHP кода в  /path/to/geeklog/system/lib-custom.php.  Това ще позволи на кода да остане при вас дори да актуализирате Geeklog.',
    31 => 'Грешка при PHP блока.  Функцията, %s, не съществува.',
    32 => 'Грешка, липсващо поле(та)',
    33 => 'Трябва въведете URL до .rdf файла за портални блокове',
    34 => 'Трябва въведете заглавие и функция за PHP blocks',
    35 => 'Трябва въведете заглавие и съдържание за normal blocks',
    36 => 'Трябва въведете съдържание за layout blocks',
    37 => 'Лошо име на PHP block функцията',
    38 => 'Функциите за PHP блоковете трябва да имат представка \'phpblock_\' (примерно phpblock_getweather).  Представката \'phpblock_\' се изисква поради причини за сигурност за предотвратяване изпълнението на произволен код.',
    39 => 'Страничен',
    40 => 'Ляво',
    41 => 'Дясно',
    42 => 'Трябва да попълните блок ред и ниво на сигурност за Geeklog default блоковете',
    43 => 'Само за начална страница',
    44 => 'Достъпът отказан',
    45 => "Опитвате се да влезете в блок до когото нямате достъп.  Този опит бе записан. Моля <a href=\"{$_CONF['site_admin_url']}/block.php\">върнете се в административния панел</a>.",
    46 => 'Нов блок',
    47 => 'Admin Home',
    48 => 'Име на блок',
    49 => ' (брез празни полета и с уникално име)',
    50 => 'URL адрес до помощния (Help) файл',
    51 => 'включително http://',
    52 => 'Ако оставите това празно, помощната икона за този блок няма да бъде показана',
    53 => 'Активирана',
    54 => 'запази',
    55 => 'отказ',
    56 => 'изтрий',
    57 => 'Move Block Down',
    58 => 'Move Block Up',
    59 => 'Move block to the right side',
    60 => 'Move block to the left side',
    61 => 'No Title',
    62 => 'Article Limit',
    63 => 'Bad Block Title',
    64 => 'Your Title must not be empty and cannot contain HTML!',
    65 => 'Order',
    66 => 'Autotags',
    67 => 'Check to allow autotags'
);

###############################################################################
# admin/story.php

$LANG24 = array(
    1 => 'Напред',
    2 => 'Назад',
    3 => 'Тип',
    4 => 'Тип на публикуване',
    5 => 'Редактиране на публикации',
    6 => 'Няма никакви публикации в системата',
    7 => 'Автор',
    8 => 'запази',
    9 => 'преглед',
    10 => 'откажи',
    11 => 'изтрий',
    12 => 'ID',
    13 => 'Заглавие',
    14 => 'Тема',
    15 => 'Дата',
    16 => 'Текст - въведение',
    17 => 'Текст - основен',
    18 => 'Видяна',
    19 => 'Коментари',
    20 => 'Ping',
    21 => 'Send Ping',
    22 => 'Списък текстове',
    23 => 'За да модифицирате или изтриете дадена публикация, кликнете върху нейният номер долу. За да я видите кликнете върку нейното заглавие. За да създадете нова публикация кликнете на \'изпрати публикация\' отгоре.',
    24 => 'The ID you chose for this story is already in use. Please use another ID.',
    25 => 'Error when saving story',
    26 => 'Преглед',
    27 => 'If you use [unscaledX] instead of [imageX], the image will be inserted at its original dimensions.',
    28 => '<p><b>PREVIEWING</b>: Previewing a story with images attached is best done by saving the article as a draft INSTEAD OF hitting the preview button.  Use the preview button only when images are not attached.',
    29 => 'Trackbacks',
    30 => 'File Upload Errors',
    31 => 'Моля попълнете Автор, Заглавие и поле Текст - въведение',
    32 => 'Featured',
    33 => 'Може да има само една публикация',
    34 => 'Чернова',
    35 => 'Да',
    36 => 'Не',
    37 => 'Още от',
    38 => 'Още от',
    39 => 'Emails',
    40 => 'Достъпът отказан',
    41 => "Опитвате се да влезете в събитие, до което нямате достъп.  Този опит бе регистриран и записан.  Можете да видите статията в режим четене долу. Моля <a href=\"{$_CONF['site_admin_url']}/story.php\">върнете се на администраторския екран</a> когато сте готов.",
    42 => "Опитвате се да влезете в събитие, до което нямате достъп. Този опит бе записан . Моля <a href=\"{$_CONF['site_admin_url']}/story.php\">върнете се на администраторския екран</a>.",
    43 => 'Нова публикация',
    44 => 'Admin Home',
    45 => 'Достъп',
    46 => '<b>NOTE:</b> if you modify this date to be in the future, this article will not be published until that date.  That also means the story will not be included in your RDF headline feed and it will be ignored by the search and statistics pages.',
    47 => 'Images',
    48 => 'image',
    49 => 'right',
    50 => 'left',
    51 => 'To add one of the images you are attaching to this article you need to insert specially formatted text.  The specially formatted text is [imageX], [imageX_right] or [imageX_left] where X is the number of the image you have attached.  NOTE: You must use the images you attach.  If you do not you will be unable to save your story.<BR><P><B>PREVIEWING</B>: Previewing a story with images attached is best done by saving the article as a draft INSTEAD OF hitting the preview button.  Use the preview button only when images are not attached.',
    52 => 'Изтрий',
    53 => 'was not used.  You must include this image in the intro or body before you can save your changes',
    54 => 'Attached Images Not Used',
    55 => 'The following errors occured while trying to save your story.  Please correct these errors before saving',
    56 => 'Show Topic Icon',
    57 => 'View unscaled image',
    58 => 'Story Management',
    59 => 'Option',
    60 => 'Enabled',
    61 => 'Auto Archive',
    62 => 'Auto Delete',
    63 => '',
    64 => '',
    65 => '',
    66 => '',
    67 => 'Expand the Content Edit Area size',
    68 => 'Reduce the Content Edit Area size',
    69 => 'Publish Story Date',
    70 => 'Toolbar Selection',
    71 => 'Basic Toolbar',
    72 => 'Common Toolbar',
    73 => 'Advanced Toolbar',
    74 => 'Advanced II Toolbar',
    75 => 'Full Featured',
    76 => 'Publish Options',
    77 => 'Javascript needs to be enabled for Advanced Editor. Option can be disabled in the main site config.php',
    78 => 'Click <a href="%s/story.php?mode=edit&amp;sid=%s&amp;editopt=default">here</a> to use default editor',
    79 => 'Preview',
    80 => 'Editor',
    81 => 'Publish Options',
    82 => 'Images',
    83 => 'Archive Options',
    84 => 'Permissions',
    85 => 'Show All',
    86 => 'Advanced Editor',
    87 => 'Story Stats'
);

###############################################################################
# admin/topic.php

$LANG27 = array(
    1 => 'Редактор на теми',
    2 => 'Тема номер',
    3 => 'Тема име',
    4 => 'Тема изображение',
    5 => '(не използвайте интервали)',
    6 => 'Изтриването на тема изтрива всичко в нея.',
    7 => 'Моля попълнете номера на темата и нейното име, както и всички други полета',
    8 => 'Topic мениджър',
    9 => 'За да модифицирате или изтриете тема, кликнете на нея.  За да създадете нова такава кликнете на бутона \'нова тема\' вляво. Ще откриете ниво на достъп за всяка тема.  Темата по подразбиране е обозначена със звездичка (*).',
    10 => 'Подредба',
    11 => 'Публикации/Страница',
    12 => 'Достъпът отказан',
    13 => "Опитвате се да влезете в тема, за която нямате достъп. Това се регистрира и логва. Моля <a href=\"{$_CONF['site_admin_url']}/topic.php\">върнете се на администраторския панел</a>.",
    14 => 'Метод на подреждане',
    15 => 'азбузен',
    16 => 'по подразбиране е',
    17 => 'Нова тема',
    18 => 'Admin Home',
    19 => 'запази',
    20 => 'откажи',
    21 => 'изтрий',
    22 => 'Default',
    23 => 'направи тази тема default за всички подчинени',
    24 => '(*)',
    25 => 'Archive Topic',
    26 => 'make this the default topic for archived stories. Only one topic allowed.',
    27 => 'Or Upload Topic Icon',
    28 => 'Maximum',
    29 => 'File Upload Errors'
);

###############################################################################
# admin/user.php

$LANG28 = array(
    1 => 'User Editor',
    2 => 'User ID',
    3 => 'Потребител',
    4 => 'Пълно име',
    5 => 'Парола',
    6 => 'Ниво на сигурност',
    7 => 'Email адрес',
    8 => 'HomePage',
    9 => '(не използвайте интервали)',
    10 => 'Моля попълнете формите с потребителското име и e-mail адрес',
    11 => 'User мениджър',
    12 => 'За да модифицирате или изтриете даден потребител, кликнете на него.  За да създадете нов потребител кликнете на бутона \'нов потребител\'. Можете да направите някои прости търсения по части от потребителко име, email или пълно име (например. *oja* or *.dba).',
    13 => 'SecLev',
    14 => 'Reg. Date',
    15 => 'Нова регистрация',
    16 => 'Admin Home',
    17 => 'changepw',
    18 => 'откажи',
    19 => 'Изтрий',
    20 => 'запази',
    21 => 'The username you tried saving already exists.',
    22 => 'Error',
    23 => 'Групова регистрация',
    24 => 'Масово (групово) добавяне на потребители',
    25 => 'Можете да добавите определен брой потребители в системата. Трябва просто да import-нете даден текстов файл с имена и полете като пълно име, потребителско име и e-mail. Всеки добавен потребител ще бъде уведомен за своята парола чрез e-mail. При неспазване на изискванията за формат са възможни проблеми, така че е препоръчително да знаете какво правите !',
    26 => 'Search',
    27 => 'Limit Results',
    28 => 'Check here to delete this picture',
    29 => 'Path',
    30 => 'Import',
    31 => 'New Users',
    32 => 'Done proccessing. Imported %d and encountered %d failures',
    33 => 'submit',
    34 => 'Грешка: Трябва да зададете файл.',
    35 => 'Last Login',
    36 => '(never)',
    37 => 'UID',
    38 => 'Group Listing',
    39 => 'Password (again)',
    40 => 'Registration Date',
    41 => 'Last login Date',
    42 => 'Banned',
    43 => 'Awaiting Activation',
    44 => 'Awaiting Authorization',
    45 => 'Active',
    46 => 'User Status',
    47 => 'Edit',
    48 => 'Show Admin Groups',
    49 => 'Admin Group',
    50 => 'Check to allow filtering this group as an Admin Use Group',
    51 => 'Online Days',
    52 => '<br>Note: "Online Days" is the number of days between the first registration and the last login.',
    53 => 'registered',
    54 => 'Batch Delete',
    55 => 'This only works if you have <code>$_CONF[\'lastlogin\'] = true;</code> in your config.php',
    56 => 'Please choose the type of user you want to delete and press "Update List". Then, uncheck those from the list you do not want to delete and press "Delete". Please note that you will only delete those that are currently visible in case the list spans over several pages.',
    57 => 'Phantom users',
    58 => 'Short-Time Users',
    59 => 'Old Users',
    60 => 'Users that registered more than ',
    61 => ' months ago, but never logged in.',
    62 => 'Users that registered more than ',
    63 => ' months ago, then logged in within 24 hours, but since then never came back to your site.',
    64 => 'Normal users, who simply did not visit your site since ',
    65 => ' months.',
    66 => 'Update List',
    67 => 'Months since registration',
    68 => 'Online Hours',
    69 => 'Offline Months',
    70 => 'could not be deleted',
    71 => 'sucessfully deleted',
    72 => 'No User selected for deletion',
    73 => 'Are You sure you want to permanently delete ALL selected users?',
    74 => 'Recent Users',
    75 => 'Users that registered in the last ',
    76 => ' months'
);

###############################################################################
# admin/moderation.php

$LANG29 = array(
    1 => 'Одобри',
    2 => 'Изтрий',
    3 => 'Редактирай',
    4 => 'Profile',
    10 => 'Заглавие',
    11 => 'Start Date',
    12 => 'URL',
    13 => 'Категория',
    14 => 'Дата',
    15 => 'Тема',
    16 => 'потребителско име',
    17 => 'Пълно име',
    18 => 'E-mail',
    34 => 'Admin Panel',
    35 => 'Изпратени текстове',
    36 => 'Изпратени връзки',
    37 => 'Изпратени събития',
    38 => 'Изпрати',
    39 => 'Няма изпратени текстове, които да публикувате или изтриете.',
    40 => 'User Submissions'
);

###############################################################################
# admin/mail.php

$LANG31 = array(
    1 => "{$_CONF['site_name']} Mail Utility",
    2 => 'From',
    3 => 'Reply-to',
    4 => 'Subject',
    5 => 'Body',
    6 => 'Send to:',
    7 => 'All users',
    8 => 'Admin',
    9 => 'Options',
    10 => 'HTML',
    11 => 'Urgent message!',
    12 => 'Send',
    13 => 'Reset',
    14 => 'Ignore user settings',
    15 => 'Error when sending to: ',
    16 => 'Successfully sent messages to: ',
    17 => "<a href={$_CONF['site_admin_url']}/mail.php>Send another message</a>",
    18 => 'To',
    19 => 'NOTE: if you wish to send a message to all site members, select the Logged-in Users group from the drop down.',
    20 => "Successfully sent <successcount> messages and unsuccessfully sent <failcount> messages.  If you need them, the details of each message attempts is below.  Otherwise you can <a href=\"{$_CONF['site_admin_url']}/mail.php\">Send another message</a> or you can <a href=\"{$_CONF['site_admin_url']}/moderation.php\">go back to the administration page</a>.",
    21 => 'Failures',
    22 => 'Successes',
    23 => 'No failures',
    24 => 'No successes',
    25 => '-- Select Group --',
    26 => 'Please fill in all the fields on the form and select a group of users from the drop down.'
);

###############################################################################
# admin/plugins.php

$LANG32 = array(
    1 => 'Installing plugins could possibly cause damage to your Geeklog installation and, possibly, to your system.  It is important that you only install plugins downloaded from the <a href="http://www.geeklog.net" target="_blank">Geeklog Homepage</a> as we thoroughly test all plugins submitted to our site on a variety of operating systems.  It is important that you understand that the plugin installation process will require the execution of a few filesystem commands which could lead to security problems particularly if you use plugins from third party sites.  Even with this warning you are getting, we do not gaurantee the success of any installation nor are we liable for damage caused by installing a Geeklog plugin.  In other words, install at your own risk.  For the wary, directions on how to manually install a plugin is included with each plugin package.',
    2 => 'Plug-in Installation Disclaimer',
    3 => 'Plug-in Installation Form',
    4 => 'Plug-in File',
    5 => 'Plug-in List',
    6 => 'Warning: Plug-in Already Installed!',
    7 => 'The plug-in you are trying to install already exists.  Please delete the plugin before re-installing it',
    8 => 'Plugin Compatibility Check Failed',
    9 => 'This plugin requires a newer version of Geeklog. Either upgrade your copy of <a href="http://www.geeklog.net">Geeklog</a> or get a newer version of the plug-in.',
    10 => '<br><b>There are no plugins currently installed.</b><br><br>',
    11 => 'To modify or delete a plug-in, click on that plug-in\'s number below. To learn more about a plug-in, click the plug-in name and you will be directed to that plug-in\'s website. To install or upgrade a plug-in please consult it\'s documentation.',
    12 => 'no plugin name provided to plugineditor()',
    13 => 'Plugin Editor',
    14 => 'New Plug-in',
    15 => 'Admin Home',
    16 => 'Plug-in Name',
    17 => 'Plug-in Version',
    18 => 'Geeklog Version',
    19 => 'Enabled',
    20 => 'Yes',
    21 => 'No',
    22 => 'Install',
    23 => 'Запази',
    24 => 'Откажи',
    25 => 'Delete',
    26 => 'Plug-in Name',
    27 => 'Plug-in Homepage',
    28 => 'Plug-in Version',
    29 => 'Geeklog Version',
    30 => 'Delete Plug-in?',
    31 => 'Are you sure you want to delete this plug-in?  By doing so you will remove all the data and data structures that this plug-in uses.  If you are sure, click delete again on the form below.',
    32 => '<p><b>Error AutoLink tag not correct format</b></p>',
    33 => 'Code Version',
    34 => 'Update',
    35 => 'Edit',
    36 => 'Code',
    37 => 'Data',
    38 => 'Update!'
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
    42 => 'Events',
    43 => 'All',
    44 => 'None',
    45 => 'Header-link in topic',
    46 => 'Limit Results',
    47 => 'Search',
    48 => 'Edit',
    49 => 'Feed Logo',
    50 => "Relative to site url ({$_CONF['site_url']})",
    51 => 'The filename you have chosen is already used by another feed. Please choose a different one.',
    52 => 'Error: existing Filename'
);

###############################################################################
# confirmation and error messages

$MESSAGE = array(
    1 => "Your password has been emailed to you and should arrive momentarily. Please follow the directions in the message and we thank-you for using {$_CONF['site_name']}",
    2 => "Thank-you for submitting your story to {$_CONF['site_name']}.  It has been submitted to our staff for approval. If approved, your story will be available for others to read on our site.",
    3 => "Thank-you for submitting a link to {$_CONF['site_name']}.  It has been submitted to our staff for approval.  If approved, your link will be seen in the <a href={$_CONF['site_url']}/links.php>links</a> section.",
    4 => "Thank-you for submitting an event to {$_CONF['site_name']}.  It has been submitted to our staff for approval.  If approved, your event will be seen in our <a href={$_CONF['site_url']}/calendar.php>calendar</a> section.",
    5 => 'Your account information has been successfully saved.',
    6 => 'Your display preferences have been successfully saved.',
    7 => 'Your comment preferences have been successfully saved.',
    8 => 'You have been successfully logged out.',
    9 => 'Публикацията ви бе запазена успешно.',
    10 => 'The story has been successfully deleted.',
    11 => 'Your block has been successfully saved.',
    12 => 'The block has been successfully deleted.',
    13 => 'Your topic has been successfully saved.',
    14 => 'The topic and all it\'s stories and blocks have been successfully deleted.',
    15 => 'Your link has been successfully saved.',
    16 => 'The link has been successfully deleted.',
    17 => 'Your event has been successfully saved.',
    18 => 'The event has been successfully deleted.',
    19 => 'Your poll has been successfully saved.',
    20 => 'The poll has been successfully deleted.',
    21 => 'The new user has been successfully saved.',
    22 => 'The user has been successfully deleted',
    23 => 'Error trying to add an event to your calendar. There was no event id passed.',
    24 => 'The event has been saved to your calendar',
    25 => 'Cannot open your personal calendar until you login',
    26 => 'Event was successfully removed from your personal calendar',
    27 => 'Message successfully sent.',
    28 => 'The plug-in has been successfully saved',
    29 => 'Sorry, personal calendars are not enabled on this site',
    30 => 'Access Denied',
    31 => 'Sorry, you do not have access to the story administration page.  Please note that all attempts to access unauthorized features are logged',
    32 => 'Sorry, you do not have access to the topic administration page.  Please note that all attempts to access unauthorized features are logged',
    33 => 'Sorry, you do not have access to the block administration page.  Please note that all attempts to access unauthorized features are logged',
    34 => 'Sorry, you do not have access to the link administration page.  Please note that all attempts to access unauthorized features are logged',
    35 => 'Sorry, you do not have access to the event administration page.  Please note that all attempts to access unauthorized features are logged',
    36 => 'Sorry, you do not have access to the poll administration page.  Please note that all attempts to access unauthorized features are logged',
    37 => 'Sorry, you do not have access to the user administration page.  Please note that all attempts to access unauthorized features are logged',
    38 => 'Sorry, you do not have access to the plugin administration page.  Please note that all attempts to access unauthorized features are logged',
    39 => 'Sorry, you do not have access to the mail administration page.  Please note that all attempts to access unauthorized features are logged',
    40 => 'System Message',
    41 => 'Sorry, you do not have access to the word replacement page.  Please note that all attempts to access unauthorized features are logged',
    42 => 'Your word has been successfully saved.',
    43 => 'The word has been successfully deleted.',
    44 => 'The plug-in was successfully installed!',
    45 => 'The plug-in was successfully deleted.',
    46 => 'Sorry, you do not have access to the database backup utility.  Please note that all attempts to access unauthorized features are logged',
    47 => 'This functionality only works under *nix.  If you are running *nix as your operating system then your cache has been successfully cleared. If you are on Windows, you will need to search for files name adodb_*.php and remove them manually.',
    48 => "Thank you for applying for a membership with {$_CONF['site_name']}. Our team will review your application. If approved, your password will be emailed to you at the email address you just entered.",
    49 => 'Your group has been successfully saved.',
    50 => 'The group has been successfully deleted.',
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
    61 => 'Plugin %s: Unknown message placeholder',
    62 => 'The trackback comment has been deleted.',
    63 => 'An error occurred when deleting the trackback comment.',
    64 => 'Your trackback comment has been successfully sent.',
    65 => 'Weblog directory service successfully saved.',
    66 => 'The weblog directory service has been deleted.',
    67 => 'The new password does not match the confirmation password!',
    68 => 'You have to enter the correct current password.',
    69 => 'Your account has been blocked!',
    70 => 'Your account is awaiting administrator approval.',
    71 => 'Your account has now been confirmed and is awaiting administrator approval.',
    72 => 'An error occured while attempting to install the plugin. See error.log for details.',
    73 => 'An error occured while attempting to uninstall the plugin. See error.log for details.',
    74 => 'The pingback has been successfully sent.',
    75 => 'Trackbacks must be sent using a POST request.',
    76 => 'Do you really want to delete this item?',
    77 => 'WARNING:<br>You have set your default encoding to UTF-8. However, your server does not support multibyte encodings. Please install mbstring functions for PHP or choose a different character set/language.',
    78 => 'Please make sure that the email address and the confirmation email address are the same.',
    79 => 'The page you have been trying to open refers to a function that no longer exists on this site.',
    80 => 'The plugin that created this feed is currently disabled. You will not be able to edit this feed until you re-enable the parent plugin.',
    81 => 'You may have mistyped your login credentials.  Please try logging in again below.',
    82 => 'You have exceeded the number of allowed login attempts.  Please try again later.',
    83 => 'To change your password, email address, or for how long to remember you, please enter your current password.',
    84 => 'To delete your account, please enter your current password.'
);

###############################################################################

$LANG_ACCESS = array(
    'access' => 'Access',
    'ownerroot' => 'Owner/Root',
    'group' => 'Group',
    'readonly' => 'Read-Only',
    'accessrights' => 'Access Rights',
    'owner' => 'Owner',
    'grantgrouplabel' => 'Grant Above Group Edit Rights',
    'permmsg' => 'NOTE: members is all logged in members of the site and anonymous is all users browsing the site that aren\'t logged in.',
    'securitygroups' => 'Security Groups',
    'editrootmsg' => "Even though you are a User Administrator, you can't edit a root user without first being a root user yourself.  You can edit all other users except root users. Please note that all attempts to illegally edit root users are logged.  Please go back to the <a href=\"{$_CONF['site_admin_url']}/user.php\">User Administration page</a>.",
    'securitygroupsmsg' => 'Select the checkboxes for the groups you want the user to belong to.',
    'groupeditor' => 'Group Editor',
    'description' => 'Description',
    'name' => 'Name',
    'rights' => 'Rights',
    'missingfields' => 'Missing Fields',
    'missingfieldsmsg' => 'You must supply the name and a description for a group',
    'groupmanager' => 'Group Manager',
    'newgroupmsg' => 'To modify or delete a group, click on that group below. To create a new group click new group above. Please note that core groups cannot be deleted because they are used in the system.',
    'groupname' => 'Group Name',
    'coregroup' => 'Core Group',
    'yes' => 'Yes',
    'no' => 'No',
    'corerightsdescr' => "This group is a core {$_CONF['site_name']} Group.  Therefore the rights for this group cannot be edited.  Below is a read-only list of the rights this group has access to.",
    'groupmsg' => 'Security Groups on this site are hierarchical.  By adding this group to any of the groups below you will giving this group the same rights that those groups have.  Where possible it is encouraged you use the groups below to give rights to a group.  If you need this group to have custom rights then you can select the rights to various site features in the section below called \'Rights\'.  To add this group to any of the ones below simply check the box next to the group(s) that you want.',
    'coregroupmsg' => "This group is a core {$_CONF['site_name']} Group.  Therefore the groups that this group belongs to cannot be edited.  Below is a read-only list of the groups this group belongs to.",
    'rightsdescr' => 'A groups access to a certain right below can be given directly to the group OR to a different group that this group is a part of.  The ones you see below without a checkbox are the rights that have been given to this group because it belongs to another group with that right.  The rights with checkboxes below are rights that can be given directly to this group.',
    'lock' => 'Lock',
    'members' => 'Members',
    'anonymous' => 'Anonymous',
    'permissions' => 'Permissions',
    'permissionskey' => 'R = read, E = edit, edit rights assume read rights',
    'edit' => 'Edit',
    'none' => 'None',
    'accessdenied' => 'Access Denied',
    'storydenialmsg' => "You do not have access to view this story.  This could be because you aren't a member of {$_CONF['site_name']}.  Please <a href=users.php?mode=new> become a member</a> of {$_CONF['site_name']} to receive full membership access!",
    'nogroupsforcoregroup' => 'This group doesn\'t belong to any of the other groups',
    'grouphasnorights' => 'This group doesn\'t have access to any of the administrative features of this site',
    'newgroup' => 'New Group',
    'adminhome' => 'Admin Home',
    'save' => 'save',
    'cancel' => 'cancel',
    'delete' => 'delete',
    'canteditroot' => 'You have tried to edit the Root group but you are not in the Root group yourself therefore your access to this group is denied.  Please contact the system administrator if you feel this is an error',
    'listusers' => 'List Users',
    'listthem' => 'list',
    'usersingroup' => 'Users in group %s',
    'usergroupadmin' => 'User Group Administration',
    'add' => 'Add',
    'remove' => 'Remove',
    'availmembers' => 'Available Members',
    'groupmembers' => 'Group Members',
    'canteditgroup' => 'To edit this group, you have to be a member of the group. Please contact the system administrator if you feel this is an error.',
    'cantlistgroup' => 'To see the members of this group, you have to be a member yourself. Please contact the system administrator if you feel this is an error.',
    'editgroupmsg' => 'To modify the group membership, click on the member names(s) and use the add or remove buttons. If the member is a member of the group, their name will appear on the right side only. Once you are complete - press <b>Save</b> to update the group and return to the main group admin page.',
    'listgroupmsg' => 'Listing of all current members in the group: <b>%s</b>',
    'search' => 'Search',
    'submit' => 'Submit',
    'limitresults' => 'Limit Results',
    'group_id' => 'Group ID',
    'plugin_access_denied_msg' => 'You are illegally trying access a plugin administration page.  Please note that all attempts to illegally access this page are logged.',
    'groupexists' => 'Group name already exists',
    'groupexistsmsg' => 'There is already a group with this name. Group names must be unique.'
);

###############################################################################
# admin/database.php

$LANG_DB_BACKUP = array(
    'last_ten_backups' => 'Last 10 Back-ups',
    'do_backup' => 'Do Backup',
    'backup_successful' => 'Database back up was successful.',
    'db_explanation' => 'To create a new backup of your Geeklog system, hit the button below',
    'not_found' => "Incorrect path or mysqldump utility not executable.<br>Check <strong>\$_DB_mysqldump_path</strong> definition in config.php.<br>Variable currently defined as: <var>{$_DB_mysqldump_path}</var>",
    'zero_size' => 'Backup Failed: Filesize was 0 bytes',
    'path_not_found' => "{$_CONF['backup_path']} does not exist or is not a directory",
    'no_access' => "ERROR: Directory {$_CONF['backup_path']} is not accessible.",
    'backup_file' => 'Backup file',
    'size' => 'Size',
    'bytes' => 'Bytes',
    'total_number' => 'Total number of backups: %d'
);

###############################################################################

$LANG_BUTTONS = array(
    1 => 'Home',
    2 => 'Contact',
    3 => 'Get Published',
    4 => 'Links',
    5 => 'Polls',
    6 => 'Calendar',
    7 => 'Site Stats',
    8 => 'Personalize',
    9 => 'Search',
    10 => 'разширено търсене',
    11 => 'Directory'
);

###############################################################################
# 404.php

$LANG_404 = array(
    1 => '404 Error',
    2 => 'Gee, I\'ve looked everywhere but I can not find <b>%s</b>.',
    3 => "<p>We're sorry, but the file you have requested does not exist. Please feel free to check the <a href=\"{$_CONF['site_url']}\">main page</a> or the <a href=\"{$_CONF['site_url']}/search.php\">search page</a> to see if you can find what you lost."
);

###############################################################################
# login form

$LANG_LOGIN = array(
    1 => 'Login required',
    2 => 'Sorry, to access this area you need to be logged in as a user.',
    3 => 'Login',
    4 => 'New User'
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

###############################################################################
# trackback.php

$LANG_TRB = array(
    'trackback' => 'Trackback',
    'from' => 'from',
    'tracked_on' => 'Tracked on',
    'read_more' => '[read more]',
    'intro_text' => 'Here\'s what others have to say about \'%s\':',
    'no_comments' => 'No trackback comments for this entry.',
    'this_trackback_url' => 'Trackback URL for this entry:',
    'num_comments' => '%d trackback comments',
    'send_trackback' => 'Send Pings',
    'preview' => 'Preview',
    'editor_title' => 'Send trackback comment',
    'trackback_url' => 'Trackback URL',
    'entry_url' => 'Entry URL',
    'entry_title' => 'Entry Title',
    'blog_name' => 'Site Name',
    'excerpt' => 'Excerpt',
    'truncate_warning' => 'Note: The receiving site may truncate your excerpt',
    'button_send' => 'Send',
    'button_preview' => 'Preview',
    'send_error' => 'Error',
    'send_error_details' => 'Error when sending trackback comment:',
    'url_missing' => 'No Entry URL',
    'url_required' => 'Please enter at least a URL for the entry.',
    'target_missing' => 'No Trackback URL',
    'target_required' => 'Please enter a trackback URL',
    'error_socket' => 'Could not open socket.',
    'error_response' => 'Response not understood.',
    'error_unspecified' => 'Unspecified error.',
    'select_url' => 'Select Trackback URL',
    'not_found' => 'Trackback URL not found',
    'autodetect_failed' => 'Geeklog could not detect the Trackback URL for the post you want to send your comment to. Please enter it manually below.',
    'trackback_explain' => 'From the links below, please select the URL you want to send your Trackback comment to. Geeklog will then try to determine the correct Trackback URL for that post. Or you can <a href="%s">enter it manually</a> if you know it already.',
    'no_links_trackback' => 'No links found. You can not send a Trackback comment for this entry.',
    'pingback' => 'Pingback',
    'pingback_results' => 'Pingback results',
    'send_pings' => 'Send Pings',
    'send_pings_for' => 'Send Pings for "%s"',
    'no_links_pingback' => 'No links found. No Pingbacks were sent for this entry.',
    'pingback_success' => 'Pingback sent.',
    'no_pingback_url' => 'No pingback URL found.',
    'resend' => 'Resend',
    'ping_all_explain' => 'You can now notify the sites you linked to (<a href="http://en.wikipedia.org/wiki/Pingback">Pingback</a>), advertise that your site has been updated by pinging weblog directory services, or send a <a href="http://en.wikipedia.org/wiki/Trackback">Trackback</a> comment in case you wrote about a post on someone else\'s site.',
    'pingback_button' => 'Send Pingback',
    'pingback_short' => 'Send Pingbacks to all sites linked from this entry.',
    'pingback_disabled' => '(Pingback disabled)',
    'ping_button' => 'Send Ping',
    'ping_short' => 'Ping weblog directory services.',
    'ping_disabled' => '(Ping disabled)',
    'trackback_button' => 'Send Trackback',
    'trackback_short' => 'Send a Trackback comment.',
    'trackback_disabled' => '(Trackback disabled)',
    'may_take_a_while' => 'Please note that sending Pingbacks and Pings may take a while.',
    'ping_results' => 'Ping results',
    'unknown_method' => 'Unknown ping method',
    'ping_success' => 'Ping sent.',
    'error_site_name' => 'Please enter the site\'s name.',
    'error_site_url' => 'Please enter the site\'s URL.',
    'error_ping_url' => 'Please enter a valid Ping URL.',
    'no_services' => 'No weblog directory services configured.',
    'services_headline' => 'Weblog Directory Services',
    'service_explain' => 'To modify or delete a weblog directory service, click on the edit icon of that service below. To add a new weblog directory service, click on "Create New" above.',
    'service' => 'Service',
    'ping_method' => 'Ping method',
    'service_website' => 'Website',
    'service_ping_url' => 'URL to ping',
    'ping_standard' => 'Standard Ping',
    'ping_extended' => 'Extended Ping',
    'ping_unknown' => '(unknown method)',
    'edit_service' => 'Edit Weblog Directory Service',
    'trackbacks' => 'Trackbacks',
    'editor_intro' => 'Prepare your trackback comment for <a href="%s">%s</a>.',
    'editor_intro_none' => 'Prepare your trackback comment.',
    'trackback_note' => 'To send a trackback comment for a story, go to the list of stories and click on "Send Ping" for the story. To send a trackback that is not related to a story, <a href="%s">click here</a>.',
    'pingback_explain' => 'Enter a URL to send the Pingback to. The pingback will point to your site\'s homepage.',
    'pingback_url' => 'Pingback URL',
    'site_url' => 'This site\'s URL',
    'pingback_note' => 'To send a pingback for a story, go to the list of stories and click on "Send Ping" for the story. To send a pingback that is not related to a story, <a href="%s">click here</a>.',
    'pbtarget_missing' => 'No Pingback URL',
    'pbtarget_required' => 'Please enter a pingback URL',
    'pb_error_details' => 'Error when sending the pingback:',
    'delete_trackback' => 'To delete this Trackback click: '
);

###############################################################################
# directory.php

$LANG_DIR = array(
    'title' => 'Article Directory',
    'title_year' => 'Article Directory for %d',
    'title_month_year' => 'Article Directory for %s %d',
    'nav_top' => 'Back to Article Directory',
    'no_articles' => 'No articles.'
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
    'new_string' => '%n new %i in the last %t %s',
    'new_last' => 'last %t %s',
    'minutes' => 'minutes',
    'hours' => 'hours',
    'days' => 'days',
    'weeks' => 'weeks',
    'months' => 'months',
    'minute' => 'minute',
    'hour' => 'hour',
    'day' => 'day',
    'week' => 'week',
    'month' => 'month'
);

###############################################################################
# Month names

$LANG_MONTH = array(
    1 => 'January',
    2 => 'February',
    3 => 'March',
    4 => 'April',
    5 => 'May',
    6 => 'June',
    7 => 'July',
    8 => 'August',
    9 => 'September',
    10 => 'October',
    11 => 'November',
    12 => 'December'
);

###############################################################################
# Weekdays

$LANG_WEEK = array(
    1 => 'Неделя',
    2 => 'Понеделник',
    3 => 'Вторник',
    4 => 'Сряда',
    5 => 'Четвъртък',
    6 => 'Петък',
    7 => 'Събота'
);

###############################################################################
# Admin - Strings
# 
# These are some standard strings used by core functions as well as plugins to
# display administration lists and edit pages

$LANG_ADMIN = array(
    'search' => 'Search',
    'limit_results' => 'Limit Results',
    'submit' => 'Submit',
    'edit' => 'Edit',
    'edit_adv' => 'Adv. Edit',
    'admin_home' => 'Admin Home',
    'create_new' => 'Create New',
    'create_new_adv' => 'Create New (Adv.)',
    'enabled' => 'Enabled',
    'title' => 'Title',
    'type' => 'Type',
    'topic' => 'Topic',
    'help_url' => 'Help File URL',
    'save' => 'Save',
    'cancel' => 'Cancel',
    'delete' => 'Delete',
    'delete_sel' => 'Delete selected',
    'copy' => 'Copy',
    'no_results' => '- No entries found -',
    'data_error' => 'There was an error processing the subscription data. Please check the data source.',
    'preview' => 'Preview',
    'records_found' => 'Records found'
);

###############################################################################
# Localisation of the texts for the various drop-down menus that are actually
# stored in the database. If these exist, they override the texts from the
# database.

$LANG_commentcodes = array(
    0 => 'Comments Enabled',
    -1 => 'Comments Disabled'
);


$LANG_commentmodes = array(
    'flat' => 'Flat',
    'nested' => 'Nested',
    'threaded' => 'Threaded',
    'nocomment' => 'No Comments'
);

$LANG_cookiecodes = array(
    0 => '(don\'t)',
    3600 => '1 Hour',
    7200 => '2 Hours',
    10800 => '3 Hours',
    28800 => '8 Hours',
    86400 => '1 Day',
    604800 => '1 Week',
    2678400 => '1 Month'
);

$LANG_dateformats = array(
    0 => 'System Default'
);

$LANG_featurecodes = array(
    0 => 'Not Featured',
    1 => 'Featured'
);

$LANG_frontpagecodes = array(
    0 => 'Show Only in Topic',
    1 => 'Show on Front Page'
);

$LANG_postmodes = array(
    'plaintext' => 'Plain Old Text',
    'html' => 'HTML Formatted'
);

$LANG_sortcodes = array(
    'ASC' => 'Oldest First',
    'DESC' => 'Newest First'
);

$LANG_trackbackcodes = array(
    0 => 'Trackback Enabled',
    -1 => 'Trackback Disabled'
);

?>
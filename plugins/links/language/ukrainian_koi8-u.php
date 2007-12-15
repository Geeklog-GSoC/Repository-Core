<?php

###############################################################################
# ukrainian.php
# This is the ukrainian language page for the Geeklog Links Plug-in!
#
# Copyright (C) 2006 Vitaliy Biliyenko
# v.lokki@gmail.com
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
# $Id: ukrainian_koi8-u.php,v 1.1.2.1 2007/12/15 22:26:50 dhaun Exp $

###############################################################################
# Array Format:
# $LANGXX[YY]:    $LANG - variable name
#              XX - file id number
#            YY - phrase id number
###############################################################################


$LANG_LINKS= array(
    10 => '��Ħ�����',
    14 => '���������',
    84 => '���������',
    88 => '����� �צ��� ��������',
    114 => '��� �������',
    116 => '������ ���������'
);

###############################################################################
# for stats

$LANG_LINKS_STATS = array(
    'links' => '��˦� (�̦˦�) � �����ͦ',
    'stats_headline' => '10 ����������Φ��� ̦�˦�',
    'stats_page_title' => '���������',
    'stats_hits' => '���',
    'stats_no_hits' => '�� ����� ���Ԧ ����� ��������, ��� �� Φ��� ���� �� ������������.',
);

###############################################################################
# for the search

$LANG_LINKS_SEARCH = array(
 'results' => '���������� � ��������',
 'title' => '���������',
 'date' => '������',
 'author' => '�����',
 'hits' => '�̦˦�'
);
###############################################################################
# for the submission form

$LANG_LINKS_SUBMIT = array(
    1 => '��Ħ����� ���������',
    2 => '���������',
    3 => '������Ҧ�',
    4 => '����',
    5 => '���� ����, ��������',
    6 => '�������: �������� ������Ҧ�',
    7 => '�������� "����", ����-�����, ���֦�� ����� ������Ҧ�',
    8 => '���������',
    9 => 'URL',
    10 => '������Ҧ�',
    11 => '��Ħ���Φ ���������'
);

###############################################################################
# Messages for COM_showMessage the submission form

$PLG_links_MESSAGE1 = "���դ�� �� ��Ħ����� �� {$_CONF['site_name']} ���������.  ���� �������� ������ ��������� ��� ���������.  � ��ڦ ��������� ���� ���� ������ �� ���Ħ�� <a href={$_CONF['site_url']}/links/index.php>��� �������</a>.";
$PLG_links_MESSAGE2 = '���� ��������� ��Ц��� ���������.';
$PLG_links_MESSAGE3 = '��������� ��Ц��� ��������.';
$PLG_links_MESSAGE4 = "���դ�� �� ��Ħ����� �� {$_CONF['site_name']} ���������.  ���� ������ �� ���Ħ�� <a href={$_CONF['site_url']}/links/index.php>��� �������</a>.";

// Messages for the plugin upgrade
$PLG_links_MESSAGE3002 = $LANG32[9];

###############################################################################
# admin/link.php

$LANG_LINKS_ADMIN = array(
    1 => '�������� ��������',
    2 => 'ID ���������',
    3 => '���������',
    4 => 'URL',
    5 => '������Ҧ�',
    6 => '(��������� http://)',
    7 => '����',
    8 => '��� ���������',
    9 => '����',
    10 => '�� �����Φ ������� ���������, URL �� ����.',
    11 => '�������� ��������',
    12 => '��� �ͦ���� �� �������� ���������, �����Φ�� ���� ������ ����������� �����.  ��� �������� ���� ���������, ���Ҧ�� "�������� ����" ���Ҧ.',
    14 => '������Ҧ� ���������',
    16 => '������ ����������',
    17 => "�� ���������� �������� ������ �� ���������, �� ����� � ��� ����� ����.  �� ������ ��������. ����-�����, <a href=\"{$_CONF['site_admin_url']}/plugins/links/index.php\">�����Φ���� �� ��ͦΦ���������</a>.",
    20 => '���� ����, ��������',
    21 => '��������',
    22 => '���������',
    23 => '��������'
);

?>

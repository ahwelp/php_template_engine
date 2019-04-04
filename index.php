<?php

include 'Template.php';

$template = new Template;

$template->assign('username', 'Terry');
$template->assign('age', '18');

$template->render('myTemplate');
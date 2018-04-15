<?php
/* Smarty version 3.1.32-dev-45, created on 2018-04-15 14:28:40
  from 'F:\projects\SERVER\WAMP\apache2\htdocs\Smarty-Angular-Project\Views\incs\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-45',
  'unifunc' => 'content_5ad3c4085d5fa7_85430765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '843594f489cc6deba0c4abf6c80a4f7cc324a1b7' => 
    array (
      0 => 'F:\\projects\\SERVER\\WAMP\\apache2\\htdocs\\Smarty-Angular-Project\\Views\\incs\\head.tpl',
      1 => 1523827641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad3c4085d5fa7_85430765 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? '' : $tmp);?>
</title>
    <meta content='width=device-width,initial-scale=1,maximum-scale=1' name='viewport'>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/Views/style/index.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/Views/style/fonts/fa/css/font-awesome.css">
</head>
<body ng-app="App" ng-controller="myCtrl" ><?php }
}

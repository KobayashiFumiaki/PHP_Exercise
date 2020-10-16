<?php
/* Smarty version 3.1.33, created on 2020-10-16 02:43:30
  from '/Applications/XAMPP/xamppfiles/htdocs/WebProg_Exercise/04/todo/templates/todo.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f888a42dda3f0_38493722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d79c10444eae101581a8cb9bde255c2adc32509' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/WebProg_Exercise/04/todo/templates/todo.html',
      1 => 1602783770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f888a42dda3f0_38493722 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>サクッとTODO管理</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>サクッとTODO管理</h1>
    <h2>締め切りオーバー</h2>
    <ul class="todo-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['todo_over_list']->value, 'todo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['todo']->value) {
?>
            <li class="over"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['todo']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
 (~<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['todo']->value['date'], ENT_QUOTES, 'UTF-8', true);?>
) </li>
        <?php
}
} else {
?>
            <li>締め切りを過ぎたTODOはありません</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <h2>今日以降の締め切り</h2>
    <ul class="todo-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['todo_upcoming_list']->value, 'todo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['todo']->value) {
?>
            <li class="upcoming"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['todo']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
 (~<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['todo']->value['date'], ENT_QUOTES, 'UTF-8', true);?>
) </li>
        <?php
}
} else {
?>
            <li>今後予定されているTODOはありません</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</body>
</html> 




<?php }
}
<?php
/* Smarty version 4.3.2, created on 2023-07-27 23:34:42
  from 'D:\xampp_master\htdocs\medano-solution\smarty-test\smarty\templates\include\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64c2f102a48ff6_79576180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c65cfe25f967f46b81a7d3e269c87d4ca43be266' => 
    array (
      0 => 'D:\\xampp_master\\htdocs\\medano-solution\\smarty-test\\smarty\\templates\\include\\header.tpl',
      1 => 1690456938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64c2f102a48ff6_79576180 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="main">
<header>
  <div class="wrapper">
    <h2>
      <a href="?action="><?php echo $_smarty_tpl->tpl_vars['env']->value['website_logo_title'];?>
</a>
    </h2>
    <nav class="nav-desktop">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['env']->value['website_sections'], 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
        <a 
        <?php if ($_GET['action'] == $_smarty_tpl->tpl_vars['section']->value) {?>
          class="navbar-brand selected-button"
        <?php } else { ?>
          class="navbar-brand"
        <?php }?>
        href="?action=<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
">
          <?php if ($_smarty_tpl->tpl_vars['section']->value == '') {?> 
          home 
          <?php } else { ?> 
          <?php echo $_smarty_tpl->tpl_vars['section']->value;?>
 
          <?php }?>
        </a>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </nav>
    <nav class="nav-mobile">
      <button id="mobile-burger-button"><span class="glyphicon glyphicon-list"></span></button>
            <div id="responsive-menu" class="mobile-menu-content">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['env']->value['website_sections'], 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
          <a 
          <?php if ($_GET['action'] == $_smarty_tpl->tpl_vars['section']->value) {?>
            class="navbar-brand selected-button"
          <?php } else { ?>
            class="navbar-brand"
          <?php }?>
          href="?action=<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
">
            <?php if ($_smarty_tpl->tpl_vars['section']->value == '') {?> 
            home 
            <?php } else { ?> 
            <?php echo $_smarty_tpl->tpl_vars['section']->value;?>
 
            <?php }?>
          </a>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            </div>
    </nav>
  </div>
</header>
  <?php }
}

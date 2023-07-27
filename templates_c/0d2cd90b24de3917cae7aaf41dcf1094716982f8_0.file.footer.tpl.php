<?php
/* Smarty version 4.3.2, created on 2023-07-28 00:02:50
  from 'D:\xampp_master\htdocs\medano-solution\smarty-test\smarty\templates\include\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64c2f79ae40c45_72598275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d2cd90b24de3917cae7aaf41dcf1094716982f8' => 
    array (
      0 => 'D:\\xampp_master\\htdocs\\medano-solution\\smarty-test\\smarty\\templates\\include\\footer.tpl',
      1 => 1690498969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64c2f79ae40c45_72598275 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['baseurl']->value))) {?>
  <?php $_smarty_tpl->_assignInScope('baseurl', '');
}?>

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "my.conf", null, 0);
?>

        <footer>
          <nav>
            <h2>
              <a href="?action="><?php echo $_smarty_tpl->tpl_vars['env']->value['website_logo_title'];?>
</a>
            </h2>
            <div class="section">
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['env']->value['website_sections'], 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
                <a class="navbar-brand col" href="?action=<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
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
          <small> <a href="">Legal</a> | <a href="">Privacy Policy </a> <a href="https://medanosol.es/en"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageMemory');?>
</a></small>
        </footer>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
js/jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
js/bootstrap.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
          $('.carousel').carousel();
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" defer src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
js/main.js"><?php echo '</script'; ?>
>
    </div>     
  </body>
</html><?php }
}

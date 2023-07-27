<?php
/* Smarty version 4.3.2, created on 2023-07-28 00:11:35
  from 'D:\xampp_master\htdocs\medano-solution\smarty-test\smarty\templates\pages\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64c2f9a790cf69_23168628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6003b6604264b0569bac9e135934680266780c72' => 
    array (
      0 => 'D:\\xampp_master\\htdocs\\medano-solution\\smarty-test\\smarty\\templates\\pages\\contact.tpl',
      1 => 1690499491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/meta.tpl' => 1,
    'file:include/header.tpl' => 1,
    'file:include/footer.tpl' => 1,
  ),
),false)) {
function content_64c2f9a790cf69_23168628 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp_master\\htdocs\\medano-solution\\smarty-test\\smarty\\smarty_plugins\\function.validation.php','function'=>'smarty_function_validation',),));
$_smarty_tpl->_subTemplateRender('file:include/meta.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:include/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_assignInScope('treatmentOptions', array('Mr','Mrs','Miss','Ms'));?>
    <section class="container">
        <div class="generic-container generic-container-medium">
            <h1>Generic Container</h1>
            <a href="" >Generic button</a>
        </div>
        <div class="generic-wrapped-container generic-wrapped-container-medium">
            <div class="left-container">
              <h1> Wrapped container medium sized </h1>
              <span> 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec tristique mattis dolor ac bibendum. Morbi euismod maximus diam, et placerat mauris finibus non. 
                Donec fermentum a tortor nec pretium. Aenean tristique eleifend fringilla. 
              </span>
              <a href=""> Link Button </a>
            </div>
            <div class="right-container">
            </div>
        </div>
    </section>
    <section class="container">
        <div class="form-wrapper">
                        <form class="form-group" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=contact" method="POST">
                <h1>Contact Form</h1>
                <label for="email">Email address*</label>
                <input class="form-control" type="email" name="email" value="" required>
                <label for="treatment">Treatment</label>
                <select class="form-control" name="treatment" required>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['treatmentOptions']->value, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <label for="message">Your message*</label>
                <textarea class="form-control" name="message" value="test"></textarea>

                                <?php if (((isset($_POST['email'])) && (isset($_POST['message'])) && !empty($_POST['message']))) {?>
                    <?php $_smarty_tpl->_assignInScope('email', $_POST['email']);?>
                    <?php $_smarty_tpl->_assignInScope('message', $_POST['message']);?>
                    <?php $_smarty_tpl->_assignInScope('treatment', $_POST['treatment']);?>
                    <?php echo smarty_function_validation(array('email'=>$_smarty_tpl->tpl_vars['email']->value,'message'=>$_smarty_tpl->tpl_vars['message']->value,'treatment'=>$_smarty_tpl->tpl_vars['treatment']->value),$_smarty_tpl);?>

                <?php } else { ?>
                    <p id="validation"  style="color: black">
                        Please enter the provided information.
                    </p>
                <?php }?>
       
                
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>

            </form>
                                    <div class="image-form">
                <h2>Let's talk</h2>
                <p>
                    <i class="glyphicon glyphicon-comment"></i> 
                    <a href="https://wa.me/<?php echo $_smarty_tpl->tpl_vars['env']->value['website_contact_phone'];?>
">+<?php echo $_smarty_tpl->tpl_vars['env']->value['website_contact_phone'];?>
</a>
                </p>
                <p> 
                    <i class="glyphicon glyphicon-envelope"></i>
                    <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['env']->value['website_contact_email'];?>
"><?php echo $_smarty_tpl->tpl_vars['env']->value['website_contact_email'];?>
</a>
                </p>
            </div>
                    
        </div>

        <div class="generic-container-text-center generic-container-small">
            <h2>Generic Container with Text Sample Title</h2>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Donec tristique mattis dolor ac bibendum. Morbi euismod maximus diam, et placerat mauris finibus non. 
            Donec fermentum a tortor nec pretium. Aenean tristique eleifend fringilla. 
            
            </span>
            <a href="" >Generic button</a>
        </div>
       
    </section>
<?php $_smarty_tpl->_subTemplateRender('file:include/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

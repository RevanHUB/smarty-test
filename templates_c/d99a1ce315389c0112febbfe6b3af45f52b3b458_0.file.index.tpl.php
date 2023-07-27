<?php
/* Smarty version 4.3.2, created on 2023-07-27 23:34:42
  from 'D:\xampp_master\htdocs\medano-solution\smarty-test\smarty\templates\pages\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64c2f1029f2bf3_73885322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd99a1ce315389c0112febbfe6b3af45f52b3b458' => 
    array (
      0 => 'D:\\xampp_master\\htdocs\\medano-solution\\smarty-test\\smarty\\templates\\pages\\index.tpl',
      1 => 1690465884,
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
function content_64c2f1029f2bf3_73885322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:include/meta.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:include/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_assignInScope('default_banner', "0");?>
      <section class="container">
        <div class="generic-wrapped-container generic-wrapped-container-big">
          <div class="left-container">
            <h1> Wrapped container big sized </h1>
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
        <!--  Carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value['banners'], 'banner', false, 'k');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
              <li data-target="#myCarousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value == $_smarty_tpl->tpl_vars['default_banner']->value) {?>class="active"<?php }?>></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ol>
            <div class="carousel-inner">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value['banners'], 'banner', false, 'k');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
              <div class="item <?php if ($_smarty_tpl->tpl_vars['k']->value == $_smarty_tpl->tpl_vars['default_banner']->value) {?>active<?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['link']['href'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['link']['target'];?>
">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['banner_src'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['alt'];?>
">
                </a>
                </p>
                  <h1 class="carousel-caption"><?php echo $_smarty_tpl->tpl_vars['banner']->value['title'];?>
</h1>
              </div>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div><!-- .carousel-inner -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div><!-- .carousel -->
        <!-- end carousel -->
    
      </section>

      <section class="container">
        <div class="generic-wrapped-container generic-wrapped-container-small">
            <div class="left-container">
              <h1> Wrapped container small sized </h1>
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
      <div class="generic-container generic-container-big">
        <h1>Generic Container</h1>
        <span>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Donec tristique mattis dolor ac bibendum. Morbi euismod maximus diam, et placerat mauris finibus non. 
          Donec fermentum a tortor nec pretium. Aenean tristique eleifend fringilla. 
        </span>
        <a href="" >Generic button</a>
      </div>
    </section>

    <section class="container">
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
   
<?php $_smarty_tpl->_subTemplateRender('file:include/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

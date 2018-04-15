<?php
/* Smarty version 3.1.32-dev-45, created on 2018-04-15 13:44:33
  from 'F:\projects\SERVER\WAMP\apache2\htdocs\Smarty-Angular-Project\Views\incs\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-45',
  'unifunc' => 'content_5ad3b9b18a9585_94117850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbbebd41657401ac0331690695eeb60d96e2d179' => 
    array (
      0 => 'F:\\projects\\SERVER\\WAMP\\apache2\\htdocs\\Smarty-Angular-Project\\Views\\incs\\footer.tpl',
      1 => 1523825070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad3b9b18a9585_94117850 (Smarty_Internal_Template $_smarty_tpl) {
?><footer>
    <section class="f-container">
        <section class="left-f">
            <section class="top-logo">
                <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/Views/img/logo.png">
                <span>Extreme Web Technologies</span>
            </section>

            <section class="f-detail">
                <p>We are a web hosting company aimed at providing top notch quality web hosting and domain registration with exceptional 24/7
                    friendly customer service with our dedicated customer happiness team for clients of all sizes.</p>

                <p>&copy <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 Extreme Web Technologies</p>
            </section>
        </section>
        <section class="right-f">
            <section class="left-r-f">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="">Web solutions</a></li>
                    <li><a href="">Domains</a></li>
                    <li><a href="">Web hosting</a></li>
                    <li><a href="">Reseller hosting</a></li>
                    <li><a href="">SSL certificates</a></li>
                    <li><a href="">Business emails</a></li>
                </ul>
            </section>
            <section class="right-r-f">
                <ul>
                    <li><a href="">contact us</a></li>
                    <li><a href="">Support</a></li>
                    <li><a href="">About us</a></li>
                </ul>
            </section>
        </section>
    </section>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/views/javascript/angular/angular.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/views/javascript/index.js"><?php echo '</script'; ?>
>
</footer>
</body>
</html><?php }
}

<?php
/* Smarty version 3.1.32-dev-45, created on 2018-04-15 16:44:28
  from 'F:\projects\SERVER\WAMP\apache2\htdocs\Smarty-Angular-Project\Views\incs\layout-home-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-45',
  'unifunc' => 'content_5ad3e3dc5ec954_04774533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b16eeefee62283942fc7e33b5b87659884c9a88f' => 
    array (
      0 => 'F:\\projects\\SERVER\\WAMP\\apache2\\htdocs\\Smarty-Angular-Project\\Views\\incs\\layout-home-header.tpl',
      1 => 1523835865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad3e3dc5ec954_04774533 (Smarty_Internal_Template $_smarty_tpl) {
?><header ng-model="header">
    <section class="header">
        <section class="header-dvs">
            <section class="div00"></section>
            <section class="div01"></section>
            <section class="div03"></section>
            <section class="div04"></section>
            <section class="div05"></section>
            <section class="div06"></section>

            <section class="frameworks">
                <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/views/img/frameworks.png"></a>
            </section>
        </section>
        <span class="white-header"></span>
    </section>

    <section class="main-header">
        <section class="main-header-wrapper">
            <section class="lg"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/Views/img/logo.png" class="logo-img"></a></section>

            <nav class="navi" >
                <ul>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">Home</a>
                    </li>

                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/domains/">Domains</a>
                    </li>
                    <li ng-mouseenter="showService()" ng-mouseleave="hideService()" class="serv">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/web-hosting/" >Web Hosting <i class="fa fa-caret-down" ></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/reseller-hosting/">Reseller Hosting</a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/ssl/">SSL Certificates</a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/emails/">Business Emails</a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/solutions/">Web Solution</a>
                    </li>
                </ul>

                <section class="wh-services" ng-mouseenter="showService()" ng-mouseleave="hideService()">
                    <section class="wh-top"><h3>Our <b>Services</b></h3></section>
                    <section class="wh-middle">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/wordpress/" class="serv1">
                            <i class="fa fa-wordpress"></i>
                            wordpress
                        </a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/drupal/" class="serv2">
                            <i class="fa fa-drupal"></i>
                            drupal
                        </a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/dedicated/" class="serv3">
                            <i class="fa fa-server"></i>
                            dedicated hosting
                        </a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/cloud/" class="serv4">
                            <i class="fa fa-cloud"></i>
                            cloud hosting
                        </a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/service/" class="serv4">
                            <i class="fa fa-heart-o"></i>
                            services
                        </a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/purchase/" class="serv4">
                            <i class="fa fa-money"></i>
                            purchase
                        </a>
                    </section>
                </section>
            </nav>
        </section>

        <section class="buttons">
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/login/" class="login">Login</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/login/" class="signup">Sign up</a>
        </section>

        <section class="hearder-contents">
            <section class="c-wrapper">
                <section class="c-title">
                    <h3>Are you ready? jus choose your domain</h3>
                    <p>First Month Free Web Hosting! Register your perfect web address on .TZ and get one month of free web hosting — any plan! </p>
                </section>
                <section class="d-search">
                    <form class="domain-search" autocomplete="off" onsubmit="return false">
                        <input class="search" type="text" placeholder="Type your domain name here...">
                        <section class="serb">search</section>
                    </form>
                    <section class="d-price">
                        <a href="#">
                            <span><i class="fa fa-circle"> </i>Com</span>
                            <span>35000 Tsh</span>
                        </a>
                        <a href="#">
                            <span><i class="fa fa-circle"> </i>Co.tz</span>
                            <span>25000 TZS</span>
                        </a>
                        <a href="#">
                            <span><i class="fa fa-circle"> </i>net</span>
                            <span>35000 TZS</span>
                        </a>
                        <a href="#">
                            <span><i class="fa fa-circle"> </i>org</span>
                            <span>35000 TZS</span>
                        </a>
                    </section>
                </section>
            </section>
        </section>
    </section>
</header><?php }
}

<header ng-model="header">
    <section class="header">
        <section class="header-dvs">
            <section class="div00"></section>
            <section class="div01"></section>
            <section class="div03"></section>
            <section class="div04"></section>
            <section class="div05"></section>
            <section class="div06"></section>

            <section class="frameworks">
                <a href="#"><img src="{$url}/views/img/frameworks.png"></a>
            </section>
        </section>
        <span class="white-header"></span>
    </section>

    <section class="main-header">
        <section class="main-header-wrapper">
            <section class="lg"><a href="{$url}"><img src="{$url}/Views/img/logo.png" class="logo-img"></a></section>

            <nav class="navi" >
                <ul>
                    <li>
                        <a href="{$url}">Home</a>
                    </li>

                    <li>
                        <a href="{$url}/domains/">Domains</a>
                    </li>
                    <li ng-mouseenter="showService()" ng-mouseleave="hideService()" class="serv">
                        <a href="{$url}/web-hosting/" >Web Hosting <i class="fa fa-caret-down" ></i></a>
                    </li>
                    <li>
                        <a href="{$url}/reseller-hosting/">Reseller Hosting</a>
                    </li>
                    <li>
                        <a href="{$url}/ssl/">SSL Certificates</a>
                    </li>
                    <li>
                        <a href="{$url}/emails/">Business Emails</a>
                    </li>
                    <li>
                        <a href="{$url}/solutions/">Web Solution</a>
                    </li>
                </ul>

                <section class="wh-services" ng-mouseenter="showService()" ng-mouseleave="hideService()">
                    <section class="wh-top"><h3>Our <b>Services</b></h3></section>
                    <section class="wh-middle">
                        <a href="{$url}/wordpress/" class="serv1">
                            <i class="fa fa-wordpress"></i>
                            wordpress
                        </a>
                        <a href="{$url}/drupal/" class="serv2">
                            <i class="fa fa-drupal"></i>
                            drupal
                        </a>
                        <a href="{$url}/dedicated/" class="serv3">
                            <i class="fa fa-server"></i>
                            dedicated hosting
                        </a>
                        <a href="{$url}/cloud/" class="serv4">
                            <i class="fa fa-cloud"></i>
                            cloud hosting
                        </a>
                        <a href="{$url}/service/" class="serv4">
                            <i class="fa fa-heart-o"></i>
                            services
                        </a>
                        <a href="{$url}/purchase/" class="serv4">
                            <i class="fa fa-money"></i>
                            purchase
                        </a>
                    </section>
                </section>
            </nav>
        </section>

        <section class="buttons">
            <a href="{$url}/login/" class="login">Login</a>
            <a href="{$url}/login/" class="signup">Sign up</a>
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
</header>
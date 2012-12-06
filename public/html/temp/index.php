<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <?php if ((bool)strpos($_SERVER['HTTP_USER_AGENT'],'iPad')): ?>
            <meta name="viewport" content="width=device-width, user-scalable=no">
        <?php else: ?>
            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <?php endif; ?>

		<meta name="apple-mobile-web-app-capable" content="yes"> 
        
        <title>NSP</title>
        
        <link rel="stylesheet" href="css/style.css">
        
        <!--[if lt IE 9]>
            <link rel="stylesheet" href="css/ie.css">
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <header>
            <div class="container">
                <div class="logo"><a href="#"><img src="img/non-standard-pallets.png" alt="Non Standard Pallets - Non-standard, special, customized - these are all descriptive words for wood pallets we specialize in. Will be happy to produce them for you!"></a></div>
                <nav>
                    <a data-target="who-we-are">Who we are</a>
                    <a data-target="what-we-do">What we do</a>
                    <a data-target="completed-projects">Our works</a>
                    <a data-target="meet-the-team">The team</a>
                    <a data-target="contact-us">Contact us</a>
                </nav>
            </div>
        </header>
        
        <div id="wrapper">
            <section class="who-we-are" id="who-we-are">
                <div class="container">
                    <div class="text">
                        <h2>Who we are</h2>
                        <h1>Non-standard, special, customized - these are all descriptive words for wood pallets we specialize in. Will be happy to produce them for you!</h1>
                        <a data-target="contact-us" class="nav">Contact us</a>
                        <span>or scroll down to learn more</span>
                    </div>
                    <img src="img/who-we-are-image.png" alt="" class="image">
                </div>
            </section>
            
            <section class="what-we-do" id="what-we-do">
                <div class="container">
                    <h1>Why to work with us</h1>
                    <ul>
                        <li>
                            <img src="img/what-we-do-1.png" alt="">
                            <h2>NON STANDARD PaLLETS ONLY</h2>
                            We specialize only on non standart pallets. Your order will be always a priority for us.
                        </li>
                        <li>
                            <img src="img/what-we-do-2.png" alt="">
                            <h2>CUSTOMIZED PALLET SOLUTIONS</h2>
                            We can propose technical drawing of pallet that fits your pruduct best.
                        </li>
                        <li>
                            <img src="img/what-we-do-3.png" alt="">
                            <h2>USE OF RECYCLED MATERIALS</h2>
                            We care about environment and use parts of recycled pallets where possible.
                        </li>
                        <li>
                            <img src="img/what-we-do-4.png" alt="">
                            <h2>EXCELLENT LOGISTIC</h2>
                            We are situated in one of logistic hubs of Europe. Good prices and trucks availability guaranteed.
                        </li>
                        <li class="clear"></li>
                        <li>
                            <img src="img/what-we-do-5.png" alt="">
                            <h2>HT DRYING</h2>
                            Heat treatment cameras available.
                        </li>
                        <li>
                            <img src="img/what-we-do-6.png" alt="">
                            <h2>LIMITED EDITIONS</h2>
                            Minimal order = 1 piece.
                        </li>
                        <li>
                            <img src="img/what-we-do-7.png" alt="">
                            <h2>FAST SERVICE</h2>
                            To service you as fast as possible is our mantra.
                        </li>
                        <li>
                            <img src="img/what-we-do-8.png" alt="">
                            <h2>YOUR LOGO ON PALLET</h2>
                            By your request, we can burn any logo on ready products.
                        </li>
                    </ul>
                </div>
            </section>
            
            <section class="completed-projects" id="completed-projects">
                <div class="container" data-toggle="portfolio">
                    <div class="switch">
                        <a class="active">sketch</a>
                        <b><a></a></b>
                        <a>result</a>
                    </div>
                    <h1>Completed projects</h1>
                    <div class="slider">
                        <ul>
                            <li>
                                <div class="result">
                                    <i></i>
                                    <img src="img/portfolio-3-real.png" alt="">
                                </div>
                                <div class="sketch">
                                    <i></i>
                                    <img src="img/portfolio-3.png" alt="">
                                </div>
                                <div class="text">
                                    <h2>Non-standard wood pallets for oversized cargo</h2>
                                    <p>Wooden nonstandard pallet for transportation of oversized cargo. Made of dried wood. Sealed with grooved nails. ISPM15 treatment.</p>
                                </div>
                            </li>
                            <li>
                                <div class="result">
                                    <i></i>
                                    <img src="img/portfolio-2-real.png" alt="">
                                </div>
                                <div class="sketch">
                                    <i></i>
                                    <img src="img/portfolio-2.png" alt="">
                                </div>
                                <div class="text">
                                    <h2>Custom made wooden anti-recoil wedges</h2>
                                    <p>Wooden anti-recoil wedges, ordered for chemicals bottling plant. Made of  solid wood. Heat Treated.</p>
                                </div>
                            </li>
                            <li>
                                <div class="result">
                                    <i></i>
                                    <img src="img/portfolio-1-real.png" alt="">
                                </div>
                                <div class="sketch">
                                    <i></i>
                                    <img src="img/portfolio-1.png" alt="">
                                </div>
                                <div class="text">
                                    <h2>Heat treated special wooden shipping unit</h2>
                                    <p>Special wooden product ordered for metalworking manufacturers. Made of solid wood. Sealed with grooved nails.</p>
                                </div>
                            </li>
                            <li>
                                <div class="result">
                                    <i></i>
                                    <img src="img/portfolio-4-real.png" alt="">
                                </div>
                                <div class="sketch">
                                    <i></i>
                                    <img src="img/portfolio-4.png" alt="">
                                </div>
                                <div class="text">
                                    <h2>Custom pallets for industrial motors</h2>
                                    <p>Wooden customized pallets for safe transportation of industrial electric motors. Made of laminated wooden beam and solid wood, fastened with metal bolts. ISPM15 certified.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            
            <section class="meet-the-team" id="meet-the-team">
                <div class="container">
                    <h1>meet the team</h1>
                    <p>
                        We are a small team of professionals, specializing in non-standard wood pallets.<br>Very responsible, efficient and trying hard for a long-term partnership.
                    </p>
                    <ul>
                        <li>
                            <img src="img/team-1.jpg" alt="">
                            <h2>Arunas</h2>
                            Senior Product Maker
                        </li>
                        <li>
                            <img src="img/team-2.jpg" alt="">
                            <h2>Vaidas</h2>
                            Product Maker
                        </li>
                        <li>
                            <img src="img/team-3.jpg" alt="">
                            <h2>Egidius</h2>
                            Product Maker
                        </li>
                        <li>
                            <img src="img/team-4.jpg" alt="">
                            <h2>Jonas</h2>
                            Engineer
                        </li>
                        <li>
                            <img src="img/team-5.jpg" alt="">
                            <h2>Sergey</h2>
                            Trade &amp; Logistics, Partner
                        </li>
                    </ul>
                </div>
            </section>
            
            <section class="contact-us" id="contact-us">
                <div class="container">
                    <div id="map">
                    
                        <a style="left: 473px; top: 235px;" title="Helsinki, Finland"><b><i>Helsinki</i>700 km<br>Cost &euro;1,250 (per truck)</b></a>
                        
                        <a style="left: 474px; top: 253px;" title="Tallinn, Estonia"><b><i>Tallin</i>600 km<br>Cost &euro;550 (per truck)</b></a>
                        
                        <a style="left: 480px; top: 305px;" title="Riga, Latvia"><b><i>Riga</i>300 km<br>Cost &euro;220 (per truck)</b></a>
                        
                        <a style="left: 404px; top: 265px;" title="Stockholm, Sweden"><b><i>Stockholm</i>1,100 km<br>Cost &euro;1,250 (per truck)</b></a>
                        
                        <a style="left: 325px; top: 267px;" title="Oslo, Norway"><b><i>Oslo</i>1,700 km<br>Cost &euro;1,750 (per truck)</b></a>
                        
                        <a style="left: 348px; top: 347px;" title="Copenhagen, Denmark"><b><i>Copenhagen</i>1,200 km<br>Cost &euro;1,450 (per truck)</b></a>
                        
                        <a style="left: 455px; top: 410px;" title="Warsaw, Poland"><b><i>Warsaw</i>500 km<br>Cost &euro;350 (per truck)</b></a>
                        
                        <a style="left: 360px; top: 415px;" title="Berlin, Germany"><b><i>Berlin</i>1,100 km<br>Cost &euro;850 (per truck)</b></a>
                        
                        
                        
                        <!--a style="left: 329px; top: 476px;" title="Nuremberg, Germany"><b><i>Nuremberg</i>1,600 km<br>Cost &euro;560 (per truck)</b></a>
                    
                        <a style="left: 335px; top: 499px;" title="Augsburg, Germany"><b><i>Augsburg</i>1,400 km<br>Cost &euro;560 (per truck)</b></a-->
                    
                    
                    
                        <a style="left: 337px; top: 498px;" title="Munich, Germany"><b><i>Munich</i>1,600 km<br>Cost &euro;900 (per truck)</b></a>
                    
                        <a style="left: 306px; top: 404px;" title="Bremen, Germany"><b><i>Bremen</i>1,400 km<br>Cost &euro;750 (per truck)</b></a>
                        
                    
                        
                        <a style="left: 253px; top: 414px;" title="Amsterdam, Netherlands"><b><i>Amsterdam</i>1,700 km<br>Cost &euro;750 (per truck)</b></a>
                        
                        <a style="left: 244px; top: 447px;" title="Brussels, Belgium"><b><i>Brussels</i>1,800 km<br>Cost &euro;900 (per truck)</b></a>
                        
                        <a style="left: 385px; top: 470px;" title="Prague, Czech Republic"><b><i>Prague</i>1,200 km<br>Cost &euro;650 (per truck)</b></a>
                        
                        <a style="left: 405px; top: 495px;" title="Vienna, Austria"><b><i>Vienna</i>1,200 km<br>Cost &euro;950 (per truck)</b></a>
                        
                        <a style="left: 425px; top: 500px;" title="Bratislava, Slovakia"><b><i>Bratislava</i>1,200 km<br>Cost &euro;950 (per truck)</b></a>
                        
                        <a style="left: 219px; top: 490px;" title="Paris, France"><b><i>Paris</i>2,100 km<br>Cost &euro;1,550 (per truck)</b></a>
                        
                        <a style="left: 235px; top: 476px;" title="Rheims, France"><b><i>Rheims</i>2,000 km<br>Cost &euro;1,450 (per truck)</b></a>
                        
                        <a style="left: 308px; top: 562px;" title="Milan, Italy"><b><i>Milan</i>2,100 km<br>Cost &euro;1,100 (per truck)</b></a>
                        
                        <a style="left: 360px; top: 635px;" title="Rome, Italy"><b><i>Rome</i>2,300 km<br>Cost &euro;1,450 (per truck)</b></a>
                        
                        <a style="left: 392px; top: 657px;" title="Naples, Italy"><b><i>Naples</i>2,500 km<br>Cost &euro;1,450 (per truck)</b></a>
                        
                        <a style="left: 110px; top: 650px;" title="Madrid, Spain"><b><i>Madrid</i>3,300 km<br>Cost &euro;1,700 (per truck)</b></a>
                        
                        <a style="left: 194px; top: 640px;" title="Barcelona, Spain"><b><i>Barcelona</i>2,900 km<br>Cost &euro;2,200 (per truck)</b></a>
                        
                        <!--a style="left: 190px; top: 430px;" title="London, United Kingdom"><b><i>Barcelona</i>2,849 km<br>Cost &euro;560 (per truck)</b></a>
                        
                        <a style="left: 460px; top: 605px;" title="Podgorica, Montenegro"><b><i>Barcelona</i>2,849 km<br>Cost &euro;560 (per truck)</b></a>
                        
                        <a style="left: 415px; top: 550px;" title="Zagreb, Croatia"><b><i>Barcelona</i>2,849 km<br>Cost &euro;560 (per truck)</b></a>
                        
                        <a style="left: 510px; top: 625px;" title="Skopje, Macedonia"><b><i>Barcelona</i>2,849 km<br>Cost &euro;560 (per truck)</b></a>
                        
                        <a style="left: 455px; top: 515px;" title="Budapest, Hungary"><b><i>Barcelona</i>2,849 km<br>Cost &euro;560 (per truck)</b></a>
                        
                        <a style="left: 385px; top: 470px;" title="Prague, Czech Republic"><b><i>Barcelona</i>2,849 km<br>Cost &euro;560 (per truck)</b></a>
                        
                        <a style="left: 480px; top: 570px;" title="Belgrade, Serbia"><b><i>Barcelona</i>2,849 km<br>Cost &euro;560 (per truck)</b></a>
                        
                        <a style="left: 383px; top: 543px;" title="Ljubljana, Slovenia"><b><i>Barcelona</i>2,849 km<br>Cost &euro;560 (per truck)</b></a>
                        
                        <a style="left: 253px; top: 414px;" title="Amsterdam, Netherlands"><b><i>Barcelona</i>2,849 km<br>Cost &euro;560 (per truck)</b></a>
                        
                        <a style="left: 441px; top: 582px;" title="Sarajevo, Bosnia and Herzegovina"><b><i>Barcelona</i>2,849 km<br>Cost &euro;560 (per truck)</b></a>
                        
                        <a style="left: 120px; top: 376px;" title="Dublin, Republic of Ireland"><b><i>Barcelona</i>2,849 km<br>Cost &euro;560 (per truck)</b></a>
                        
                        <a style="left: 6px; top: 663px;" title="Lisbon, Portugal"><b><i>Barcelona</i>2,849 km<br>Cost &euro;560 (per truck)</b></a>
                        
                        <a style="left: 284px; top: 529px;" title="Bern, Switzerland"><b><i>Barcelona</i>2,849 km<br>Cost &euro;560 (per truck)</b></a>
                        
                        <a style="left: 267px; top: 473px;" title="Luxembourg City, Luxembourg"><b><i>Barcelona</i>2,849 km<br>Cost &euro;560 (per truck)</b></a>
                        
                        <a style="left: 474px; top: 645px;" title="Tirana, Albania"><b><i>Barcelona</i>2,849 km<br>Cost &euro;560 (per truck)</b></a-->
                        
                        <span><b>Vilnius</b></span>
                    </div>
                    <h1>contact us</h1>
                    <p>We are based in Lithuania - one of the most intensive transport hubs of EU. You will be very surprised at how cheap the prices for trucks from Vilnius (LT) to any other of EU countries can be and how fast delivery can be organized.</p>
                    <div class="phone"><a href="tel:+370 60186129">+370 60186129</a></div>
                    <a href="mailto:info@nonstandartpallets.com" class="email">info@nonstandartpallets.com</a>
                    <div class="copyright">
                        <span>&copy;</span> 2012 non standart pallets
                        <small>Prices are updated quarterly and can be used only as reference. Exact prices are always a matter of specific discussion.</small>
                    </div>
                </div>
            </section>
            
            <div id="content"></div>
        </div>
        
        <script src="js/lib/raphael.js"></script>
        <script data-main="js/app.js" src="js/lib/require.js"></script>
    </body>
</html>
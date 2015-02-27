<?php
use frontend\assets\AppAsset;

/* @var $this yii\web\View */
$this->title = 'Samokhvalov Aleksey - CV';

//$this->registerCssFile('/css/bootstrap.css');
$this->registerCssFile('/css/font-awesome.css');
$this->registerCssFile('/css/main.css', ['depends' => [\yii\bootstrap\BootstrapAsset::className()]]);
$this->registerJsFile('/js/scripts.js', ['depends' => [\yii\web\JqueryAsset::className()]]);

FancyBox::widget([
    'target' => '.fancybox',
    'options' => [
        'loop' => false,
        'padding' => 0,
        'margin' => [15, 15, 60, 15],
        'afterLoad' => new JsExpression(
            "function() {
                console.log(1);
                var list = $('#links');
                if (!list.length) {    
                    list = $('<ul id=\"links\">');
                    for (var i = 0; i < this.group.length; i++) {
                        $('<li data-index=\"' + i + '\"><label></label></li>').click(function() { $.fancybox.jumpto( $(this).data('index'));}).appendTo( list );
                    }
                    list.appendTo('body');
                }
                list.find('li').removeClass('active').eq( this.index ).addClass('active');
            }"
        ),
//        'afterLoad' => "function() {
//            console.log(1);
//            var list = $('#links');
//            if (!list.length) {    
//                list = $('<ul id=\"links\">');
//                for (var i = 0; i < this.group.length; i++) {
//                    $('<li data-index=\"' + i + '\"><label></label></li>').click(function() { $.fancybox.jumpto( $(this).data('index'));}).appendTo( list );
//                }
//                list.appendTo('body');
//            }
//            list.find('li').removeClass('active').eq( this.index ).addClass('active');
//        }",
        'beforeClose' => "function() {
            $('#links').remove();
        }",
    ],
]);
?>

<div class="row">
    <div class="col-xs-12">
        <a href="/" class="flag">
            <img src="/img/Russia.png">
        </a>
        
        <div id="photo-header" class="text-center">
            <!-- PHOTO (AVATAR) -->
            <div id="photo">
                <img src="/img/samokhvalov-aleksey-alejka-studio.jpg" alt="avatar">
            </div>
            <div id="text-header">
                <h1>Hello,<br> my name is <span>Samokhvalov Aleksey</span><br> <span class="international-name">// Alex in English</span></h1>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-7">
        <!-- ABOUT ME -->
        <div class="box">
            <h2>About Me</h2>
            <p>
                I am experienced and professional web developer from Ukraine. I have over 4 years experience of web development and many completed projects. And this is my CV.
            </p>
        </div>
        <!-- CONTACT -->
        <div class="box">
            <h2>Contact</h2>
            <div class="contact-item">
                <div class="icon pull-left text-center"><span class="fa fa-map-marker fa-fw"></span></div>
                <div class="title pull-right">Location</div>
                <div class="description pull-right">Ukraine, Severodonetsk</div>
            </div>
            <div class="contact-item">
                <div class="icon pull-left text-center"><span class="fa fa-envelope fa-fw"></span></div>
                <div class="title only pull-right">samokhvalov.studio@gmail.com</div>
            </div>
            <div class="contact-item">
                <div class="icon pull-left text-center"><span class="fa fa-phone fa-fw"></span></div>
                <div class="title only pull-right">+380668035599</div>
            </div>
            <div class="contact-item">
                <div class="icon pull-left text-center"><span class="fa fa-skype fa-fw"></span></div>
                <div class="title pull-right">Skype</div>
                <div class="description pull-right">alekseys.sc</div>
            </div>
            <div class="contact-item">
                <div class="icon pull-left text-center"><span class="fa fa-facebook fa-fw"></span></div>
                <div class="title pull-right">Facebook</div>
                <div class="description pull-right">
                    <a href="https://www.facebook.com/aleksey.samohvalov.75" target="_blank">https://www.facebook.com/aleksey.samohvalov.75</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- EDUCATION -->
        <div class="box">
            <h2>Education</h2>
            <ul id="education" class="clearfix">
                <li>
                    <div class="year pull-left">2009</div>
                    <div class="description pull-right">
                        <h3>Regional state education institution "Severodonetsk Higher Vocational School"</h3>
                        <p>Maintenance of computer and intellectual systems and networks.</p>
                    </div>
                </li>
                <li>
                    <div class="year pull-left">2011</div>
                    <div class="description pull-right">
                        <h3>Technological Institute of East Ukraine Volodymyr Dahl National University</h3>
                        <p>System Programming, Computer Engineering Faculty.</p>
                    </div>
                </li>
            </ul>
        </div>
        <!-- EXPERIENCES -->
        <div class="box">
            <h2>Experiences</h2>
            <div class="job clearfix">
                <div class="col-xs-3">
                    <div class="where">Selims</div>
                    <div class="year">2014</div>
                </div>
                <div class="col-xs-9">
                    <div class="profession">Web developer</div>
                    <div class="description">
                        <div>
                            National settlement service. More than 250 operators working with clients. More than 7000 clients every month.
                        </div>
                        <div>
                            <strong>Duties:</strong> developing CRM, developing API, working with main site: backend, frontend and mobile.
                        </div>
                    </div>
                </div>
            </div>
            <div class="job clearfix">
                <div class="col-xs-3">
                    <div class="where">The Center for Scientific and Political Thought and Ideology</div>
                    <div class="year">2013 - 2014</div>
                </div>
                <div class="col-xs-9">
                    <div class="profession">Web developer</div>
                    <div class="description">
                        <div>
                            The Center for Scientific and Political Thought and Ideology is a scientific project development organization, open to the public, which has set before itself a number of distinct objectives.
                        </div>
                        <div>
                            <strong>Duties:</strong> working with main site: CSS design and programming.
                        </div>
                    </div>
                </div>
            </div>
            <div class="job clearfix">
                <div class="col-xs-3">
                    <div class="where">CFutures</div>
                    <div class="year">2012 - 2014</div>
                </div>
                <div class="col-xs-9">
                    <div class="profession">Web developer</div>
                    <div class="description">
                        <div>
                            CFutures – IT company that provides a wide range of IT services.
                        </div>
                        <div>
                            <strong>Duties:</strong> creating and supporting high-quality web applications, staff training, database management and design.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-xs-12 col-sm-5">
        
        <!-- SKILLS -->
        <div class="box">
            <h2>Skills</h2>
            <div class="skills">
                <div class="item-skills" data-percent="0.85">PHP</div>
                <div class="item-skills" data-percent="0.85">Yii framework</div>
                <div class="item-skills" data-percent="0.60">Zend Framework</div>
                <div class="item-skills" data-percent="0.75">WordPress</div>
                <div class="item-skills" data-percent="0.75">MySQL</div>
                <div class="item-skills" data-percent="0.75">JavaScript</div>
                <div class="item-skills" data-percent="0.85">jQuery (UI, Mobile)</div>
                <div class="item-skills" data-percent="0.75">MooTools</div>
                <div class="item-skills" data-percent="0.85">Ajax (Pjax)</div>
                <div class="item-skills" data-percent="0.75">HTML, CSS</div>
                <div class="item-skills" data-percent="0.85">Twitter Bootstrap</div>
                <div class="item-skills" data-percent="0.75">memcached</div>
                <div class="item-skills" data-percent="0.75">Composer, Git, Hg</div>
                <div class="item-skills" data-percent="0.65">Sphinx</div>
                <div class="item-skills" data-percent="0.75">REST</div>
                <div class="item-skills" data-percent="0.75">Parsing</div>
                <div class="item-skills" data-percent="0.75">LEMP</div>
                <div class="item-skills" data-percent="0.45">C#</div>
                <div class="item-skills" data-percent="0.45">Python</div>
                <div class="item-skills" data-percent="0.45">Java</div>
                <div class="item-skills" data-percent="0.45">Android</div>
                <div class="skills-legend clearfix">
                    <div class="legend-left legend">Junior</div>
                    <div class="legend-right legend"><span>Proficient</span></div>
                    <div class="legend-right legend"><span>Mid</span></div>
                    <div class="legend-right legend">Senior</div>
                </div>
            </div>
        </div>
        <!-- LANGUAGES -->
        <div class="box">
            <h2>Languages</h2>
            <div id="language-skills">
                <div class="skill">Russian <div class="icons pull-right"><div style="width: 100%" class="icons-red"></div></div></div>
                <div class="skill">Ukrainian <div class="icons pull-right"><div style="width: 100%" class="icons-red"></div></div></div>
                <div class="skill">English <div class="icons pull-right"><div style="width: 60%" class="icons-red"></div></div></div>
            </div>
        </div>
        <!-- HOBBIES -->
        <div class="box">
            <h2>Hobbies</h2>
            <div class="hobby">Family</div>
            <div class="hobby">Programming</div>
            <div class="hobby">Kicker</div>
            <div class="hobby">Football</div>
            <div class="hobby">Table tennis</div>
            <div class="hobby">Card games</div>
            <div class="hobby">Swimming</div>
            <div class="hobby">Nature</div>
            <div class="hobby">Banya</div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <!-- PORTFOLIO -->
        <div class="box">
            <h2>Projects</h2>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Free-Lancing.ru</h3>
                </div>
                <div class="panel-body">
                    <dl>

                        <dt>Link</dt>
                        <dd><a href="http://www.free-lancing.ru" target="_blank">http://www.free-lancing.ru</a></dd>
                        <dt>Description</dt>
                        <dd class="project-description">
                            <p>
                                <img src="/img/portfolio/free-lancing_logo.png" alt="free-lancing.ru logo" class="portfolio-logo">
                                Free-lancing.ru — is the leading freelancing marketplace in RuNet with over 60 000 qualified freelancers.
                            </p>
                        </dd>
                    </dl>
                </div>
                <div class="images">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="thumbnail fancybox" rel="Free-lancing" href="/img/portfolio/free-lancing_1.png">
                            <img src="/img/portfolio/free-lancing_1.png" alt="free-lancing.ru image">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="thumbnail fancybox" rel="Free-lancing" href="/img/portfolio/free-lancing_2.png">
                            <img src="/img/portfolio/free-lancing_2.png" alt="free-lancing.ru image">
                        </a>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="thumbnail fancybox" rel="Free-lancing" href="/img/portfolio/free-lancing_3.png">
                            <img src="/img/portfolio/free-lancing_3.png" alt="free-lancing.ru image">
                        </a>
                    </div>
                    <div class="clearfix visible-md-block"></div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="thumbnail fancybox" rel="Free-lancing" href="/img/portfolio/free-lancing_4.png">
                            <img src="/img/portfolio/free-lancing_4.png" alt="free-lancing.ru image">
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">ACRAR</h3>
                </div>
                <div class="panel-body">
                    <dl>
                        <dt>Link</dt>
                        <dd><a href="http://acrar.com" target="_blank">http://acrar.com</a></dd>
                        <dt>Description</dt>
                        <dd class="project-description">
                            <p>
                                <img src="/img/portfolio/acrar_logo.png" alt="ACRAR logo" class="portfolio-logo">
                                ACRAR - the global marketplace for new and used machinery and specialized equipment. ACRAR is a worldwide auction platform of agricultural machinery. 
                                Buyers and sellers benefit from a number of advantages, such as market-driven selling prices, fast processing and low burden before and after an auction. 
                                The creation of auctions is free and can be enhanced by choosing the package marketing power or inspection report. 
                                After the completion of an auction, ACRAR can manage the payment and shipping process.
                            </p>
                        </dd>
                    </dl>
                </div>
                <div class="images">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="thumbnail fancybox" rel="Acrar" href="/img/portfolio/acrar_1.png">
                            <img src="/img/portfolio/acrar_1.png" alt="acrar.com image">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="thumbnail fancybox" rel="Acrar" href="/img/portfolio/acrar_2.png">
                            <img src="/img/portfolio/acrar_2.png" alt="acrar.com image">
                        </a>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="thumbnail fancybox" rel="Acrar" href="/img/portfolio/acrar_3.png">
                            <img src="/img/portfolio/acrar_3.png" alt="acrar.com image">
                        </a>
                    </div>
                    <div class="clearfix visible-md-block"></div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="thumbnail fancybox" rel="Acrar" href="/img/portfolio/acrar_4.png">
                            <img src="/img/portfolio/acrar_4.png" alt="acrar.com image">
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">The Center for Scientific and Political Thought and Ideology</h3>
                </div>
                <div class="panel-body">
                    <dl>
                        <dt>Link</dt>
                        <dd><a href="http://rusrand.ru" target="_blank">http://rusrand.ru</a></dd>
                        <dt>Description</dt>
                        <dd class="project-description">
                            <p>
                                <img src="/img/portfolio/rusrand_logo.png" alt="rusrand logo" class="portfolio-logo">
                                The Center for Scientific and Political Thought and Ideology is a scientific project development organization, open to the public, which has set before itself a number of distinct objectives.
                            </p>
                        </dd>
                    </dl>
                </div>
                <div class="images">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="thumbnail fancybox" rel="Rusrand" href="/img/portfolio/rusrand_1.png">
                            <img src="/img/portfolio/rusrand_1.png" alt="rusrand.ru image">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="thumbnail fancybox" rel="Rusrand" href="/img/portfolio/rusrand_2.png">
                            <img src="/img/portfolio/rusrand_2.png" alt="rusrand.ru image">
                        </a>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="thumbnail fancybox" rel="Rusrand" href="/img/portfolio/rusrand_3.png">
                            <img src="/img/portfolio/rusrand_3.png" alt="rusrand.ru image">
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div>
</div>

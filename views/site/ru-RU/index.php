<?php
use frontend\assets\AppAsset;

/* @var $this yii\web\View */
$this->title = 'Самохвалов Алексей - Резюме';

//$this->registerCssFile('/css/bootstrap.css');
$this->registerCssFile('/css/font-awesome.css');
$this->registerCssFile('/css/main.css', ['depends' => [\yii\bootstrap\BootstrapAsset::className()]]);
$this->registerJsFile('/js/scripts.js', ['depends' => [\yii\web\JqueryAsset::className()]]);

$this->registerJsFile('/libs/fancybox/jquery.mousewheel-3.0.6.pack.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile('/libs/fancybox/jquery.fancybox.css?v=2.1.5');
$this->registerJsFile('/libs/fancybox/jquery.fancybox.pack.js?v=2.1.5', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJs('$(".fancybox").fancybox();');
?>
<div class="row">
    <div class="col-xs-12">
        <a href="/en" class="flag">
            <img src="/img/UK.png">
        </a>
        
        <div id="photo-header" class="text-center">
            <!-- PHOTO (AVATAR) -->
            <div id="photo">
                <img src="/img/samokhvalov-aleksey-alejka-studio.jpg" alt="avatar">
            </div>
            <div id="text-header">
                <h1>Привет,<br> меня зовут <span>Самохвалов Алексей</span></h1>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-7">
        
        <!-- ABOUT ME -->
        <div class="box">
            <h2>Обо мне</h2>
            <p>
                Я опытный и профессиональный web разработчик с Украины. За плечами более 4х лет опыта разработки сайтов и множество реализованных проектов.
            </p>
        </div>
        
        <!-- CONTACT -->
        <div class="box">
            <h2>Контакты</h2>
            <div class="contact-item">
                <div class="icon pull-left text-center"><span class="fa fa-map-marker fa-fw"></span></div>
                <div class="title pull-right">Местоположение</div>
                <div class="description pull-right">Украина, г. Северодонецк</div>
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
            <div class="contact-item">
                <div class="icon pull-left text-center"><span class="fa fa-vk fa-fw"></span></div>
                <div class="title pull-right">VKontakte</div>
                <div class="description pull-right">
                    <a href="http://vk.com/kluivert" target="_blank">http://vk.com/kluivert</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        
        <!-- EDUCATION -->
        <div class="box">
            <h2>Образование</h2>
            <ul id="education" class="clearfix">
                <li>
                    <div class="year pull-left">2009</div>
                    <div class="description pull-right">
                        <h3>ГУЗ "Северодонецкое ВПУ"</h3>
                        <p>Обслуживание компьютерных и интеллектуальных систем и сетей.</p>
                    </div>
                </li>
                <li>
                    <div class="year pull-left">2011</div>
                    <div class="description pull-right">
                        <h3>Технологический институт Восточноукраинского национального университета имени Владимира Даля</h3>
                        <p>Системное программирование, факультет компьютерной инженерии.</p>
                    </div>
                </li>
            </ul>
        </div>
        
        <!-- EXPERIENCES -->
        <div class="box">
            <h2>Опыт работы</h2>
            <div class="job clearfix">
                <div class="col-xs-3">
                    <div class="where">Selims</div>
                    <div class="year">2014</div>
                </div>
                <div class="col-xs-9">
                    <div class="profession">Web разработчик</div>
                    <div class="description">
                        <div>
                            Федеральная служба заселения. Ежемесячно обслуживаются более 7000 клиентов из России и стран ближнего зарубежья. 
                            Ежедневно более 250 операторов формируют и поддерживают базу жилья в актуальном состоянии.
                        </div>
                        <div>
                            <strong>Обязанности:</strong> разработка CRM, разработка API, работа над основным проектом: backend, frontend и мобильная версия сайта.
                        </div>
                    </div>
                </div>
            </div>
            <div class="job clearfix">
                <div class="col-xs-3">
                    <div class="where">Центр научной политической мысли и идеологии</div>
                    <div class="year">2013 - 2014</div>
                </div>
                <div class="col-xs-9">
                    <div class="profession">Web разработчик</div>
                    <div class="description">
                        <div>
                            Центр научной политической мысли и идеологии - это научная, проектная и публичная организация.
                        </div>
                        <div>
                            <strong>Обязанности:</strong> Работа над основным проектом: верстка и программирование.
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
                    <div class="profession">Web разработчик</div>
                    <div class="description">
                        <div>
                            Интернет компания CFutures – это компания, которая предоставляет широкий спектр IT услуг как для украинских и российских заказчиков, так и для заказчиков ближнего и дальнего зарубежья.
                        </div>
                        <div>
                            <strong>Обязанности:</strong> создание и поддержка web приложений высокого качества, обучение сотрудников, проектирование БД.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="col-xs-12 col-sm-5">
        
        <!-- SKILLS -->
        <div class="box">
            <h2>Навыки</h2>
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
            <h2>Языки</h2>
            <div id="language-skills">
                <div class="skill">Русский <div class="icons pull-right"><div style="width: 100%" class="icons-red"></div></div></div>
                <div class="skill">Украинский <div class="icons pull-right"><div style="width: 100%" class="icons-red"></div></div></div>
                <div class="skill">Английский <div class="icons pull-right"><div style="width: 60%" class="icons-red"></div></div></div>
            </div>
        </div>
        
        <!-- HOBBIES -->
        <div class="box">
            <h2>Увлечения</h2>
            <div class="hobby">Семья</div>
            <div class="hobby">Программирование</div>
            <div class="hobby">Кикер</div>
            <div class="hobby">Футбол</div>
            <div class="hobby">Настольный теннис</div>
            <div class="hobby">Карточные игры</div>
            <div class="hobby">Плавание</div>
            <div class="hobby">Природа</div>
            <div class="hobby">Баня</div>
        </div>
        
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <!-- PORTFOLIO -->
        <div class="box">
            <h2>Проекты</h2>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Free-Lancing.ru</h3>
                </div>
                <div class="panel-body">
                    <dl>
                        <dt>Ссылка</dt>
                        <dd><a href="http://www.free-lancing.ru" target="_blank">http://www.free-lancing.ru</a></dd>
                        <dt>Описание проекта</dt>
                        <dd class="project-description">
                            <p>
                                <img src="/img/portfolio/free-lancing_logo.png" alt="free-lancing.ru logo" class="portfolio-logo">
                                Free-lancing.ru — ведущая биржа фриланса и поиска удаленной работы в Рунете, которая успешно помогает помогает >60 000 фрилансeрам и 5 000 заказчикам ежедневно находить фриланс проекты и подбирать исполнителей для выполнения удаленной работы с 2008-го года.
                            </p>
                            <p>Free-lancing.ru - профессиональный ресурс, предназначенный для поиска удаленного исполнителя (фрилансера) на конкретный вид работ.</p>
                            <p>
                                Фриланс — быстро и эффективно!

                                Удобная платформа для заказчиков
                                Возможность управлять любым количеством проектов: вложения, личные сообщения, приглашение фрилансеров и многие другие инструменты. 		
                                Работа без ограничений
                                Количество откликов на проекты, неограниченное портфолио работ, обмен контактами, общение с заказчиками напрямую.

                                Быстрый поиск профессионального фрилансера
                                Получайте отклики на Ваши проекты сразу после публикации. Выбирайте тех исполнителей, которые Вам подходят. 		
                                Никаких мошенников
                                Администрация Free-Lancing.ru оперативно блокирует мошенников.

                                Сотрудничайте только с проверенными исполнителями
                                Читайте отзывы о фрилансерах от других заказчиков, переписывайтесь с фрилансерами по личной переписке, получайте доступ к контактам исполнителей. 		
                                Постоянная и удаленная работа ищет вас
                                Создавайте собственный бренд: заполняйте профиль, загрузите работы в портфолио, выполняйте заказы и проекты, получайте отзывы и увеличивайте Ваш рейтинг.

                                Свыше 60 000 квалифицированных фрилансеров
                                Просматривайте портфолио понравившихся Вам исполнителей, читайте отзывы о них и приглашайте их на выполнение Ваших проектов. 		
                                Легкий поиск актуальных заказов
                                Удобный поиск проектов и уведомления о новых проектах в интересующих вас категориях в ленте, по почте или RSS.
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
                        <dt>Ссылка</dt>
                        <dd><a href="http://acrar.com" target="_blank">http://acrar.com</a></dd>
                        <dt>Описание проекта</dt>
                        <dd class="project-description">
                            <p>
                                <img src="/img/portfolio/acrar_logo.png" alt="ACRAR logo" class="portfolio-logo">
                                ACRAR - Мировая торговая площадка новой и бывшей в эксплуатации техники и специального оборудования. 
                                ACRAR является международным аукционом техники. Покупатели и продавцы техники получают много преимуществ, такие как, дествительно справедливая рыночная цена, быстрые процессы покупки и продажи, а также безопасность и контроль над происходящими процессами. 
                                Выставление лота на аукцион бесплатно, так-же есть возможность заказа дополнительного маркетингого пакета и отчета о техническом состоянии техники. После закрытия торгов ACRAR потдерживает парнеров в  организации оплаты, таможенных услуг и транспорта.
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
                        <dt>Ссылка</dt>
                        <dd><a href="http://rusrand.ru" target="_blank">http://rusrand.ru</a></dd>
                        <dt>Описание проекта</dt>
                        <dd class="project-description">
                            <p>
                                <img src="/img/portfolio/rusrand_logo.png" alt="rusrand logo" class="portfolio-logo">
                                Центр научной политической мысли и идеологии - это научная, проектная и публичная организация, которая ставит перед собой отчетливые цели.
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

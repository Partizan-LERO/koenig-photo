@extends('layouts.app')
@section('content')
    <main id="main">

        <!--==========================
          About Section
        ============================-->
        <section id="about" class="wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 about-img">
                        <img src="img/about-me-new.jpg" alt="">
                    </div>

                    <div class="col-lg-6 content">
                        <h2>Немного о нас</h2>
                        <h3>Привет!<br>Меня зовут Надежда. Я фотограф в Калининграде.<br>Представляю вам свою команду:</h3>

                        <ul>
                            <li> <i class="ion-android-radio-button-on"></i> Сергей - руководитель, программист и главный вдохновитель.</li>
                            <li> <i class="ion-android-radio-button-on"></i> Рик - мой лучший друг, пушистый самоед.</li>
                            <li> <i class="ion-android-radio-button-on"></i> Морти - главная звезда команды, аляскинский маламут</li>
                        </ul>

                    </div>
                </div>

            </div>
        </section><!-- #about -->

        <!--==========================
          Services Section
        ============================-->
        <section id="services">
            <div class="container">
                <div class="section-header">
                    <h2>Услуги</h2>
                    <p>Как известно, фотосессии бывают разные.
                        Некоторые из них рассказывают романтическую историю, другие оставляют в памяти торжества и праздники,
                        передают атмосферу прогулок и настроение человека. Фотоссессии с животными показывают радость общения человека с природой.
                        Семейные и детские фотосессии передают улыбки, тепло и уют домащнего очага.
                        Мы имеем богатый опыт и проводим  различные виды фотосессий.</p>
                </div>

                <div class="row">
                    @foreach($tariffs as $tariff)
                    <div class="col-lg-6">
                        <div class="box wow fadeInLeft">
                            <div class="icon" style="max-width: 100px;"><img src="/img/icons/{{$tariff->icon}}" alt=""></div>
                            <h4 class="title">{{$tariff->title}}</h4>
                            <p class="description">{{$tariff->duration}} час — {{$tariff->price}} рублей</p>
                            <h5 class="mt-3 title">Результат: </h5>
                            <p class="description">{{$tariff->total_photoshopied_photos}} фото с ретушью</p>
                            <p class="description">{{$tariff->total_photos}} фото со свето- и цветокоррекцией</p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section><!-- #services -->

        <!--==========================
          Clients Section
        ============================-->
        {{--<section id="clients" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Клиенты</h2>
                    <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
                </div>

                <div class="owl-carousel clients-carousel">
                    <img src="img/clients/client-1.png" alt="">
                    <img src="img/clients/client-2.png" alt="">
                    <img src="img/clients/client-3.png" alt="">
                    <img src="img/clients/client-4.png" alt="">
                    <img src="img/clients/client-5.png" alt="">
                    <img src="img/clients/client-6.png" alt="">
                    <img src="img/clients/client-7.png" alt="">
                    <img src="img/clients/client-8.png" alt="">
                </div>

            </div>
        </section>--}}
        <!-- #clients -->

        <!--==========================
          Our Portfolio Section
        ============================-->
        <section id="portfolio" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Портфолио</h2>
                    <p>В каждую свою работу я вкладываю душу.</p>
                    <p> Для меня очень важно воплотить ваши или мои идеи на фотографии.</p>
                    <p> Пожалуйста, ознакомьтесь с примерами моих работ, чтобы быть уверенными в моём мастерстве.</p>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/Kris-1.jpg" class="portfolio-popup">
                                <img src="img/portfolio/Kris-1.jpg" alt="">
                                {{--<div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 1</h2></div>
                                </div>--}}
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/moto.jpg" class="portfolio-popup">
                                <img src="img/portfolio/moto.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/moto-2.jpg" class="portfolio-popup">
                                <img src="img/portfolio/moto-2.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/Sveta-6.jpg" class="portfolio-popup">
                                <img src="img/portfolio/Sveta-6.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/Sveta-1.jpg" class="portfolio-popup">
                                <img src="img/portfolio/Sveta-1-preview.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/Sveta-2.JPG" class="portfolio-popup">
                                <img src="img/portfolio/Sveta-2.JPG" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/Sveta-3.jpg" class="portfolio-popup">
                                <img src="img/portfolio/Sveta-3.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/Sveta-4.jpg" class="portfolio-popup">
                                <img src="img/portfolio/Sveta-4.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/Kris-3.JPG" class="portfolio-popup">
                                <img src="img/portfolio/Kris-3.JPG" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/Sveta-5.JPG" class="portfolio-popup">
                                <img src="img/portfolio/Sveta-5.JPG" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/Kris-4.jpg" class="portfolio-popup">
                                <img src="img/portfolio/Kris-4.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/Kris-2.jpg" class="portfolio-popup">
                                <img src="img/portfolio/Kris-2.jpg" alt="">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #portfolio -->

        <!--==========================
          Testimonials Section
        ============================-->
        <section id="testimonials" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Отзывы</h2>
                    <p>Очень важно получать от работы положительные эмоции.
                        Ещё приятнее видеть, что результат моей работы радует клиентов.<br>
                        Ваши отзывы помогают мне выбирать правильное направление, помогают избежать ошибок и заряжают положительной энергией, которая так необходима для творчества.</p>
                </div>
                <div class="owl-carousel testimonials-carousel">

                    <div class="testimonial-item">
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                            Не в первый раз участвую в фотосессии с людьми.
                            Обожаю фотографии, подчеркивающие густоту моего белоснежного меха, фигуру и добрый нрав.
                            А добрый я, потому что всегда сытый перед съёмкой.
                            <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                        <img src="img/testimonials/Rik.jpg" class="testimonial-img" alt="">
                        <h3>Рик</h3>
                        <h4>Самоедская лайка</h4>
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                            Спасибо Надежде за многочисленные фотосессии. Её фотографии передают моё величие и гордую осанку.
                            А улыбка на фотографиях – это показатель удовольствия, получаемого мной в процессе съёмки.
                            <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                        <img src="img/testimonials/Morti.jpg" class="testimonial-img" alt="">
                        <h3>Морти</h3>
                        <h4>Аляскинский маламут</h4>
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                            Обратилась к Надежде за тематической фотосессией и не пожалела!
                            Очень довольна полученным результатом.
                            <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                        <img src="img/testimonials/Kris-5.jpg" class="testimonial-img" alt="">
                        <h3>Кристина Стерхова</h3>
                        <h4>Врач-косметолог</h4>
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                            Всегда знаю к кому обратиться за свежими идеями. Как фотограф Надежда просто незаменима, если мне нужны живые, атмосферные фотографии.
                            <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                        <img src="img/testimonials/Sveta-8.jpg" class="testimonial-img" alt="">
                        <h3>Светлана Константинова</h3>
                        <h4>Студентка</h4>
                    </div>
                </div>

            </div>
        </section><!-- #testimonials -->

        <!--==========================
          Call To Action Section
        ============================-->
        <section id="call-to-action" class="wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3 class="cta-title">Заказать фотосессию</h3>
                        <p class="cta-text">Для заказа наших услуг заполните форму заказа или свяжитесь с нами по телефону или e-mail.</p>
                        <div class="row">
                            <div class="contact-item col-sm-5">
                                <i class="fa fa-envelope-o"></i> <a href="mailto:order@koenig-photo.ru">order@koenig-photo.ru</a>
                            </div>
                            <div class="contact-item col-sm-5">
                                <i class="fa fa-phone"></i> <a href="tel:+79520585195">+7 952 058 51 95</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle scrollto" href="#contact">Заказать</a>
                    </div>
                </div>

            </div>
        </section><!-- #call-to-action -->

        <!--==========================
          Services Section
        ============================-->
        <section id="howwework">
            <div class="container">
                <div class="section-header">
                    <h2>Как мы работаем?</h2>
                    <p>Клиенты, которые в первый раз обращаются к нам за услугой фотосессии, зачастую задают похожие вопросы.
                        Мы решили опубликовать ответы на наиболее частые из них.</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="icon"><img src="img/icons/rules/make-up.png" alt=""></div>
                            <h4 class="title">Обработка фотографий</h4>
                            <p class="description">Фотографии для обработки Вы выбираете сами, так как наш вкус может отличаться от Вашего, и мы хотим чтобы Вы получили в обработке именно те фотографии, которые Вы хотите.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInRight" data-wow-delay="0.2s">
                            <div class="icon"><img src="img/icons/rules/pay.more.png" alt=""></div>
                            <h4 class="title">Дополнительные расходы</h4>
                            <p class="description">Выезд за пределы города Калининграда оплачивается отдельно, как и вход/въезд в платные места нашего города и области. В стоимость фотосессии данные расходы не входят.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInRight">
                            <div class="icon"><img src="img/icons/rules/time.png" alt=""></div>
                            <h4 class="title">Сроки изготовления</h4>
                            <p class="description">Срок изготовления фотографий 1-2 недели (за исключением свадебных фотографий).
                                Сроки изготовления свадебных фотографий - 4-5 недель. Если возникают форс-мажорные ситуации, мы обязательно оповещаем о возможных сдвигах по срокам.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInRight" data-wow-delay="0.2s">
                            <div class="icon"><img src="img/icons/rules/animals.png" alt=""></div>
                            <h4 class="title">О животных</h4>
                            <p class="description">
                                Вы можете взять на фотосессию своих животных или, при желании, мы предоставляем двух собак. Убедительная просьба не кормить собак, поскольку они у нас не голодают. =)
                                Немного познакомиться с нашими животными вы можете на сайте: <a target="_blank" href="#">Фотосессии с животными</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInRight" data-wow-delay="0.2s">
                            <div class="icon"><img src="img/icons/rules/more-rules.png" alt=""></div>
                            <h4 class="title">Особые условия</h4>
                            <p class="description">Как авторы, мы оставляем за собой право публикации работ (не порочащих честь и достоинство клиентов) на своем сайте, в своей группе или любом другом тематическом ресурсе, включая печатные издания, в качестве рекламы своих услуг. Запрет на публикацию работ в портфолио +50% от стоимости съемки. Соглашаясь на съемку, автоматически Вы соглашаетесь с авторским стилем и обработкой фотографа.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInLeft">
                            <div class="icon"><img src="img/icons/rules/pay.png" alt=""></div>
                            <h4 class="title">Порядок оплаты</h4>
                            <p class="description">При заказе фотосессии Вы вносите предоплату, которая является гарантом проведения фотосъемки. Предоплата за выездную фотосессию составляет 500 руб., за студийную - в размере арендной платы за студию. Если вы отказываетесь от съемки за неделю и менее - предоплата НЕ возвращается! Окончательный расчет в день съемки.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #services -->


        <!--==========================
          Our Team Section
        ============================-->
        {{--<section id="team" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Our Team</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/team-1.jpg" alt=""></div>
                            <div class="details">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/team-2.jpg" alt=""></div>
                            <div class="details">
                                <h4>Sarah Jhinson</h4>
                                <span>Product Manager</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/team-3.jpg" alt=""></div>
                            <div class="details">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/team-4.jpg" alt=""></div>
                            <div class="details">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>--}}
        <!-- #team -->

        <!--==========================
          Contact Section
        ============================-->
        <section id="contact" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Как связаться с нами?</h2>
                    <p>Для заказа фотосессии Вы можете воспользоваться формой заказа или связаться с нами по номеру телефона или электронной почте, указанной ниже</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Адрес</h3>
                            <address>Калининград, Российская федерация</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Телефон</h3>
                            <p><a href="tel:+79520585195">+7 952 058 51 95</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:order@koenig-photo.ru">order@koenig-photo.ru</a></p>
                        </div>
                    </div>

                </div>
            </div>

            {{--<div class="container mb-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>--}}

            <div class="container">
                <div class="form">
                    <div id="sendmessage">Ваше сообщение было отправлено! Мы скоро свяжемся с Вами!</div>
                    <div id="errormessage"></div>
                    <form action="{{route('new-order')}}" method="post" role="form" class="contactForm">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя" data-rule="minlen:4" data-msg="Пожалуйста, введите как минимум 3 символа" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" data-rule="email" data-msg="Пожалуйста, введите корректный e-mail" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Номер телефона" data-rule="phone_number" data-msg="Пожалуйста, введите корректный номер телефона" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="tariff_id" id="" class="form-control">
                                    @foreach ($tariffs as $tariff )
                                        <option value="{{$tariff->id}}">{{$tariff->title}}</option>
                                    @endforeach
                                </select>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea
                                        rows="4"
                                        class="form-control"
                                        name="comment"
                                        id="comment"
                                        placeholder="Укажите дополнительную информацию к заказу"
                                ></textarea>
                            </div>
                        </div>
                        <div class="text-center"><button type="submit">Заказать</button></div>
                    </form>
                </div>

            </div>
        </section><!-- #contact -->

    </main>
@endsection

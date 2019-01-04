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
                        <img src="img/about-img.jpg" alt="">
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
{{--
                            <div class="icon" style="max-width: 100px;"><img style="width: 55%;" src="data:image/jpeg;base64,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" alt=""></div>
--}}
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
                            <a href="img/portfolio/1.jpg" class="portfolio-popup">
                                <img src="img/portfolio/1.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 1</h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/2.jpg" class="portfolio-popup">
                                <img src="img/portfolio/2.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 2</h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/3.jpg" class="portfolio-popup">
                                <img src="img/portfolio/3.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 3</h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/4.jpg" class="portfolio-popup">
                                <img src="img/portfolio/4.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 4</h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/5.jpg" class="portfolio-popup">
                                <img src="img/portfolio/5.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 5</h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/6.jpg" class="portfolio-popup">
                                <img src="img/portfolio/6.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 6</h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/7.jpg" class="portfolio-popup">
                                <img src="img/portfolio/7.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 7</h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/8.jpg" class="portfolio-popup">
                                <img src="img/portfolio/8.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 8</h2></div>
                                </div>
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
                        <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
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
                        <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
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
                        <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                        <h3>Кристина Стерхова</h3>
                        <h4>Врач-косметолог</h4>
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                            Всегда знаю к кому обратиться за свежими идеями. Как фотограф Надежда просто незаменима, если мне нужны живые, атмосферные фотографии.
                            <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                        <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
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
                                <i class="fa fa-envelope-o"></i> <a href="mailto:everskova.nadegda.91@gmail.com">everskova.nadegda.91@gmail.com</a>
                            </div>
                            <div class="contact-item Ecol-sm-5">
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
                            <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                            <h4 class="title">Обработка фотографий</h4>
                            <p class="description">Фотографии для обработки Вы выбираете сами, так как наш вкус может отличаться от Вашего, и мы хотим чтобы Вы получили в обработке именно те фотографии, которые Вы хотите.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInRight" data-wow-delay="0.2s">
                            <div class="icon"><i class="fa fa-map"></i></div>
                            <h4 class="title">Дополнительные расходы</h4>
                            <p class="description">Выезд за пределы города Калининграда оплачивается отдельно, как и вход/въезд в платные места нашего города и области. В стоимость фотосессии данные расходы не входят.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInRight">
                            <div class="icon"><i class="fa fa-picture-o"></i></div>
                            <h4 class="title">Сроки изготовления</h4>
                            <p class="description">Срок изготовления фотографий 1-2 недели (за исключением свадебных фотографий).
                                Сроки изготовления свадебных фотографий - 4-5 недель. Если возникают форс-мажорные ситуации, мы обязательно оповещаем о возможных сдвигах по срокам.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInRight" data-wow-delay="0.2s">
                            <div class="icon"><i class="fa fa-map"></i></div>
                            <h4 class="title">О животных</h4>
                            <p class="description">
                                Вы можете взять на фотосессию своих животных или, при желании, мы предоставляем двух собак. Убедительная просьба не кормить собак, поскольку они у нас не голодают. =)
                                Немного познакомиться с нашими животными вы можете на сайте: <a target="_blank" href="#">Фотосессии с животными</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInRight" data-wow-delay="0.2s">
                            <div class="icon"><i class="fa fa-map"></i></div>
                            <h4 class="title">Особые условия</h4>
                            <p class="description">Как авторы, мы оставляем за собой право публикации работ (не порочащих честь и достоинство клиентов) на своем сайте, в своей группе или любом другом тематическом ресурсе, включая печатные издания, в качестве рекламы своих услуг. Запрет на публикацию работ в портфолио +50% от стоимости съемки. Соглашаясь на съемку, автоматически Вы соглашаетесь с авторским стилем и обработкой фотографа.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInLeft">
                            <div class="icon"><i class="fa fa-bar-chart"></i></div>
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
                            <p><a href="mailto:everskova.nadegda.91@gmail.com">everskova.nadegda.91@gmail.com</a></p>
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
                                >Укажите дополнительную информацию к заказу</textarea>
                            </div>
                        </div>
                        <div class="text-center"><button type="submit">Заказать</button></div>
                    </form>
                </div>

            </div>
        </section><!-- #contact -->

    </main>
@endsection
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Тайтл");
?>

    <main class="main">
        <section class="intro">
            <div class="container intro__inner">
                <div class="intro__text-block">
                    <p class="intro__title focus-in-fast">веб <span class="brand-color">сфера</span></p>
                    <p class="focus-in intro__subtitle">разработка сайтов</p>
                </div>
                <canvas class="sphere-canvas" id="spherecanvas" width="600" height="600"></canvas>
            </div>
        </section>

        <section class="intro-text">
            <div class="container">
                <h1 class="header-2">сайты <span class="brand-color">для бизнеса</span>, которые приносят заявки</h1>
                <p>разрабатываем современные сайты на wordpress, modx и быстрые лендинги. от идеи до результата.</p>
                <div class="intro-text__buttons">
                    <button class="button js-open-modal" data-modal-id="popup">
                        <span>обсудить проект</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewbox="0 0 16 15" fill="none">
                            <path d="m2.375 1.5l8.375 7.5l2.375 13.5" stroke="none" stroke-width="2" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <section class="services">
            <div class="container">
                <h2 class="header-2 js-scroll-animate scroll-animate">какие <span class="brand-color bold">сайты</span> мы делаем?</h2>
                <div class="services__list">
                    <div class="services__item services__item_wide js-open-modal js-scroll-animate scroll-animate scroll-animate_top" data-modal-id="callback">
                        <div class="services__image">
                            <picture>
                                <source type="image/webp" srcset="./img/content/landings-mob.webp" media="(max-width: 500px)" />
                                <source srcset="./img/content/landings-mob.jpg" media="(max-width: 500px)" />
                                <source type="image/webp" srcset="./img/content/landings.webp" />
                                <img class="services__landings-img" src="./img/content/landings.jpg" alt="" width="396" height="360" loading="lazy">
                            </picture>
                        </div>
                        <div class="services__item-inner">
                            <h3 class="header-3">landing page</h3>
                            <p>профессиональная разработка landing page для запуска рекламы. высокая конверсия в заявки и продажи. быстрые сроки и результат под ключ.</p>
                        </div>
                    </div>
                    <div class="services__item js-open-modal js-scroll-animate scroll-animate scroll-animate_top" data-modal-id="callback">
                        <div class="services__image">
                            <picture>
                                <source type="image/webp" srcset="./img/content/com.webp" />
                                <img class="services__landings-img" src="./img/content/com.jpg" alt="" width="396" height="360" loading="lazy">
                            </picture>
                        </div>
                        <div class="services__item-inner">
                            <h3 class="header-3">корпоративные сайты и сайты-визитки</h3>
                            <p>разрабатываем современные корпоративные сайты и сайты-визитки. увеличиваем доверие к бренду и привлекаем клиентов через поисковые системы. под ключ.</p>
                        </div>
                    </div>
                    <div class="services__item js-open-modal js-scroll-animate scroll-animate scroll-animate_top" data-modal-id="callback">
                        <div class="services__image">
                            <picture>
                                <source type="image/webp" srcset="./img/content/ecomerce.webp" />
                                <img class="services__landings-img" src="./img/content/ecomerce.jpg" alt="" width="396" height="360" loading="lazy">
                            </picture>
                        </div>
                        <div class="services__item-inner">
                            <h3 class="header-3">интернет-магазины</h3>
                            <p>создаем высококонверсионные интернет-магазины с удобной навигацией и интеграцией с платежными системами на самой популярной системе управления контентом wordpress. seo-оптимизация для роста продаж.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="marquee js-scroll-animate scroll-animate">
            <div class="container">
                <div class="marquee__inner">
                    <div class="marquee__items">
                        <div class="marquee__item">get best offer!</div>
                        <div class="marquee__item">web sphere</div>
                        <div class="marquee__item">get best offer!</div>
                        <div class="marquee__item">web sphere</div>
                        <div class="marquee__item">get best offer!</div>
                        <div class="marquee__item">web sphere</div>
                        <div class="marquee__item">get best offer!</div>
                    </div>
                    <div class="marquee__items">
                        <div class="marquee__item">web sphere</div>
                        <div class="marquee__item">get best offer!</div>
                        <div class="marquee__item">web sphere</div>
                        <div class="marquee__item">get best offer!</div>
                        <div class="marquee__item">web sphere</div>
                        <div class="marquee__item">get best offer!</div>
                        <div class="marquee__item">web sphere</div>
                    </div>
                </div>
                <div class="marquee__inner">
                    <div class="marquee__items marquee__items_reverse">
                        <div class="marquee__item">get best offer!</div>
                        <div class="marquee__item">web sphere</div>
                        <div class="marquee__item">get best offer!</div>
                        <div class="marquee__item">web sphere</div>
                        <div class="marquee__item">get best offer!</div>
                        <div class="marquee__item">web sphere</div>
                        <div class="marquee__item">get best offer!</div>
                    </div>
                    <div class="marquee__items marquee__items_reverse">
                        <div class="marquee__item">web sphere</div>
                        <div class="marquee__item">get best offer!</div>
                        <div class="marquee__item">web sphere</div>
                        <div class="marquee__item">get best offer!</div>
                        <div class="marquee__item">web sphere</div>
                        <div class="marquee__item">get best offer!</div>
                        <div class="marquee__item">web sphere</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="form-section" id="contact-us">
            <div class="container">
                <div class="form-section__form-wrap">
                    <p class="form-section__title header-2 js-scroll-animate scroll-animate">напишите нам</p>
                    <p class="form-section__subtitle js-scroll-animate scroll-animate">и мы свяжемся с вами в ближайшее время и обсудим детали работ</p>
                    <form class="form js-scroll-animate scroll-animate">
                        <input type="hidden" name="type" value="form">
                        <input type="hidden" name="form_id" value="callback">
                        <input type="hidden" name="form_name" value="callback">
                        <label>
                            <input type="text" name="name" placeholder="имя" />
                        </label>
                        <label>
                            <input type="tel" name="phone" placeholder="телефон*">
                        </label>
                        <label>
                            <input type="email" name="email" placeholder="email">
                        </label>
                        <label>
                            <textarea name="message" cols="30" rows="5" placeholder="дополнительная информация о проекте"></textarea>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="agree" required />
                            <span>
                                согласен на <a href="/agreement" target="_blank">обработку персональных данных</a>
                            </span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="agree" required />
                            <span>
                                ознакомлен с <a href="/policy" target="_blank" class="">политикой конфиденциальности</a>
                            </span>
                        </label>
                        <input type="submit" class="simple-button simple-button_light" value="отправить">
                    </form>
                </div>
                <div class="form-section__text-wrap">
                    <p class="form-section__text js-scroll-animate scroll-animate">web <br>sphere</p>
                </div>
            </div>
        </section>

        <section class="advantages">
            <div class="container">
                <div class="advantages__inner">
                    <h2 class="header-2 js-scroll-animate scroll-animate">почему <span class="brand-color">с нами</span> работают?</h2>

                    <ul class="advantages__list">
                        <li class="js-scroll-animate scroll-animate">
                            <p class="advantages__item-title">
                                <svg>
                                    <use xlink:href="img/sprites/sprite.svg#award"></use>
                                </svg>
                                <b>никакой абонентской платы</b>
                            </p>
                            <p>за простые проекты — только единоразовая оплата. вы платите за результат, а не за "место в интернете".</p>
                        </li>
                        <li class="js-scroll-animate scroll-animate">
                            <p class="advantages__item-title">
                                <svg>
                                    <use xlink:href="img/sprites/sprite.svg#award"></use>
                                </svg>
                                <b>честные сроки и гарантии</b>
                            </p>
                            <p>четко прописываем сроки в договоре и даем гарантию 1 год на все работы.</p>
                        </li>
                        <li class="js-scroll-animate scroll-animate">
                            <p class="advantages__item-title">
                                <svg>
                                    <use xlink:href="img/sprites/sprite.svg#award"></use>
                                </svg>
                                <b>говорим на одном языке</b>
                            </p>
                            <p>объясняем все процессы просто и понятно. вы всегда в курсе этапов разработки.</p>
                        </li>
                        <li class="js-scroll-animate scroll-animate">
                            <p class="advantages__item-title">
                                <svg>
                                    <use xlink:href="img/sprites/sprite.svg#award"></use>
                                </svg>
                                <b>скорость и оптимизация</b>
                            </p>
                            <p>наши сайты быстро загружаются, что важно для seo и удобства пользователей.</p>
                        </li>

                    </ul>
                </div>
            </div>

        </section>

    </main>

<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML</title>


    @vite([
                'resources/css/app.css',
                 'resources/css/responsive.css',
                'resources/css/owl.carousel.min.css',
                'resources/css/aos.css',
                'resources/css/bootstrap.min.css',
                'resources/css/icofont.min.css',
                'resources/css/magnific-popup.min.css',
                'resources/css/style.css',
                ])


</head>

<body>

  <!-- Preloader -->
  <div id="preloader">
    <div id="loader"></div>
  </div>

  <!-- Header Start -->
  <header>
    <!-- container start -->
    <div class="container">
      <!-- navigation bar -->
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand " >
          <img class="header-logo" src="{{ Vite::asset('resources/images/lets-logo.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <!-- <i class="icofont-navigation-menu ico_menu"></i> -->
            <span class="toggle-wrap">
              <span class="toggle-bar"></span>
            </span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#home">Возможности</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">О нас</a>
            </li>
            <!-- secondery menu start -->
            <li class="nav-item ">
              <a class="nav-link" href="#text-list">Почему LETS</a>

            </li>
            <!-- secondery menu end -->

            <li class="nav-item">
              <a class="nav-link" href="#how-it-works">Как это работает</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#reviews">Отзывы</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#interface">Интерфейс</a>
            </li>
            <li class="nav-item">
              <div class="btn_block">
                <a class="nav-link dark_btn" href="#download">Скачать</a>
                <div class="btn_bottom"></div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- navigation end -->
    </div>
    <!-- container end -->
  </header>

  <!-- Banner-Section-Start -->
  <section class="banner_section">
    <!-- container start -->
    <div class="container">
      <!-- row start -->
      <div class="row">
        <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-duration="1500">
          <!-- banner text -->
          <div class="banner_text">
            <!-- typed text -->
            <div class="type-wrap">
              <!-- add static words/sentences here (i.e. text that you don't want to be removed)-->
              <span id="typed" style="white-space:pre;" class="typed">
              </span>
            </div>
            <!-- h1 -->
            <h1>Ваш идеальный компаньон для <span>фитнес-тренировок</span></h1>
            <!-- p -->
              <!-- <p>
                 Lorem Ipsum is simply dummy text of the printing indus orem Ipsum has been the industrys standard dummy text ever since.
               </p> -->
<!--
               <div class="btn_block right_space">
                   <a href="#" class="btn black_btn ml-0 popup-youtube play-button" data-url="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1" data-toggle="modal" data-target="#myModal" title="XJj2PbenIsU"> <i class="icofont-play-alt-1"></i> Watch 2 min demo</a>
                   <div class="btn_bottom black"></div>
               </div>

               <div class="btn_block left_space">
                   <a href="#" class="btn puprple_btn ml-0 ">Start Free Trial</a>
                   <div class="btn_bottom"></div>
               </div>
-->
             </div>

           </div>


         </div>
         <!-- row end -->

      <br>

    </div>
    <!-- container end -->
  </section>
  <!-- Banner-Section-end -->

  <!-- Our Value Section Start -->
    <section id="home" class="our_value_section home_feature white_text row_am ">
      <div class="dotes_blue"><img src="{{ Vite::asset('resources/images/blue_dotes.png') }}" alt="image"> </div>

        <div class="container">
          <div class="section_title" data-aos="fade-up" data-aos-duration="1500">
              <h2>Всё-в-одном приложение для фитнес-тренеров и спортсменов</h2>
          </div>
          <!-- Value Slider Start -->
          <div class="value_slider" data-aos="fade-in" data-aos-duration="1500">
            <div class="owl-carousel owl-theme" id="value_slider">
              <div class="item">
                <div class="value_block">
                  <div class="icon">
                      <img  src="{{ Vite::asset('resources/images/biceps-100.png') }}">
                  </div>
                  <div class="text">
                    <h3>Мои тренировки</h3>
                      <p><strong>Управляйте своими спортсменами со своего смартфона всегда и везде, 24/7.</strong>
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="value_block">
                  <div class="icon">
                    <img src="{{ Vite::asset('resources/images/planning-100.png') }}" alt="image">
                  </div>
                  <div class="text">
                    <h3>Расписание занятий</h3>
                      <p><strong>Планируйте свои тренировки с легкостью, используя ваш личный персональный календарь занятий.</strong>
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="value_block">
                  <div class="icon">
                    <img src="{{ Vite::asset('resources/images/dumbell-100.png') }}" alt="image">
                  </div>
                  <div class="text">
                    <h3>Мотивация</h3>
                      <p><strong>Станьте идеальным тренером с мобильным приложением LETS, где вдохновение — ключ к успешным тренировкам.</strong>
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="value_block">
                  <div class="icon">
                    <img src="{{ Vite::asset('resources/images/progres-100.png') }}" alt="image">
                  </div>
                  <div class="text">
                    <h3>Отслеживание Прогресса</h3>
                      <p><strong>Отслеживайте прогресс в режиме реального времени, анализируя данные.</strong>
                    </p>
                  </div>
                </div>
              </div>
                <div class="item">
                    <div class="value_block">
                        <div class="icon">
                            <img src="{{ Vite::asset('resources/images/size-100.png') }}" alt="image">
                        </div>
                        <div class="text">
                            <h3>Измерения</h3>
                            <p><strong>Отмечайте все обьемы атлетов и следите за статистикой </strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="value_block">
                        <div class="icon">
                            <img src="{{ Vite::asset('resources/images/kcal-100 .png') }}" alt="image">
                        </div>
                        <div class="text">
                            <h3>План Питания</h3>
                            <p><strong>Используйте базу сбалансированных рецептов и продуктов для создания планов питания.</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="value_block">
                        <div class="icon">
                            <img src="{{ Vite::asset('resources/images/money-100.png') }}" alt="image">
                        </div>
                        <div class="text">
                            <h3>Оплата в приложении</h3>
                            <p><strong>Принимайте онлайн-оплату за тренировки через приложение, простота и удобство для ваших клиентов.</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <!-- Value Slider End -->
        </div>


    </section>
    <!-- Our Value Section End -->

  <!-- Page Wraper -->
  <div class="page_wrapper">

    <!-- About Us Start-->
    <section id="about" class="about_section row_am">
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500">
          <span class="title_badge mb-1">О нас</span>
          <h2>Мы стремимся сделать фитнес <img src="{{ Vite::asset('resources/images/mobileicon.png') }}" alt="image"> доступным увлекательным и эффективным
             <span><img src="{{ Vite::asset('resources/images/usericon.png') }}" alt="image"> </span>
              <span> для каждого пользователя</span></h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <ul class="app_statstic" id="counter" data-aos="fade-in" data-aos-duration="1500">
              <li data-aos="fade-up" data-aos-duration="1500">
                <div class="text">
                  <p><span class="counter-value" data-count="50">0</span><span>K+</span></p>
                  <p>Загрузок</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-duration="1500">
                <div class="text">
                  <p><span class="counter-value" data-count="2300">1500</span><span>+</span></p>
                  <p>Отзывов</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-duration="1500">
                <div class="text">
                  <p><span class="counter-value" data-count="150">0</span><span>+</span></p>
                  <p>Стран</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-duration="1500">
                <div class="text">
                  <p><span class="counter-value" data-count="8000">0 </span><span>+</span></p>
                  <p>Пользователей</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="abtImg text-center" data-aos="fade-up" data-aos-duration="1500">
              <img src="{{ Vite::asset('resources/images/iphone-display-5.png') }}" alt="image">
            </div>
          </div>
          <div class="col-lg-4">
            <p data-aos="fade-up" data-aos-duration="1500"><strong>Вне зависимости от того,
                являетесь ли вы опытным спортсменом или только начинаете свой путь к здоровью,
                    LETS предоставляет вам все необходимое для достижения ваших целей.</strong></p>
            <div class="video_block" data-aos="fade-up" data-aos-duration="1500">
              <img class="thumbnil" src="{{ Vite::asset('resources/images/applicationvideothumb.png') }}" alt="image">
              <div class="playBtn">
                <a href="#" class="popup-youtube play-button play_icon"
                  data-url="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1" data-toggle="modal" data-target="#myModal" title="XJj2PbenIsU"><img src="{{ Vite::asset('resources/images/play_white.svg') }}" alt="img"></a>
                <img class="spin_text" src="{{ Vite::asset('resources/images/playvideotext.png') }}" alt="image">
              </div>
            </div>
            <div class="btn_block" data-aos="fade-up" data-aos-duration="1500">
              <a href="#" class="btn puprple_btn ml-0">Начни бесплатно</a>
              <div class="btn_bottom"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Us End -->

    <!-- Text List flow Section Start -->
    <div id="text-list" class="text_list_section row_am" data-aos="fade-in" data-aos-duration="1500" style="transform: translateY(-50%);">
      <div class="container">
        <span class="title_badge down_fix">Почему LETS?</span>
      </div>
      <div class="slider_block">
        <div class="owl-carousel owl-theme" id="text_list_flow">
          <div class="item">
            <div class="text_block">
              <span>Индивидуальный Подход </span>
              <span class="mark_star">•</span>
            </div>
          </div>
          <div class="item">
            <div class="text_block">
              <span>Приятный интерфейс</span>
              <span class="mark_star">•</span>
            </div>
          </div>
          <div class="item">
            <div class="text_block">
              <span>Аналитика всех процессов </span>
              <span class="mark_star">•</span>
            </div>
          </div>
          <div class="item">
            <div class="text_block">
              <span> Мотивация в Каждом Элементе</span>
              <span class="mark_star">•</span>
            </div>
          </div>
          <div class="item">
            <div class="text_block">
              <span> Отслеживание Прогресса</span>
              <span class="mark_star">•</span>
            </div>
          </div>
          <div class="item">
            <div class="text_block">
              <span> Удобство в Оплате и Финансовом Управлении</span>
              <span class="mark_star">•</span>
            </div>
          </div>
          <div class="item">
            <div class="text_block">
              <span>Индивидуально Разработанные Планы Питания</span>
              <span class="mark_star">•</span>
            </div>
          </div>
          <div class="item">
            <div class="text_block">
              <span>Онлайн поддержка 24/24</span>
              <span class="mark_star">•</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Text List flow Section End -->


    <!-- How It Work Section Start -->
    <section id="how-it-works" class="how_it_section white_text">
      <div class="how_it_inner" data-aos="fade-in" data-aos-duration="1500">
        <div class="dotes_blue"><img src="{{ Vite::asset('resources/images/blue_dotes.png') }}" alt="image"></div>
        <div class="container">
          <div class="section_title" data-aos="fade-up" data-aos-duration="1500">
            <span class="title_badge">Быстро и легко</span>
            <h2>Как это работает</h2>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="steps_block step_border" data-aos="fade-up" data-aos-duration="1500">
                <div class="steps">
                  <div class="icon">
                    <img src="{{ Vite::asset('resources/images/howstep1.png') }}" alt="image">
                  </div>
                  <div class="text">
                    <h3>Скачать Приложение</h3>
                    <ul class="social">
                      <li><a href="#"><i class="icofont-brand-android-robot"></i></a></li>
                      <li><a href="#"><i class="icofont-brand-apple"></i></a></li>
                    </ul>
                    <p>Скачайте приложениея для <br> Android, Ipad &
                      Iphone</p>
                  </div>
                </div>
                <span class="step">01</span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="steps_block step_border" data-aos="fade-up" data-aos-duration="1500">
                <div class="steps">
                  <div class="icon">
                    <img src="{{ Vite::asset('resources/images/howstep2.png') }}" alt="image">
                  </div>
                  <div class="text">
                    <h3>Зарегистрироваться</h3>
                    <span class="tag_text"></span>
                    <p>Создайте профиль <br>бесплатно
                      </p>
                  </div>
                </div>
                <span class="step">02</span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="steps_block" data-aos="fade-up" data-aos-duration="1500">
                <div class="steps">
                  <div class="icon">
                    <img src="{{ Vite::asset('resources/images/howstep3.png') }}" alt="image">
                  </div>
                  <div class="text">
                    <h3>Наслаждайтесь</h3>
                    <span class="tag_text"></span>
                    <p>Тренеруйте онлайн <br> и зарабатывайте!</p>
                  </div>
                </div>
                <span class="step">03</span>
              </div>
            </div>
          </div>
          <div class="text-center">
            <div class="btn_block">
              <a href="#" class="btn puprple_btn ml-0">Начни сейчас</a>
              <div class="btn_bottom"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- How It Work Section End -->
  </div>
  <!-- Wraper End -->

  <!-- Positive Reviews Section Start -->
  <section id="reviews" class="review_section row_am">
    <div class="container">
      <div class="positive_inner">
        <div class="row">
          <div class="col-md-6 sticky-top">
            <div class="sidebar_text" data-aos="fade-up" data-aos-duration="1500">
              <div class="section_title text-left">
                <span class="title_badge">Feedback</span>
                  <h2><span>Отзывы наших клиентов</span></h2>
              </div>
              <div class="google_rating">
                <div class="star">
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                </div>
                <p>4.5/5.0 Rated on <img class="img-fluid" src="{{ Vite::asset('resources/images/google.png') }}" alt="image"></p>
              </div>
              <div class="user_review">
                <p>1399 <a href="#">Total user reviews <i class="icofont-arrow-right"></i></a></p>
              </div>
              <div class="smiley_icon"><img src="{{ Vite::asset('resources/images/smily.png') }}" alt="image"></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="review_side">
              <div class="review_block" data-aos="fade-up" data-aos-duration="1500">
                <div class="coustomer_info">
                  <div class="avtar">
                    <img src="{{ Vite::asset('resources/images/coach-man-review-2.png') }}" alt="image">
                    <div class="text">
                      <h3>Артем П.</h3>
                      <span>Зал: CrossFit Dynamics</span>
                    </div>
                  </div>
                  <div class="star">
                    <span><i class="icofont-star"></i></span>
                    <span><i class="icofont-star"></i></span>
                    <span><i class="icofont-star"></i></span>
                    <span><i class="icofont-star"></i></span>
                    <span><i class="icofont-star"></i></span>
                  </div>
                </div>
                <p>"LETS - мое новое фитнес-вдохновение! Я, как тренер,
                    могу создавать уникальные тренировочные программы и
                    следить за каждым шагом моих клиентов. Они достигают
                    результатов, и я рад, что могу быть частью этого успеха."</p>
              </div>
              <div class="review_block" data-aos="fade-up" data-aos-duration="1500">
                <div class="coustomer_info">
                  <div class="avtar">
                    <img src="{{ Vite::asset('resources/images/coach-woman-review-2.png') }}" alt="image">
                    <div class="text">
                      <h3>Анна К.</h3>
                      <span>Зал: FitZone</span>
                    </div>
                  </div>
                  <div class="star">
                    <span><i class="icofont-star"></i></span>
                    <span><i class="icofont-star"></i></span>
                    <span><i class="icofont-star"></i></span>
                    <span><i class="icofont-star"></i></span>
                    <span><i class="icofont-star"></i></span>
                  </div>
                </div>
                <p>"LETS преобразил мою тренерскую практику!
                    Спасибо за удивительные инструменты планирования,
                    мотивации и отслеживания прогресса. Мои клиенты более мотивированы,
                    а я могу легко следить за их успехами. Просто великолепно!"</p>
              </div>
                <div class="review_block" data-aos="fade-up" data-aos-duration="1500">
                    <div class="coustomer_info">
                        <div class="avtar">
                            <img src="{{ Vite::asset('resources/images/coach-woman-review-1.png') }}" alt="image">
                            <div class="text">
                                <h3>Екатерина С.</h3>
                                <span>Зал: Wellness Hub</span>
                            </div>
                        </div>
                        <div class="star">
                            <span><i class="icofont-star"></i></span>
                            <span><i class="icofont-star"></i></span>
                            <span><i class="icofont-star"></i></span>
                            <span><i class="icofont-star"></i></span>
                            <span><i class="icofont-star"></i></span>
                        </div>
                    </div>
                    <p>"Планы питания в LETS - настоящая находка!
                        Мои клиенты оценили разнообразие и вкусные рецепты.
                        Отслеживание прогресса делает тренировки еще более продуктивными.
                        Спасибо за отличное приложение!"</p>
                </div>
              <div class="review_block" data-aos="fade-up" data-aos-duration="1500">
                <div class="coustomer_info">
                  <div class="avtar">
                    <img src="{{ Vite::asset('resources/images/coach-man-review-1.png') }}" alt="image">
                    <div class="text">
                      <h3>Максим Т.</h3>
                      <span>Зал: PowerGym</span>
                    </div>
                  </div>
                  <div class="star">
                    <span><i class="icofont-star"></i></span>
                    <span><i class="icofont-star"></i></span>
                    <span><i class="icofont-star"></i></span>
                    <span><i class="icofont-star"></i></span>
                    <span><i class="icofont-star"></i></span>
                  </div>
                </div>
                <p>"LETS - мой надежный союзник в тренерском деле.
                    Оплата тренировок стала проще, клиенты в восторге
                    от персонализированных планов и мотивации. Успех и комфорт в одном приложении!"</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Positive Reviews Section End -->

  <!-- Page Wraper -->
  <div class="page_wrapper">


    <!-- Pricing-Section -->
    <section class="row_am pricing_section white_text" data-aos="fade-in" data-aos-duration="1500">
      <div class="pricing_inner">
        <!-- container start -->
        <div class="container">
          <div class="dotes_blue"><img src="{{ Vite::asset('resources/images/blue_dotes.png') }}" alt="image"></div>
          <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <span class="title_badge">Pricing</span>
            <h2>Choose your plan</h2>
          </div>

          <!-- Pricing Table Tabs -->
          <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up" data-aos-duration="1500">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="monthly-tab" data-toggle="tab" data-target="#monthly" type="button"
                role="tab" aria-controls="monthly" aria-selected="true">Monthly</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="yearly-tab" data-toggle="tab" data-target="#yearly" type="button" role="tab"
                aria-controls="yearly" aria-selected="false">Yearly</button>
            </li>
          </ul>

          <!-- Tabing Details -->
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
              <!-- pricing box  monthly start -->
              <div class="pricing_pannel">
                <div class="row">
                  <div class="col-md-4">
                    <div class="pannel_block" data-aos="fade-up" data-aos-duration="1500">
                      <div class="heading">
                        <h3>Free</h3>
                        <span>For single users</span>
                      </div>
                      <div class="pricing">
                        <h3>$15 <span>/month</span></h3>
                      </div>
                      <ul class="features">
                        <li>
                          <span class="icon"><i class="icofont-check-circled"></i></span>
                          <p>Up to 15 GB cloud storage</p>
                        </li>
                        <li>
                          <span class="icon"><i class="icofont-check-circled"></i></span>
                          <p>30 day chat history</p>
                        </li>
                        <li>
                          <span class="icon"><i class="icofont-close-circled"></i></span>
                          <p>Data security</p>
                        </li>
                        <li>
                          <span class="icon"><i class="icofont-close-circled"></i></span>
                          <p>5 People access</p>
                        </li>
                        <li>
                          <span class="icon"><i class="icofont-close-circled"></i></span>
                          <p>24/7 Support</p>
                        </li>
                      </ul>
                      <div class="btn_block">
                        <a href="#" class="btn puprple_btn ml-0">Choose Plan</a>
                        <div class="btn_bottom"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="pannel_block highlited_block" data-aos="fade-up" data-aos-duration="1500">
                      <div class="heading">
                        <h3>Premium</h3>
                        <span>For agencies</span>
                        <span class="offer">Save 50%</span>
                      </div>
                      <div class="pricing">
                        <h3>$45 <span>/month</span></h3>
                      </div>
                      <ul class="features">
                        <li>
                          <span class="icon"><i class="icofont-check-circled"></i></span>
                          <p>Up to 15 GB cloud storage</p>
                        </li>
                        <li>
                          <span class="icon"><i class="icofont-check-circled"></i></span>
                          <p>30 day chat history</p>
                        </li>
                        <li>
                          <span class="icon"><i class="icofont-check-circled"></i></span>
                          <p>Data security</p>
                        </li>
                        <li>
                          <span class="icon"><i class="icofont-check-circled"></i></span>
                          <p>5 People access</p>
                        </li>
                        <li>
                          <span class="icon"><i class="icofont-check-circled"></i></span>
                          <p>24/7 Support</p>
                        </li>
                      </ul>
                      <div class="btn_block white_btn">
                        <a href="#" class="btn puprple_btn ml-0">Choose Plan</a>
                        <div class="btn_bottom"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="pannel_block" data-aos="fade-up" data-aos-duration="1500">
                      <div class="heading">
                        <h3>Standard</h3>
                        <span>For team</span>
                      </div>
                      <div class="pricing">
                        <h3>$30 <span>/month</span></h3>
                      </div>
                      <ul class="features">
                        <li>
                          <span class="icon"><i class="icofont-check-circled"></i></span>
                          <p>Up to 15 GB cloud storage</p>
                        </li>
                        <li>
                          <span class="icon"><i class="icofont-check-circled"></i></span>
                          <p>30 day chat history</p>
                        </li>
                        <li>
                          <span class="icon"><i class="icofont-check-circled"></i></span>
                          <p>Data security</p>
                        </li>
                        <li>
                          <span class="icon"><i class="icofont-close-circled"></i></span>
                          <p>5 People access</p>
                        </li>
                        <li>
                          <span class="icon"><i class="icofont-close-circled"></i></span>
                          <p>24/7 Support</p>
                        </li>
                      </ul>
                      <div class="btn_block">
                        <a href="#" class="btn puprple_btn ml-0">Choose Plan</a>
                        <div class="btn_bottom"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- pricing box monthly end -->
            <!-- pricing box yearly start -->
            <div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
              <div class="row">
                <div class="col-md-4">
                  <div class="pannel_block">
                    <div class="heading">
                      <h3>Free</h3>
                      <span>For single users</span>
                    </div>
                    <div class="pricing">
                      <h3>$99 <span>/month</span></h3>
                    </div>
                    <ul class="features">
                      <li>
                        <span class="icon"><i class="icofont-check-circled"></i></span>
                        <p>Up to 15 GB cloud storage</p>
                      </li>
                      <li>
                        <span class="icon"><i class="icofont-check-circled"></i></span>
                        <p>30 day chat history</p>
                      </li>
                      <li>
                        <span class="icon"><i class="icofont-close-circled"></i></span>
                        <p>Data security</p>
                      </li>
                      <li>
                        <span class="icon"><i class="icofont-close-circled"></i></span>
                        <p>5 People access</p>
                      </li>
                      <li>
                        <span class="icon"><i class="icofont-close-circled"></i></span>
                        <p>24/7 Support</p>
                      </li>
                    </ul>
                    <a href="#" class="btn puprple_btn ml-0">Choose Plan</a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="pannel_block highlited_block">
                    <div class="heading">
                      <h3>Premium</h3>
                      <span>For agencies</span>
                      <span class="offer">Save 50%</span>
                    </div>
                    <div class="pricing">
                      <h3>$399 <span>/month</span></h3>
                    </div>
                    <ul class="features">
                      <li>
                        <span class="icon"><i class="icofont-check-circled"></i></span>
                        <p>Up to 15 GB cloud storage</p>
                      </li>
                      <li>
                        <span class="icon"><i class="icofont-check-circled"></i></span>
                        <p>30 day chat history</p>
                      </li>
                      <li>
                        <span class="icon"><i class="icofont-check-circled"></i></span>
                        <p>Data security</p>
                      </li>
                      <li>
                        <span class="icon"><i class="icofont-check-circled"></i></span>
                        <p>5 People access</p>
                      </li>
                      <li>
                        <span class="icon"><i class="icofont-check-circled"></i></span>
                        <p>24/7 Support</p>
                      </li>
                    </ul>
                    <div class="btn_block white_btn">
                      <a href="#" class="btn puprple_btn ml-0">Choose Plan</a>
                      <div class="btn_bottom"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="pannel_block">
                    <div class="heading">
                      <h3>Standard</h3>
                      <span>For team</span>
                    </div>
                    <div class="pricing">
                      <h3>$299 <span>/month</span></h3>
                    </div>
                    <ul class="features">
                      <li>
                        <span class="icon"><i class="icofont-check-circled"></i></span>
                        <p>Up to 15 GB cloud storage</p>
                      </li>
                      <li>
                        <span class="icon"><i class="icofont-check-circled"></i></span>
                        <p>30 day chat history</p>
                      </li>
                      <li>
                        <span class="icon"><i class="icofont-check-circled"></i></span>
                        <p>Data security</p>
                      </li>
                      <li>
                        <span class="icon"><i class="icofont-close-circled"></i></span>
                        <p>5 People access</p>
                      </li>
                      <li>
                        <span class="icon"><i class="icofont-close-circled"></i></span>
                        <p>24/7 Support</p>
                      </li>
                    </ul>
                    <a href="#" class="btn puprple_btn ml-0">Choose Plan</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- pricing box yearly end -->

            <p class="contact_text text-center" data-aos="fade-up" data-aos-duration="1500">Not
              sure what to choose ? <a href="#">contact us</a> for custom packages</p>
          </div>
        </div>
      </div>
      <!-- container start end -->
    </section>
    <!-- Pricing-Section end -->

    <!-- Beautifull-interface-Section start -->
    <section  id="interface" class="row_am interface_section">
      <!-- container start -->
      <div class="container-fluid">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <span class="title_badge">Демонстрация</span>
          <h2>Приветливый <span>интерфейс</span> приложения</h2>
        </div>

        <!-- screen slider start -->
        <div class="screen_slider" data-aos="fade-up" data-aos-duration="1500">
          <div id="screen_slider" class="owl-carousel owl-theme">
            <div class="item">
              <div class="screen_frame_img">
                <img src="{{ Vite::asset('resources/images/screen-1.png') }}" alt="image">
              </div>
            </div>
            <div class="item">
              <div class="screen_frame_img">
                <img src="{{ Vite::asset('resources/images/screen-2.png') }}" alt="image">
              </div>
            </div>
            <div class="item">
              <div class="screen_frame_img">
                <img src="{{ Vite::asset('resources/images/screen-3.png') }}" alt="image">
              </div>
            </div>
            <div class="item">
              <div class="screen_frame_img">
                <img src="{{ Vite::asset('resources/images/screen-4.png') }}" alt="image">
              </div>
            </div>
            <div class="item">
              <div class="screen_frame_img">
                <img src="{{ Vite::asset('resources/images/screen-5.png') }}" alt="image">
              </div>
            </div>
            <div class="item">
              <div class="screen_frame_img">
                <img src="{{ Vite::asset('resources/images/screen-6.png') }}" alt="image">
              </div>
            </div>
          </div>
        </div>
        <!-- screen slider end -->
      </div>
      <!-- container end -->
    </section>
    <!-- Beautifull-interface-Section end -->


    <!-- Text List flow Section Start -->
    <div id="download" class="text_list_section row_am downaload_section" data-aos="fade-in" data-aos-duration="1500">
      <div class="container">
        <div class="yellow_dotes">
          <img src="{{ Vite::asset('resources/images/yellow_dotes.png') }}" alt="image">
        </div>
        <div class="center_screen">
          <div class="img">
            <img src="{{ Vite::asset('resources/images/downloadScreen.png') }}" alt="image">
          </div>
          <!-- app buttons -->
          <ul class="app_btn">
            <li>
              <a href="#">
                <img class="blue_img" src="{{ Vite::asset('resources/images/googleplay.png') }}" alt="image">
              </a>
            </li>
            <li>
              <a href="#">
                <img class="blue_img" src="{{ Vite::asset('resources/images/appstorebtn.png') }}" alt="image">
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="background_slider">
        <div class="dowanload_slider">
          <div class="downlist">
            <div class="text_block">
              <span>Download </span>
              <span class="mark_star">•</span>
            </div>
            <div class="text_block">
              <span>Download </span>
              <span class="mark_star">•</span>
            </div>
            <div class="text_block">
              <span>Download </span>
              <span class="mark_star">•</span>
            </div>
            <div class="text_block">
              <span>Download </span>
              <span class="mark_star">•</span>
            </div>
            <div class="text_block">
              <span>Download </span>
              <span class="mark_star">•</span>
            </div>
          </div>
        </div>
        <div class="slider_block">
          <div class="owl-carousel owl-theme" id="text_list_flow_download">
            <div class="item">
              <div class="text_block">
                <span>Download </span>
                <span class="mark_star">•</span>
              </div>
            </div>
            <div class="item">
              <div class="text_block">
                <span>Download </span>
                <span class="mark_star">•</span>
              </div>
            </div>
            <div class="item">
              <div class="text_block">
                <span>Download </span>
                <span class="mark_star">•</span>
              </div>
            </div>
            <div class="item">
              <div class="text_block">
                <span>Download </span>
                <span class="mark_star">•</span>
              </div>
            </div>
            <div class="item">
              <div class="text_block">
                <span>Download </span>
                <span class="mark_star">•</span>
              </div>
            </div>
            <div class="item">
              <div class="text_block">
                <span>Download </span>
                <span class="mark_star">•</span>
              </div>
            </div>
          </div>
        </div>
        <div class="dowanload_slider">
          <div class="downlist">
            <div class="text_block">
              <span>Download </span>
              <span class="mark_star">•</span>
            </div>
            <div class="text_block">
              <span>Download </span>
              <span class="mark_star">•</span>
            </div>
            <div class="text_block">
              <span>Download </span>
              <span class="mark_star">•</span>
            </div>
            <div class="text_block">
              <span>Download </span>
              <span class="mark_star">•</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Text List flow Section End -->

    <!-- Footer-Section start -->
    <footer class="white_text" data-aos="fade-in" data-aos-duration="1500">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="logo_side">
              <div class="logo">
                  <img class="footer-logo" src="{{ Vite::asset('resources/images/lets-logo.png') }}" alt="Logo">
              </div>
              <div class="news_letter">
                <h3>Subscribe newsletter</h3>
                <p>Be the first to recieve all latest post in your inbox</p>
                <form>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter your email">
                    <button class="btn"><i class="icofont-paper-plane"></i></button>
                  </div>
                  <p class="note">By clicking send link you agree to receive message.</p>
                </form>
              </div>
              <ul class="contact_info">
                <li><a href="mailto:">support@xsort.md</a></li>
                <li><a href="tel: ">+1-900-123 4567</a></li>
              </ul>
              <ul class="social_media">
                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                <li><a href="#"><i class="icofont-instagram"></i></a></li>
                <li><a href="#"><i class="icofont-pinterest"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="download_side">
              <h3>Download app</h3>
              <ul class="app_btn">
                <li>
                  <a href="#">
                    <img class="blue_img" src="{{ Vite::asset('resources/images/googleplay.png') }}" alt="image">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img class="blue_img" src="{{ Vite::asset('resources/images/appstorebtn.png') }}" alt="image">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="container">
          <div class="ft_inner">
            <div class="copy_text">
              <p>© Copyrights 2023. All rights reserved.</p>
            </div>
            <ul class="links">
              <li><a href="#home">Возможности</a></li>
              <li><a href="#about">О нас</a></li>
              <li><a href="#text-list">Почему LETS</a></li>
              <li><a href="#how-it-works">Как это работает</a></li>
              <li><a href="#reviews">Отзывы</a></li>
                <li><a href="#interface">Интерфейс</a></li>

            </ul>
            <div class="design_by">
              <p>Crafted by <a href="https://xsort.md/" target="blank">Xsort</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer-Section end -->

    <!-- go top button -->
    <div class="go_top" id="Gotop">
      <span><i class="icofont-arrow-up"></i></span>
    </div>

    <!-- Video Model Start -->
    <div class="modal fade youtube-video" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button id="close-video" type="button" class="button btn btn-default text-right" data-dismiss="modal">
            <i class="icofont-close-line-circled"></i>
          </button>
          <div class="modal-body">
            <div id="video-container" class="video-container">
              <iframe id="youtubevideo" width="640" height="360" allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>
    <!-- Video Model End -->
  </div>
  <!-- Page-wrapper-End -->
  <!-- Jquery-js-Link -->
  <!-- owl-js-Link -->
  <!-- bootstrap-js-Link -->
  <!-- aos-js-Link -->
  <!-- Typed Js Cdn -->
  <!-- main-js-Link -->
@vite([
             'resources/js/app.js',
             'resources/js/jquery.js',
             'resources/js/jquery.magnific-popup.min.js',
              'resources/js/owl.carousel.min.js',
              'resources/js/bootstrap.js',
             'resources/js/bootstrap.min.js',
             'resources/js/aos.js',
             'resources/js/typed.min.js',
             'resources/js/main.js',
])

  <script>
      $(document).ready(function () {
          $("#typed").typed({
          strings: ["Type Writing Text", "Auto Type Text", "Add any text you like here."],
          typeSpeed: 100,
          startDelay: 0,
          backSpeed: 60,
          backDelay: 2000,
          loop: true,
          cursorChar: "|",
          contentType: 'html'
        });
      });

    // Fixed Discount Dish JS
    $(document).ready(function () {
      let cardBlock = document.querySelectorAll('.task_block');
      let topStyle = 120;

      cardBlock.forEach((card) => {
        card.style.top = `${topStyle}px`;
        topStyle += 30;
      })

    }
    );

    // Scroll Down Window
    $(document).ready(function () {
      // Attach a click event handler to the button
      $('#scrollButton').click(function () {
        // Scroll down smoothly 200 pixels from the current position
        $('html, body').animate({ scrollTop: $(window).scrollTop() + 600 }, 800); // Adjust the speed (800ms) as needed
      });
    });

  </script>

</body>

</html>

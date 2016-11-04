@extends('layouts.template')

@section('content')
<!--Home block-->
<section id="home" class="parallax-window home" data-parallax="scroll" data-image-src="img/bg.jpg" data-name="home">
    <div class="container home__container">
        <div class="row main-title__block">
            <div class="col-md-12 text-center">
                <h2 class="main-title__text bold_text">At vero eos et accusamus et iusto odio </h2>
                <a href="#aboutus" class="main-title__button nav-link ancLinks">О нас</a>
            </div>
        </div>
    </div>
    <!-- Arrow block -->
    <section id="section05" class="demo">
        <a href="#steps" class="ancLinks"><span></span></a>
    </section>
    <!--/.Arrow block -->
    <div class="clearfix"></div>
</section>
<!--/.Home block-->

<section class="section steps" id="steps" data-name="steps">
    <div class="container text-center">
        <h4 class="bold_text">Этапы разработки</h4>
        <h5 class="">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</h5>

        <div class="col-md-2">
            <i class="fa fa-comments-o fa-5x" aria-hidden="true"></i>
            <h5>Дисскуссия</h5>
        </div>
        <div class="col-md-2">
            <i class="fa fa-cogs fa-5x" aria-hidden="true"></i>
            <h5>Исследование</h5>
        </div>
        <div class="col-md-2">
            <i class="fa fa-map-o fa-5x" aria-hidden="true"></i>
            <h5>Планирование</h5>
        </div>
        <div class="col-md-2">
            <i class="fa fa-terminal fa-5x" aria-hidden="true"></i>
            <h5>Разработка</h5>
        </div>
        <div class="col-md-2">
            <i class="fa fa-sitemap fa-5x" aria-hidden="true"></i>
            <h5>Тестирование</h5>
        </div>
        <div class="col-md-2">
            <i class="fa fa-check fa-5x" aria-hidden="true"></i>
            <h5>Запуск</h5>
        </div>
    </div>
</section>

<section class="section aboutus" id="aboutus" data-name="aboutus">
    <div class="container">
        <h4 class="text-center bold_text">О нас</h4>
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="img/user.jpg" alt="" class="img-circle img__border">
                <h5 class="bold_text">Сергей Мова</h5>
                <p>
                    Developer
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="img/user.jpg" alt="" class="img-circle img__border">
                <h5 class="bold_text">Сергей Петляк</h5>
                <p>
                    Developer
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section portolio" id="portolio" data-name="portolio">
    <div class="container">
        <h4 class="text-center bold_text">Портфолио</h4>
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="view overlay hm-black-strong">
                    <img src="img/bg.jpg" class="img-responsive" alt="">
                    <div class="mask flex-center portolio__block md-trigger" data-modal="modal-1">
                        <h5 class="white-text bold_text">Title</h5>
                        <i class="fa fa-eye fa-5x white-text" aria-hidden="true"></i>

                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="view overlay hm-black-strong">
                    <img src="img/bg.jpg" class="img-responsive " alt="">
                    <div class="mask flex-center portolio__block md-trigger" data-modal="modal-1">
                        <h5 class="white-text bold_text">Title</h5>
                        <i class="fa fa-eye fa-5x white-text" aria-hidden="true"></i>

                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="view overlay hm-black-strong">
                    <img src="img/bg.jpg" class="img-responsive " alt="">
                    <div class="mask flex-center portolio__block md-trigger" data-modal="modal-1">
                        <h5 class="white-text bold_text">Title</h5>
                        <i class="fa fa-eye fa-5x white-text" aria-hidden="true"></i>

                    </div>
                </div>
            </div>
        </div>
        <div class="row portolio-row">
            <div class="col-md-4 text-center">
                <div class="view overlay hm-black-strong">
                    <img src="img/bg.jpg" class="img-responsive " alt="">
                    <div class="mask flex-center portolio__block md-trigger" data-modal="modal-1">
                        <h5 class="white-text bold_text">Title</h5>
                        <i class="fa fa-eye fa-5x white-text" aria-hidden="true"></i>

                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="view overlay hm-black-strong">
                    <img src="img/bg.jpg" class="img-responsive " alt="">
                    <div class="mask flex-center portolio__block md-trigger" data-modal="modal-1">
                        <h5 class="white-text bold_text">Title</h5>
                        <i class="fa fa-eye fa-5x white-text" aria-hidden="true"></i>

                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="view overlay hm-black-strong">
                    <img src="img/bg.jpg" class="img-responsive " alt="">
                    <div class="mask flex-center portolio__block md-trigger" data-modal="modal-1">
                        <h5 class="white-text bold_text">Title</h5>
                        <i class="fa fa-eye fa-5x white-text" aria-hidden="true"></i>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section contacts" id="contacts" data-name="contacts">
    <div class="container text-center">
        <h4 class="bold_text">Контакты</h4>
        <div class="row">
            <div class="col-md-4">
                <i class="fa fa-map-marker fa-2x"></i><br>
                Запорожье
            </div>
            <div class="col-md-4">
                <i class="fa fa-phone fa-2x"></i><br>
                +380501234765
            </div>
            <div class="col-md-4">
                <i class="fa fa-envelope-square fa-2x"></i><br>
                example@gmail.com
            </div>
        </div>
    </div>

</section>


<div class="contacts-button z-depth-2 wow shake md-trigger" data-modal="modal-6" data-wow-duration="500ms" data-wow-iterration="infinite">
    <i class="fa fa-envelope-o fa-3x" aria-hidden="true"></i>
</div>

<!--Main part-->
<div class="md-modal md-effect-1 project-modal" id="modal-1">
    <div class="md-content">
        <h3 class="bold_text">title</h3>
        <div>
            <p>This is a modal window. You can do the following things with it:</p>
            <img src="img/snap.jpg" alt="" class="project-modal__img">
            <button class="md-close modal-close__button">cl</button>
        </div>
    </div>
</div>

<div class="md-modal md-effect-6" id="modal-6">
    <div class="md-content">
        <h3 class="bold_text">Форма связи</h3>
        <div>
            <p class="text-center">Оставьте свои контактные данные и мы обязательно свяжемся с Вами</p>
            <div class="preload__form text-center">
                <form action="" class="contacts__form" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="name" class="contacts__input" placeholder="&nbsp;Ваше имя">
                    <input type="text" name="phone" class="contacts__input" placeholder="&nbsp;Телефон">
                    <input type="email" name="email" class="contacts__input" placeholder="&nbsp;E-mail">
                    <input type="submit" class="btn btn-success contacts_send" value="Отправить">
                    <button class="md-close modal-close__button"></button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Modal -->
<div class="md-overlay"></div><!-- the overlay element -->
@stop

@section('js')
    <script>
        $(function() {
            var wow = new WOW();
            wow.init();     //Инициализируем анимацию кнопки конактов

            setInterval(function () {
                $(".contacts-button").prop("style", "");
            }, 500);       //Останавливаем анимацию кнопки конактов
            setInterval(function () {
                $(".contacts-button").prop("style", "visibility: visible; animation-duration: 500ms; animation-iteration-count: infinite; animation-name: shake;");
            }, 13000);      //Запускаем анимацию кнопки конактов

            $(".contacts_send").on('click', function(e){
               e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{ route('site.index') }}",
                    data: $(".contacts__form").serialize(),
                    beforeSend: function() {
                        $(".preload__form").html("<img src='{{ asset("img/preloader.gif") }}' >");
                    },
                    success: function(response) {
                        if(response == 1){
                            $(".preload__form").html("<p>Мы получили Ваше сообщение и скоро с Вами свяжемся!</p>");
                        }else{
                            $(".preload__form").html("<p>К сожалению возникла ошибка! Пожалуйста попробуйте написать нам позже.</p>");
                        }
                    }
                });
            });
        });
    </script>
@stop
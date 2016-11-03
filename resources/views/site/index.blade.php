@extends('layouts.template')

@section('content')
<!--Home block-->
<section id="home" class="parallax-window home" data-parallax="scroll" data-image-src="img/bg.jpg" data-name="home">
    <div class="container home__container">
        <div class="row main-title__block">
            <div class="col-md-12 text-center">
                <h2 class="main-title__text bold_text">At vero eos et accusamus et iusto odio </h2>
                <a href="" class="main-title__button">Button</a>
            </div>
        </div>
    </div>
    <!-- Arrow block -->
    <section id="section05" class="demo">
        <a href="#steps" class="ancLinks"><span></span></a>
    </section>
    <!--/.Arrow block -->
</section>
<!--/.Home block-->

<section class="section steps" id="steps" data-name="steps">
    <div class="container text-center">
        <h4 class="bold_text">Этапы разработки</h4>
        <h5 class="">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</h5>

        <div class="col-md-2">
            <i class="fa fa-comments-o fa-5x" aria-hidden="true"></i>
            <h5>Discuss</h5>
        </div>
        <div class="col-md-2">
            <i class="fa fa-cogs fa-5x" aria-hidden="true"></i>
            <h5>Research</h5>
        </div>
        <div class="col-md-2">
            <i class="fa fa-map-o fa-5x" aria-hidden="true"></i>
            <h5>Plan</h5>
        </div>
        <div class="col-md-2">
            <i class="fa fa-terminal fa-5x" aria-hidden="true"></i>
            <h5>Execute</h5>
        </div>
        <div class="col-md-2">
            <i class="fa fa-sitemap fa-5x" aria-hidden="true"></i>
            <h5>Test</h5>
        </div>
        <div class="col-md-2">
            <i class="fa fa-check fa-5x" aria-hidden="true"></i>
            <h5>Launch</h5>
        </div>
    </div>
</section>

<section class="section aboutus" id="aboutus" data-name="aboutus">
    <div class="container">
        <h4 class="text-center bold_text">About us</h4>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="img/bg.jpg" alt="" class="img-responsive">
                <h5 class="bold_text">Title</h5>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto </p>
            </div>
            <div class="col-md-4 text-center">
                <img src="img/bg.jpg" alt="" class="img-responsive">
                <h5 class="bold_text">Title</h5>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto </p>
            </div>
            <div class="col-md-4 text-center">
                <img src="img/bg.jpg" alt="" class="img-responsive">
                <h5 class="bold_text">Title</h5>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto </p>
            </div>
        </div>
    </div>
</section>

<section class="section portolio" id="portolio" data-name="portolio">
    <div class="container">
        <h4 class="text-center bold_text">Portfolio</h4>
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
        <h4 class="bold_text">Contacts</h4>
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
            <form action="">
                <input type="text" class="contacts__input" placeholder="&nbsp;Ваше имя">
                <input type="text" class="contacts__input" placeholder="&nbsp;Телефон">
                <input type="email" class="contacts__input" placeholder="&nbsp;E-mail">
                <input type="submit" class="btn btn-success md-close" value="Отправить">
            </form>
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
        });
    </script>
@stop
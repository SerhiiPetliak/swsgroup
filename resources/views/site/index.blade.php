@extends('layouts.template')

@section('content')
<!--Home block-->
<section id="home" class="parallax-window home" data-parallax="scroll" data-image-src="img/bg.jpg" data-name="home">
    <div class="container home__container">
        <div class="main-title__block">
            <div class="col-md-12 text-center">
                <h2 class="main-title__text">We <b>simplify</b> where others complicate</h2>
                <a href="#aboutus" class="main-title__button nav-link ancLinks">About Us</a>
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
        <h4 class="bold_text">Development steps</h4>

        <div class="col-md-2">
            <i class="fa fa-comments-o fa-5x" aria-hidden="true"></i>
            <h5>Discuss</h5>
        </div>
        <div class="col-md-2">
            <i class="fa fa-search fa-5x" aria-hidden="true"></i>
            <h5>Research</h5>
        </div>
        <div class="col-md-2">
            <i class="fa fa-refresh fa-spin fa-5x" aria-hidden="true"></i>
            <h5>Plan</h5>
        </div>
        <div class="col-md-2">
            <i class="fa fa-cog fa-spin fa-5x" aria-hidden="true"></i>
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
        <h4 class="text-center bold_text">Team</h4>
            <div class="col-md-offset-2 col-md-3 text-center">
                <img src="img/user.jpg" alt="" class="img-circle img__border">
                <h5 class="bold_text">Sergey Mova</h5>
                <p>
                    Developer
                </p>
            </div>
            <div class="col-md-offset-2 col-md-3 text-center">
                <img src="img/petlyak.jpg" alt="" class="img-circle img__border">
                <h5 class="bold_text">Sergey Petlyak</h5>
                <p>
                    Developer
                </p>
            </div>
    </div>
</section>

<section class="section portolio" id="portolio" data-name="portolio">
    <div class="container">
        <h4 class="text-center bold_text">Portfolio</h4>
        <div>
        @foreach($works as $item)
            @if($loop->iteration == 4)
                <div class="clearfix"></div>
        </div>
                <div class="portfolio-row">
            @endif
                <div class="col-md-4 text-center">
                    <div class="view overlay hm-black-strong portfolio__block" data-id="{{ $item->id }}">
                        <img src="img/{{ $item->preview_img }}" class="img-responsive" alt="">
                        <div class="mask flex-center portolio__block md-trigger" data-modal="modal-1">
                            <h5 class="white-text bold_text">{{ $item->title }}</h5>
                            <i class="fa fa-eye fa-5x white-text" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            @if($loop->iteration == 6)
                <div class="clearfix"></div>
                </div>
            @endif
        @endforeach
    </div>
</section>

<section class="section contacts" id="contacts" data-name="contacts">
    <div class="container text-center">
            <div class="col-md-offset-2 col-md-3 text-center">
                <p><i class="fa fa-skype contacts__text_margin" aria-hidden="true"></i>skype</p>
            </div>
            <div class="col-md-offset-2 col-md-3 text-center">
                <p><i class="fa fa-envelope-o contacts__text_margin" aria-hidden="true"></i>example@gmail.com</p>
            </div>
    </div>

</section>


<div class="contacts-button z-depth-2 wow shake md-trigger" data-modal="modal-6" data-wow-duration="500ms" data-wow-iterration="infinite">
    <i class="fa fa-envelope-o fa-3x" aria-hidden="true"></i>
</div>

<!--Main part-->
<div class="md-modal md-effect-1 project-modal" id="modal-1">
    <div class="md-content">
        <h3 class="bold_text portfolio-modal__title"></h3>
        <div class="text-center portfolio-modal__body">
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
                    <input type="submit" class="btn btn-success contacts_send send__button_color" value="Отправить">
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

            $(".portfolio__block").on("click",function(){
               var work_id = $(this).data('id');

                $.ajax({
                    type: "get",
                    url: "works-get-work/"+work_id,
                    beforeSend: function() {
                        $(".portfolio-modal__body").html("<img src='{{ asset("img/preloader.gif") }}' >");
                    },
                    success: function(response) {
                        $(".portfolio-modal__title").text(response.title);
                        //$(".portfolio-modal__body").html("<p>"+response.description+"</p><img src='"+mpath+response.img+"'>");
                        $(".portfolio-modal__body").html("<p>"+response.description+"</p><img src='img/"+response.img+"'  alt='' class='project-modal__img'>");
                    }
                });
            });
        });
    </script>
@stop
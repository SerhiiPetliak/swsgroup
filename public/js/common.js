$(document).ready(function() {





$("a.ancLinks").click(function () {
  var elementClick = $(this).attr("href");
  var destination = ($(elementClick).offset().top) - 70;
  $('html,body').animate( { scrollTop: destination }, 1100 );
  return false;
});
$(window).scroll(function(){                              // отслеживаем событие
   if ( $(window).scrollTop() >= 80 ){                   // ставим условие
      $('#section05').css('display','none');         // определяем действие
   }
   if ( $(window).scrollTop() == 0 ){                   // ставим условие
      $('#section05').css('display','block');         // определяем действие
   }
});

});
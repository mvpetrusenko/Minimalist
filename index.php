<?php

    $title = "Главная страница";
    require_once "blocks/header.php"; //подключить header только 1 раз и если header не найден
?>
<!-- не выполнять этот код после него -->

    <p><div class="shadow-lg p-3 mb-5 bg-body rounded">Minimalism</div></p>

    <div class="alert alert-primary d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        <div>
            Live your life like a minimalist and enjoy!
        </div>
    </div>
</div>

<body>

   <div class="container-sm my-carousel">

       <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
           <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
           </div>
           <div class="carousel-inner">
               <div class="carousel-item active">
                   <img src="milk.jpg" class="d-block w-100" alt="milk">
               </div>
               <div class="carousel-item">
                   <img src="shoes.jpg" class="d-block w-100" alt="shoes">
               </div>
               <div class="carousel-item">
                   <img src="cozy.jpg" class="d-block w-100" alt="cozy">
               </div>
           </div>
           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
           </button>
           <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
           </button>
       </div>

   </div>


<?php
  echo date('F, j l, o  H:i:s'); // функция date, m... параметры формата даты (см.документацию), : - пробел - сами решаем, что будет между днем, месяцем...



 /*
  $message = "Вот такое сообщение Вам пришло"; //сообщение, которое будет отправляться
  $to = "mvpetrusenko100@gmail.com"; // адресат, кому будет отправляться письмо
  $from = "mvpetrusenko300@gmail.com"; // от кого будет отправляться письмо
  $subject = "Письмо с сайте"; // тема письма

  $subject = "=?utf-8?B?".base64_encode($subject)."?="; /*кодирование темы сообщения (поддерживает текст на латинице и на кириллице
  функция base64_encode позволяет обернуть текст (например, текст в $subject в верную кодировку */
/*  $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
  /*заголовок ($from - от кого письмо),
 \r - перевод "каретки", \n - перевод на новую строку
  Content-type - тип письма (html или обычный текст
  charset - кодировка */


 /* mail($to, $subject, $message, $headers); // функция, которая передает письмо на отправку

 /*
  * При обновлении главной страницы письмо не отправиться, т.к. письма с локального сервера не отправляются.
  * Письма будут отправляться с удаленного сервера, т.е. после покупки хостинга и
  * выкладывание сайта в Интернет
  */


  require_once "blocks/footer.php"; //подключение футера
?>

</body>

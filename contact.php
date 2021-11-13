<?php
session_start();
$title = "Контакты";
require_once "blocks/header.php";
?>
<!-- mt-5 - отступ сверху -->
  <div class="container">

    <h1 class="mt-5">Контакты</h1><br>

    <!-- добавление цвета текста -->
    <h2 class="text-success">Вы можете отправить нам сообщение</h2><br>
  </div>

    <!-- блок div и к нему класс контейнер от bootstrap, mt (mergent top - отступ сверху)-->
    <div class="container mt-2">
      <div class="row">
          <div class="col-9">

              <!-- обработка данных из формы будет на странице check_post.php методом post -->
              <form action="check_post.php" method="post">
                  <!-- поле, с которых будем получать данные (имя пользователя) класс от bootstrap -->
                  <input type="text" name="username" placeholder="Введите имя" class="form-control"><br>
                  <input type="email" name="email" placeholder="Введите email" class="form-control"><br>
                  <input type="password" name="password" placeholder="Введите пароль" class="form-control"><br>
                  <!-- поле для ввода текста -->
                  <textarea name="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
                  <!-- кнопка, при нажатии на которую данные будут отправляться на сервер, класс стилей от bootstrap -->
                  <input type="submit" value="Отправить" class="btn btn-success"><br>
              </form>
          </div>
          <div class="card my-3 w-25 col-3">

              <img src="phone.png" class="card-img-top">
              <div class="card-body">
                  <div class="card-title">
                      <p><h5>Всегда на связи</h5></p>
                  </div>
              </div>
          </div>
      </div>
    </div>


<?php
require_once "blocks/footer.php";

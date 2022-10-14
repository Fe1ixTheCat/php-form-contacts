<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Форма</title>
    <link rel="stylesheet" href="styles/styles.css">
  </head>
  <body>
    <div class="container">
      <?php
        include 'components/header.php';
      ?>
      <main>
        <form id="form" class="form" action="components/form-sendler.php" method="post">
          <div class="form-text">
            <p>Добавить контакт:</p>
          </div>
          <div class="form-input">
            <input type="number" name="tel" placeholder="номер" required>
          </div>
          <div class="form-input">
            <input type="text" name="name" placeholder="имя" required>
          </div>
          <div class="form-input">
            <input type="text" name="data" placeholder="данные">
          </div>
          <div class="form-line">
            <div class="form-button">
              <button type="reset" name="button">сбросить</button>
            </div>
            <div class="form-button">
              <button id="submit" type="submit" name="button">добавить</button>
            </div>
          </div>
        </form>
      </main>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="scripts.js"></script>
  </body>
</html>

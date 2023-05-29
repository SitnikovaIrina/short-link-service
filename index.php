<?php include 'request.php';?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Cервис коротких ссылок</title>
    <link rel="stylesheet" href="styles/styles.css">
  </head>
  <body>
    <h1>Cервис коротких ссылок</h1>

    <form class="form" action="" method="get">
      <label class="form__label visually-hidden" for="input">Поле для ввода</label>
      <input class="form__input" type="text" name="input-link" id="input" placeholder="Введите ссылку, которую нужно сократить">
      <button class="form__btn" type="submit" id="form__btn">Сократить</button>
    </form>

    <div class="result">
      <h2 class="result__title">Результат</h2>
      <form class="result__form form form--result" action="" method="GET">
        <label class="result__label form__label form__label--result visually-hidden" for="result">Поле с результатом</label>
        <input class="result__input form__input form__input--result" type="text" value="<?=$_GET['input-link'];?>" name="result-link" id="result">
      </form>
    </div>
  </body>
</html>

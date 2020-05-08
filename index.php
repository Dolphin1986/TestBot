<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Пример ajax</title>
</head>
<body>
<p>Здесь появится случайное число</p>
<button>Старт</button>
<div id="loader" style="display:none;"><img src="loader.gif"></div>
<script src="js/jquery.js"></script>
<script>
$("button").click(function()
{
   $.ajax({
      // метод передачи данных POST
      type: "POST",
      // на сервере обратимся к файлу ajax.php,
      // который находится рядом с index.php
      url: "ajax.php",
      // передаем две переменные с именами min и max, 
      // равные 1 и 100 соответственно
      data: {min: 1, max: 100},
      // перед отправкой показываем loader.gif
      beforeSend: function() {$('#loader').fadeIn();},
      // если получен ответ от сервера, то скрываем loader.gif за 300 мс
      // и помещаем в <p></p> полученное число
      success: function(res) {
          $('#loader').fadeOut(300, function() {$("p").text(res);});
      },
      // если ошибка, то скрываем loader.gif за 300 мс и 
      // затем помещаем в <p></p> текст о недоступности сервера
      error: function() {
          $('#loader').fadeOut(300, 
             function() {$("p").text('Сервер временно недоступен');});
      }
      });
   return false;
});
</script>
</body>
</html>
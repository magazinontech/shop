<?php
$vesta_title = "Тайтл";
$vesta_description = "Описание.";
$vesta_sitename = "Название сайта";
?>
<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title><?php echo $vesta_title; ?></title>
  <meta content="<?php echo $vesta_description; ?>" name="description">
  <meta content="ru_RU" property="og:locale">
  <meta content="website" property="og:type">
  <meta content="<?php echo $vesta_title; ?>" property="og:title">
  <meta content="<?php echo $vesta_description; ?>" property="og:description">
  <meta content="https://%domain%/" property="og:url">
  <meta content="<?php echo $vesta_sitename; ?>" property="og:site_name">
  <meta content="https://%domain%/image.jpg" property="og:image">
  <meta content="https://%domain%/image.jpg" property="og:image:secure_url">
  <meta content="1200" property="og:image:width">
  <meta content="630" property="og:image:height">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="<?php echo $vesta_description; ?>" name="twitter:description">
  <meta content="<?php echo $vesta_title; ?>" name="twitter:title">
  <meta content="https://%domain%/image.jpg" name="twitter:image">
  <meta content="#ffffff" name="theme-color">
  <link href="https://%domain%/" rel="canonical">
  <link href="https://%domain%/image.jpg" rel="image_src">
  <link href="/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
  <link href="/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
  <link href="/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
  <link href="/manifest.json" rel="manifest">
  <link color="#ffffff" href="/safari-pinned-tab.svg" rel="mask-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="//vk.com/js/api/openapi.js?151"></script>
  <script type="text/javascript">VK.init({apiId: 6666666, onlyWidgets: true});</script>
  <script type="text/javascript" src="/likely.js"></script>
  <link href="/likely.css" rel="stylesheet">
  <link href="/style.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <article class="main" id="main">
      <h1 class="text-center"><?php echo $vesta_sitename; ?></h1>
      <nav><a title="Отзывы о <?php echo $vesta_sitename; ?>" href="#otzyvy">Отзывы о <?php echo $vesta_sitename; ?></a></nav>
      <h2>Сайт %domain%</h2>
      <p>Lorem Ipsum является текст-заполнитель обычно используется в графических, печать и издательской индустрии для предварительного просмотра макета и визуальных макетах.</p>
      <ul>
        <li>Lorem Ipsum является текст-заполнитель;</li>
        <li>Lorem Ipsum является текст-заполнитель;</li>
        <li>Lorem Ipsum является текст-заполнитель;</li>
      </ul>
      <p>Lorem Ipsum является текст-заполнитель обычно используется в графических, печать и издательской индустрии для предварительного просмотра макета и визуальных макетах.</p>
      <p>Расскажите друзьям о нашем сайте.</p>
      <div class="likely" data-url="https://%domain%/">
        <div class="twitter">Твитнуть</div>
        <div class="facebook">Поделиться</div>
        <div class="gplus">Плюсануть</div>
        <div class="vkontakte">Поделиться</div>
        <div class="odnoklassniki">Класснуть</div>
      </div>
    </article>
    <article class="otzyvy" id="otzyvy">
      <h2 class="text-center">Отзывы о <?php echo $vesta_sitename; ?></h2>
      <p>Оставьте свой отзыв о сайте %domain%!</p>
      <div id="vk_comments"></div>
      <script type="text/javascript">VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});</script>
    </article>
    <footer>
      <p class="text-center"><?php echo $vesta_sitename; ?>, <?php echo date('Y') ?></p>
    </footer>
  </div>
  <!-- Место для Яндекс.Метрики -->
</body>
</html>
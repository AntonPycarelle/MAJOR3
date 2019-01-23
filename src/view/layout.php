<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ISB - <?php echo $title; ?></title>
    <?php echo $css;?>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
  WebFont.load({
    custom: {
      families: ['Glacial Indifference', 'Coolvetica'],
      urls: ["assets/fonts/fonts.css"]
    }
  });
</script>
  </head>
  <body>
      <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="error box">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="info box">' . $_SESSION['info'] . '</div>';
        }
      ?>
        <?php echo $content;?>
    <?php echo $js; ?>
  </body>
</html>

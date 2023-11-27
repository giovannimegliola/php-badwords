<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>

  <?php

  $paragraph = $_GET["paragraph"];
  $censoredWord = $_GET["censored_word"];

  echo "Il tuo paragrafo originale : $paragraph <br>";
  echo "La lunghezza del paragrafo è : " . strlen($paragraph) . " caratteri <br>";

  $censoredParagraph = str_replace($censoredWord, '***', $paragraph);

  echo "Questo invece è il tuo paragrafo censurato : $censoredParagraph <br>";
  echo "La lunghezza del paragrafo censurato è : " . strlen($censoredParagraph) . " caratteri";

  ?>
  
</body>
</html>
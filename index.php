<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>
  <form action="censorship.php" method="get">
    
    <p>Scrivi qui il tuo paragrafo:</p> 
    <textarea name="paragraph" id="paragraph" cols="30" rows="10"></textarea>
    
    <p>Quale parola vuoi censurare?</p> 
    <input type="text" name="censored_word" id="censored_word">

    <input type="submit" value="Invia">

  </form>
</body>
</html>
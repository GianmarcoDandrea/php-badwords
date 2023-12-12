<?php
$paragraph = $_GET["paragraph"];
$censored_word = $_GET["censored_word"];

$paragraph_length = strlen($paragraph);
$censored_paragraph = str_replace(trim($censored_word), "***", $paragraph);
$censored_paragraph_length = strlen($censored_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./style/style_censored.css">
  </head>

  <body>
    <section>
      <p>
        <h2>
          Il paragrafo da te inseririto è 
        </h2>
        <?php echo $paragraph ?>
      </p>

      <p>
        <h2>
          La lunghezza del paragrafo è:
        </h2>
        <?php echo $paragraph_length; ?>
      </p>
    </section>

    <br />
    <br />

    <section>
      <p>
        <h2>
          Il paragrafo con le parole censurate è: 
        </h2>
        <?php echo $censored_paragraph ?>
      </p>

      <p>
        <h2>
          La lunghezza del paragrafo censurato è:
        </h2>
        <?php echo $censored_paragraph_length; ?>
      </p>
    </section>
  </body>
</html>

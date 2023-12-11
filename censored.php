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
  </head>

  <body>
    <section>
      <p>
        Il paragrafo da te inseririto è <br />
        <?php echo $paragraph ?>
      </p>

      <p>
        La lunghezza del paragrafo è:
        <?php echo $paragraph_length; ?>
      </p>
    </section>

    <br />
    <br />

    <section>
      <p>
        Il paragrafo con le parole censurate è: <br />
        <?php echo $censored_paragraph ?>
      </p>

      <p>
        La lunghezza del paragrafo censurato è:
        <?php echo $censored_paragraph_length; ?>
      </p>
    </section>
  </body>
</html>

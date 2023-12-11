<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="censored.php" method="GET">
        <label for="paragraph">Il Tuo Paragrafo</label>
        <input type="text" id="paragraph" name="paragraph">

        <label for="censored_word">La parola da censurare</label>
        <input type="text" id="censored_word" name="censored_word">

        <button type="submit">Invia</button>
    </form>

</body>
</html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="stylesheet.css" />
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
    <h1>Bedankt voor het invullen</h1>
        <h2>De volgende gegevens worden door ons verwerkt</h2><br>
    <div class="container">
        <form>
            Leraar: <?php echo $_POST["leraar"]; ?><br><br>
            Vak: <?php echo $_POST["vakken"]; ?><br><br>
            Klas: <?php echo $_POST["klassen"]; ?><br><br>
            Lokaal: <?php echo $_POST["lokalen"]; ?><br><br>
            Tijd: <?php echo $_POST["tijden"]; ?>
        </form>
    </div>

</body>
</html>
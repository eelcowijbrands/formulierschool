<!DOCTYPE html>
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
    <div class="container">
        <form action="school.php" method="post">
            Leraar: <input type="text" name="leraar"><br>
            Vak: <input type="text" name="vakken"><br>
            Klas: <input type="text" name="klassen"><br>
            Lokaal: <input type="text" name="lokalen"><br>
            Tijd: <input type="text" name="tijden"><br>
            <input type="submit">
        </form>
    </div>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["leraar"])) {
      $leraarErr = "Naam is verplicht";
    } else {
      $name = test_input($_POST["leraar"]);
    }
}
?>
    
</body>
</html>
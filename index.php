<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CND BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <!--Milestone 1
        Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere minuscole, lettere maiuscole, numeri e simboli) da restituire all'utente.
        Scriviamo tutto (logica e layout) in un unico file index.php. 
    -->

    <form>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Invia">
    </form>

    <?php

        if (isset($_GET['password'])) {

            $password = $_GET['password'];
            if($password == 'Boolean') {

                echo '<h1 style="color: green">Password corretta</h1>';
            } else {

                echo '<h1 style="color: red">Password errata</h1>';
            }
        }
    ?>

</body>

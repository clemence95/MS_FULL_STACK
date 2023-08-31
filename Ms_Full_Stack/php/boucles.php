<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LesBoucles</title>
</head>

<body>
    <?php
    for ($i = 1; $i <= 150; $i += 2) {
        echo    $i . "<br>";
    }
    echo "<br>";

    for ($i = 0; $i < 500; $i++) {
        echo  "Je dois faire des sauvegardes régulières de mes fichiers<br>";
    }
    echo "<br>";

    ?>


<title>Table de multiplication</title>
  <style>
    table {
      border-collapse: collapse;
      margin: auto;
    }
    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: center;
    }
  </style>
</head>
<body>
  <h1>Table de multiplication</h1>
  <table>
    <thead>
      <tr>
        <th>x</th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
        <th>7</th>
        <th>8</th>
        <th>9</th>
      </tr>
    </thead>
    <tbody>
      <!-- Boucle pour les lignes -->
      <?php for ($i = 1; $i <= 9; $i++) { ?>
        <tr>
          <th><?php echo $i; ?></th>
          <!-- Boucle pour les colonnes -->
          <?php for ($j = 1; $j <= 9; $j++) { ?>
            <td><?php echo $i * $j; ?></td>
          <?php } ?>
        </tr>
      <?php } ?>
    </tbody>
  </table>

</html>
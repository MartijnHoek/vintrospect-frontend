<?php $pageTitle = "Mitsubishi"; ?>
<?php include '../header.php'; ?>

<main id="home">
  <h1>Mitsubishi <span class="fi fi-jp flag-medium"></span></h1>
  <p>
    Mitsubishi was founded in 1870 and is one of Japan's oldest and largest automotive manufacturers. The brand is known for its diverse range of vehicles, including sedans, SUVs, and trucks.
  </p>

  <h2>Model Overview</h2>
  <ul>
    <?php
    $modelFiles = glob(__DIR__ . '/../database/mitsubishi/models/*.php');
    foreach ($modelFiles as $file) {
        $modelData = include($file);
        $fileName = basename($file, '.php'); // e.g. 3000gt
        echo '<li><a href="/mitsubishi/' . $fileName . '">' . $modelData['name'] . '</a></li>';
    }
    ?>
  </ul>
</main>

<?php include '../footer.php'; ?>

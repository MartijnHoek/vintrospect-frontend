<?php $pageTitle = "Zeekr"; ?>
<?php include '../header.php'; ?>

<main id="home">
  <h1>Zeekr <span class="fi fi-cn flag-medium"></span></h1>
  <p>
    Zeekr was founded in 2021 as a premium electric vehicle brand as part of the Geely Auto Group, one of China's largest automotive manufacturers
  </p>

  <h2>Model Overview</h2>
  <ul>
    <?php
    $modelFiles = glob(__DIR__ . '/../database/zeekr/models/*.php');
    foreach ($modelFiles as $file) {
        $modelData = include($file);
        $fileName = basename($file, '.php'); // e.g. 001
        echo '<li><a href="/zeekr/' . $fileName . '">' . $modelData['name'] . '</a></li>';
    }
    ?>
  </ul>
</main>

<?php include '../footer.php'; ?>

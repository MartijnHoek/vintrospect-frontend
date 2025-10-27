<?php $pageTitle = "Kia"; ?>
<?php include '../header.php'; ?>

<main id="home">
  <h1>Zeekr <span class="fi fi-kr flag-medium"></span></h1>
  <p>
    Kia was founded in 1944 and is South Korea's second-largest automobile manufacturer, known for producing a wide range of vehicles from compact cars to SUVs.
  </p>

  <h2>Model Overview</h2>
  <ul>
    <?php
    $modelFiles = glob(__DIR__ . '/../database/kia/models/*.php');
    foreach ($modelFiles as $file) {
        $modelData = include($file);
        $fileName = basename($file, '.php'); // e.g. Picanto
        echo '<li><a href="/kia/' . $fileName . '">' . $modelData['name'] . '</a></li>';
    }
    ?>
  </ul>
</main>

<?php include '../footer.php'; ?>

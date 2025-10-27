<?php $pageTitle = "Supported Models"; ?>
<?php include 'header.php'; ?>

<main id="supported-models">
  <h2>Supported makes and models</h2>

  <div class="search-container">
    <input type="text" id="searchInput" placeholder="Search for manufacturer or model..." />
    <span class="clear-btn" id="clearBtn">&times;</span>
  </div>

  <div id="manufacturersContainer"></div>
</main>

<script src="supported-models.js"></script>
<?php include 'footer.php'; ?>

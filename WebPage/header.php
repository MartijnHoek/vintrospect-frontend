<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo isset($pageTitle) ? $pageTitle . " - VINtrospect" : "VINtrospect"; ?></title>
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="/assets/flag-icons-main/css/flag-icons.min.css">

</head>
<body>
  <header>
    <h1>VINtrospect</h1>
    <p>Decode your Vehicle Identification Number</p>
  </header>

  <nav>
    <a href="/index.php">Home</a>
    <div class="dropdown">
      <a href="#">Database</a>
      <div class="dropdown-content">
        <a href="/database/ferrari/ferrari-brand.php">Ferrari</a>
        <a href="/brands/kia.php">Kia</a>
        <a href="/brands/mitsubishi.php">Mitsubishi</a>
        <a href="/brands/zeekr.php">Zeekr</a>
      </div>
    </div>
    <a href="/vin-decode.php">VIN Decoding</a>
    <a href="/supported-models.php">Supported</a>
    <div class="dropdown">
      <a href="#">News</a>
      <div class="dropdown-content">
        <a href="/latest-news.php">Latest News</a>
        <a href="/changelog.php">Changelog</a>
      </div>
    </div>
    <a href="/contact-us.php">Contact us</a>
  </nav>

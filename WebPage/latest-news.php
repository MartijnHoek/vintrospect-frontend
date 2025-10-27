<?php $pageTitle = "News"; ?>
<?php include 'header.php'; ?>

<main id="home">
  <h1>Latest News</h1>
  <input type="text" id="Search" onkeyup="filterNews()" placeholder="Search news...">
  <p>We’ll keep this page updated with the latest news, features, and announcements related to VIN decoding.</p>

  <section>
    <h3>July 2025</h3>
    <ul>
      <li>We are developing a VIN decoder service available for your use!</li>
    </ul>
  </section>

  <section>
    <h3>August 2025</h3>
    <ul>
      <li>
        For our first update we have added support for Ferrari, some values are dependent on the market that the vehicle was intended for (such as the production date).<br>
        Further improvements will be made to the decoding of the engine data in further updates. But for now the focus will be on other manufacturers.
      </li>
    </ul>
  </section>
</main>

<?php include 'footer.php'; ?>

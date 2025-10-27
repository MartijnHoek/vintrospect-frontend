<?php $pageTitle = "Changelog"; ?>
<?php include 'header.php'; ?>

<main>
  <h2>Release History</h2>
  <input type="text" id="changelogSearch" onkeyup="filterChangelog()" placeholder="Search changelog...">

  <section>
    <h3>v0.0.1 - June 2025</h3>
    <ul>
      <li>Initial development release of VINtrospect website including a basic website and backend setup for VIN decoding</li>
      <li>Added basic model decoding for Zeekr</li>
    </ul>
  </section>
  
  <section>
    <h3>v0.0.2 - August 2025</h3>
    <ul>
      <li>Added support for Ferrari decoding</li>
      <li>Added support for Kia Forte (2012-2018)</li>
      <li>Added support for Kia Forte (2018-2024)</li>
      <li>Added support for Kia K5 (2021-now)</li>
      <li>Added support for Kia Stinger</li>
      <li>Added support for Mitsubishi 3000GT decoding</li>
      <li>Added support for Mitsubishi Colt (2002-2013) decoding</li>
      <li>Added support for Mitsubishi Eclipse (1995-1999) decoding</li>
      <li>Added support for Mitsubishi Eclipse Cross decoding</li>
      <li>Added support for Mitsubishi Galant (1987-1994) decoding</li>
      <li>Added support for Mitsubishi Galant (1992-1998) decoding</li>
      <li>Added support for Mitsubishi Galant (1996-2006) decoding</li>
      <li>Added support for Mitsubishi I-MiEV decoding</li>
      <li>Added support for Mitsubishi Starion decoding</li>
      <li>Added support for Mitsubishi Xpander decoding</li>
      <li>Added support for Zeekr 009 decoding</li>
    </ul>
  </section>
  
  <section>
    <h3>v0.0.3 - September 2025</h3>
    <ul>
      <li>Added support for Mitsubishi Eclipse (2005-2012) decoding</li>
      <li>Added support for Kia Picanto (2002-2011) decoding</li>
      <li>Added support for Kia Picanto (2011-2017) decoding</li>
      <li>Added support for Kia Picanto (2017-now) decoding</li>
      <li>Added support for Mitsubishi Carisma decoding</li>
    </ul>
  </section>
</main>

<script>
function filterChangelog() {
  const input = document.getElementById('changelogSearch').value.toLowerCase();
  const sections = document.querySelectorAll('main section');
  
  sections.forEach(section => {
    const text = section.innerText.toLowerCase();
    section.style.display = text.includes(input) ? '' : 'none';
  });
}
</script>

<?php include 'footer.php'; ?>

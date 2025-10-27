<script>
function filterNews() {
  const input = document.getElementById('Search').value.toLowerCase();
  const sections = document.querySelectorAll('section');

  sections.forEach(section => {
    let text = section.innerText.toLowerCase();
    section.style.display = text.includes(input) ? '' : 'none';
  });
}
</script>

<footer>
  <p>&copy; 2025 VINtrospect. All rights reserved.</p>
  <p style="font-size:0.8em; color:#666;">
    All car designs, logos, and trademarks are the property of their respective owners. Images may be AI-generated or for illustrative purposes only.
  </p>
</footer>
</body>
</html>

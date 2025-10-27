<?php $pageTitle = "Contact us"; ?>
<?php include 'header.php'; ?>

<main id="contact-us">
  <h2>Contact us</h2>
  <p>If you have any questions, please get in touch with us!</p>

  <form action="process-contact.php" method="post" style="max-width:400px;margin-top:20px;">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required style="width:100%;padding:8px;"><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required style="width:100%;padding:8px;"><br><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" required
      style="
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-family: inherit;
        font-size: 16px;
        box-sizing: border-box;">
      </textarea><br><br>

    <button type="submit" style="padding:10px 15px;background:#333;color:#fff;border:none;border-radius:5px;cursor:pointer;">
      Send Message
    </button>
  </form>
</main>

<?php include 'footer.php'; ?>

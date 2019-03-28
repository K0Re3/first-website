<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Kontakt</title>
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, width=device-width, user-scalable=yes">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <form class="contact" action="contact.php" method="post">
    <h1>Kontakt</h1>
    <div class="margin">
      <div class="inputGroup">
        <input type="text" name="name" required />
        <span class="inputBar"></span>
        <label>Imię</label>
      </div>

      <div class="inputGroup">
        <input type="text" name="subject" required />
        <span class="inputBar"></span>
        <label>Temat</label>
      </div>

      <div class="inputGroup">
        <input type="text" name="email" required />
        <span class="inputBar"></span>
        <label>Email</label>
      </div>

      <div class="inputGroup">
        <textarea type="textarea" name="message" required></textarea>
        <span class="inputBar"></span>
        <label>Wiadomość</label>
      </div>

      <button name="submit">Wyślij</button>
    </div>
  </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700">
  <link rel="stylesheet" href="style.css">
  <title>Contact Form - Day 1</title>
</head>

<body>
  <div class="container">
    <form class="form" action="traitement.php" method="post">
      <h1 class="form-title">Message me</h1>
      <div class="grid">
        <div class="form-group">
          <input type="text" name="name" id="name" placeholder="Full name">
        </div>
        <div class="form-group">
        <input id="date" type="date" name="age" placeholder="Entrez votre date de naissance">
        </div>
        <div class="form-group">
        <input type="password" id="password" name="password" placeholder="Enter your password" minlength="8" required>
        </div>
        <button type="submit" class="btn">Send message</button>
      </div>
    </form>
  </div>
</body>
</html>
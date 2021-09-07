<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hubungi kami</title>
</head>

<body>
  <h1>Contact Us</h1>
  <p>Hubungi kami melalui form berikut</p>
  <form action="/article/new" method="post">
    <div>
      <label for="name">Name</label>
      <input type="text" name="name" placeholder="your name" required />
    </div>
    <div>
      <label for="email">Email</label>
      <input type="email" name="email" placeholder="your email address" required />
    </div>
    <div>
      <label for="messaage">Message</label><br>
      <textarea name="message" cols="30" rows="5" placeholder="write your message" required></textarea>
    </div>

    <div>
      <input type="submit" value="Kirim">
      <input type="reset" value="Reset">
    </div>
  </form>

</body>

</html>
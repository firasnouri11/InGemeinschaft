<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="icon.png"  />

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>inGemeinschaft</title>
<style>
  body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }

   
  .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .video-background video {
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }


  
  .login-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 443px;
    padding: 20px;
    background: rgb(255 255 255 / 58%);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    border-radius: 8px;
    z-index: 3;
  }

  .login-container img {
    width: 251px;
    margin-bottom: -40px;
  }

  .login-container input[type="text"],
  .login-container input[type="password"] {
    width: 371px;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
     box-sizing: border-box;
  }

  .login-container button {
    width: 362px;
        padding: 10px;
    margin: 10px 0;
    background-color: #333;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-bottom: 45px;
  }

  .login-container button:hover {
    background-color: #555;
  }

  .login-container a {
    text-decoration: none;
    color: #000;
    font-size: 0.9em;
    font-family: math;
  }

  .login-container .login-links {
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
  }



  .logo {
    position: absolute;
    top: -138px;
    left: -105px;
    height: 361px;
    z-index: 3;
  }

  footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 50px; /* Adjust the height as needed */
     color: white;
    text-align: center;
    line-height: 50px; /* Vertically center the text in the footer */
    font-size: 0.9em;
    z-index: 3;
    bottom: 0px;  
}

  footer a {
    text-decoration: none;
    color: white;
    margin: 0 10px; /* Spacing between links */
    font-family: Arial, sans-serif;
  }

  footer a:hover {
    text-decoration: underline;
  }


</style>
</head>
<body>

  
<div class="login-container">
  <img src="icon.png" alt="Logo" style="
    margin-bottom: 20px;
    margin-top: 20px;
">

  <form action="login.php" method="post">

  <input type="text" placeholder="Username/Email Adress" name="username">
  <input type="password" placeholder="Password" name="password">
  <button>Login</button>
  <div class="login-links">
    <a href="forgotpass.php">Forgot password?</a>
    <a href="signup.php">Not a member yet?</a>
  </div>
  </form>

</div>


<footer>
  <a href="privacy.php">Privacy</a> |
  <a href="terms.php">Terms of Use</a> |
  <a href="aboutus.php">About Us</a> |
  <span>UniHub&reg; 2024</span>
</footer>



</body>
</html>

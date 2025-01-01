<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="signup.css" />
    <title>Login</title>
  </head>


  <body>

    <nav>
      <div class="nav__bar">
        <div class="nav__logo"><a href="#">Roamify.</a></div>
        <ul class="nav__links">
          <li class="link"><a href="project.html">Home</a></li>
          <li class="link"><a href="project.html">About Us</a></li>
          <li class="link"><a href="project.html">Discover</a></li>
          <li class="link"><a href="project.html">Blog</a></li>
          <li class="link"><a href="project.html">Journals</a></li>
          <li class="link"><a href="project.html">Gallery</a></li>
          <li class="link"><a href="project.html">Contact</a></li>
          <li class="link"><a href="signup.php">Sign up</a></li>
          <li class="link search">
            <span><i class="ri-search-line"></i></span>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">

      <div class="content">
        <h1>Welcome To Roamify </h1>
        <p>Please enter your details.</p>
        <form id="signup">

          <div class="input__group">
            <label for="name">Name</label>
            <input type="text" placeholder="Enter your Name" id="name" required/>
          </div>

          <div class="input__group">
            <label for="email">E-mail</label>
            <input type="email" placeholder="Enter your email" id="email" required/>
          </div>

          <div class="input__group">
            <label for="password">Password</label>
            <input type="password" placeholder="Enter your password" id="password" required />
          </div>

          <div class="input__group">
            <label for="c-password">Password</label>
            <input type="password" placeholder="Confirm your password" id="c-password" required />
          </div>

          <div class="input__group">
            <label for="phone">Phone</label>
            <input type="text" placeholder="Enter your phone" id="phone" required/>
          </div>

          <div class="input__group">
            <label for="gender">Password</label>
            <input type="radio" placeholder="Enter your password" id="password" required />
          </div>

          <div class="actions">
            <div>

              <input type="checkbox" />
              <span>Remember me</span>

            </div>
            <a href="#">Forgot your password?</a>
          </div>

          <button type="submit">Log In</button>
        </form>
        <p>You have an account? <a href="login.html">Sign in</a></p>
      </div>

    </div>
    <script src="login.js"></script>
  </body>

</html>


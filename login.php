<?php
require 'connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
     href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
      body {
        background-color: #4A9782;
        color: white;
      }

      form {
        border: 1px solid white;
        padding: 20px 40px;
        border-radius: 20px;
        box-shadow: rgb(222, 222, 223) 0px 2px 5px -1px,
                    rgba(230, 230, 230, 0.97) 0px 1px 3px -1px;
      }

      #login_email, #login_password {
        border: none;
        border-bottom: 2px solid white;
        border-radius: 0;
        background-color: transparent;
        color: white;
      }

      #login_email:focus, #login_password:focus {
        outline: none;
        box-shadow: none;
        border-bottom: 2px solid #fff;
      }

      .btn {
        background-color: white;
        color: #4A9782;
        font-weight: 600;
      }

      .btn:hover, .btn:focus {
        background-color: white;
        color: #4A9782;
      }

      #login {
        color: white;
      }

      h3 {
        font-family: Arial, Helvetica, sans-serif;
      }

      img {
        max-width: 100%;
        height: auto;
      }

      @media (max-width: 768px) {
        form {
          padding: 20px;
        }
      }
    </style>
  </head>
  <body>
    <div class="container py-5 mt-5 ">
      <div class="row justify-content-center align-items-center">
        <!-- Image Column -->
        <div class="col-md-4 text-center mb-2 mb-md-0">
          <img src="./login-image.png" alt="illustration" class="img-fluid rounded shadow">
        </div>

        <!-- Form Column -->
        <div class="col-md-4">
          <h3 class="text-center mb-4">TO DO APPLICATION</h3>
          <form action="code2.php" method="post">
            <div class="form-group">
              <label for="login_email">User Email</label>
              <input type="email" name="login_email" id="login_email"
               class="form-control" required>
            </div>
            <div class="form-group">
              <label for="login_password">Password</label>
              <input type="password" name="login_password" id="login_password"
               class="form-control" required>
            </div>
            <button type="submit" name="login" class="btn btn-block">Login</button>
            <div class="text-center mt-3">
              <a href="reg.php" id="login">Register?</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>

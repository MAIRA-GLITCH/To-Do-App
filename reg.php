<?php
require 'connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
   
    <title>Register User</title> <!-- ✔️ Meaningful title -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <style>
      body{
        background-color: #4A9782;
        color: white;
      }

      form{
        border: 1px solid white;
        padding: 20px 40px;
        border-radius: 20px;
        box-shadow: rgb(222, 222, 223) 0px 2px 5px -1px, rgba(230, 230, 230, 0.97) 0px 1px 3px -1px;
      }
      
      #username,#email,#password{
      
  border: none;             
  border-bottom: 2px solid white; 
  border-radius: 0; 
  background-color: transparent;
  color: white;
      }
        #username:focus,#email:focus,#password:focus{
      
    outline: none;              /* blue border hatana */
  box-shadow: none;           /* shadow hatana */
  border-bottom: 2px solid #fff; /* focus mein bhi sirf bottom white */
  
      }

      .btn{
        background-color: white;
        color: #4A9782;
        font-weight: 600;
      }
       .btn:hover,.btn:focus{
        background-color: white;
        color: #4A9782;
        font-weight: 600;
      }

      #login{
        color: white;

      }

      h3{
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
      <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 "> 
                <h3 class="text-center mb-4">TO DO APPLICATION</h3>
                <form action="code.php" method="post">
                    <div class="form-group">
                      <label for="username">User Name</label>
                      <input type="text" name="user_name" id="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="user_email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="user_password" id="password" class="form-control" required>
                    </div>
                    <button type="submit" name="reg" class="btn btn-block">Register</button>
                    <a href="login.php" id="login" >Login ?</a>
                </form>
            </div>

             <div class="col-md-4 text-center" id="hello">
    <img src="./giant-check-list.png" alt="illustration" class="img-fluid rounded shadow">
  </div>
        </div>
      
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

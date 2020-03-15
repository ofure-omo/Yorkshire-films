<?php        

include 'AutoLoader.php';

    if(isset($_POST['submit'])) {
        echo "<h3>Welcome $_POST[firstname]</h3>"; 
          $validation = new User_validation($_POST);
          $errors = $validation->validateForm();
    } else if (!empty($_POST)) {
        echo "<h4>You have not submitted any data to the server</h4>";
        }
    
        
?>


<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>Registration page</title>
        <link rel=stylesheet href="home.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"  crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"  crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  crossorigin="anonymous">
        
</head>

<body>
        <!--navbar (hamburger menu)-->
      <nav class = "nav main-nav">
     <div class="toggle">
        <i class= "fa fa-bars" aria-hidden="true"></i>
      </div>

      <!--navbar (normal)-->
        <ul>
          <li><a href= "home.html">HOME</a></li>
          <li><a href= "films.html">FILMS</a></li>
          <li><a href= "login.html">LOG IN</a></li>
        </ul>
      </nav>
    <p>    
    <h2>Enter your details below to start borrowing our films.  </h2>  
    </p>
<div class="new-user">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <div class="form-row" >
        <div class="form-group "col-md-auto">
            First Name:<input type="text" class="form-control" name='firstname' autofocus="" required=""> 
            <div class='error'>
                <?php echo $errors['firstname'] ?? '' ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group "col-md-auto">
            Surname:<input type="text" class="form-control" name='surname' required="">
            <div class='error'>
                <?php echo $errors['surname'] ?? '' ?>
            </div>
        </div>
    </div>      
    <div class="form-row">
        <div class="form-group "col-md-auto">
            Email:<input type="email" class="form-control" name='email' placeholder="weloveyorkshire@films.com" required="">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <div class='error'>
                <?php echo $errors['email'] ?? '' ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group "col-md-auto">
            Telephone:<input type="text" class="form-control" name='tel' required=""> 
            <div class='error'>
                <?php echo $errors['tel'] ?? '' ?>
            </div>
        </div>  
    </div>
  
    <div class="form-row">
        <div class="form-group "col-md-auto">
            Date of Birth:<input type="date" class="form-control" name='DOB' required="">
            <div class='error'>
                <?php echo $errors['DOB'] ?? '' ?>
            </div>
        </div>
    </div>
   
    <div class="form-row">
        <div class="form-group col-md-auto" >
            Create a username:<input type="text" class="form-control" name='username' required="">
            <div class='error'>
                <?php echo $errors['username'] ?? '' ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-auto" >
            Choose a password:<input type="password" class="form-control" name='password' required="">
            <div class='error'>
                <?php echo $errors['password'] ?? '' ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-auto" >
            Confirm password:<input type="password" class="form-control" name='password_confirm' required="">
            <div class='error'>
                <?php echo $errors['password_confirm'] ?? '' ?>
            </div>
        </div>
    </div>
      <input type="submit" value="submit" name= "submit" class="btn btn-primary">
  </form>
</div>    
<div class="container">    

</div>
    
  <footer>
              <div class="info-container">
                <p class="info"><a href="">HELP</a></p>
                <p class="info"><a href="">PRIVACY POLICY</a></p>
                <p class= "info"><a href="">JOBS</a></p>
              </div>

              <div class="social-container">
                <span class="icon" src="" href="" alt="twitter"></span>
                <span class="icon" src="" href="" alt="instagram"></span>
                <span class="icon" src="" href="" alt="facebook"></span>
              </div>
            </footer>
    </body>
</html>

<?php




?>
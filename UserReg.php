<?php        

include 'AutoLoader.php';
include_once 'PDO_connection.php';

    if(isset($_POST['submit'])) {
        echo "<h3>Welcome $_POST[firstname]</h3>"; 
          $validation = new User_validation($_POST);
          $errors = $validation->validateForm();
    }
?>


<!DOCTYPE html>
<html>
    <style>
 .button {
  background-color: grey; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}       
.pure-control-group {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
 }

    </style>
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
<div class="headerLogo">
        <img src="Images/reel.png", width="100%" height="100px" background-size: cover />
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Yorkshire Film Library</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Films.php">Films<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    
        <body>
            <div class="sticky">
                <h1 style="font: 25px Georgia, serif; line-height: 1.8;background-color:grey;" ><center> YORKSHIRE FILMS</center></h1>
            </div>

    <p>    
    <h3>Enter your details below to start borrowing our films.  </h3>  
    </p>
<div class="new-user">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <div class="pure-form pure-form-aligned" >
        <div class="pure-control-group">
            First Name:<input type="text" class="form-control" name='firstname' autofocus="" required=""> 
            <div class='error'>
                <?php echo $errors['firstname'] ?? '' ?>
            </div>
        </div>
    </div>
    <div class="pure-form pure-form-aligned">
        <div class="pure-control-group">
            Surname:<input type="text" class="form-control" name='surname' required="">
            <div class='error'>
                <?php echo $errors['surname'] ?? '' ?>
            </div>
        </div>
    </div>      
    <div class="pure-form pure-form-aligned">
        <div class="pure-control-group">
            Email:<input type="email" class="form-control" name='email' placeholder="weloveyorkshire@films.com" required="">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <div class='error'>
                <?php echo $errors['email'] ?? '' ?>
            </div>
        </div>
    </div>
    <div class="pure-form pure-form-aligned">
        <div class="pure-control-group">
            Telephone:<input type="text" class="form-control" name='tel' required=""> 
            <div class='error'>
                <?php echo $errors['tel'] ?? '' ?>
            </div>
        </div>  
    </div>
  
    <div class="pure-form pure-form-aligned">
        <div class="pure-control-group">
            Date of Birth:<input type="date" class="form-control" name='DOB' required="">
            <div class='error'>
                <?php echo $errors['DOB'] ?? '' ?>
            </div>
        </div>
    </div>
   
    <div class="pure-form pure-form-aligned">
        <div class="pure-control-group" >
            Create a username:<input type="text" class="form-control" name='username' required="">
            <div class='error'>
                <?php echo $errors['username'] ?? '' ?>
            </div>
        </div>
    </div>
    <div class="pure-form pure-form-aligned">
        <div class="pure-control-group" >
            Choose a password:<input type="password" class="form-control" name='password' required="">
            <div class='error'>
                <?php echo $errors['password'] ?? '' ?>
            </div>
        </div>
    </div>
    <div class="pure-form pure-form-aligned">
        <div class="pure-control-group" >
            Confirm password:<input type="password" class="form-control" name='password_confirm' required="">
            <div class='error'>
                <?php echo $errors['password_confirm'] ?? '' ?>
            </div>
        </div>
    
    </div>
    <div>        
        <div class="pure-form pure-form-aligned">
            <div class="pure-control-group" >
            
            (Office only) Enter your Library code:<input type="text" class="form-control" name='lib_code' id="lib_code">
            <?php echo $errors['lib_code'] ?? '' ?>
            </div>
            
        </div>
    </div>    
        <div class="pure-form pure-form-aligned">
        <input type="submit" value="Register" name= "submit" class="button">
        </div>
        </form>

</div>    
   
  <footer>
              <div class="info-container">
                <p class="info"><a href="">HELP</a></p>
                <p class="info"><a href="">PRIVACY POLICY</a></p>
                <p class= "info"><a href="Jobs.php">JOBS</a></p>
              </div>
  </footer>
    </body>
</html>

<?php
 //if (empty($errors)){
 //insert clean variables into  db
 //}



?>
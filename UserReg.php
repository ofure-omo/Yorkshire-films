<?php        

include 'AutoLoader.php';
include 'PDO_connection.php';



 if (isset($_POST['submit'])) {
        $validation = new User_validation($_POST);
        $errors = $validation->validateForm();
 }    
?>


<!DOCTYPE html>
<html>
    <style>
 .button {
  background-color: grey;
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

div.sticky {
  position: -webkit-sticky; 
  position: sticky;
  top: 0;
  z-index: 2;
  }
    </style>
<head>
        <meta charset="UTF-8">
        <title>Registration page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
               
        <link rel=stylesheet href="account.css">
        <link rel=stylesheet href="home.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"  crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"  crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="dist/jquery.tabledit.js"></script>
        <script type="text/javascript" src="custom_table_edit.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body>
  <!--navbar (hamburger menu)-->
      <nav class = "nav main-nav">
     <div class="toggle">
        <i class= "fa fa-bars" aria-hidden="true"></i>
      </div>

      <!--navbar (normal)-->
        <ul>
          <li><a href= "home.php">HOME</a></li>
          <li><a href= "Films.php">FILMS</a></li>
          <li><a href= "login.php">LOG IN</a></li>
           <li><a href= "MembersAccount.php">MY ACCOUNT</a></li>
        </ul>
      </nav>

    <!--Slogan-->
            <div class="flex-container">
                <div>BROWSE</div>
                <div>BORROW</div>
                <div>ENJOY</div>
                <div>REPEAT</div>
            </div>
    
  <div class="headerLogo">
      <img src="Images/reel.png", width="100%" height="100px" background-size: cover />
    </div>    
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

$firstName = "";
$lastName = "";
$dob = "";
$email = "";
$telNo = "";
$userName = "";
$password = "";
$libCode = "";     
$libCodeRaw = ['', "eebygum", "eyup"];
$libCodeAlt = ["Member", "Librarian", "Admin"];
$memMsg=' ';

        
        if (isset($_POST['submit']) && empty($errors)) { //only inserts below into DB if submit button is pressed and errors array is empty
        global $memMsg;    
        $member1 = new Member (
                $userName = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS),
                $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING),
                $hashed_password = password_hash($password, PASSWORD_BCRYPT),
                $firstName = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS),
                $lastName = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_SPECIAL_CHARS),
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS),
                $dob = filter_input(INPUT_POST, 'DOB', FILTER_SANITIZE_SPECIAL_CHARS),      
                $telNo = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_SPECIAL_CHARS),
                $userType = str_replace('lib_code', $libCodeAlt, $libCodeRaw) );

            
        $new_mem = $pdo->prepare("INSERT INTO Users ( user_UN,  user_FN, user_SN, user_EMAIL, user_DOB, user_TEL, user_TYPE, user_PWD)
              VALUES (  :username, :userfn, :userln, :email, :dob, :tel, :type, :password)");

        $new_mem->execute([
            'username' => $userName,
            'password' => $hashed_password,
            'userfn' =>  $firstName,
            'userln' => $lastName,
            'email' => $email,
            'dob' =>  $dob,
            'tel' => $telNo,
            'type' => $userType,
                ]);

        $memMsg = '<div class="alert alert-success alert-dismissible fade show">
                <strong> <i class="icon fa fa-check"></i> You have successfully registered! Please login. <a href="login.php" >View Results</a></strong>
             <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
        return $memMsg;
    }
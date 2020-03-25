<?php
session_start();

include 'connection.php';

$loginMsg = '';

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $email = strip_tags(mysqli_real_escape_string($conn, trim($email)));
    $password = strip_tags(mysqli_real_escape_string($conn, trim($password)));
    $loginMsg ='';
    $message ='';
    
    $query= ("SELECT user_ID, user_PWD, user_TYPE FROM Users WHERE user_EMAIL = '".$email."'");
    $tbl = mysqli_query($conn, $query);
    if (mysqli_num_rows($tbl) > 0) {
        $row = mysqli_fetch_array($tbl);
        $password_hash = $row['user_PWD'];
        $usertype = $row['user_TYPE'];
        $userid = $row['user_ID'];
        $useremail= $row['user_EMAIL'];
  
        
        if (password_verify($password, $password_hash) && $usertype === 'Member') {
           
           //header('Location: MembersAccount.php');
           
          if(is_array($row)){
          $_SESSION["user_ID"] = $row['user_ID'];
          } else {
          $message = "Invalid Username or Password!";
          }
          if(isset($_SESSION["user_ID"])) {
              header("Location: MembersAccount.php");
              
          }
           
            //create a session that will store the user_ID
        }
        elseif (password_verify($password, $password_hash) && $usertype === 'Librarian') {
            header('Location: LibrarianAccount.php');
            
        } elseif (password_verify($password, $password_hash) && $usertype === 'Admin') {
            header('Location: adminaccountpage.php');
        }
        
        if (!password_verify($password, $password_hash)) {
            $loginMsg = "<h3>Wrong password/email, please try again</h3>";
        }
        
        }
        
    }
    

/*const DB_DSN = 'mysql:host=localhost;dbname=Yorkshire-Films';
const DB_USER = 'root';
const DB_PASS = '';

try {
    $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
}
*/


//$login_pwd= $pdo->prepare("SELECT user_PWD FROM Users WHERE user_EMAIL = 'email'");

/* if(isset($_POST['login'])){



  $email = (filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS));
  $password = trim((filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS)));

  if(password_verify($password, $hashed_password)) {
  // If the password inputs matched the hashed password in the database
  echo "";
  } else{
  echo "incorrect password";
  }
  //$userType ='';

  $login = $pdo->prepare("SELECT user_TYPE FROM Users WHERE user_EMAIL = :email");

  $login->bindParam("email", $email,PDO::PARAM_STR) ;



  $user = $login->fetch(PDO::FETCH_ASSOC);} */

/*$loginMsg = '';

global $loginMsg;

if ($user === false) {
    $loginMsg = '<div class="alert alert-danger alert-dismissible fade show" id="login-error">
                <strong>Error!  Try again </strong>
               <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
    return $loginMsg;
} elseif ($user === true) {
    die('successs');
} elseif ($user === true && $user['user_TYPE'] === 'Member') {

    'Location: MembersAccount.php';
} elseif ($user === true && $user['user_TYPE'] === 'Librarian') {

    'Location: LibrarianAccount.php';
} elseif ($user === true && $user['user_TYPE'] === 'Admin') {

    'Location: adminaccountpage.php';
}*/
?>
 <?php
  const DB_DSN = 'mysql:host=localhost;dbname=Yorkshire-Films';
  const DB_USER = 'root';
   const DB_PASS = '';
  
   try {
       $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
       die($e->getMessage());
  }


 
  
  
  if(isset($_POST['login'])){
      
   $email = (filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS));
   $password = trim((filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS)));
   //$userType ='';
   
    $login = $pdo->prepare("SELECT user_TYPE FROM Users WHERE user_EMAIL = :email");
    
    $login->bindParam("email", $email,PDO::PARAM_STR) ;
    


  $user = $login->fetch(PDO::FETCH_ASSOC);}
  
  $loginMsg ='';

global $loginMsg;
  
     if ($user === false){
   $loginMsg = '<div class="alert alert-danger alert-dismissible fade show" id="login-error">
                <strong>Error!  Try again </strong>
               <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
        return $loginMsg;
     }
     
     elseif ($user  === true){
        die('successs');
     }
    elseif ($user === true && $user['user_TYPE']==='Member'){
       
        'Location: MembersAccount.php';
    }
      elseif ($user === true && $user['user_TYPE']==='Librarian'){
       
         'Location: LibrarianAccount.php';
     }
    elseif ($user === true && $user['user_TYPE']==='Admin'){
       
         'Location: adminaccountpage.php';
  }
  
    ?>
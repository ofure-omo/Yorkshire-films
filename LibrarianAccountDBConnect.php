<!----------------------DATABASE CONNECTION & FORM SUBMIT --------->
    <?php
  const DB_DSN = 'mysql:host=localhost;dbname=filmDatabase';
  const DB_USER = 'root';
   const DB_PASS = '';
  
   try {
       $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
       die($e->getMessage());
  }

    /***************POPULATE MEMBER & FILM TABLES**********/ 
    $fmtable = $pdo->query("SELECT * FROM Films");
    $memtable = $pdo->query("SELECT * FROM Users WHERE user_TYPE in ('Member')");
    
    
   /***************ADD MEMBER FORM**********/ 
    
 $memMsg='';
 

    
         global $memMsg;
    if (isset($_POST["memSubmit"])) {
          $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_SPECIAL_CHARS);
        $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_SPECIAL_CHARS);
        $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_SPECIAL_CHARS);
        $telNo = filter_input(INPUT_POST, 'telNo', FILTER_SANITIZE_SPECIAL_CHARS);
        $userType = 'Member';
        
       


        $new_mem = $pdo->prepare("INSERT INTO Users ( user_UN,  user_FN, user_SN, user_EMAIL, user_DOB, user_TEL, user_TYPE)
              VALUES (  :username, :userfn, :userln, :email, :dob, :tel, :type)");

        $new_mem->execute([
             'username' => $userName,
            'userfn' =>  $firstName,
            'userln' => $lastName,
            'email' => $email,
            'dob' =>  $dob,
            'tel' => $telNo,
            'type' => $userType,
                ]);

        $memMsg = '<div class="alert alert-success alert-dismissible fade show">
                <strong> <i class="icon fa fa-check"></i> Success!  <a href="/Yorkshire-Films/LibrarianAccount.php">View Results</a> </strong>
             <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
        return $memMsg;
    }
    
    
    
  /*************** ADD FILM FORM**********/ 
    
    $fmMsg='';
 

    //function addFilm(){
         global $fmMsg;
    if (isset($_POST["fmSubmit"]) && !is_numeric($_POST['filmLength'])) {
        $fmMsg = '<div class="alert alert-danger alert-dismissible fade show">
                <strong>Error! Film length must be entered as number of minutes, i.e. 95 </strong>
               <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
        return $fmMsg;
    } elseif (isset($_POST["submit"]) && !is_numeric($_POST['filmYear'])) {
        $fmMsg = '<div class="alert alert-danger alert-dismissible fade show">
                <strong>Error! Film year must be in number format, i.e. 2009  </strong>
             <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
        return $fmMsg;
    } elseif (isset($_POST["submit"])) {
          $filmID = filter_input(INPUT_POST, 'filmID', FILTER_SANITIZE_SPECIAL_CHARS);
        $filmLength = filter_input(INPUT_POST, 'filmLength', FILTER_SANITIZE_SPECIAL_CHARS);
        $filmName = filter_input(INPUT_POST, 'filmName', FILTER_SANITIZE_SPECIAL_CHARS);
        $filmYear = filter_input(INPUT_POST, 'filmYear', FILTER_SANITIZE_SPECIAL_CHARS);
        $filmRating = filter_input(INPUT_POST, 'filmRating', FILTER_SANITIZE_SPECIAL_CHARS);
        $filmDirector = filter_input(INPUT_POST, 'filmDirector', FILTER_SANITIZE_SPECIAL_CHARS);
        $filmGenre = filter_input(INPUT_POST, 'filmGenre', FILTER_SANITIZE_SPECIAL_CHARS);
        $filmTown = filter_input(INPUT_POST, 'filmTown', FILTER_SANITIZE_SPECIAL_CHARS);
        $filmAvailability = filter_input(INPUT_POST, 'filmAvailability', FILTER_SANITIZE_SPECIAL_CHARS);
        $filmSynopsis = filter_input(INPUT_POST, 'filmSynopsis', FILTER_SANITIZE_SPECIAL_CHARS);
        $filmLoanCount =0;


        $new_fm = $pdo->prepare("INSERT INTO Films (fm_ID, fm_TITLE, fm_LENGTH, fm_RATING, fm_YEAR, fm_DIR, fm_GENRE, fm_TOWN, fm_AVAILABILITY, fm_LOANCOUNT, fm_SYNOPSIS)
              VALUES ( :id, :name, :length, :rating, :year, :director, :genre, :town, :availability, :loancount, :synopsis)");

        $new_fm->execute([
             'id' => $filmID,
            'name' => $filmName,
            'length' => $filmLength,
            'rating' => $filmRating,
            'year' => $filmYear,
            'director' => $filmDirector,
            'genre' => $filmGenre,
            'town' => $filmTown,
            'availability' => $filmAvailability,
             'loancount' => $filmLoanCount,
            'synopsis' => $filmSynopsis
                ]);

        $fmMsg = '<div class="alert alert-success alert-dismissible fade show">
                <strong> <i class="icon fa fa-check"></i> Success!  </strong>
             <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
        return $fmMsg;
    }
        
        
        
        
 /*************** UPDATE MEMBER FORM**********/ 
 global $memUpdateMsg;
 
 
    if (isset($_GET['user_ID'])) {
    if (!empty($_POST['updateMem'])) {
        
        $userid =$_GET['user_ID'];
        $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
        $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';         
        $userName = isset($_POST['userName']) ? $_POST['userName'] : '';  
        $email = isset($_POST['email']) ? $_POST['email'] : ''; 
        $dob = isset($_POST['dob']) ? $_POST['dob'] : ''; 
        $telNo = isset($_POST['telNo']) ? $_POST['telNo'] : ''; 
        $userType = 'Member';
        
        
    
         $stmt = $pdo->prepare('UPDATE Users SET user_ID = ?, user_FN =? , user_SN =? , user_UN =? ,user_EMAIL =? , user_DOB =? , user_TEL =?, user_TYPE =?    WHERE user_ID = ? ');
        $stmt->execute(([$userid,  $firstName, $lastName,  $userName, $email,  $dob, $telNo ,$userType,$_GET['user_ID']]));
        
        
        $memUpdateMsg = '<div class="alert alert-success alert-dismissible fade show">
                <strong> <i class="icon fa fa-check"></i> Updated!  <a href="/Yorkshire-Films/LibrarianAccount.php">View Results</a> </strong>
             <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
        return $memUpdateMsg;        
                
    }          
    }
       
//    
//// Get the contact from the contacts table
//   $check = $pdo->prepare('SELECT * FROM users WHERE user_ID = ?');
//   $check->execute([$_GET['user_ID']]);
//  $stmt = $check->fetch(PDO::FETCH_ASSOC);
//   if (!$stmt) {
//       
//        $memUpdateMsg = '<div class="alert alert-success alert-dismissible fade show">
//                <strong> <i class="icon fa fa-check"></i> Contact doesn\'t exist with that ID!  <a href="/Yorkshire-Films/LibrarianAccount.php">View Results</a> </strong>
//             <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
//      return $memUpdateMsg;   
//   
//} else {
//     $memUpdateMsg = '<div class="alert alert-success alert-dismissible fade show">
//                <strong> <i class="icon fa fa-check"></i> Contact doesn\'t exist with that ID!  <a href="/Yorkshire-Films/LibrarianAccount.php">View Results</a> </strong>
//             <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
//      return $memUpdateMsg; 
//};



  
         
        
       


    

       

<?php
include 'AutoLoader.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Yorkshire films - Your account</title>
        <link rel=stylesheet href="account.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"  crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"  crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div class="container-sm">
            <?php
            session_start();

// Check if the user is logged in, if not then redirect them to the login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//    header("location: login.php");
//    exit;
//}

            $librarian1 = new Librarian('Jane4512', 'Jane', 'Doe', 'doe@hotmail.com', '1999-01-31', '07888235633');
            $librarian1->setPassword("hello345");

            $member1 = new Member('Jeff12', 'Jeff', 'Bezos', 'sellallthethings@bigshop.com', '1964-01-12', '07152745282');
            $member1->setPassword("hello345");
            
              $film1 = new Film('Journeyman', '92', '15', '2017', 'Available', '10', 'Paddy Considine','Drama','Sheffield');
           
           
            
            ?>

            <!--navbar (hamburger menu)--->
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

            <!--javascript function that triggers the hamburger menu when min-width is 480px-->
            <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

            <script type="text/javascript">
                $(document).ready(function () {
                    $('.toogle').click(function () {
                        $('ul').toogleClass('active');
                    })
                })
            </script>

            <!--Slogan-->
            <div class="flex-container">
                <div>BROWSE</div>
                <div>BORROW</div>
                <div>ENJOY</div>
                <div>REPEAT</div>
            </div>


            <!------------welcome message ----------->    

            <div class="page-header">
                <h1><?php echo $librarian1->welcome() ?></h1>
            </div>


            <!------------details accordion block ----------->    

            <button class="accordion">View Your Details</button>
            <div class="panel">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>First name</td>
                            <td><?php echo $librarian1->getUserfirstname() ?></td>
                            <td>Edit</td>
                        </tr>
                        <tr>
                            <td>Second name</td>
                            <td><?php echo $librarian1->getUsersurname() ?></td>
                            <td>Edit</td>
                        </tr>
                        <tr>
                            <td>Email address</td>
                            <td><?php echo $librarian1->getEmail() ?></td>
                            <td>Edit</td>
                        </tr>
                        <tr>
                            <td>Date of birth</td>
                            <td><?php echo $librarian1->getDob() ?></td>
                            <td>Edit</td>
                        </tr>

                        <tr>
                            <td>Telephone number</td>
                            <td><?php echo $librarian1->getTel() ?></td>
                            <td>Edit</td>
                        </tr>

                        <tr>
                            <td>Username</td>
                            <td><?php echo $librarian1->getUsername() ?></td>
                            <td>Edit</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><?php echo $librarian1->getPassword() ?></td>
                            <td>Edit</td>

                        </tr>
                    </tbody>
                </table>  
            </div>

            <!------------member list accordion block ----------->  

            <button class="accordion">View / Edit Members List</button>
            <div class="panel">     

                <h2>Members List</h2>          
                <table class="table table-striped">
                    <tbody>    
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Date of birth</th>
                            <th scope="col">Telephone number</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>      

                    <tr>
                        <td>1</td>
                        <td><?php echo $member1->getUserfirstname() ?></td>
                        <td><?php echo $member1->getUsersurname() ?></td>
                        <td><?php echo $member1->getUsername() ?></td>
                        <td><?php echo $member1->getEmail() ?></td>
                        <td><?php echo $member1->getDob() ?></td>
                        <td><?php echo $member1->getTel() ?></td>
                          <td>Edit</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td><?php echo $member1->getUserfirstname() ?></td>
                        <td><?php echo $member1->getUsersurname() ?></td>
                        <td><?php echo $member1->getUsername() ?></td>
                        <td><?php echo $member1->getEmail() ?></td>
                        <td><?php echo $member1->getDob() ?></td>
                        <td><?php echo $member1->getTel() ?></td>
                                                  <td>Edit</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td><?php echo $member1->getUserfirstname() ?></td>
                        <td><?php echo $member1->getUsersurname() ?></td>
                        <td><?php echo $member1->getUsername() ?></td>
                        <td><?php echo $member1->getEmail() ?></td>
                        <td><?php echo $member1->getDob() ?></td>
                        <td><?php echo $member1->getTel() ?></td>
                                                  <td>Edit</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td><?php echo $member1->getUserfirstname() ?></td>
                        <td><?php echo $member1->getUsersurname() ?></td>
                        <td><?php echo $member1->getUsername() ?></td>
                        <td><?php echo $member1->getEmail() ?></td>
                        <td><?php echo $member1->getDob() ?></td>
                        <td><?php echo $member1->getTel() ?></td>
                                                  <td>Edit</td>
                    </tr>
                    </tbody>
                </table>
            </div>
       
  

            <!------------film catalogue accordion block ----------->  
    
            <button class="accordion">View / Edit Film Catalogue</button>
            <div class="panel">     

                <h2>Film Catalogue</h2>          
                <table class="table table-striped">
                    <tbody>    
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Film Name</th>
                            <th scope="col">Length</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Year</th>
                            <th scope="col">Director</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Town</th>
                            <th scope="col">Availability</th>
                               <th scope="col">Loan Count</th>
                                <th scope="col">Edit</th>
                        </tr>
                    </thead>      

                    <tr>
                        <td>1</td>
                        <td><?php echo $film1->getFilmtitle() ?></td>
                        <td><?php echo $film1->getFilmlength() ?></td>
                        <td><?php echo $film1->getFilmrating() ?></td>
                        <td><?php echo $film1->getFilmyear() ?></td>
                         <td><?php echo $film1->getFilmdirector() ?></td>
                          <td><?php echo $film1->getFilmgenre() ?></td>
                           <td><?php echo $film1->getFilmtown() ?></td>
                        <td><?php echo $film1->getFilmavailability() ?></td>
                         <td><?php echo $film1->getFilmloancount() ?></td>
                         <td>Edit</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td><?php echo $film1->getFilmtitle() ?></td>
                        <td><?php echo $film1->getFilmlength() ?></td>
                        <td><?php echo $film1->getFilmrating() ?></td>
                        <td><?php echo $film1->getFilmyear() ?></td>
                         <td><?php echo $film1->getFilmdirector() ?></td>
                          <td><?php echo $film1->getFilmgenre() ?></td>
                           <td><?php echo $film1->getFilmtown() ?></td>
                        <td><?php echo $film1->getFilmavailability() ?></td>
                         <td><?php echo $film1->getFilmloancount() ?></td>
                         <td>Edit</td>
                    </tr>

                     <tr>
                        <td>1</td>
                        <td><?php echo $film1->getFilmtitle() ?></td>
                        <td><?php echo $film1->getFilmlength() ?></td>
                        <td><?php echo $film1->getFilmrating() ?></td>
                        <td><?php echo $film1->getFilmyear() ?></td>
                         <td><?php echo $film1->getFilmdirector() ?></td>
                          <td><?php echo $film1->getFilmgenre() ?></td>
                           <td><?php echo $film1->getFilmtown() ?></td>
                        <td><?php echo $film1->getFilmavailability() ?></td>
                         <td><?php echo $film1->getFilmloancount() ?></td>
                         <td>Edit</td>
                    </tr>

                     <tr>
                        <td>1</td>
                        <td><?php echo $film1->getFilmtitle() ?></td>
                        <td><?php echo $film1->getFilmlength() ?></td>
                        <td><?php echo $film1->getFilmrating() ?></td>
                        <td><?php echo $film1->getFilmyear() ?></td>
                         <td><?php echo $film1->getFilmdirector() ?></td>
                          <td><?php echo $film1->getFilmgenre() ?></td>
                           <td><?php echo $film1->getFilmtown() ?></td>
                        <td><?php echo $film1->getFilmavailability() ?></td>
                         <td><?php echo $film1->getFilmloancount() ?></td>
                         <td>Edit</td>
                    </tr>
                    </tbody>
                </table>
                        <h2>Add a film</h2>
                   <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
              ID: <input  type="text" class="form-control" placeholder=""  name="filmID" id="filmID" value="" required autofocus="true" />          
  Film name:<input  type="text" class="form-control" placeholder="Enter the film name"  name="filmName" id="filmName" value="" required autofocus="true" />          
   Film length:<input  type="text" class="form-control" placeholder="Enter length of film"  name="filmLength" id="filmLength" value="" required autofocus="true" />          
   Film rating:<input  type="text" class="form-control" placeholder="Enter film rating"  name="filmRating" id="filmRating" value="" required autofocus="true" />          
    Year:<input  type="text" class="form-control" placeholder="Enter year made"  name="filmYear" id="filmYear" value="" required autofocus="true" />  
     Director:<input  type="text" class="form-control" placeholder="Enter film director"  name="filmDirector" id="filmDirector" value="" required autofocus="true" />  
      Genre:<input  type="text" class="form-control" placeholder="Enter film genre"  name="filmGenre" id="filmGenre" value="" required autofocus="true" />  
       Town:<input  type="text" class="form-control" placeholder="Enter town"  name="filmTown" id="filmTown" value="" required autofocus="true" />  
        Availability:<input  type="text" class="form-control" placeholder="Enter film availability"  name="filmAvailability" id="filmAvailability" value="" required autofocus="true" />  
         Loan Count:<input  type="text" class="form-control" placeholder="Enter film loan count"  name="filmLoanCount" id="filmLoanCount" value="" required autofocus="true" />  
<!--         <button type="button" id="updateButton"
        class="btn btn-primary"
        onclick="addFilm();">
  Add
</button>-->
         
<button type="button" id="updateButton"
        class="btn btn-primary">Add film</button>
</form>   
          
                        
                        
                        
                        
            </div>
        
         
     
            
            
            
            
 </div>
        
         <script>
             
      $(document).ready(function(){
        $("#updateButton").click(function(){
            var filmID = $("#filmID").val();
            var filmName = $("#filmName").val();
               var filmLength = $("#filmLength").val();
                  var filmRating = $("#filmRating").val();
                     var filmYear = $("#filmYear").val();
                        var filmDirector = $("#filmDirector").val();
                           var filmGenre = $("#filmGenre").val();
                              var filmTown = $("#filmTown").val();
                                 var filmAvailability = $("#filmAvailability").val();
                                    var filmLoanCount = $("#filmLoanCount").val();
                                    var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + filmID + "</td><td>" + filmName + "</td></tr>";
//            var markup = "<tr><td>" + filmID + "</td><td>" + filmName + "</td><td>" + filmLength + "</td><td>" + filmRating + "</td>\n\
//<td>" + filmYear + "</td><td>" + filmDirector + "</td><td>" + filmGenre + "</td><td>" + filmTown + "</td><td>" + filmAvailability + "</td><td>" + filmLoanCount + "</td><td>" + <p>Edit</p> + "</td></tr>";
            $("table tbody").append(markup);
        });
                 
 


       </script>  

 <!------------accordion block js----------->  
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>    
</body>
</html>

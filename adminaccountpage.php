<?php
include 'autoloader.php';
include 'AccountProgram.php';
 
            $admin1 = new Admin('e.drew', 'Eris', 'Drew', 'edrew@t4t.com', '1989-01-01', '07111998633');
            $admin1->setPassword("hello123");
            $film1 = new Film('Journeyman', '92', '15', '2017', 'Available', '10', 'Paddy Considine', 'Drama', 'Sheffield');
            $member1 = new Member('Jeff12', 'Jeff', 'Bezos', 'sellallthethings@bigshop.com', '1964-01-12', '07152745282');
            $member1->setPassword("hello666");
            $librarian1 = new Librarian('Jane4512', 'Jane', 'Doe', 'doe@hotmail.com', '1999-01-31', '07888235633');
            $librarian1->setPassword("hello345");
            $onloan1 = new onloan('Gods Own Country', '2020-04-05', '2020-03-05', 'e.fisher');
            $onloan2 = new onloan('Dark River', '2020-04-06', '2020-03-06', 'm.zuckerberg');          
?>

<!DOCTYPE html>
<html>

   <html>
    <head>
        <title>Yorkshire films - Your account</title>
        <link rel=stylesheet href="account.css">
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
    
<!-------------------------------BODY------------------------------------------> 
    <body>
        <div class="container-sm">
            
           
<!-----------------------------HAMBURGER NAVBAR------------------------------------------>
            <nav class = "nav main-nav">
                <div class="toggle">
                    <i class= "fa fa-bars" aria-hidden="true"></i>
                </div>

<!-------------------------------NAVBAR------------------------------------------>
                <ul>
                    <li><a href= "home.html">HOME</a></li>
                    <li><a href= "films.html">FILMS</a></li>
                    <li><a href= "login.html">LOG IN</a></li>
                </ul>
            </nav>

<!-------------------------------HAMBURGER JS------------------------------------------>
            <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

            <script type="text/javascript">
                $(document).ready(function () {
                $('.toogle').click(function () {
                $('ul').toogleClass('active');
                })
                })
            </script>

<!-------------------------------SLOGAN------------------------------------------>
            <div class="flex-container">
                <div>BROWSE</div>
                <div>BORROW</div>
                <div>ENJOY</div>
                <div>REPEAT</div>
            </div>

 <!-------------------------------WELCOME MESSAGE------------------------------------------>
            <h1>Hello, firstname! Welcome to the the Admin Portal</h1>


<!-------------------------------YOUR DETAILS------------------------------------------>  
            <?php
            $member1 = new Member('Jeff12', 'Jeff', 'Bezos', 'sellallthethings@bigshop.com', '1964-01-12', '07152745282');

            $member1->setPassword("hello345")
            ?>

            <button class="accordion">View your details</button>
            <div class="panel">

                <h2>Your details</h2>  

                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>First name</td>
                            <td><?php echo $member1->getUserfirstname() ?></td>
                            <td class="actions">
                                <a href="memUpdate.php?user_ID=" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="delete.php?id=" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Second name</td>
                            <td><?php echo $member1->getUsersurname() ?></td>
                           <td class="actions">
                                <a href="memUpdate.php?user_ID=" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="delete.php?id=" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Email address</td>
                            <td><?php echo $member1->getEmail() ?></td>
                            <td class="actions">
                                <a href="memUpdate.php?user_ID=" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="delete.php?id=" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Date of birth</td>
                            <td><?php echo $member1->getDob() ?></td>
                            <td class="actions">
                                <a href="memUpdate.php?user_ID=" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="delete.php?id=" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>Telephone number</td>
                            <td><?php echo $member1->getTel() ?></td>
                           <td class="actions">
                                <a href="memUpdate.php?user_ID=" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="delete.php?id=" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>Username</td>
                            <td><?php echo $member1->getUsername() ?></td>
                            <td class="actions">
                                <a href="memUpdate.php?user_ID=" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="delete.php?id=" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><?php echo $member1->getPassword() ?></td>
                            <td class="actions">
                                <a href="memUpdate.php?user_ID=" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="delete.php?id=" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>  
            </div>



  <!-------------------------------MEMBER LIST------------------------------------------>

            <button class="accordion">View / Edit Members List</button>
            <div class="panel">     

                <h2>Members List</h2> 
                <button class="btn btn-primary" id="add-btn-btn"><a  id="add-button"href="/Yorkshire-Films/memAdd.php"><i class="fa fa-plus"></i>   Add a member</a></button>
                <table class="table table-striped" id="editableTable">
                    <tbody>    
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Date of birth</th>
                            <th scope="col">Telephone number</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>      

<?php foreach ($memtable as $member): ?>
                        <tr>
                            <td><?= $member['user_ID'] ?></td>
                            <td><?= $member['user_UN'] ?></td>
                            <td><?= $member['user_FN'] ?></td>
                            <td><?= $member['user_SN'] ?></td>
                            <td><?= $member['user_EMAIL'] ?></td>
                            <td><?= $member['user_DOB'] ?></td>
                            <td><?= $member['user_TEL'] ?></td>
                            <td class="actions">
                                <a href="memUpdate.php?user_ID=<?= $member['user_ID'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="delete.php?id=<?= $member['user_ID'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>
<?php endforeach; ?>
                    </tbody>
                </table>

            </div>




  <!-------------------------------LIBRARIAN LIST------------------------------------------>
           <button class="accordion">View / Edit Librarians List</button>
            <div class="panel">     

                <h2>Librarians List</h2> 
                <button class="btn btn-primary" id="add-btn-btn"><a  id="add-button"href="/Yorkshire-Films/memAdd.php"><i class="fa fa-plus"></i>   Add a member</a></button>
                <table class="table table-striped" id="editableTable">
                    <tbody>    
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Date of birth</th>
                            <th scope="col">Telephone number</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>      

<?php foreach ($libtable as $librarian): ?>
                        <tr>
                            <td><?= $librarian['user_ID'] ?></td>
                            <td><?= $librarian['user_UN'] ?></td>
                            <td><?= $librarian['user_FN'] ?></td>
                            <td><?= $librarian['user_SN'] ?></td>
                            <td><?= $librarian['user_EMAIL'] ?></td>
                            <td><?= $librarian['user_DOB'] ?></td>
                            <td><?= $librarian['user_TEL'] ?></td>
                            <td class="actions">
                                <a href="memUpdate.php?user_ID=<?= $librarian['user_ID'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="delete.php?id=<?= $member['user_ID'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>
<?php endforeach; ?>
                    </tbody>
                </table>

            </div>


  <!-------------------------------ONLOAN LIST------------------------------------------>
            <button class="accordion">View / Edit Active loan Catalogue</button>
            <div class="panel">     

                <h2>Active Loan Catalogue</h2>          
                <table class="table table-striped">
                    <tbody>    
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Film Name</th>
                            <th scope="col">Due date</th>
                            <th scope="col">Loan date</th>
                            <th scope="col">Borrower username</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>      

                    <tr>
                        <td>Insert loan ID</td>
                        <td><?php echo $onloan1->getFilmtitle() ?></td>
                        <td><?php echo $onloan1->getDuedate() ?></td>
                        <td><?php echo $onloan1->getLoandate() ?></td>
                        <td><?php echo $onloan1->getUsername() ?></td>
                        <td>Edit</td>
                    </tr>

                    <tr>
                        <td>Insert loan ID </td>
                        <td><?php echo $onloan2->getFilmtitle() ?></td>
                        <td><?php echo $onloan2->getDuedate() ?></td>
                        <td><?php echo $onloan2->getLoandate() ?></td>
                        <td><?php echo $onloan2->getUsername() ?></td>
                        <td>Edit</td>
                    </tr>




                    </tbody>
                </table>
                <h2>Add a film to loan</h2>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    ID: <input  type="text" class="form-control" placeholder=""  name="filmID" id="filmID" value="" required autofocus="true" />          
                    Film name:<input  type="text" class="form-control" placeholder="Enter the film name"  name="filmName" id="filmName" value="" required autofocus="true" />          
                    Due date:<input  type="date" class="form-control" placeholder="Enter date film loan expires"  name="dueDate" id="dueDate" value="" required autofocus="true" />          
                    Loan date:<input  type="date" class="form-control" placeholder="Enter date film loaned"  name="loanDate" id="loanDate" value="" required autofocus="true" />          
                    Username:<input  type="text" class="form-control" placeholder="Enter borrower's username"  name="userName" id="userName" value="" required autofocus="true" />
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
             <!-------------------------------FILM CATALOG------------------------------------------>



            <button class="accordion">View / Edit Film Catalog</button>
            <div class="panel">     

                <h2>Film Catalog</h2>

                <button class="btn btn-primary" id="add-btn-btn" ><a id="add-button" href="/Yorkshire-Films/filmAdd.php"><i class="fa fa-plus"></i>   Add a film</a></button>

                <table class="table table-striped" id="film-table">
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
                            <th scope="col">Loans</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>   


<?php foreach ($fmtable as $film): ?>
                        <tr>
                            <td><?= $film['fm_ID'] ?></td>
                            <td><?= $film['fm_TITLE'] ?></td>
                            <td><?= $film['fm_LENGTH'] ?></td>
                            <td><?= $film['fm_RATING'] ?></td>
                            <td><?= $film['fm_YEAR'] ?></td>
                            <td><?= $film['dir_NAME'] ?></td>
                            <td><?= $film['genre'] ?></td>
                            <td><?= $film['twn_NAME'] ?></td>
                            <td><?= $film['fm_AVAILABILITY'] ?></td>
                            <td><?= $film['FM_LOANCOUNT'] ?></td>

                            <td class="actions">
                                <a href="filmUpdate.php?fm_ID=<?= $film['fm_ID'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="delete.php?fm_ID=<?= $film['fm_ID'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>
<?php endforeach; ?>
                    </tbody>
                </table>  




            </div>




            </div>




           <!-------------------------------ACCORDION BLOCK JS------------------------------------------>
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

<!-------------------------------FORM CLEAR JS------------------------------------------>

                function clearField() {
                    if (document.getElementById) {
                        document.filmForm.message.value = "";
                    }
                }
            </script>


    </body>


</html>


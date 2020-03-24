<?php
include 'AutoLoader.php';
include 'AccountProgram.php';
?>

<!DOCTYPE html>
<!-------------------------------HEAD------------------------------------------>
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
                    <li><a href= "home.php">HOME</a></li>
                    <li><a href= "films.php">FILMS</a></li>
                    <li><a href= "login.php">LOG IN</a></li>
                </ul>
            </nav>

            <!-------------------------------HAMBURGER JS------------------------------------------>
            <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

            <script type="text/javascript">
                $(document).ready(function () {
                    $('.toogle').click(function () {
                        $('ul').toogleClass('active');
                    });
                });
            </script>


            <!-------------------------------SLOGAN------------------------------------------>
            <div class="flex-container">
                <div>BROWSE</div>
                <div>BORROW</div>
                <div>ENJOY</div>
                <div>REPEAT</div>
            </div>


            <!-------------------------------WELCOME MESSAGE------------------------------------------>
            <h1>Hello, firstname! Welcome to the the Librarian Portal</h1>


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
                                <a href="userDelete.php?user_ID=" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Second name</td>
                            <td><?php echo $member1->getUsersurname() ?></td>
                            <td class="actions">
                                <a href="memUpdate.php?user_ID=" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="userDelete.php?user_ID=" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Email address</td>
                            <td><?php echo $member1->getEmail() ?></td>
                            <td class="actions">
                                <a href="memUpdate.php?user_ID=" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="userDelete.php?user_ID=" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Date of birth</td>
                            <td><?php echo $member1->getDob() ?></td>
                            <td class="actions">
                                <a href="memUpdate.php?user_ID=" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="userDelete.php?user_ID=" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>Telephone number</td>
                            <td><?php echo $member1->getTel() ?></td>
                            <td class="actions">
                                <a href="memUpdate.php?user_ID=" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="userDelete.php?user_ID=" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>Username</td>
                            <td><?php echo $member1->getUsername() ?></td>
                            <td class="actions">
                                <a href="memUpdate.php?user_ID=" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="userDelete.php?user_ID=" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><?php echo $member1->getPassword() ?></td>
                            <td class="actions">
                                <a href="memUpdate.php?user_ID=" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="userDelete.php?user_ID=" class="trash"><i class="fas fa-trash fa-xs"></i></a>
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
                                <a href="userDelete.php?user_ID=<?= $member['user_ID'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>
<?php endforeach; ?>
                    </tbody>
                </table>

            </div>

<!-------------------------------ONLOAN LIST------------------------------------------>
           <button class="accordion">Current On Loan List</button>
            <div class="panel">     

                <h2>Loan List</h2> 
                <button class="btn btn-primary" id="add-btn-btn"><a  id="add-button"href="/#"><i class="fa fa-plus"></i>   Add a loan</a></button>
                <table class="table table-striped" id="editableTable">
                    <tbody>    
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Film Title</th>
                            <th scope="col">Due Date</th>
                            <th scope="col">Loan Date</th>
                            <th scope="col">Username</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>      

<?php foreach ($loantable as $loan): ?>
                        <tr>
                            <td><?= $loan['onloan_ID'] ?></td>
                            <td><?= $loan['fm_TITLE'] ?></td>
                            <td><?= $loan['due_DATE'] ?></td>
                            <td><?= $loan['loan_DATE'] ?></td>
                            <td><?= $loan['user_UN'] ?></td>
                            <td class="actions">
                                <a href="#" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="#" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>
<?php endforeach; ?>
                    </tbody>
                </table>

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
                                <a href="filmDelete.php?fm_ID=<?= $film['fm_ID'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
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



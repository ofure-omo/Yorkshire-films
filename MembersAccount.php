<?php
include 'AutoLoader.php';
include 'AccountProgram.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Yorkshire films - Your account</title>
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

<!-------------------------------BODY------------------------------------------> 
    
        <div class="container-sm">
            <body>

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
                    <li><a href= "MembersAccount.php">MY ACCOUNT</a></li>
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
            <h1>Hello! Welcome to the the Member Portal</h1>


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



<!----------------------------ON LOAN LIST------------------------------------------>    
            <button class="accordion">View your loan history</button>
            <div class="panel">


                <h2>Your loan history</h2>          
                <table class="table table-striped">
                    <tbody>    


                        <tr>
                            <th>Film</th>
                            <th>Loan date</th> 
                            <th>Due date</th>
                            <th>Review</th>
                        </tr>
                        <tr>
                            <td>Film 1</td>
                            <td>20-03-20</td>
                            <td>27-03-20</td>
                            <td>   
                                <div class="rating">
                                    <input type="radio" id="r1" name="rg1">
                                    <label for="r1"><span class="fa fa-star"></label>
                                    <input type="radio" id="r2" name="rg2">
                                    <label for="r2"><span class="fa fa-star"></label>
                                    <input type="radio" id="r3" name="rg3">
                                    <label for="r3"><span class="fa fa-star"></label>
                                    <input type="radio" id="r4" name="rg4">
                                    <label for="r4"><span class="fa fa-star"></label>
                                    <input type="radio" id="r5" name="rg5">
                                    <label for="r5"><span class="fa fa-star"></label>

                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td>Film 2</td>
                            <td>20-03-20</td>
                            <td>27-03-20</td>
                            <td>       
                                <div class="rating">
                                    <input type="radio" id="fm1_1" name="fm1_1">
                                    <label for="fm1_1"><span class="fa fa-star"></label>
                                    <input type="radio" id="fm1_2" name="fm1_2">
                                    <label for="fm1_2"><span class="fa fa-star"></label>
                                    <input type="radio" id="fm1_3" name="fm1_3">
                                    <label for="fm1_3"><span class="fa fa-star"></label>
                                    <input type="radio" id="fm1_4" name="fm1_4">
                                    <label for="fm1_4"><span class="fa fa-star"></label>
                                    <input type="radio" id="fm1_5" name="fm1_5">
                                    <label for="fm1_5"><span class="fa fa-star"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Film 3</td>
                            <td>20-03-20</td>
                            <td>27-03-20</td>
                            <td>       
                                <div class="rating">
                                    <input type="radio" id="r1" name="rg1">
                                    <label for="r1"><span class="fa fa-star"></label>
                                    <input type="radio" id="r2" name="rg2">
                                    <label for="r2"><span class="fa fa-star"></label>
                                    <input type="radio" id="r3" name="rg3">
                                    <label for="r3"><span class="fa fa-star"></label>
                                    <input type="radio" id="r4" name="rg4">
                                    <label for="r4"><span class="fa fa-star"></label>
                                    <input type="radio" id="r5" name="rg5">
                                    <label for="r5"><span class="fa fa-star"></label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div></div>


            
  <!-------------------------------FOOTER------------------------------------------>
            <footer>
              <div class="info-container">
                <p class="info"><a href="">HELP</a></p>
                <p class="info"><a href="">PRIVACY POLICY</a></p>
                <p class= "info"><a href="Jobs.php">JOBS</a></p>
              </div>

              <div class="social-container">
                <span class="icon" src="" href="" ></span>
                <span class="icon" src="" href="" ></span>
                <span class="icon" src="" href="" ></span>
              </div>
            </footer>


   



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
    </script>    
</body>
</html>

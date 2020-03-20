<?php
include 'AutoLoader.php';
 $member1 = new Member('Jeff12','Jeff', 'Bezos', 'sellallthethings@bigshop.com', '1964-01-12', '07152745282');

$member1 ->setPassword("hello345");
if(isset($_GET['id']) && !empty($_GET['id']))
{
   $id = $_GET['id'];
    include_once('connection.php');
   
    $loan = "INSERT INTO Onloan (fm_ID, user_ID, loan_DATE, due_DATE) VALUES (".$id.", 1, SYSDATE(), DATE_ADD(SYSDATE(), INTERVAL 5 DAY));"; 
    
    $title = "SELECT fm_TITLE FROM Films WHERE fm_ID = '".$id."';";
    $titleresult = mysqli_query($conn, $title);
    $row1 = mysqli_fetch_row($titleresult);
    $duedate = "SELECT due_DATE FROM OnLoan WHERE fm_ID = '".$id."';";
    $duedateresult = mysqli_query($conn, $duedate);
    $row2 = mysqli_fetch_row($duedateresult);
    
    //These two updates aren't working.
    $update = "UPDATE Films SET fm_LOANCOUNT = fm_LOANCOUNT + 1 WHERE fm_ID = '".$id."';";
    $updateresult = mysqli_query($conn, $update);
    $update1 = "UPDATE Films SET fm_AVAILABILITY = 'Not available' WHERE fm_ID = '".$id."';";
    $update1result = mysqli_query($conn, $update1);
    
    //if (mysqli_query($conn, $loan))
    //{
    //    echo "Record updated successfully";
    //} 
    //else 
    //{
    //    echo "Error updating record: " . mysqli_error($conn);
    //} 
    //die;
}
?>

<!DOCTYPE html>
<html>
    <style>
        div.sticky {
            position: -webkit-sticky; 
            position: sticky;
            top: 0;
            z-index: 2;
        }
    </style>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <title>Loan Page</title>
    </head>
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
                    <a class="nav-link" href="Films.php">Films</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <section>

        <body>
            <div class="sticky">
                <h1 style="font: 25px Georgia, serif; line-height: 1.8;background-color:grey; text-transform: uppercase"><center>LOAN PAGE</center></h1>
            </div>

            <br>
            <div>
                <h3><?php echo $member1->borrowedmem() .  $row1[0];?></h3>
                <h3><?php echo $member1->dueDate() . $row2[0];?></h3>
                
            </div>
                
        </body>
    </section>
</html>

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
        <title>"God's Own Country"</title>
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
                <h1 style="font: 25px Georgia, serif; line-height: 1.8;background-color:grey;"><center>GOD'S OWN COUNTRY</center></h1>
            </div>


            <div id="carousel2" class="carousel slide" data-ride="carousel" >
                <div class="carousel-inner" role="listbox" style="width:100%; height:500px !important;">
                    <div class="carousel-item active">
                        <center><img src="Images/fm_ID3_GodsOwn.jpg" style='height:500px' ></center>
                    </div>
                    <div class="carousel-item">
                        <center><img src="Images/GodsOwn/GodsOwn1.jpg" style='height:500px' ></center>
                    </div>
                    <div class="carousel-item">
                        <center><img src="Images/GodsOwn/GodsOwn2.jpg" style='height:500px' ></center>
                    </div>
                    <div class="carousel-item">
                        <center><img src="Images/GodsOwn/GodsOwn3.jpg" style='height:500px' ></center>
                    </div>
                    <div class="carousel-item">
                        <center><img src="Images/GodsOwn/GodsOwn4.jpg" style='height:500px' ></center>
                    </div>
                    <div class="carousel-item">
                        <center><img src="Images/GodsOwn/GodsOwn5.jpg" style='height:500px' ></center>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


            <br>
            <p style="text-align:center;">  
                <b>Release date:</b>
            </p>
            <p style="text-align:center;">  
                <b>Title:</b>
            </p>
            <p style="text-align:center;">  
                <b>Director:</b> 
            </p>    
            <p style="text-align:center;">  
                <b>Age Rating:</b> 
            </p>
            <p style="text-align:center;">  
                <b>Genre:</b> 
            </p>
            <p style="text-align:center;">  
                <b>Length:</b> 
            </p>
            <p style="text-align:center;">  
                <b>Location:</b> 
            </p>
            <br>
            <p style="width:700px; text-align:justify; margin-left:10cm">
                <b>Synopsis: </b> 
            </p>
        </body>
    </section>
</html>


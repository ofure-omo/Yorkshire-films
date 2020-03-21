<?php
include 'AutoLoader.php';
?>

<!DOCTYPE html>
<!-----------------------HEAD------------------------>  
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
    </head>


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

    $fmtable = $pdo->query("SELECT * FROM Films");
    $memtable = $pdo->query("SELECT * FROM Users WHERE user_TYPE in ('Member')");

    if (isset($_POST["submit"]) && !is_numeric($_POST['filmLength'])) {
        $msg = '<div class="alert alert-danger alert-dismissible fade show">
                <strong>Error! Film length must be entered as number of minutes, i.e. 95 </strong>
               <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
    } elseif (isset($_POST["submit"]) && !is_numeric($_POST['filmYear'])) {
        $msg = '<div class="alert alert-danger alert-dismissible fade show">
                <strong>Error! Film year must be in number format, i.e. 2009  </strong>
             <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
    } else  {
          $filmID = filter_input(INPUT_POST, 'filmID', FILTER_SANITIZE_SPECIAL_CHARS);
        $filmLength = filter_input(INPUT_POST, 'filmLength', FILTER_SANITIZE_SPECIAL_CHARS);
        $filmName = filter_input(INPUT_POST, 'filmName', FILTER_SANITIZE_SPECIAL_CHARS);
        $filmYear = filter_input(INPUT_POST, 'filmYear', FILTER_SANITIZE_SPECIAL_CHARS);
        $filmRating = filter_input(INPUT_POST, 'filmRating', FILTER_SANITIZE_SPECIAL_CHARS);
        $filmDirector = filter_input(INPUT_POST, 'filmDirector', FILTER_SANITIZE_SPECIAL_CHARS);
        $filmGenre = filter_input(INPUT_POST, 'filmGenre', FILTER_SANITIZE_SPECIAL_CHARS);
        $filmTown = filter_input(INPUT_POST, 'filmTown', FILTER_SANITIZE_SPECIAL_CHARS);
        $filmAvailability = filter_input(INPUT_POST, 'filmAvailability', FILTER_SANITIZE_SPECIAL_CHARS);
        //$filmLoanCount = filter_input(INPUT_POST, 'filmLoanCount', FILTER_SANITIZE_SPECIAL_CHARS);
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
                ]
        );

        $msg = '<div class="alert alert-success alert-dismissible fade show">
                <strong> <i class="icon fa fa-check"></i> Success!  </strong>
             <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
    }
    ?>


<!-----------------------BODY------------------------>  

    <body>
        <div class="container-sm">

<!------------------navbar (hamburger menu)-------------------------->
            <nav class = "nav main-nav">
                <div class="toggle">
                    <i class= "fa fa-bars" aria-hidden="true"></i>
                </div>

<!---------------navbar (normal)-->
                <ul>
                    <li><a href= "home.html">HOME</a></li>
                    <li><a href= "films.html">FILMS</a></li>
                    <li><a href= "login.html">LOG IN</a></li>
                </ul>
            </nav>

<!----------------jS function that triggers the hamburger menu when min-width is 480px-->
            <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

            <script type="text/javascript">
                $(document).ready(function () {
                    $('.toogle').click(function () {
                        $('ul').toogleClass('active');
                    });
                });
            </script>

<!-----------------Slogan----------------------------------------------->
            <div class="flex-container">
                <div>BROWSE</div>
                <div>BORROW</div>
                <div>ENJOY</div>
                <div>REPEAT</div>
            </div>


<!------------welcome message ----------->    
<h1>Hello, firstname! Welcome to the the Librarian Portal</h1>



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

<?php
foreach ($memtable as $row) {
    echo "<tr>";
    echo "<td>" . $row['0'] . "</td>";
    echo "<td>" . $row['3'] . "</td>";
    echo "<td>" . $row['4'] . "</td>";
    echo "<td>" . $row['1'] . "</td>";
    echo "<td>" . $row['5'] . "</td>";
    echo "<td>" . $row['6'] . "</td>";
    echo "<td>" . $row['7'] . "</td>";
    echo "<td>Edit</td>";
    echo "</tr>";
}
echo "</table>";
?>
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
                        </tr>
                    </thead>   
<?php
foreach ($fmtable as $row) {
    echo "<tr>";
    echo "<td>" . $row['0'] . "</td>";
    echo "<td>" . $row['1'] . "</td>";
    echo "<td>" . $row['2'] . "</td>";
    echo "<td>" . $row['3'] . "</td>";
    echo "<td>" . $row['4'] . "</td>";
    echo "<td>" . $row['5'] . "</td>";
    echo "<td>" . $row['6'] . "</td>";
    echo "<td>" . $row['7'] . "</td>";
    echo "<td>" . $row['8'] . "</td>";
    echo "<td>" . $row['9'] . "</td>";
    // echo "<td>" . $row['10'] . "</td>";
    echo "<td>Edit</td>";
    echo "</tr>";
}
echo "</table>";
?>

<!-----------------------Add film form------------------------>  
                 </tbody>
                </table>
                <h2>Add a film</h2>

                
                
                <div><?php echo $msg; ?></div>

                
                
                <form name="filmForm" id="filmForm" action = "" method = "POST">

                Film name:<input  type="text" class="form-control" placeholder="Enter the film name"  name="filmName" id="filmName" value="" required autofocus="true" />             
                <br/>     
                <div class="form-group">
                <div class="row">
                <div class="col">
                Film ID:<input  type="text" class="form-control" placeholder="Enter the film id"  name="filmID" id="filmID" value="" required autofocus="true" />        
                </div>
                <div class="col">
                Film length:<input  type="text" class="form-control" placeholder="Enter length of film"  name="filmLength" id="filmLength" value="" required autofocus="true" />          
                </div>
                </div>
                <br/>  
                
                <div class="form-group">
                <div class="row">
                <div class="col">
                Film rating:<select class="custom-select" name="filmRating" id="filmRating"  placeholder="Enter film rating" size="1" required>
                        <option value="U">U</option>
                        <option value="PG">PG</option>
                        <option value="12A">12A</option>
                        <option value="15">15</option>
                        <option value="18">18</option>
                    </select>
                </div> 
                <div class="col">
                Year:<input  type="text" class="form-control" placeholder="Enter year made"  name="filmYear" id="filmYear" value="" required autofocus="true" />     
                </div>
                </div>
                <br/>
                

                <div class="form-group">
                <div class="row">
                <div class="col">
                Genre:<select class="custom-select" name="filmGenre" id="filmGenre"  placeholder="Enter a genre" size="1" required>
                        <option value="1">Animation</option>
                        <option value="2">Biography</option>
                        <option value="3">Comedy</option>
                        <option value="4">Crime</option>
                        <option value="5">Drama</option>
                        <option value="6">Mystery</option>
                        <option value="7">Romance</option>
                        <option value="8">Sci-fi</option>
                        <option value="9">Sport</option>
                    </select>
                </div> 
                <div class="col">        
                Director:<select class="custom-select" name="filmDirector" id="filmDirector"  placeholder="Enter a genre" size="1" required>
                        <option value="1">Animation</option>
                        <option value="2">Biography</option>
                        <option value="3">Comedy</option>
                        <option value="4">Crime</option>
                        <option value="5">Drama</option>
                        <option value="6">Mystery</option>
                        <option value="7">Romance</option>
                        <option value="8">Sci-fi</option>
                        <option value="9">Sport</option>
                        <option value="10">Sport</option>
                        <option value="11">Sport</option>
                        <option value="12">Sport</option>
                        <option value="13">Sport</option>
                        <option value="14">Sport</option>
                        <option value="15">Sport</option>
                    </select>
                    </div>
                    </div>
                    <br/>

                    
                <div class="form-group">
                <div class="row">
                <div class="col">  
                Availability:<select class="custom-select" name="filmAvailability" id="filmAvailability"  placeholder="Enter film availability" size="1" required>
                        <option value="Available">Available</option>
                        <option value="Unavailable">Unavailable</option>
                    </select>  
                </div> 
                <div class="col"> 
                Town:<select class="custom-select" name="filmTown" id="filmTown"  placeholder="Enter a genre" size="1" required>
                        <option value="1">Barnsley</option>
                        <option value="2">Bradford</option>
                        <option value="3">Grimethorpe</option>
                        <option value="4">Halifax</option>
                        <option value="5">Keighley</option>
                        <option value="6">Kettlewell</option>
                        <option value="7">Leeds</option>
                        <option value="8">Rotherham</option>
                        <option value="9">Settle</option>
                        <option value="10">Sheffield</option>
                        <option value="11">Skipton</option>
                        <option value="12">Todmorden</option>
                        <option value="13">Wakefield</option>
                        <option value="14">Wetherby</option>
                        <option value="15">Yorkshire</option>
                    </select>
                </div>
                </div>
                <br/>
                
                Synopsis:<textarea id="filmSynopsis" class="form-control" placeholder="Enter film synopsis"  name="filmSynopsis"  value="" required autofocus="true"rows="4" cols="50"></textarea>
                <br/>
                <input type="submit" value=" Add Film " name="submit" id="submit-button" class="btn btn-primary" onclick="clearField();" />

                </form>   
            </div>
            
           

 
            
            
            
            
            
        </div>

        
        


<!-----------------------accordion block js------------------------>  
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

<!-----------------------form clear js------------------------>

            function clearField() {
                if (document.getElementById) {
                    document.filmForm.message.value = "";
                }
            }

        </script>

    </body>
</html>



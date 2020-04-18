<?php
// Initialize the session

session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
header("location: login.php");
exit;

}
?>



<!doctype html>
<html lang="en">


<head>
    <title>Currency Conveter</title>

    <link rel = "currency-icon" type = "image/png" href = "dollar.png"/>
    
    <link href="style.css" rel="stylesheet">
    
    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


     

</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <!-- Nav Menu -->


    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <a class="navbar-brand" href="index.php">
                            Company Logo 
                        </a> 
                        
                        <!-- Toggle button for detailed lanpage -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> 

                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="#home">HOME <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#converter">COMPANY FEATURES</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#profiles">CURRENCY PROFILES</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#contact">CONTACT</a> </li>
                                <li class="nav-item"> <a class="nav-link" <?php echo htmlspecialchars($_SESSION["username"]); ?>>
                                </a></li>    
                                <li class="nav-item"> <a class="nav-link" href="logout.php">LOGOUT</a> </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>




    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <h1>Currency Converter</h1>
            <p class="tagline">The one and only solution for any kind of currency exchange. </p>
        </div>

        <div class="img-holder mt-3">
            <form align="center" action="index.php" method="post">
            
                    <table class="table-convert" align="center" >


                        <tr>
                            <th>
                                <h3 style="color: white;">Enter Amount: </h3>
                            </th>

                            <th>
                                <h3 style="color: white;">From: </h3>
                            </th>
                            <th></th>
                            <th>
                                <h3 style="color: white;">To: </h3>
                            </th>

                        </tr>
                        <!--------------------------->

                        <tr>
                             <th>   
                                <input id="input" type="text" name="amount" placeholder="AMOUNT" required><br>
                            </th>

                            <th>
                                 <select class="custom-select"  name='cur1'>

                                 <option value="USD" selected>US Dollar(USD)</option>
                                 <option value="INR" >Indian Rupee(INR)</option>
                                 <option value="JPY">Japanese Yen(JPY)</option>
                                 <option value="PHP">PHilippine Peso(PHP)</option>
                                 <option value="AUD">Australian Dollor(AUD)</option>

                                </select>


                            </th>
                            
                            <th>
                                <img class="transfer_img" src="transfer.png" alt="--->">
                            </th>



                            <th>    

                             <select class="custom-select" name='cur2'>

                                 <option value="INR" selected >Indian Rupee(INR)</option>
                                 <option value="AUD">Australian Dollor(AUD)</option>
                                 <option value="USD" >US Dollar(USD)</option>
                                 <option value="JPY">Japanese Yen(JPY)</option>
                                 <option value="PHP">PHilippine Peso(PHP)</option>
                                </select>

                            </th>
                            
                            <th></th>
                            <th></th>
                            <th>
                            <input class="submit" type='submit' name='submit' value="ConvertNow"></center>
                            </th>

                        </tr>

                    </table>
                

    

            </form>

            <?php include('currency.php') ?>



        </div>
    </header>

    

    <div class="section light-bg" id="converter">


        <div class="container">

            <div class="section-title">
                <h3>Company Features</h3>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Currency Rate Alerts</h4>
                                    <p class="card-text">
                                        Choose a currency pair.
                                    Set your desired mid-market rate.
                                    Receive free alerts by email</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-settings gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Market Analysis</h4>
                                    <p class="card-text">EUR-USD has remained heavy since posting a one-week low at 1.0856 yesterday.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-lock gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Security </h4>
                                    <p class="card-text">India's Trusted Currency Authority.
                                        49 million app downloads
                                        Secured Transactions
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- // end .section -->
   



    <div class="section" id="profiles">
        <div class="container">
            <div class="section-title">
                
                <h3>Currency Profiles</h3>
            </div>

            <div class="card-deck">
                <div class="card pricing">
                    
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">SGD - Singapore Dollar</div>
                        <div class="list-group-item">GBP - British Pound</div>
                        <div class="list-group-item">CAD - Canadian Dollar</div>
                    </ul>
                   
                </div>
                <div class="card pricing popular">
                    
                    <ul class="list-group list-group-flush">

                        <div class="list-group-item">USD - US Dollar</div>
                        <div class="list-group-item">INR - Indian Rupee</div>
                        <div class="list-group-item">AUD - Australian Dollar</div>
                    </ul>
                  
                </div>
                <div class="card pricing">
                    
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">CHF - Swiss Franc</div>
                        <div class="list-group-item">MYR - Malaysian Ringgit</div>
                        <div class="list-group-item">EUR - Euro</div>
                    </ul>
                   
                </div>
            </div>
            <!-- // end .pricing -->





        </div>

    </div>
    <!-- // end .section -->


    <div class="light-bg py-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="mb-2"> <span class="ti-location-pin mr-2"></span> Company Address</p>
                    <div class=" d-block d-sm-inline-block">
                        <p class="mb-2">
                            <span class="ti-email mr-2"></span> <a class="mr-4" href="#">Company Mail Id </a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline-block">
                        <p class="mb-0">
                            <span class="ti-headphone-alt mr-2"></span> <a href="#">Company Contact No.</a>
                        </p>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script src="js/script.js"></script>

</body>

</html>

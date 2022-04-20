<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Nouvelle demande</title>

    <!-- Fontfaces CSS-->
    <link href="assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
@include('user.navbar')
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
       
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                    RESIDENTS AU   <strong>MALI </strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{url('recherche')}}" method="get" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                <a href="{{url('recherche')}}"><button class="au-btn au-btn-icon au-btn--green au-btn--large">
                                        ADULTE</button></a>                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <button class="col col-md-12" style="background: gray;">ENFANT</button>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                    RESIDENTS A <strong>L'ETRANGER </strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <button class="col col-md-12" style="background: gray;">ADULTE</button>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <button class="col col-md-12" style="background: gray;">ENFANT</button>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>       </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                            
                          
                        </div>
                        <br><br><br>


                        <div class="card">
                                    <div class="card-header">
                                        <strong>RESIDENTS AU MALI </strong>
                                        
                                    </div>
                                    <div class="card-body">
                                    <button class="btn btn-primary btn-lg btn-block"><a style="color: white; " href="{{url('recherche')}}">ADULTE</a></button>
                                    <button class="btn btn-primary btn-lg btn-block"><a style="color: white; " href="{{url('rechercheenfantmali')}}">ENFANT</a></button>

                                        
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <strong>RESIDENTS A LA DIASPORA </strong>
                                        
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary btn-lg btn-block">ADULTE</button>
                                        <button type="button" class="btn btn-secondary btn-lg btn-block">ENFANT</button>

                                        
                                    </div>
                                </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->

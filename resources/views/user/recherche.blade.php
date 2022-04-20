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
    <title>Rechercher</title>

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

<body>
@include('user.navbar')
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
       
            <!-- HEADER DESKTOP-->

            <style>
                #main-content {
    width: 100%;
    max-width: 780px;
    margin: 0 auto;
    position: relative;
    box-sizing: border-box;
}
            </style>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid" style="margin-left: auto; margin-right: auto; width: 100%;">
                        <div class="row">
                        <form method="POST" action="{{route('search')}}" style="display: flex; align-items: center; justify-content: center;">
					@csrf

                    @if (session('error'))
                            <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                                <strong>Erreur : </strong> {{session('error')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

					<div class="form-group mb-3  @error('type') is-invalid @enderror"  style="align: center;">
                    <select name="type" id="num_doc">
                            <option value="">Sélectionnez votre document</option>
                            <option value="nina">NINA</option>
                            <option value="cin">Carte d'identité</option>
                        </select> <br>
                        @error('type')
                        <span class="text-danger" role="alert">
                            <span>{{ $message }}</span>
                        </span>
                        @enderror
		        		<input type="text" name="search" class="form-control @error('search') is-invalid @enderror" placeholder="Entrez votre numéro de nina ou cin" value="{{old('search')}}" />
		        		@error('search')
                        <span class="text-danger" role="alert">
                            <span>{{ $message }}</span>
                        </span>
                        @enderror

                        
                        <div class="form-group mb-3">
		        		
		        		<input type="submit" class="btn btn-primary" value="Rechercher" />
		        	</div>
				</form>
		        	</div>
                    <br><br>
                    <br><br>
                    <br><br>
                        
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

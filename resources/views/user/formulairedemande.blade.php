<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de demande</title>

	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

	<!-- Bootstrap CSS-->
    <link href="{{asset('assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

	 <!-- Vendor CSS-->
	 <link href="{{asset('assets/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    

</head>
<body>
@include('user.navbar')


    <div class="container" style="text-align: center;">
	<h1>Formulaire de demande de passeport</h1> <hr>
	<h3>Mr/Mme {{$data->prenoms?? ''}} {{$data->nom?? ''}}</h3>
	<h3>Né(e) le {{$data->date_naiss?? ''}} à {{$data->lieu_naiss?? ''}}</h3>

	</div> <br>

	<form method="POST" action="">
	@csrf

@if (session('error'))
		<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
			<strong>Erreur : </strong> {{session('error')}}
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif

	<div class="main-content">
                <div class="section__content section__content--p30">
	<div class="container-fluid">	
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header">I. NATURE DE LA DEMANDE</div>
					<div class="card-body">
						<form>
	<div class="form-group mb-3">
		<label><b>Type de passeport</b></label>
		<select name="type" id="typepassport" onchange="ShowDetails()">
			<option value="choix">Choisissez le type de passeport</option>
			<option value="ordinaire">Ordinaire</option>
			<option value="diplomatique">Diplomatique</option>
			<option value="service">Service</option>
		</select> <br>
		@error('type')
		<span class="text-danger" role="alert">
			<span>{{ $message }}</span>
		</span>
		@enderror
		</div>		
		<div class="form-group mb-3">
		<label><b>Motif</b></label>
		<select name="type" id="motifs" onchange="ShowMotifs(), ShowMotifsOldPp(),ShowMotifsPerte()">
			<option value="">Choisissez le motif</option>
			<option value="creation">Creation</option>
			<option value="renouvellement">Rénouvellement</option>
			<option value="perte">Perte</option>
			<option value="vol">Vol</option>
			<option value="remplacement">Remplacement</option>
			<option value="second">2ième Passeport</option>
		</select> <br>
		@error('type')
		<span class="text-danger" role="alert">
			<span>{{ $message }}</span>
		</span>
		@enderror	
		</div>
		<div class="form-group mb-3" id="motifrenew">
		<label><b>Motif de renouvellemnt</b></label>
		<input type="text" name="motif" class="form-control" placeholder="Motif de renouvellement" value=""/>
		</div>
		<div class="form-group mb-3" id="numpassportrenew">
		<label><b>N° passeport renouvelé</b></label>
		<input type="text" name="numpass" class="form-control" placeholder="N° passeport renouvelé" value=""/>
		</div>
		<div class="form-group mb-3">
		<label><b>Urgence</b></label>
		<select name="type" id="num_doc">
			<option value="">Choisissez l'urgence</option>
			<option value="standard">Standard</option>
			<option value="urgente">Urgente</option>
		</select> <br>
		@error('type')
		<span class="text-danger" role="alert">
			<span>{{ $message }}</span>
		</span>
		@enderror
		</div>
		<div class="form-group mb-3 " id="ds">
		<label><b>Durée (Diplomatique et Service)</b></label>
		<input type="text" name="duree" class="form-control" placeholder="Durée" value=""/>
		</div>
		</form>
				</div>
				</div>
			</div>
		</div>
<br>
	<div class="col-lg-12">
			<div class="card">
				<div class="card-header">FICHIERS JOINTS</div>
					<div class="card-body">
						<form>
	<div class="form-group mb-3">	
	<label><b>Veuillez ajouer une photo d'identité récente *</b></label>
	<input type="file" required>
	</div>

	<div class="form-group mb-3">	
	<label><b>Veuillez ajouter votre acte de naissance *</b></label>
	<input type="file">
	</div>

	<div class="form-group mb-3">	
	<label><b>Veuillez ajouter votre carte d'idéntité nationale *</b></label>
	<input type="file" required>
	</div>

	<div class="form-group mb-3">	
	<label><b>Veuillez ajouter votre carte (ou) fiche NINA *</b></label>
	<input type="file" required>
	</div>

	<div class="form-group mb-3">	
	<label><b>Veuillez ajouter votre justificatif de profession *</b></label>
	<input type="file" required>
	</div>

	<div class="form-group mb-3" id="perte">	
	<label><b>Veuillez ajouter le certificat de perte de votre passeport</b></label>
	<p>(en cas de perte de passeport)</p>
	<input type="file">
	</div>
	<div class="form-group mb-3" id="olppp">	
	<label><b>Veuillez ajouter la copie de votre ancien passeport</b></label>
	<p>(pour renouvellement, remplacement ou second passeport)</p>
	<input type="file">
	</div>
	</form>
					</div>
				</div>
			</div>
		</div>

	
		<br>

	
		<div class="col-lg-12 d-none">
			<div class="card">
				<div class="card-header">II. RENSEIGNEMENTS PERSONNELLES</div>
					<div class="card-body">
						<form>
							<div class="form-group mb-3">
								<label><b>N.A.N</b></label>
								<input type="text" name="numact" class="form-control" placeholder="Numéro Acte de naissance" value="{{$data->num_act ?? ''}}"  readonly/>
								
								<label><b>Date A.N</b></label>
								<input type="text" name="dateact" class="form-control" placeholder="Date Acte de naissance" value="{{$data->date_act?? ''}}"  readonly/>
								
								<label><b>Lieu A.N</b></label>
								<input type="text" name="lieuacte" class="form-control" placeholder="Lieu Acte de naissance" value="{{$data->lieu_act?? ''}}"  readonly/>
								
							</div>
							<div class="form-group mb-3">
								<label><b>Nom</b></label>
								<input type="text" name="name" class="form-control" placeholder="Name" value="{{$data->nom?? ''}}"  readonly/>
								
								<label><b>Situation de Famille</b></label>
								<input type="text" name="sitmatri" class="form-control" placeholder="situation de famille" value="{{ $data->sitMatri ?? ''}}"readonly />		
							</div>
							<div class="form-group mb-3">
								<label><b>Prenom</b></label>
								<input type="text" name="prenom" class="form-control" placeholder="prénom" value="{{ $data->prenoms ?? ''}}"readonly />
								
		
								</div>
							<div class="form-group mb-3">
								<label><b>Sexe</b></label>
								<input type="text" name="sexe" class="form-control" placeholder="sexe" value="{{$data->sexe?? ''}}"  readonly/>
								
								<label><b>Nationalité</b></label>
								<input type="text" name="nationalite" class="form-control" placeholder="Nationalité" value="{{ $data->nationalité ?? ''}}"readonly />
								
							</div>
							<div class="form-group mb-3">
								<label><b>Pays de naissance</b></label>
								<input type="text" name="pays_naiss" class="form-control" placeholder="Pays de naissance" value="{{$data->pays_naiss?? ''}}"  readonly/>
								
								<label><b>Date de naissance</b></label>
								<input type="text" name="datenaiss" class="form-control" placeholder="Date de naissance" value="{{ $data->date_naiss ?? ''}}"readonly />
								
							</div>
							<div class="form-group mb-3">
								<label><b>Lieu de naissance</b></label>
								<input type="text" name="lieu_naiss" class="form-control" placeholder="lieu de naissance" value="{{$data->lieu_naiss?? ''}}"  readonly/>
								
								
							</div>
							<div class="form-group mb-3">
								<label><b>Région</b></label>
								<input type="text" name="region" class="form-control" placeholder="Name" value="{{$data->region?? ''}}"  readonly/>
								
								<label><b>Arrondissement</b></label>
								<input type="text" name="arrondis" class="form-control" placeholder="arrodissement" value="{{$data->arrondis?? ''}}"  readonly/>
								
							</div>
							<div class="form-group mb-3">
								<label><b>Cercle</b></label>
								<input type="text" name="cercle" class="form-control" placeholder="Cercle" value="{{$data->cercle?? ''}}"  readonly/>
								
							</div>
							<div class="form-group mb-3">
								<label><b>Profession</b></label>
								<input type="text" name="profession" class="form-control" placeholder="Profession" value="{{$data->profession?? ''}}"  readonly/>
								
								<label><b>Couleur des yeux</b></label>
								<input type="text" name="yeux" class="form-control" placeholder="Couleur yeux" value="{{$data->yeux?? ''}}"  readonly/>
								
								
							</div>
							<div class="form-group mb-3">
								<label><b>Teint</b></label>
								<input type="text" name="teint" class="form-control" placeholder="Teint" value="{{$data->teint?? ''}}"  readonly/>
								
								<label><b>Couleur des cheveux</b></label>
								<input type="text" name="cheveux" class="form-control" placeholder="Couleur cheveux" value="{{$data->cheveux?? ''}}"  readonly/>
								
								
							</div>
							<div class="form-group mb-3">
								<label><b>Signes Particuliers</b></label>
								<input type="text" name="signe" class="form-control" placeholder="Signes particuliers" value="{{$data->signPart?? ''}}"  readonly/>
								
							</div>

							<div class="form-group mb-3">
								<label><b>C.I.N</b></label>
								<input type="text" name="numcin" class="form-control" placeholder="Numéro cin" value="{{$data->num_cin?? ''}}"  readonly/>
								
								<label><b>Date C.I.N</b></label>
								<input type="text" name="datecin" class="form-control" placeholder="Date cin" value="{{$data->date_etabliss?? ''}}"  readonly/>
								
								<label><b>Lieu C.I.N</b></label>
								<input type="text" name="lieucin" class="form-control" placeholder="Lieu cin" value="{{$data->village?? ''}}"  readonly/>
								
							</div>

							<div class="form-group mb-3">
								<label><b>Adresse Courante</b></label>
								<input type="text" name="adresse" class="form-control" placeholder="Adresse Courante" value="" required/>
								@if($errors->has('adresse'))
												<span class="text-danger">{{ $errors->first('adresse') ?? ''}}</span>
												@endif
							</div>
							<div class="form-group mb-3">
								<label><b>Autre Adresse</b></label>
								<input type="text" name="autreadresse" class="form-control" placeholder="Autre Adresse" value=""/>
								
							</div>
							<div class="form-group mb-3">
								<label><b>Téléphone</b></label>
								<input type="tel" name="tel" class="form-control" placeholder="Téléphone" value="" required/>
								@if($errors->has('tel'))
												<span class="text-danger">{{ $errors->first('tel') ?? ''}}</span>
												@endif
							</div>

							<div class="form-group mb-3">
								<label><b>Numéro NINA</b></label>
								<input type="text" name="nina" class="form-control" placeholder="Numéro NINA" value="{{$data->num_nina?? ''}}"  readonly/>
								
							</div>
							
					</form>
					</div>
				</div>
			</div>
		</div>
	
	
		<div class="col-lg-12 d-none">
			<div class="card">
				<div class="card-header">III. PARENTS</div>
					<div class="card-body">
						<form>
							<div class="form-group mb-3">
								<label><b>Nom du Père</b></label>
								<input type="text" name="nompere" class="form-control" placeholder="Nom du père" value="{{$data->nom_pere?? ''}}"  readonly/>
								
								<label><b>Prénoms du Père</b></label>
								<input type="text" name="prenompere" class="form-control" placeholder="Prénoms du Père" value="{{$data->prenoms_pere?? ''}}"  readonly/>
							</div>

							<div class="form-group mb-3">
								<label><b>Nom de la Mère</b></label>
								<input type="text" name="nommere" class="form-control" placeholder="Nom de la mère" value="{{$data->nom_mere?? ''}}"  readonly/>
								
								<label><b>Prénoms de la Mère</b></label>
								<input type="text" name="prenommere" class="form-control" placeholder="Prénoms de la Mère" value="{{$data->prenoms_mere?? ''}}"  readonly/>
							</div>
							</form>
					</div>
				</div>
			</div>
		</div>
	
	<br>
	<div class="form-group mb-3 container">
		        		
		        		<button class="btn btn-primary"><a style="color: white; " href="{{url('/demandes')}}">Enregistrer</a></button>
		        		<button class="btn btn-danger"><a style="color: white; " href="{{url('/demandes')}}">Annuler</a></button>
		        		<input type="submit" class="btn btn-success" value="Suivant" />
		        	</div>
	</form>

	 <!-- Jquery JS-->
	 <script src="{{asset('assets/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('assets/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('assets/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('assets/js/main.js')}}"></script>

    
    <!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>-->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap5.min.js')}}"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

	<!-- Main JS-->
    <script src="{{asset('customjs/custom.js')}}"></script>

</body>
</html>
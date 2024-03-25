
	<div class="app-header header-shadow bg-primary">
		<div class="app-header__logo">
			<!--<div class="logo-src"></div> -->
			<div class="logo">
				<img width="60" class="rounded-circle" src="medecin/images/logoUA.png" alt="">
			</div>
		</div>
		<div class="app-header__mobile-menu">
			<div>
				<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
		</div>
		<div class="app-header__menu">
			<span>
				<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
					<span class="btn-icon-wrapper">
						<i class="fa fa-ellipsis-v fa-w-6"></i>
					</span>
				</button>
			</span>
		</div>
		<div class="app-header__content">
			<div class="app-header-left">
				<ul class="header-menu nav">
					<li class="nav-item">
						<a href="" class="nav-link" >
								<i class="bi bi-activity"></i>
								Statistique des malades
						</a>
					</li>
					<li class="btn-group nav-item">
						<a href="javascript:void(0);" class="nav-link">
							<i class="nav-link-icon fa fa-edit"></i>
							Versement journalier
						</a>
					</li>
					<li class="dropdown nav-item">
						<a href="javascript:void(0);" class="nav-link">
							<i class="nav-link-icon fa fa-cog"></i>
							Versement journalier
						</a>
					</li>
				</ul>
			</div>
			<div class="app-header-right">
				<div class="header-btn-lg pr-0">
					<div class="widget-content p-0">
						<div class="widget-content-wrapper">
							<div class="widget-content-left">
								<div class="btn-group">
									<a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
										<img width="42" class="rounded-circle" src="medecin/images/avatars/1.jpg" alt="Photo de profil">
										<i class="bi bi-chevron-down"></i>
									</a>
									<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
										<button type="button" tabindex="0" class="dropdown-item">Changer le mot de passe</button>
										<a href="{{ route('deconnexion') }}" >
											<button type="button btn-danger" tabindex="0" class="dropdown-item">
												Déconnexion 
											</button>
									    </a>
									</div>
								</div>
							</div>
							<div class="widget-content-left  ml-3 header-user-info">
								<div class="widget-heading">
									{{ Auth::user()->name }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="app-main">
		<div class="app-sidebar sidebar-shadow">
			<div class="app-header__logo">
				<div class="logo-src"></div>
				<div class="header__pane ml-auto">
					<div>
						<button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</div>
				</div>
			</div>
			<div class="app-header__mobile-menu">
				<div>
					<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>
			</div>
			<div class="app-header__menu">
				<span>
					<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
						<span class="btn-icon-wrapper">
							<i class="fa fa-ellipsis-v fa-w-6"></i>
						</span>
					</button>
				</span>
			</div>
			<!--  Menu bg-warning-->

			<!-- --------------------------------------------------------------SIDEBAR---------------------------------------------------------------- -->
			
	<div class="scrollbar-sidebar bg-light">
		<div class="app-sidebar__inner ">
			<ul class="vertical-nav-menu">
				<li class="app-sidebar__heading">
					<i class="bi bi-exclude"></i>
					Espace agent santé
				</li>
			<hr/>
				<li>
					<a href="{{ url('home') }}" class="mm-active">
						<i class="bi bi-house"></i> 
						Acceuil
					</a>
				</li>
				<li class="app-sidebar__heading">Rendez-vous</li>
				<li>
					<a href="{{ url('rdvToday') }}">
						<i class="bi bi-clipboard2-minus"></i>
						Rendez-vous d'aujourd'hui
					</a>
					<a href="{{ url('rdvAll') }}">
						<i class="bi bi-clipboard2-minus"></i>
						Tous mes rendez-vous
					</a>
				</li>
				<li class="app-sidebar__heading">Gestion de consultation</li>
				<li>
					<a href="#">
						<i class="bi bi-heart-pulse"></i>
						Consultation
						<i class="metismenu-state-icon bi bi-caret-up caret-left"></i>
					</a>
					<ul>
						<li>
							<a href="{{ url('list_consult') }}">
								<i class="metismenu-icon"></i>Liste des patients consultatés</a>
						</li>
					</ul>
				</li>
				<li class="app-sidebar__heading">Gestion de dossier médical</li>
				<li>
					<a href="#">
						<i class="bi bi-clipboard-pulse"></i>
						Dossier médical
						<i class="metismenu-state-icon bi bi-caret-up caret-left"></i>
					</a>
					<ul>
						<li>
							<a href="{{ route('listDossier') }}">
								<i class="metismenu-icon"></i>Liste dossiers</a>
						</li>
						<li>
							<a href="#">
								<i class="metismenu-icon"></i>Créer dossiers</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="{{ route('listPatient') }}">
						<i class="bi bi-person-video2"></i>
						Patient
					</a>
				</li>
				<li class="app-sidebar__heading">Gestion de certificat</li>
				<li>
					<a href="{{ route('addCertificat') }}">
						<i class="bi bi-file-earmark-plus"></i>
						Créer certificat
					</a>
					<a href="{{ route('listCertificat') }}">
						<i class="bi bi-file-earmark-check"></i>
						Liste certificat
					</a>
				</li>
				<li class="app-sidebar__heading"></li>
				<li>
					<a href="#">
						
					</a><br/>
				</li>
				<li class="app-sidebar__heading"></li>
					<li>
						<a href="#">
							
						</a>
					</li>
				</li>     
			</ul>
		</div>
	</div>
	<!-- Fin menu bg-info-->
</div>
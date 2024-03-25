<aside>
      <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          
          <p class="centered"><a href="profile.html"><img src="secretaire/img/ui-sam1.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="mt">
            <a class="active" href="{{ url('home') }}">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Fiche Patiente</span>
              </a>
            <ul class="sub">
              <li><a href="{{ url('add_patient') }}">Ajouter Patient</a></li>
              <li><a href="{{ url('showPatient') }}">Liste des fiches Patientes</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Rendez-Vous</span>
              </a>
            <ul class="sub">
              <li><a href="{{ url('showRvConfirmer') }}">Consulter la liste des rendez-vous</a></li>
              <li><a href="{{ url('showRvDemander') }}">Rendez-vous demander</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Versement</span>
              </a>
            <ul class="sub">
              <li><a href="{{ url('add_rec')}}">Ajouter un versement</a></li>
              <li><a href="{{ url('showVersement') }}">Liste des versements</a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
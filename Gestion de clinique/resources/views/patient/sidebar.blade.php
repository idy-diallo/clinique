<aside>
      <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          
          <p class="centered"><a href="profile.html"><img src="secretaire/img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="mt">
            <a class="active" href="{{ url('home') }}">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Rendez-Vous</span>
              </a>
            <ul class="sub">
              <li><a href="{{ url('add_rdv') }}">Demander un rendez-vous</a></li>
              <li><a href="{{ url('showRvList') }}">Consulter les rendez-vous</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Dossier médical</span>
              </a>
            <ul class="sub">
              <li><a href="{{ url('consultDossier')}}">Consulter dossier médical</a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
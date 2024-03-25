
<!DOCTYPE html>
<html lang="en">

<head>

    @include('secretaire.css')

</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    
        @include('secretaire.header')

    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->

    <aside>
      <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          
          <p class="centered"><a href="profile.html"><img src="secretaire/img/ui-sam1.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="mt">
            <a href="{{ url('home') }}">
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
            <a class="active" href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Versement</span>
              </a>
            <ul class="sub">
              <li><a href="{{ url('add_rec')}}">Ajouter un versement</a></li>
              <li class="active"><a href="{{ url('showVersement') }}">Liste des versements</a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>

    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> La liste des Rendez-vous en cours...</h3>
        
        <!--@if(session()->has('message'))

            <div class="alert alert-sucess" style="color:blue">

              <button type="button" class="close" data-dismiss="alert" style="color:blue">
                x
              </button>
                  
              {{session()->get('message')}}

            </div>

        @endif-->

        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                
                <thead>
                  <tr>
                    <th> num Rec </th>
                    <th> Versement Ticket</th>
                    <th> Versement Produit</th>
                    <th> Date</th>
                    <th><i class=" fa fa-edit"></i> Action</th>
                  </tr>
                </thead>
                <tbody>

                @foreach($rec as $r)

                  <tr>
                    <td> {{ $r->numRec  }} </td>
                    <td> {{ $r->versementTicket }} </td>
                    <td> {{ $r->versementProduit }} </td>
                    <td> {{ $r->dateRec }} </td>

                    <td>
                      
                      <!--<button class="btn btn-success btn-xs">-->
                        <a class="btn btn-success btn-xs" title="button de modification..." onclick="return confirm('Voulez-vous modifier la recette')" 
                            href="{{ url('confirmeRv',$r->numRDV) }}">
                          <i>Modifier</i>
                        </a>
                      <!--</button>-->

                    </td>

                  </tr>

                @endforeach

                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>

    <!--main content end-->
    <!--footer start-->
    
        @include('secretaire.footer')

    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  
        @include('secretaire.script')

  <!--script for this page-->
  <script src="secretaire/lib/sparkline-chart.js"></script>
  <script src="secretaire/lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'secretaire/img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>

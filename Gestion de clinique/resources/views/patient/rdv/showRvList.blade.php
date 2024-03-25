
<!DOCTYPE html>
<html lang="en">

<head>

    @include('patient.css')

</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    
        @include('patient.header')

    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->

        @include('patient.sidebar')

    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> La liste des Rendez-vous confirmés</h3>
        
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
                    <th> ID User</th>
                    <th> motif</th>
                    <th> date</th>
                    <th> heure</th>
                    <th> etat</th>
                    <th><i class=" fa fa-edit"></i> Action</th>
                  </tr>
                </thead>
                <tbody>

                @foreach($rvList as $r)

                  <tr>
                    <td> {{ $r->user->id }} </td>
                    <td> {{ $r->motifRV }} </td>
                    <td> {{ $r->dateRV }} </td>
                    <td> {{ $r->heureRV }} </td>
                    <td> {{ $r->etat }} </td>
                    <td>
                        
                      <!--<button class="btn btn-danger btn-xs">-->
                          
                        <a class="btn btn-danger btn-xs" title="Oups!!! button de supression..." onclick="return confirm('Ëtes-vous sûre de vouloir supprimer ce rendez-vous')" 
                            href="{{ url('destroyRvDem',$r->numRDV) }}" role="button">  
                            Supprimer
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
    
        @include('patient.footer')

    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  
        @include('patient.script')

  <!--script for this page-->
  <script src="patient/lib/sparkline-chart.js"></script>
  <script src="patient/lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'patient/img/ui-sam.jpg',
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

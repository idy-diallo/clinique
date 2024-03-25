
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
        <h3 align="center">-<i class="fa fa-angle-right"></i> Formulaire de demande de rendez-vous</h3>
        
        
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" method="POST" action="{{ url('storeRvPat') }}">

                @csrf

                <!--@foreach($user as $u)-->
                <div class="form-group ">
                  <div class="col-lg-10">
                    <input class=" form-control" type="hidden" id="user_id" name="user_id" value="{{ $user->id }}">  
                  </div>
                </div>
                <!--@endforeach-->
               
                  <div class="form-group ">
                    <label for="motifRv" class="control-label col-lg-2">Motif</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="motifRv" name="motifRv" type="text" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="heureRv" class="control-label col-lg-2">Heure</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="heureRv" name="heureRv" type="time" min="08:00" max="17:00" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="dateRv" class="control-label col-lg-2">Date</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="dateRv" name="dateRv" type="date" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label class="control-label col-lg-2">Type Agent</label>
                    <div class="col-lg-10">
                      <select name="typeAgent" class="form-control" required>
                        <option>Medecin</option>
                        <option>Dentiste</option>
                        <option>SageFemme</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="note" class="control-label col-lg-2">Note : </label>
                    <div class="col-lg-10">
                        <textarea class="form-control" name="note" id="note" placeholder="Your Message" rows="5" cols="5" data-rule="required"></textarea>
                    </div>
                    <div class="validate"></div>
                  </div>

                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Save</button>
                      <button class="btn btn-dark" type="button">Cancel</button>
                    </div>
                </div>
                  
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
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

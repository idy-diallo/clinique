
<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">
    
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

        @include('secretaire.sidebar')

    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    
    <section id="main-content">
      <section class="wrapper">
        <h5 align="center"><b><i class="fa fa-angle-right"></i> Formulaire de modification</b></h5>
        
        
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" method="POST" action="{{ url('updatePatient',$patient->id) }}">

                @csrf

                  <div class="form-group ">
                    <label for="prenom" class="control-label col-lg-2">Prénom</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="prenom" name="prenom" type="text" value="{{$patient->prenom}}" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="nom" class="control-label col-lg-2">Nom</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="nom" name="nom" type="text" value="{{$patient->nom}}" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="email" name="email" type="email" value="{{$patient->email}}" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="dateNais" class="control-label col-lg-2">Date de naissance</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="dateNais" name="dateNais" type="date" value="{{$patient->dateNais}}" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="adresse" class="control-label col-lg-2">Adresse</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="adresse" name="adresse" type="text" value="{{$patient->adresse}}" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="phone" class="control-label col-lg-2">Téléphone</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="phone" name="phone" type="text" value="{{$patient->tel}}" />
                    </div>
                  </div>
                                <p align="center"><u>Sexe</u> : </p> 
                  <div class="radio">
                    <label>
                    <input type="radio" name="sexe" id="M" {{ $patient->sexe == 'M' ? 'checked' : '' }} value="M" >
                    M
                    </label>
                </div>

                <div class="radio">
                    <label>
                    <input type="radio" name="sexe" id="F" {{ $patient->sexe == 'F' ? 'checked' : '' }} value="F">
                    F
                    </label>
                </div>

                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Save</button>
                      <button class="btn btn-theme04" type="button">Cancel</button>
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
        <br><br>
      </section>
      <!-- /wrapper -->
    </section>

    <!--main content end-->
    <!--footer start-->
    
        

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

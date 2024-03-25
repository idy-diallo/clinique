<!doctype html>
<html lang="en">

<head>
    
    <base href="/public">

    @include('medecin.includes.css')

</head>

<body>
    <!--header start-->

    @include('medecin.includes.header', ['title' => "Rendez-vous",'icone'=>'bi bi-calendar'])

    <!--header end-->

<!-- **********************************************************************************************************************************************************-->

    <!--sidebar start-->

        

    <!--sidebar end-->

<!-- **********************************************************************************************************************************************************-->

    <!--main content start-->

    <div class="card-body">
        <div class="form-row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h5 class="card-title"> Rendez-vous </h5>
            </div>
            <div class="col-md-3"></div>
        </div>
        <form class="">
            <div class="form-row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="motifRV" class="">Motif du Rendez-vous</label>
                        <input name="motifRV" id="motifRV"  type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="form-row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="dateRV" class="">Date</label>
                        <input name="dateRV" id="dateRV"  type="date" class="form-control">
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="form-row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="dateRV" class="">Heure</label>
                        <input name="dateRV" id="dateRV" placeholder="password placeholder" type="time" class="form-control">
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="form-row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button class="mt-2 btn btn-outline-success">Enregistrer</button>
                </div>
                <div class="col-md-3"></div>
            </div>
        </form>
    </div>    

    <!--main content end-->
    
    @include('medecin.includes.footer')

</body>

</html>

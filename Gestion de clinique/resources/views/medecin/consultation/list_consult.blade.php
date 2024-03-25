<!doctype html>
<html lang="en">

<head>

    @include('medecin.includes.css')

</head>

<body>
    <!--header start-->

    @include('medecin.includes.header', ['title' => "Consultation",'icone'=>'bi bi-clipboard2-pulse-fill'])

    <!--header end-->

<!-- **********************************************************************************************************************************************************-->

    <!--sidebar start-->

        

    <!--sidebar end-->

<!-- **********************************************************************************************************************************************************-->

    <!--main content start-->


    <div class="row">
        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                <h5 class="card-title">Table responsive</h5>
                    <div class="table-responsive">
                        <table class="mb-0 table">
                            <thead>
                            <tr>
                                <th>N°Consultation</th>
                                <th>n°Patient</th>
                                <th>Motif consultation</th>
                                <th>Résumer syndromique</th>
                                <th>Diagnostique</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($lists as $list)
                            <tr>
                                <th scope="row">{{$list->numConsult}}</th>
                                <td>{{$list->patient_id }}</td>
                                <td>{{$list->motifCons}}</td>
                                <td>{{$list->resumeSynd}}</td>
                                <td>{{$list->diagnostique}}</td>
                                <td>
                                    <a href="{{ route('detailConsultation',$list->numConsult) }}">  <button type="button" class="btn btn-outline-info">Detail</button> </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--main content end-->
    
    @include('medecin.includes.footer')

</body>

</html>
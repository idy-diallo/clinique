<!doctype html>
<html lang="en">

<head>

    @include('medecin.includes.css')

</head>

<body>
    <!--header start-->

    @include('medecin.includes.header', ['title' => "Acceuil",'icone'=>'bi bi-house'])

    <!--header end-->

<!-- **********************************************************************************************************************************************************-->

    <!--sidebar start-->

        

    <!--sidebar end-->

<!-- **********************************************************************************************************************************************************-->

    <!--main content start-->


    
    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-midnight-bloom">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Rendez-vous</div>
                        <div class="widget-subheading">Rendez-vous du jour</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>1896 </span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-arielle-smile">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Rendez-vous non respecter</div>
                        <div class="widget-subheading">Total Rendez-vous non respecter</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>12%</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-grow-early">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Rendez-vous respecté</div>
                        <div class="widget-subheading">Total Rendez-vous respecté</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>46%</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="app-main__outer">
    <div class="app-main__inner">
        <div class="row"> 
            <div class="col-lg-13">
                <div class="main-card mb-3 card">
                    <div class="card-body" style="background-color: #F2F3F4 ">
                        <h5 class="card-title bg-light">Liste des Rendez-vous</h5>
                        <div class="table-responsive">
                        <div id="tableContainer" class="tableContainer">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" height="" class="scrollTable">
                            <thead class="fixedHeader">
                                <tr class="alternateRow">
                                    <th> Prénom</th>
                                    <th> Nom</th>
                                    <th>N° Rendez-vous</th>
                                    <th>Motif Rendez-vous</th>
                                    <th>Date</th>
                                    <th>Heure</th>
                                    <th>Action</th> 
                                </tr>
                            </thead>
                            <tbody class="scrollContent">

                            @foreach($rvConfMed as $rv)

                                <tr class="normalRow">
                                    <td>{{$rv->user->prenom}}</td>
                                    <td>{{$rv->user->nom}}</td>
                                    <td>{{$rv->numRDV}}</td>
                                    <td>{{$rv->motifRV}}</td>
                                    <td>{{$rv->dateRV}}</td>
                                    <td>{{$rv->heureRV}}</td>
                                    <td align="center">
                                        <a href="{{ url('addConsultation',$rv->user->id) }}">
                                            <button type="button" class="btn btn-outline-info">Consulter</button>
                                        </a>
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
        </div>
    </div> 
</div>

    <!--main content end-->
    
    @include('medecin.includes.footer')

</body>

</html>

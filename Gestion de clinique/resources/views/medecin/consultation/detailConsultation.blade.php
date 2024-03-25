<!doctype html>
<html lang="en">

<head>
    
    <base href="/public">
    @include('medecin.includes.css')

</head>

<body>
    <!--header start-->

    @include('medecin.includes.header', ['title' => "Detail consultation",'icone'=>'bi bi-clipboard2-pulse-fill'])

    <!--header end-->

    <!-- **********************************************************************************************************************************************************-->

    <!--sidebar start-->

        

    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************-->

    <!--main content start-->


    <div class="row">
        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="Form">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center;  ">DETAIL CONSULTATION</h5>
                        <hr/>
                        <h4><i class="bi bi-diamond"></i> Etat civil <hr/></h4>
                        <fieldset class="position-relative form-group">
                            <table class="col-lg-12">
                                
                                <tr> 
                                    <td> - N° Consultation : {{$listCons->numConsult}} </td> 
                                    <td style="text:center; position:relative; left:250px;"> - Date de naissance : {{$listCons->user->dateNais}} </td>																										
                                </tr>
                                <tr>
                                    <td> - Prenom : {{$listCons->user->prenom}}  </td>
                                    <td style="text:center; position:relative; left:250px;"> - Sexe : {{$listCons->user->sexe}} </td>
                                </tr>
                                <tr>
                                    <td> - Nom : {{$listCons->user->nom}} </td>
                                    <td style="text:center; position:relative; left:250px;"> - Adresse : {{$listCons->user->adresse}} </td>
                                </tr>
                                
                            </table>
                        </fieldset>
                        <hr/>
                        <h4><i class="bi bi-diamond"></i> Consultation <hr/></h4><br>
                        <fieldset class="form-group">
                            <table class="col-lg-12">
                                <tr> 
                                    <td> - <b><u>Motif consultation</u> : </b>{{$listCons->motifCons}} </td>  																										
                                </tr>
                                <tr> 
                                    <td></td>  																										
                                </tr>
                                <tr>
                                    <td> - taille : {{$listCons->taille}} mètre </td>
                                    <td> - Poids : {{$listCons->poids}} kg </td>
                                </tr>
                                <tr>
                                    <td> - tension : {{$listCons->tension}} </td>
                                    <td> - température : {{$listCons->temperature}} ° </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table><hr/><br><br>
                            <div id="col">
                                <p>- <b><u>Diagnostique</u></b> : <pre style="color:#380C1B;">{{$listCons->diagnostique}}</pre></p>
                                <p>- <b><u>evolution</u></b> : <pre style="color:#380C1B;">{{$listCons->evolution}}</pre></p>
                            </div>
                            <table class="col-lg-12">
                                <tr style="position:relative; left:200px;"> 
                                    <td>
                                        <a href="{{ route('addDossier',$listCons->numConsult) }}">  
                                            <button type="button" class="btn btn-outline-info">Prescrire</button> 
                                        </a>
                                    </td> 																										
                                </tr>
                            </table>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>	
    <!--
    <div style="margin-left:700px">
        <div class="btn-group" role="group" aria-label="Basic outlined example">
            <button type="button" class="btn btn-outline-primary">Imprimer</button>
            <button type="button" class="btn btn-outline-info">Modifier</button>
            <button type="button" class="btn btn-outline-danger">SUpprimer</button>
        </div>
    </div>
-->


    <!--main content end-->
    
    @include('medecin.includes.footer')

</body>

</html>

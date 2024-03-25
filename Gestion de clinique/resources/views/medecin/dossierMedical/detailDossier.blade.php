<!doctype html>
<html lang="en">

<head>

    <base href="/public">
    @include('medecin.includes.css')

</head>

<body>
    <!--header start-->

    @include('medecin.includes.header',['title'=>'List Dossier','icone'=>'bi bi-clipboard-minus-fill'])

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
                        <h4 style="text-align:center;">Dossier Médical</h4>
                        <hr/>

                        <h5 class="card-title" style="text-align:center;">Information dossier </h5>
                        <fieldset class="form-group">
                            <table class="mb-0 table table-bordered">
                            <thead>
                                <tr>
                                    <td> Libellé </td>
                                    <td> Date Création </td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pr as $p)
                                <tr>
                                    <td> {{$p->idPres}} </td>
                                    <td> {{$p->datePres}} </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </fieldset>

                        

                        <h5 class="card-title" style="text-align:center;">Information Cabinet</h5>
                        <fieldset class="form-group">
                            <table class="mb-0 table table-bordered">
                                <thead>
                                <tr>
                                    <td> Nom cabinet </td>
                                    <td> Adresse </td>
                                    <td> Contact </td>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td> Clinique de l'uadb </td>
                                    <td> 47 <br>BP:</td>
                                    <td> Tel:339387213</td>
                                </tr>
                                </tbody>
                            </table>
                        </fieldset>

                        <h5 class="card-title" style="text-align:center;">Etat civil Patient</h5>
                        <fieldset class="position-relative form-group" >
                            <table class="mb-0 table table-bordered">  <!-- style="text:center; position:relative; width:850px;" -->
                            <thead>
                                <tr> 
                                    <td> Prénom </td> 
                                    <td> Nom </td>																										
                                    <td> Date nais </td>																										
                                    <td> Adresse </td>																										
                                    <td> Téléphone </td>																										
                                    <td> Profession </td>																										
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pr as $u)
                                <tr>
                                    <td> {{$u->consultation->user->prenom}}  </td>
                                    <td> {{$u->consultation->user->nom}}  </td>
                                    <td> {{$u->consultation->user->dateNais}} </td>
                                    <td> {{$u->consultation->user->adresse}} </td>
                                    <td> {{$u->consultation->user->tel}} </td>
                                    <td> Profession </td>
                                </tr>
                                @endforeach
                            </tbody>   
                            </table>
                        </fieldset>
                        
                        <h5 class="card-title" style="text-align:center;  ">Antécédent</h5>
                        <fieldset class="form-group">
                            <table class="mb-0 table table-bordered">
                                <thead>
                                    <tr>
                                        <td> Catégorie </td>
                                        <td> Description </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ant as $a)
                                    <tr>
                                        <td> {{$a->catAnt}} </td>
                                        <td> {{$a->description}} </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </fieldset>

                        <h5 class="card-title" style="text-align:center;  ">Consultation</h5>
                        <fieldset class="form-group">
                            <table class="mb-0 table table-bordered">
                                <thead>
                                    <tr>
                                        <td> n° Consultation </td>
                                        <td> Motif </td>
                                        <td> Taille </td>
                                        <td> Poids </td>
                                        <td> Tension </td>
                                        <td> température </td>
                                        <td> diagnostique </td>
                                        <td> evolution </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($consult as $c)
                                    <tr>
                                        <td> {{$c->numConsult}} </td>
                                        <td> {{$c->motifCons}} </td>
                                        <td> {{$c->taille}} mètre </td>
                                        <td> {{$c->poids}} kg </td>
                                        <td> {{$c->tension}} </td>
                                        <td> {{$c->temperature}} ° </td>
                                        <td> {{$c->diagnostique}} </td>
                                        <td> {{$c->evolution}} </td>
                                    </tr>
                                    <tr>
                                        <td class="card-title" colspan="5" style="text-align:center;background:#beced5;"> Ordonnance </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="background-color: #3f87a6;"> libellé </td>
                                        <td colspan="3" style="background-color: #3f87a6;"> Date </td>
                                    </tr>
                                    @endforeach
                                    @foreach($trait as $t)
                                    <tr>
                                        <td colspan="2"> {{$t->numTrait}} </td>
                                        <td colspan="3"> {{$t->prescription->datePres}} </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td class="card-title" colspan="5" style="text-align:center;background:#beced5;"> Medicament </td>
                                    </tr>
                                    
                                    <tr>
                                        <td colspan="1" style="background-color: #3f87a6;"> Nom Médicament </td>
                                        <td colspan="2" style="background-color: #3f87a6;"> Quantité </td>
                                        <td colspan="2" style="background-color: #3f87a6;"> Posologie </td>
                                    </tr>
                                    @foreach($med as $m)
                                    <tr>
                                        <td colspan="1"> {{$m->nomMed}} </td>
                                        <td colspan="2"> {{$m->quantite}} </td>
                                        <td colspan="2"> {{$m->posologie}} </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </fieldset>

                        <!--<h5 class="card-title" style="text-align:center;  ">Ordonnance</h5>
                        <fieldset class="form-group">-->
                            <table class="mb-0 table table-bordered">
                                <tr>
                                    <td class="card-title" colspan="3" style="text-align:center"> Analyse </td>
                                    <td class="card-title" colspan="3" style="text-align:center"> Radio </td>
                                    <td class="card-title" colspan="3" style="text-align:center"> Vaccin </td>
                                </tr>
                                <tr>
                                    <td style="background-color: #3f87a6;"> Libellé </td>
                                    <td style="background-color: #3f87a6;"> analyse </td>
                                    <td style="background-color: #3f87a6;"> Résultat </td>
                                    <td style="background-color: #3f87a6;"> Libellé </td>
                                    <td style="background-color: #3f87a6;"> Radio </td>
                                    <td style="background-color: #3f87a6;"> Résultat </td>
                                    <td style="background-color: #3f87a6;"> Libellé </td>
                                    <td style="background-color: #3f87a6;"> Vaccin </td>
                                    <td style="background-color: #3f87a6;"> Observation </td>
                                </tr>
                                
                                <tr>
                                @foreach($ana as $a)
                                    <td> {{$a->numAnalyse}} </td>
                                    <td> {{$a->typeAnalyse}} </td>
                                    <td> {{$a->resultat}} </td>
                                @endforeach
                                @foreach($rad as $r)
                                    <td> {{$r->numRadio}} </td>
                                    <td> {{$r->typeRadio}} </td>
                                    <td> {{$r->resultat}} </td>
                                @endforeach
                                @foreach($vacc as $v)
                                    <td> {{$v->idVaccin}} </td>
                                    <td> {{$v->dateVaccin}} </td>
                                    <td> {{$v->description}} </td>
                                @endforeach
                                </tr>
                                
                            </table>
                        <!--</fieldset>-->


                        <!--<hr style="position:relative; width:950px;"/> -->
                    </div>
                </div>
            </div>
        </div>
    </div>	
    <button onclick="window.print()">Imprimer</button>
    <!--main content end-->
    
    @include('medecin.includes.footer')

</body>

</html>

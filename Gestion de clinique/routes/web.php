<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil.index');
});

Route::get('/about', 'AccueilController@about')->name('accueil.about');
Route::get('/doctors', 'AccueilController@doctors')->name('accueil.doctors');
Route::get('/blog', 'AccueilController@blog')->name('accueil.blog');
Route::get('/contact', 'AccueilController@contact')->name('accueil.contact');
Route::get('/', 'AccueilController@index')->name('accueil.index');


Auth::routes();

Route::get('/home', 'DashboardController@redirect')->name('home');

/* -------------------------------------------------------Route Administrateur---------------------------------------------------------*/ 

Route::get('/add_agent', 'AdminController\AgentController@createAgent')->name('admin.add_agent');

Route::post('/storeAgent', 'AdminController\AgentController@storeAgent')->name('admin.add_agent');

Route::get('/showAgent', 'AdminController\AgentController@showAgent')->name('admin.add_agent');

Route::get('/destroyAgent/{id}', 'AdminController\AgentController@destroyAgent')->name('admin.add_agent');

Route::get('/editAgent/{id}', 'AdminController\AgentController@editAgent')->name('admin.add_agent');

Route::post('/updateAgent/{id}', 'AdminController\AgentController@update');

/* -------------------------------------------------------Route Secretaire---------------------------------------------------------*/

                                        /* *********    Fiche Patiente  ********* */

Route::get('/add_patient', 'SecretaireController\PatientController@createPatient')->name('secretaire.add_patient');

Route::post('/storePatient', 'SecretaireController\PatientController@storePatient')->name('secretaire.add_patient');

Route::get('/showPatient', 'SecretaireController\PatientController@show')->name('secretaire.showPatient');

Route::get('/destroyPatient/{id}', 'SecretaireController\PatientController@destroyPatient')->name('secretaire.showPatient');

Route::get('/editPatient/{id}', 'SecretaireController\PatientController@editPatient')->name('secretaire.add_patient');

Route::post('/updatePatient/{id}', 'SecretaireController\PatientController@updatePatient');

                                        /* *********    Rendez-vous  ********* */

Route::get('/add_rdvPat/{id}', 'SecretaireController\RdvController@addRv')->name('secretaire/rdv.add_rdv');

Route::post('/storeRv', 'SecretaireController\RdvController@storeRv')->name('secretaire/rdv.add_rdv');
// Rdv confirmé
Route::get('/showRvConfirmer', 'SecretaireController\RdvController@showRvConfirmer')->name('secretaire/rdv.showRvConfirmer');
Route::get('/destroyRvConf/{numRDV}', 'SecretaireController\RdvController@destroyRvConf')->name('secretaire/rdv.showRvConfirmer');
// Rdv Demandé
Route::get('/showRvDemander', 'SecretaireController\RdvController@showRvDemander')->name('secretaire/rdv.showRvDemander');
Route::get('/confirmeRv/{numRDV}', 'SecretaireController\RdvController@confirmeRv')->name('secretaire/rdv.showRvDemander');
Route::get('/rejetRv/{numRDV}', 'SecretaireController\RdvController@rejetRv')->name('secretaire/rdv.showRvDemander');

                                        /* *********    Recette  ********* */

Route::get('/add_rec', 'SecretaireController\RecetteController@add_rec')->name('secretaire/rdv.add_rec');

Route::post('/storeRec', 'SecretaireController\RecetteController@storeRec')->name('secretaire/rdv.add_rec');

Route::get('/showVersement', 'SecretaireController\RecetteController@showVersement')->name('secretaire/rdv.showVersement');

/* -------------------------------------------------------Route Patient---------------------------------------------------------*/

Route::get('/add_rdv', 'PatientController\RdvController@addRv')->name('patient/rdv.add_rdv');

Route::post('/storeRvPat', 'PatientController\RdvController@storeRvPat')->name('patient/rdv.add_rdv');

Route::get('/showRvList', 'PatientController\RdvController@showRvList')->name('patient/rdv.showRvList');

Route::get('/destroyRvDem/{numRDV}', 'PatientController\RdvController@destroyRvDem')->name('secretaire/rdv.showRvList');

Route::get('/consultDossier', 'PatientController\RdvController@consultDossier')->name('secretaire/consulterDossier');

/* -------------------------------------------------------Route Medecin---------------------------------------------------------*/

//page rendez-vous
Route::get('/rdvToday', 'MedecinController\RdvController@showRvMed')->name('addRendezvous');
Route::get('/rdvAll', 'MedecinController\RdvController@showRdvAll')->name('addRendezvous');

//page consultation
Route::get('addConsultation/{id}', 'MedecinController\ConsultationController@addConsultation')->name('addConsultation');
Route::post('storeConsult', 'MedecinController\ConsultationController@storeConsult')->name('addConsultation');
Route::get('/list_consult', 'MedecinController\ConsultationController@list_consult')->name('medecin.consultation.consultation');
Route::get('detailConsultation/{id}', 'MedecinController\ConsultationController@detailConsultation')->name('detailConsultation');

//page Patient
Route::get('/patient/listPatient', 'PatientController@listPatient')->name('listPatient');


//page dossier medical
Route::get('/addDossier/{id}', 'MedecinController\DossierController@addDossier')->name('addDossier');
Route::get('/listDossier', 'MedecinController\DossierController@listDossier')->name('listDossier');
Route::get('/detailDossier/{id}', 'MedecinController\DossierController@detailDossier')->name('listDossier');

Route::get('/storeAnt', 'MedecinController\DossierController@storeAnt')->name('storeAnt');
Route::get('/storeRadio', 'MedecinController\DossierController@storeRadio')->name('storeRadio');
Route::get('/storeAnalyse', 'MedecinController\DossierController@storeAnalyse')->name('storeAnalyse');
Route::get('/storeVaccin', 'MedecinController\DossierController@storeVaccin')->name('storeVaccin');
Route::get('/addMed', 'MedecinController\DossierController@addMed')->name('addMed');
//Route::get('/storeTraitement', 'MedecinController\DossierController@storeTraitement')->name('storeTraitement');

//page certificat
Route::get('/certificatM/addCertificat', 'ConsultationController@addCertificat')->name('addCertificat');
Route::get('/certifi/listCertificat', 'ConsultationController@listCertificat')->name('listCertificat');

//page de déconnexion
Route::get('/deconnexion', 'HomeController@deconnexion')->name('deconnexion');
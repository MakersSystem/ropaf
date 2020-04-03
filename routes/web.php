<?php

use App\Exports\OrganizacionExport;
use App\Exports\OrganizacionGlobal;
use App\Exports\OrganizacionDepartamento;
use App\Exports\OrganizacionRubro;
use App\Exports\OrgansExport;
use Maatwebsite\Excel\Facades\Excel;



Route::redirect('/', '/admin/home');

Auth::routes(['register' => false]);

// Change Password Routes...
Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::post('permissions_mass_destroy', 'Admin\PermissionsController@massDestroy')->name('permissions.mass_destroy');
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', 'Admin\RolesController@massDestroy')->name('roles.mass_destroy');
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', 'Admin\UsersController@massDestroy')->name('users.mass_destroy');

    Route::resource('reportes', 'Admin\globalreportController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// actualiza la variable de session id__user
Route::get('/switchinfo/{id}',[
    'uses' => 'HomeController@saveId',
    'as'   => 'saveid'
]);

Route::get('principal', 'HomeController@principal')->middleware('auth');

Route::get('/provendidos', function(){
  return view('content.produ_vend');
});

// Route::get('/organizacion', function(){
//   return view('content.organizacion');
// });
Route::resource('organizacion', 'OrganizacionController')->middleware('auth');

// Route::get('/representacion', function(){
//   return view('content.representacion');
// });
Route::resource('representacion', 'RepresentacionController')->middleware('auth');

// Route::get('/daorgani', function(){
//   return view('content.datos_organi');
// });

Route::resource('daorgani', 'OrganizacionalesController')->middleware('auth');

Route::resource('proeco', 'ProduEcoController')->middleware('auth');



Route::resource('daadmin', 'AdministrativoController')->middleware('auth');



Route::resource('daprodu', 'ProductivoController')->middleware('auth');

Route::resource('daproduso', 'ProSocioController')->middleware('auth');

Route::resource('mercado', 'MercadoController')->middleware('auth');

Route::resource('bene', 'BeneficioController')->middleware('auth');

// Route::resource('benelid', 'BeneLidController')->middleware('auth');

Route::resource('beneficio', 'BeneficioController')->middleware('auth');
// Route::get('/prorepre', function(){
//   return view('content.proble_repre');
// });

// Route::get('/prorepre', 'ProbleRepreController@index');

Route::resource('prorepre', 'ProbleRepreController')->middleware('auth');

Route::resource('proorgani', 'ProbleOrgaController')->middleware('auth');

Route::resource('producto', 'ProductoController')->middleware('auth');

Route::resource('produven', 'ProductoVendController')->middleware('auth');

Route::resource('certi', 'CertificacionController')->middleware('auth');

Route::resource('proagri', 'ProduAgriController')->middleware('auth');

Route::resource('propecu', 'ProduPecuController')->middleware('auth');

Route::resource('prootro', 'OtroProController')->middleware('auth');

Route::resource('climer', 'ClienteMercController')->middleware('auth');

Route::resource('benesoc', 'BeneEventController')->middleware('auth');

Route::resource('proadmi', 'ProbleAdmiController')->middleware('auth');

Route::resource('propro', 'ProbleProController')->middleware('auth');

Route::get('demos/vuesearch','ProductoFinalController@showVueSearch');

Route::post('demos/vuesearch','ProductoFinalController@getVueSearch');


Route::get('/desc_repo', function () {
    return Excel::download(new OrganizacionExport, 'organizacion.xlsx');
});


Route::get('/desc_repo_global', function () {
    return Excel::download(new OrganizacionGlobal, 'Reporte_Global.xlsx');
});

Route::get('/desc_repo_departamento', function () {
    return Excel::download(new OrganizacionDepartamento, 'Reporte_Departamento.xlsx');
});

Route::get('/desc_repo_rubro', function () {
    return Excel::download(new OrganizacionRubro, 'Reporte_Rubro.xlsx');
});

// Route::get('/inicio', 'InicioController@index')->name('inicio');

Route::get('/login', 'BeginController@index')->name('login');

Route::resource('economico', 'EconomicoController')->middleware('auth');

Route::resource('detaeco', 'DetalleEcoController')->middleware('auth');

Route::resource('deman', 'DemandaController')->middleware('auth');

Route::get('/demanda', function(){
  return view('content.demanda');
});

Route::post('buspro','BeginController@busca');

Route::post('demos/vuesearch2','ProductoFinalController@getVueSearch2');


Route::get('/proble_orga2', 'ProblemasController@proble_orga2')->middleware('auth');

Route::get('/proble_admi2', 'ProblemasController@proble_admi2')->middleware('auth');

Route::get('/proble_repre2', 'ProblemasController@proble_repre2')->middleware('auth');





Route::get('/ajax_upload', 'AjaxUploadController@index');

Route::post('/ajax_upload/action', 'AjaxUploadController@action')->name('ajaxupload.action');



Route::get('/repo_glob', function () {
    return Excel::download(new OrgansExport, 'organs.xlsx');
});


Route::get('aopeb', function(){
    return view('content.asociaciones.aopeb');
})->name('aopeb');

Route::get('anproca', function(){
    return view('content.asociaciones.anproca');
})->name('anproca');

Route::get('cioec', function(){
    return view('content.asociaciones.cioec');
})->name('cioec');

Route::get('copracao', function(){
    return view('content.asociaciones.copracao');
})->name('copracao');
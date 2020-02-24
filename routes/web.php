<?php

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

// Https everywhere when in production
if (env('APP_ENV') === 'production') {
	URL::forceScheme('https');
}

Route::get('/', function () { return view('nl.index'); });

// Ubuntu
Route::get('/ubuntu', function () { return view('nl.ubuntu'); });
Route::get('/ubuntu/rondleiding', function () { return view('nl.ubuntu_rondleiding'); });
Route::get('/ubuntu/denaam', function () { return view('nl.ubuntu_denaam'); });
Route::get('/ubuntu/debelofte', function () { return view('nl.ubuntu_debelofte'); });
Route::get('/ubuntu/voorennadelen', function () { return view('nl.ubuntu_voorennadelen'); });

// Installeren
Route::get('/installeren', function () { return view('nl.installeren'); });
Route::get('/installeren/upgraden', function () { return view('nl.installeren_upgraden'); });
Route::get('/installeren/downloaden', function () { return view('nl.installeren_downloaden'); });
Route::get('/installeren/installatiemedium', function () { return view('nl.installeren_installatiemedium'); });
Route::get('/installeren/opstarten', function () { return view('nl.installeren_opstarten'); });
Route::get('/installeren/installatie', function () { return view('nl.installeren_installatie'); });
Route::get('/installeren/nadeinstallatie', function () { return view('nl.installeren_nadeinstallatie'); });
Route::get('/installeren/diashow', function () { return view('nl.installeren_diashow'); });

// Software
Route::get('/software', function () { return view('nl.software'); });

// Firefox
Route::get('/firefox', function () { return view('nl.firefox'); });
Route::get('/firefox/addons', function () { return view('nl.firefox_addons'); });
Route::get('/firefox/thema', function () { return view('nl.firefox_thema'); });
Route::get('/firefox/adresbalk', function () { return view('nl.firefox_adresbalk'); });

// Aanpassen
Route::get('/aanpassen', function () { return view('nl.aanpassen.aanpassen'); });

// Linux
Route::get('/linux', function () { return view('nl.linux'); });

// Alternatieven
Route::get('/alternatieven/canonical', function () { return view('nl.alternatieven.canonical'); });
Route::get('/alternatieven/kubuntu', function () { return view('nl.alternatieven.kubuntu'); });
Route::get('/alternatieven/lubuntu', function () { return view('nl.alternatieven.lubuntu'); });
Route::get('/alternatieven/xubuntu', function () { return view('nl.alternatieven.xubuntu'); });
Route::get('/alternatieven/edubuntu', function () { return view('nl.alternatieven.edubuntu'); });
Route::get('/alternatieven/ubuntustudio', function () { return view('nl.alternatieven.ubuntustudio'); });
Route::get('/alternatieven/mythbuntu', function () { return view('nl.alternatieven.mythbuntu'); });
Route::get('/alternatieven/ubuntukylin', function () { return view('nl.alternatieven.ubuntukylin'); });
Route::get('/alternatieven/linuxmint', function () { return view('nl.alternatieven.linuxmint'); });
Route::get('/alternatieven/elementaryos', function () { return view('nl.alternatieven.elementaryos'); });

// Gastenboek
Route::get('/gastenboek', 'GuestbookController@index');
Route::resource('guestbook', 'GuestbookController');

// Forum
Route::get('/forum', function () { return view('nl.forum'); });

// Voorwaarden
Route::get('/voorwaarden', function () { return view('nl.voorwaarden'); });

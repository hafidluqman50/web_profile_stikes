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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/strlen',function(){
	echo strlen('Jadi lok taylor otwell tu orang kaya dia makanya bisa beli facebook mahal betul');
});

Route::get('/',['as'=>'home-page','uses'=>'Home\HomeController@index']);
Route::get('/tentang/faq',['as'=>'tentang-faq','uses'=>'Home\HomeController@tentangFaq']);
Route::get('/tentang/{url}',['as'=>'tentang-content','uses'=>'Home\HomeController@tentang']);
Route::get('/tentang/visi-dan-misi/{url}',['as'=>'tentang-visi-misi','uses'=>'Home\HomeController@tentang']);
Route::get('/pendaftaran/{url}',['as'=>'pendaftaran-content','uses'=>'Home\HomeController@pendaftaran']);
Route::get('/informasi/{url}',['as'=>'informasi-content','uses'=>'Home\HomeController@informasi']);
Route::get('/informasi/medsos/{url}',['as'=>'informasi-content','uses'=>'Home\HomeController@informasi']);
Route::get('/akademik/{url}',['as'=>'akademik-content','uses'=>'Home\HomeController@akademik']);
Route::get('/penelitian/{url}',['as'=>'penelitian-content','uses'=>'Home\HomeController@penelitian']);
Route::get('/kerja-sama/{url}',['as'=>'kerja-sama-content','uses'=>'Home\HomeController@kerjaSama']);
Route::get('/kerja-sama/perguruan-tinggi/{url}',['as'=>'dalam-negeri','uses'=>'Home\HomeController@kerjaSama']);
Route::get('/prodi/{url}',['as'=>'prodi-content','uses'=>'Home\HomeController@prodi']);
Route::get('/mahasiswa-alumni/{url}',['as'=>'mahasiswa-content','uses'=>'Home\HomeController@mahasiswaAlumni']);
Route::get('/lembaga/{url}',['as'=>'lembaga-content','uses'=>'Home\HomeController@lembaga']);

Route::get('/kegiatan',['as'=>'kegiatan-page','uses'=>'Home\HomeController@kegiatan']);
Route::get('/kegiatan/{slug}',['as'=>'kegiatan-detail-page','uses'=>'Home\HomeController@kegiatanDetail']);
Route::get('/pengumuman',['as'=>'pengumuman-page','uses'=>'Home\HomeController@pengumuman']);
Route::get('/pengumuman/{slug}',['as'=>'pengumuman-detail-page','uses'=>'Home\HomeController@pengumumanDetail']);
Route::get('/berita',['as'=>'berita-page','uses'=>'Home\HomeController@berita']);
Route::get('/berita/{slug}',['as'=>'berita-detail-page','uses'=>'Home\HomeController@beritaDetail']);
Route::get('/video',['as'=>'video-page','uses'=>'Home\HomeController@video']);
Route::get('/video/{slug}',['as'=>'video-detail-page','uses'=>'Home\HomeController@videoDetail']);
Route::get('/download-dokumen/{file}',['as'=>'download-dokumen','uses'=>'Home\HomeController@downloadDokumen']);
Route::get('/cari-konten',['as'=>'cari-konten','uses'=>'Home\HomeController@cariKonten']);
Route::get('/cari-video',['as'=>'cari-video','uses'=>'Home\HomeController@cariVideo']);
Route::get('/cari-majalah',['as'=>'cari-majalah','uses'=>'Home\HomeController@cariMajalah']);
Route::get('/dokumen-peraturan',['as'=>'dokumen-page','uses'=>'Home\HomeController@dokumen']);
Route::get('/majalah-konten',['as'=>'majalah-page','uses'=>'Home\HomeController@majalah']);

Route::group(['middleware'=>'isLogin'],function(){
	Route::get('/login-form',['as'=>'login-form','uses'=>'AuthController@index']);
	Route::post('/login/auth',['as'=>'login-post','uses'=>'AuthController@login']);
});

Route::get('/user','AuthController@user');
Route::get('/logout',['as'=>'logout','uses'=>'AuthController@logout']);

Route::group(['prefix'=>'admin','middleware'=>'isAdmin'],function(){
	Route::get('/dashboard',['as'=>'admin-dashboard','uses'=>'Admin\DashboardController@dashboard']);
	// PROFIL //
	Route::get('/data-menu-tentang',['as'=>'admin-data-tentang','uses'=>'Admin\ProfilController@tentang']);
	Route::get('/data-menu-tentang/tambah',['as'=>'admin-tentang-tambah','uses'=>'Admin\ProfilController@tambahTentang']);
	Route::get('/data-menu-tentang/edit/{id}',['as'=>'admin-tentang-edit','uses'=>'Admin\ProfilController@editTentang']);
	Route::get('/data-menu-akademik',['as'=>'admin-data-akademik','uses'=>'Admin\ProfilController@akademik']);
	Route::get('/data-menu-akademik/tambah',['as'=>'admin-akademik-tambah','uses'=>'Admin\ProfilController@tambahAkademik']);
	Route::get('/data-menu-akademik/edit/{id}',['as'=>'admin-akademik-edt','uses'=>'Admin\ProfilController@editAkademik']);
	Route::get('/data-menu-informasi',['as'=>'admin-data-informasi','uses'=>'Admin\ProfilController@informasiPublik']);
	Route::get('/data-menu-informasi/tambah',['as'=>'admin-informasi-tambah','uses'=>'Admin\ProfilController@tambahInformasiPublik']);
	Route::get('/data-menu-informasi/edit/{id}',['as'=>'admin-informasi-edit','uses'=>'Admin\ProfilController@editInformasiPublik']);
	Route::get('/data-menu-penelitian',['as'=>'admin-data-penelitian','uses'=>'Admin\ProfilController@penelitian']);
	Route::get('/data-menu-penelitian/tambah',['as'=>'admin-penelitian-tambah','uses'=>'Admin\ProfilController@tambahPenelitian']);
	Route::get('/data-menu-penelitian/edit/{id}',['as'=>'admin-penelitian-edit','uses'=>'Admin\ProfilController@editPenelitian']);
	Route::get('/data-menu-kerja-sama',['as'=>'admin-data-kerja-sama','uses'=>'Admin\ProfilController@kerjaSama']);
	Route::get('/data-menu-kerja-sama/tambah',['as'=>'admin-kerja-sama-tambah','uses'=>'Admin\ProfilController@tambahKerjaSama']);
	Route::get('/data-menu-kerja-sama/edit/{id}',['as'=>'admin-kerja-sama-edit','uses'=>'Admin\ProfilController@editKerjaSama']);
	Route::get('/data-menu-prodi',['as'=>'admin-data-prodi','uses'=>'Admin\ProfilController@prodi']);
	Route::get('/data-menu-prodi/tambah',['as'=>'admin-prodi-tambah','uses'=>'Admin\ProfilController@tambahProdi']);
	Route::get('/data-menu-prodi/edit/{id}',['as'=>'admin-prodi-edit','uses'=>'Admin\ProfilController@editProdi']);
	Route::get('/data-menu-mahasiswa-alumni',['as'=>'admin-data-mahasiswa-alumni','uses'=>'Admin\ProfilController@mahasiswa']);
	Route::get('/data-menu-mahasiswa-alumni/tambah',['as'=>'admin-mahasiswa-alumni-tambah','uses'=>'Admin\ProfilController@tambahMahasiswa']);
	Route::get('/data-menu-mahasiswa-alumni/edit/{id}',['as'=>'admin-mahasiswa-alumni-edit','uses'=>'Admin\ProfilController@editMahasiswa']);
	Route::get('/data-menu-lembaga',['as'=>'admin-data-lembaga','uses'=>'Admin\ProfilController@lembaga']);
	Route::get('/data-menu-lembaga/tambah',['as'=>'admin-lembaga-tambah','uses'=>'Admin\ProfilController@tambahLembaga']);
	Route::get('/data-menu-lembaga/edit/{id}',['as'=>'admin-lembaga-tambah','uses'=>'Admin\ProfilController@editLembaga']);
	Route::get('/data-menu-pendaftaran',['as'=>'admin-data-pendaftaran','uses'=>'Admin\ProfilController@pendaftaran']);
	Route::get('/data-menu-pendaftaran/tambah',['as'=>'admin-pendaftaran-tambah','uses'=>'Admin\ProfilController@tambahPendaftaran']);
	Route::get('/data-menu-pendaftaran/edit/{id}',['as'=>'admin-pendaftaran-tambah','uses'=>'Admin\ProfilController@editPendaftaran']);
	Route::get('/profil/{menu}/delete/{id}',['as'=>'admin-profil-delete','uses'=>'Admin\ProfilController@delete']);
	Route::post('/profil/save',['as'=>'admin-profil-save','uses'=>'Admin\ProfilController@save']);
	// END PROFIL //

	// DOKUMEN //
	Route::get('/dokumen-peraturan',['as'=>'admin-data-dokumen','uses'=>'Admin\DokumenController@dokumen']);
	Route::get('/dokumen-peraturan/tambah',['as'=>'admin-form-dokumen','uses'=>'Admin\DokumenController@tambahDokumen']);
	Route::get('/dokumen-peraturan/edit/{id}',['as'=>'admin-edit-dokumen','uses'=>'Admin\DokumenController@editDokumen']);
	Route::get('/dokumen/delete/{id}',['as'=>'admin-delete-dokumen','uses'=>'Admin\DokumenController@delete']);
	Route::post('/dokumen/save',['as'=>'admin-save-dokumen','uses'=>'Admin\DokumenController@save']);
	// END DOKUMEN //

	// MAJALAH //
	Route::get('/data-majalah',['as'=>'admin-data-majalah','uses'=>'Admin\MajalahController@majalah']);
	Route::get('/data-majalah/tambah',['as'=>'admin-majalah-tambah','uses'=>'Admin\MajalahController@tambahMajalah']);
	Route::get('/data-majalah/edit/{id}',['as'=>'admin-majalah-edit','uses'=>'Admin\MajalahController@editMajalah']);
	Route::get('/majalah/delete/{id}',['as'=>'admin-majalah-delete','uses'=>'Admin\MajalahController@delete']);
	Route::post('/majalah/save',['as'=>'admin-majalah-save','uses'=>'Admin\MajalahController@save']);
	// END MAJALAH //

	// KONTEN //
	Route::get('/data-kegiatan',['as'=>'admin-data-kegiatan','uses'=>'Admin\KontenController@kegiatan']);
	Route::get('/data-kegiatan/tambah',['as'=>'admin-kegiatan-edit','uses'=>'Admin\KontenController@tambahKegiatan']);
	Route::get('/data-kegiatan/edit/{id}',['as'=>'admin-kegiatan-edit','uses'=>'Admin\KontenController@editKegiatan']);
	Route::get('/data-berita',['as'=>'admin-data-berita','uses'=>'Admin\KontenController@berita']);
	Route::get('/data-berita/tambah',['as'=>'admin-berita-tambah','uses'=>'Admin\KontenController@tambahBerita']);
	Route::get('/data-berita/edit/{id}',['as'=>'admin-berita-edit','uses'=>'Admin\KontenController@editBerita']);
	Route::get('/data-pengumuman',['as'=>'admin-data-pengumuman','uses'=>'Admin\KontenController@pengumuman']);
	Route::get('/data-pengumuman/tambah',['as'=>'admin-pengumuman-tambah','uses'=>'Admin\KontenController@tambahPengumuman']);
	Route::get('/data-pengumuman/edit/{id}',['as'=>'admin-pengumuman-edit','uses'=>'Admin\KontenController@editPengumuman']);
	Route::get('/konten/{ktg}/delete/{id}',['as'=>'admin-delete-konten','uses'=>'Admin\KontenController@delete']);
	Route::post('/konten/save',['as'=>'admin-save-konten','uses'=>'Admin\KontenController@save']);
	// END KONTEN //

	// VIDEO //
	Route::get('/data-video',['as'=>'admin-data-video','uses'=>'Admin\VideoController@video']);
	Route::get('/data-video/tambah',['as'=>'admin-video-tambah','uses'=>'Admin\VideoController@tambahVideo']);
	Route::get('/data-video/edit/{id}',['as'=>'admin-video-edit','uses'=>'Admin\VideoController@editVideo']);
	Route::get('/video/delete/{id}',['as'=>'admin-video-delete','uses'=>'Admin\VideoController@delete']);
	Route::post('/video/save',['as'=>'admin-video-save','uses'=>'Admin\VideoController@save']);
	// END VIDEO //

	// LINK TERKAIT //
	Route::get('/link-jurnal',['as'=>'admin-link-jurnal','uses'=>'Admin\LinkTerkaitController@jurnal']);
	Route::get('/link-jurnal/tambah',['as'=>'admin-jurnal-tambah','uses'=>'Admin\LinkTerkaitController@tambahJurnal']);
	Route::get('/link-jurnal/edit/{id}',['as'=>'admin-jurnal-edit','uses'=>'Admin\LinkTerkaitController@editJurnal']);
	Route::get('/link-alumni',['as'=>'admin-link-alumni','uses'=>'Admin\LinkTerkaitController@alumni']);
	Route::get('/link-alumni/tambah',['as'=>'admin-alumni-tambah','uses'=>'Admin\LinkTerkaitController@tambahAlumni']);
	Route::get('/link-alumni/edit/{id}',['as'=>'admin-alumni-edit','uses'=>'Admin\LinkTerkaitController@editAlumni']);
	Route::get('/link-kepegawaian',['as'=>'admin-link-kepegawaian','uses'=>'Admin\LinkTerkaitController@kepegawaian']);
	Route::get('/link-kepegawaian/tambah',['as'=>'admin-kepegawaian-tambah','uses'=>'Admin\LinkTerkaitController@tambahKepegawaian']);
	Route::get('/link-kepegawaian/edit/{id}',['as'=>'admin-kepegawaian-edit','uses'=>'Admin\LinkTerkaitController@editKepegawaian']);
	Route::get('/link-informasi-publik',['as'=>'admin-link-kepegawaian','uses'=>'Admin\LinkTerkaitController@informasiPublik']);
	Route::get('/link-informasi-publik/tambah',['as'=>'admin-informasi-publik-tambah','uses'=>'Admin\LinkTerkaitController@tambahInformasiPublik']);
	Route::get('/link-informasi-publik/edit/{id}',['as'=>'admin-informasi-publik-edit','uses'=>'Admin\LinkTerkaitController@editInformasiPublik']);
	Route::get('/link-lainnya',['as'=>'admin-link-lainnya','uses'=>'Admin\LinkTerkaitController@lainnya']);
	Route::get('/link-lainnya/tambah',['as'=>'admin-lainnya-tambah','uses'=>'Admin\LinkTerkaitController@tambahLainnya']);
	Route::get('/link-lainnya/edit/{id}',['as'=>'admin-lainnya-edit','uses'=>'Admin\LinkTerkaitController@editLainnya']);
	Route::get('/link-pendaftaran',['as'=>'admin-link-pendaftaran','uses'=>'Admin\LinkTerkaitController@pendaftaran']);
	Route::get('/link-pendaftaran/tambah',['as'=>'admin-pendaftaran-tambah','uses'=>'Admin\LinkTerkaitController@tambahPendaftaran']);
	Route::get('/link-pendaftaran/edit/{id}',['as'=>'admin-pendaftaran-edit','uses'=>'Admin\LinkTerkaitController@editPendaftaran']);
	Route::get('/link-perencanaan',['as'=>'admin-link-pendaftaran','uses'=>'Admin\LinkTerkaitController@perencanaan']);
	Route::get('/link-perencanaan/tambah',['as'=>'admin-perencanaan-tambah','uses'=>'Admin\LinkTerkaitController@tambahPerencanaan']);
	Route::get('/link-perencanaan/edit/{id}',['as'=>'admin-perencanaan-edit','uses'=>'Admin\LinkTerkaitController@editPerencanaan']);
	Route::get('/link-akademik',['as'=>'admin-link-pendaftaran','uses'=>'Admin\LinkTerkaitController@akademik']);
	Route::get('/link-akademik/tambah',['as'=>'admin-akademik-tambah','uses'=>'Admin\LinkTerkaitController@tambahAkademik']);
	Route::get('/link-akademik/edit/{id}',['as'=>'admin-akademik-edit','uses'=>'Admin\LinkTerkaitController@editAkademik']);
	Route::get('/link/{ktg}/delete/{id}',['as'=>'admin-link-delete','uses'=>'Admin\LinkTerkaitController@delete']);
	Route::post('/link/save',['as'=>'admin-link-save','uses'=>'Admin\LinkTerkaitController@save']);
	// END LINK TERKAIT

	// INFO FOOTER //
	Route::get('/info-footer/alamat',['as'=>'info-footer-alamat','uses'=>'Admin\InfoFooterController@infoAlamat']);
	Route::get('/info-footer/alamat/tambah',['as'=>'info-footer-alamat-tambah','uses'=>'Admin\InfoFooterController@tambahInfoAlamat']);
	Route::get('/info-footer/alamat/edit/{id}',['as'=>'info-alamat-edit','uses'=>'Admin\InfoFooterController@editInfoAlamat']);
	Route::get('/info-footer/tautan',['as'=>'info-footer-alamat','uses'=>'Admin\InfoFooterController@infoTautan']);
	Route::get('/info-footer/tautan/tambah',['as'=>'info-footer-alamat-tambah','uses'=>'Admin\InfoFooterController@tambahInfoTautan']);
	Route::get('/info-footer/tautan/edit/{id}',['as'=>'info-alamat-edit','uses'=>'Admin\InfoFooterController@editInfoTautan']);
	Route::get('/info-footer/sosmed',['as'=>'info-footer-alamat','uses'=>'Admin\InfoFooterController@infoSosmed']);
	Route::get('/info-footer/sosmed/tambah',['as'=>'info-footer-alamat-tambah','uses'=>'Admin\InfoFooterController@tambahInfoSosmed']);
	Route::get('/info-footer/sosmed/edit/{id}',['as'=>'info-alamat-edit','uses'=>'Admin\InfoFooterController@editInfoSosmed']);
	Route::get('/info-footer/{ktg}/delete/{id}',['as'=>'info-footer-delete','uses'=>'Admin\InfoFooterController@delete']);
	Route::post('/info-footer/save',['as'=>'info-footer-save','uses'=>'Admin\InfoFooterController@save']);
	// END INFO FOOTER //

	// DATA USER //
	Route::get('/users',['as'=>'admin-data-users','uses'=>'Admin\UsersController@users']);
	Route::get('/users/tambah',['as'=>'admin-data-users','uses'=>'Admin\UsersController@tambahUsers']);
	Route::get('/users/edit/{id}',['as'=>'admin-data-users','uses'=>'Admin\UsersController@editUsers']);
	Route::get('/users/status-akun/{id}',['as'=>'admin-data-users','uses'=>'Admin\UsersController@statusAkun']);
	Route::get('/users/delete/{id}',['as'=>'admin-data-users','uses'=>'Admin\UsersController@delete']);
	Route::post('/users/save',['as'=>'admin-data-users','uses'=>'Admin\UsersController@save']);
	// END DATA USER //

	// UBAH PROFIl //
	Route::get('/ubah-profile',['as'=>'admin-ubah-profile','uses'=>'Admin\DashboardController@settings']);
	Route::post('/ubah/save',['as'=>'admin-save-profile','uses'=>'Admin\DashboardController@updateProfile']);
	// END UBAH PROFIL //
});

Route::group(['prefix'=>'petugas','middleware'=>'isPetugas'],function(){
	Route::get('/dashboard',['as'=>'petugas-dashboard','uses'=>'Petugas\DashboardController@dashboard']);

	// DOKUMEN //
	Route::get('/dokumen-peraturan',['as'=>'petugas-data-dokumen','uses'=>'Petugas\DokumenController@dokumen']);
	Route::get('/dokumen-peraturan/tambah',['as'=>'petugas-form-dokumen','uses'=>'Petugas\DokumenController@tambahDokumen']);
	Route::get('/dokumen-peraturan/edit/{id}',['as'=>'petugas-edit-dokumen','uses'=>'Petugas\DokumenController@editDokumen']);
	Route::get('/dokumen/delete/{id}',['as'=>'petugas-delete-dokumen','uses'=>'Petugas\DokumenController@delete']);
	Route::post('/dokumen/save',['as'=>'petugas-save-dokumen','uses'=>'Petugas\DokumenController@save']);
	// END DOKUMEN //

	// MAJALAH //
	Route::get('/data-majalah',['as'=>'petugas-data-majalah','uses'=>'Petugas\MajalahController@majalah']);
	Route::get('/data-majalah/tambah',['as'=>'petugas-majalah-tambah','uses'=>'Petugas\MajalahController@tambahMajalah']);
	Route::get('/data-majalah/edit/{id}',['as'=>'petugas-majalah-edit','uses'=>'Petugas\MajalahController@editMajalah']);
	Route::get('/majalah/delete/{id}',['as'=>'petugas-majalah-delete','uses'=>'Petugas\MajalahController@delete']);
	Route::post('/majalah/save',['as'=>'petugas-majalah-save','uses'=>'Petugas\MajalahController@save']);
	// END MAJALAH //

	// KONTEN //
	Route::get('/data-kegiatan',['as'=>'petugas-data-kegiatan','uses'=>'Petugas\KontenController@kegiatan']);
	Route::get('/data-kegiatan/tambah',['as'=>'petugas-kegiatan-edit','uses'=>'Petugas\KontenController@tambahKegiatan']);
	Route::get('/data-kegiatan/edit/{id}',['as'=>'petugas-kegiatan-edit','uses'=>'Petugas\KontenController@editKegiatan']);
	Route::get('/data-berita',['as'=>'petugas-data-berita','uses'=>'Petugas\KontenController@berita']);
	Route::get('/data-berita/tambah',['as'=>'petugas-berita-tambah','uses'=>'Petugas\KontenController@tambahBerita']);
	Route::get('/data-berita/edit/{id}',['as'=>'petugas-berita-edit','uses'=>'Petugas\KontenController@editBerita']);
	Route::get('/data-pengumuman',['as'=>'petugas-data-pengumuman','uses'=>'Petugas\KontenController@pengumuman']);
	Route::get('/data-pengumuman/tambah',['as'=>'petugas-pengumuman-tambah','uses'=>'Petugas\KontenController@tambahPengumuman']);
	Route::get('/data-pengumuman/edit/{id}',['as'=>'petugas-pengumuman-edit','uses'=>'Petugas\KontenController@editPengumuman']);
	Route::get('/konten/{ktg}/delete/{id}',['as'=>'petugas-delete-konten','uses'=>'Petugas\KontenController@delete']);
	Route::post('/konten/save',['as'=>'petugas-save-konten','uses'=>'Petugas\KontenController@save']);
	// END KONTEN //

	// VIDEO //
	Route::get('/data-video',['as'=>'petugas-data-video','uses'=>'Petugas\VideoController@video']);
	Route::get('/data-video/tambah',['as'=>'petugas-video-tambah','uses'=>'Petugas\VideoController@tambahVideo']);
	Route::get('/data-video/edit/{id}',['as'=>'petugas-video-edit','uses'=>'Petugas\VideoController@editVideo']);
	Route::get('/video/delete/{id}',['as'=>'petugas-video-delete','uses'=>'Petugas\VideoController@delete']);
	Route::post('/video/save',['as'=>'petugas-video-save','uses'=>'Petugas\VideoController@save']);
	// END VIDEO //

	// LINK TERKAIT //
	Route::get('/link-jurnal',['as'=>'petugas-link-jurnal','uses'=>'Petugas\LinkTerkaitController@jurnal']);
	Route::get('/link-jurnal/tambah',['as'=>'petugas-jurnal-tambah','uses'=>'Petugas\LinkTerkaitController@tambahJurnal']);
	Route::get('/link-jurnal/edit/{id}',['as'=>'petugas-jurnal-edit','uses'=>'Petugas\LinkTerkaitController@editJurnal']);
	Route::get('/link-alumni',['as'=>'petugas-link-alumni','uses'=>'Petugas\LinkTerkaitController@alumni']);
	Route::get('/link-alumni/tambah',['as'=>'petugas-alumni-tambah','uses'=>'Petugas\LinkTerkaitController@tambahAlumni']);
	Route::get('/link-alumni/edit/{id}',['as'=>'petugas-alumni-edit','uses'=>'Petugas\LinkTerkaitController@editAlumni']);
	Route::get('/link-kepegawaian',['as'=>'petugas-link-kepegawaian','uses'=>'Petugas\LinkTerkaitController@kepegawaian']);
	Route::get('/link-kepegawaian/tambah',['as'=>'petugas-kepegawaian-tambah','uses'=>'Petugas\LinkTerkaitController@tambahKepegawaian']);
	Route::get('/link-kepegawaian/edit/{id}',['as'=>'petugas-kepegawaian-edit','uses'=>'Petugas\LinkTerkaitController@editKepegawaian']);
	Route::get('/link-informasi-publik',['as'=>'petugas-link-kepegawaian','uses'=>'Petugas\LinkTerkaitController@informasiPublik']);
	Route::get('/link-informasi-publik/tambah',['as'=>'petugas-informasi-publik-tambah','uses'=>'Petugas\LinkTerkaitController@tambahInformasiPublik']);
	Route::get('/link-informasi-publik/edit/{id}',['as'=>'petugas-informasi-publik-edit','uses'=>'Petugas\LinkTerkaitController@editInformasiPublik']);
	Route::get('/link-lainnya',['as'=>'petugas-link-lainnya','uses'=>'Petugas\LinkTerkaitController@lainnya']);
	Route::get('/link-lainnya/tambah',['as'=>'petugas-lainnya-tambah','uses'=>'Petugas\LinkTerkaitController@tambahLainnya']);
	Route::get('/link-lainnya/edit/{id}',['as'=>'petugas-lainnya-edit','uses'=>'Petugas\LinkTerkaitController@editLainnya']);
	Route::get('/link-pendaftaran',['as'=>'petugas-link-pendaftaran','uses'=>'Petugas\LinkTerkaitController@pendaftaran']);
	Route::get('/link-pendaftaran/tambah',['as'=>'petugas-pendaftaran-tambah','uses'=>'Petugas\LinkTerkaitController@tambahPendaftaran']);
	Route::get('/link-pendaftaran/edit/{id}',['as'=>'petugas-pendaftaran-edit','uses'=>'Petugas\LinkTerkaitController@editPendaftaran']);
	Route::get('/link-perencanaan',['as'=>'petugas-link-pendaftaran','uses'=>'Petugas\LinkTerkaitController@perencanaan']);
	Route::get('/link-perencanaan/tambah',['as'=>'petugas-perencanaan-tambah','uses'=>'Petugas\LinkTerkaitController@tambahPerencanaan']);
	Route::get('/link-perencanaan/edit/{id}',['as'=>'petugas-perencanaan-edit','uses'=>'Petugas\LinkTerkaitController@editPerencanaan']);
	Route::get('/link-akademik',['as'=>'petugas-link-pendaftaran','uses'=>'Petugas\LinkTerkaitController@akademik']);
	Route::get('/link-akademik/tambah',['as'=>'petugas-akademik-tambah','uses'=>'Petugas\LinkTerkaitController@tambahAkademik']);
	Route::get('/link-akademik/edit/{id}',['as'=>'petugas-akademik-edit','uses'=>'Petugas\LinkTerkaitController@editAkademik']);
	Route::get('/link/{ktg}/delete/{id}',['as'=>'petugas-link-delete','uses'=>'Petugas\LinkTerkaitController@delete']);
	Route::post('/link/save',['as'=>'petugas-link-save','uses'=>'Petugas\LinkTerkaitController@save']);
	// END LINK TERKAIT

	// UBAH PROFIl //
	Route::get('/ubah-profile',['as'=>'petugas-ubah-profile','uses'=>'Petugas\DashboardController@settings']);
	Route::post('/ubah/save',['as'=>'petugas-save-profile','uses'=>'Petugas\DashboardController@updateProfile']);
	// END UBAH PROFIL //
});
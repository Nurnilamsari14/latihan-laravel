<div>
    ini halaman mahasiswa
</div>

Route::get('/', function () {
    return view('studet,index');
});

Route::get('/student/create', fuction () {
    return view('studet,create');
});
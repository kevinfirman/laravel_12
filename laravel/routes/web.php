<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassRoomController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/a', function () {
    return 1+1;
});


Route::get('/b', function () {
    return view('contact',[
        'NamaSiswa' => 'kevin',
        'Kelas' => '12rplc',
        'Alamat' => 'Cipatik',
        'NoTelp' => '089652254540',
    ]);
});


// Route::get('product/{id}', function ($id) {
//     return 'ini produk dengan id produk :' .$id;
// });

// Route::get('product/{id}', function ($id) {
//     return view('product.detail',[
//         'id' => $id
//     ]
// );
// });

Route::get('product/{id}', function ($id) {
    $produk = [
        [
            'id' => 1,
            'nama_produk' => 'Apple 15 pro',
            'harga' => 100000,
            'stok' => 20
        ],
        [
            'id' => 2,
            'nama_produk' => 'Apple 12 pro',
            'harga' => 100000,
            'stok' => 20
        ],
        [
            'id' => 3,
            'nama_produk' => 'Apple 10 pro',
            'harga' => 100000,
            'stok' => 20
        ]
        ];

        $cari_produk = collect($produk)->where('id',$id)->first();
        return view('product.detail',[
            'data' => $cari_produk
        ]);

});



Route::get('siswa/{nis}', function ($nis) {
    $siswa = [
        [
            'nis' => 10211,
            'nama_siswa' => 'Richard',
            'jurusan' => 'Rpl',
            'tingkat' => 12,
            'eskul'=> 'futsal'
        ],
        [
            'nis' => 10212,
            'nama_siswa' => 'kevin',
            'jurusan' => 'Rpl',
            'tingkat' => 12,
            'eskul'=> 'basket'
        ],
        [
            'nis' => 10213,
            'nama_siswa' => 'ronald',
            'jurusan' => 'Rpl',
            'tingkat' => 12,
            'eskul'=> 'musik'
        ],
        [
            'nis' => 10214,
            'nama_siswa' => 'Dika',
            'jurusan' => 'Rpl',
            'tingkat' => 12,
            'eskul'=> 'voli'

        ],
        [
            'nis' => 10215,
            'nama_siswa' => 'naufhal',
            'jurusan' => 'Rpl',
            'tingkat' => 12,
            'eskul'=> 'voli'
        ],

        ];

        $cari_siswa = collect($siswa)->where('nis',$nis)->first();
        return view('siswa.siswa',[
            'data' => $cari_siswa
        ]);

});



Route::get('/home', function () {

    $siswa = [
        [
            'nis' => 10211,
            'nama_siswa' => 'Richard',
            'jurusan' => 'Rpl',
            'tingkat' => 12,
            'eskul'=> 'futsal'
        ],
        [
            'nis' => 10212,
            'nama_siswa' => 'kevin',
            'jurusan' => 'Rpl',
            'tingkat' => 12,
            'eskul'=> 'basket'
        ],
        [
            'nis' => 10213,
            'nama_siswa' => 'ronald',
            'jurusan' => 'Rpl',
            'tingkat' => 12,
            'eskul'=> 'musik'
        ],
        [
            'nis' => 10214,
            'nama_siswa' => 'Dika',
            'jurusan' => 'Rpl',
            'tingkat' => 12,
            'eskul'=> 'voli'

        ],
        [
            'nis' => 10215,
            'nama_siswa' => 'naufhal',
            'jurusan' => 'Rpl',
            'tingkat' => 12,
            'eskul'=> 'voli'
        ],

        ];

    return view('home',[
        'nama' => 'kevin sanjaya',
        'role' => 'admin',
        'data' => $siswa
    ]);
});



//membuat route /studnt untuk memeanggil funcion index
Route::get('/student', [StudentController::class,'index']);

Route::get('/class', [ClassRoomController::class,'index']);




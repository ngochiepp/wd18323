<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    $books_max = DB::table('books')
            ->orderBy('price', 'desc')
            ->limit(8)
            ->get();
    $books_min =  DB::table('books')
    ->orderBy('price', 'asc')
    ->limit(8)
    ->get();
    
    return view('home', compact('books_max', 'books_min')
);

});

Route::get('/detail/{id}', function ($id) {
    $books = DB::table('books')
        ->where('id', $id)
        ->first();

    return view('detail', compact('books'));
})->name('detail');
Route::get('books/{cate_id}', function ($cate_id) {
    $books = DB::table('books')
        ->where('category_id', '=', $cate_id)
        ->get();
// dd($books);
    return view('bookbycate', compact('books'));
})->name('book-cate');
// Route::get('/about', function () {
//     return view('about');
// });

Route::view('/about', 'about')->name('page.about');
Route::get('/user', function () {
    return  "List users";
});
Route::get('/user/{id}', function (int $id,) {
    return  "User id: $id";
});
Route::get('/user/{id}/comment/{comment_id}', function ($id, $comment_id) {
    return  "User id: $id - comment_id: $comment_id";
});
///Nhóm đường dẫn theo tiền tố 
Route::prefix('admin')->group(function () {
    Route::get('product', function () {
        echo 'product';
    });
    Route::get('user', function () {
        echo 'user';
    });
});
// Route::get('admin/product',function(){

// });
// Route::get('admin/user',function(){

// });
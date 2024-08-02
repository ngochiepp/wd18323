<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\CheckTokenMiddleware;
use App\Http\Middleware\LoginMiddleware;
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

// Route::get('/', function () {
//     $books_max = DB::table('books')
//             ->orderBy('price', 'desc')
//             ->limit(8)
//             ->get();
//     $books_min =  DB::table('books')
//     ->orderBy('price', 'asc')
//     ->limit(8)
//     ->get();
    
//     return view('home', compact('books_max', 'books_min')
// );

// });

// Route::get('/detail/{id}', function ($id) {
//     $books = DB::table('books')
//         ->where('id', $id)
//         ->first();

//     return view('detail', compact('books'));
// })->name('detail');
// Route::get('books/{cate_id}', function ($cate_id) {
//     $books = DB::table('books')
//         ->where('category_id', '=', $cate_id)
//         ->get();
// // dd($books);
//     return view('bookbycate', compact('books'));
// })->name('book-cate');
// Route::get('/about', function () {
//     return view('about');
// // });
// Route::get('/index', [BookController::class, 'index'])->name('book.index');
// Route::get('/create', [BookController::class, 'create'])->name('book.create');
// Route::post('/create', [BookController::class, 'store'])->name('book.store');
// Route::get('/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
// Route::put('/edit/{id}', [BookController::class, 'update'])->name('book.update');
// Route::delete('/delete/{id}', [BookController::class, 'destroy'])->name('book.destroy');





// Route::prefix('category')->group(function(){
//     Route::get('/list',[CategoryController::class,'index']) ->name('category.index');
// });

// Route::view('/about', 'about')->name('page.about');
// Route::get('/user', function () {
//     return  "List users";
// });
// Route::get('/user/{id}', function (int $id,) {
//     return  "User id: $id";
// });
// Route::get('/user/{id}/comment/{comment_id}', function ($id, $comment_id) {
//     return  "User id: $id - comment_id: $comment_id";
// });
///Nhóm đường dẫn theo tiền tố 
// Route::prefix('admin')->group(function () {
//     Route::get('product', function () {
//         echo 'product';
//     });
//     Route::get('user', function () {
//         echo 'user';
//     });
// });
// Route::get('admin/product',function(){

// });
// Route::get('admin/user',function(){

// });

// Route::get('/test', [PostController::class, 'test']);
// Route::get('/posts', [PostController::class, 'index'])->name('post.index');
// Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
// Route::post('/posts/create', [PostController::class, 'store'])->name('post.store');
// Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('post.edit');
// Route::put('/posts/edit/{post}', [PostController::class, 'update'])->name('post.update');
// Route::delete('/posts/delete/{post}', [PostController::class, 'destroy'])->name('post.destroy');

// Route::get('/', function(){
//     return view('welcome');
// })->middleware('checkToken');

Route::get('home', [LoginController::class, 'home'])->name('home');
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'submitlogin'])->name('submitlogin');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register', [LoginController::class, 'submitregister'])->name('submitregister');
Route::put('update/{user}', [LoginController::class, 'update'])->name('update');

Route::middleware(LoginMiddleware::class)->get('home', [LoginController::class, 'home'])->name('home');
Route::middleware(LoginMiddleware::class)->get('listUser/{user}', [LoginController::class, 'listUser'])->name('listUser');
Route::middleware(LoginMiddleware::class)->get('onAccount/{user}', [LoginController::class, 'onAccount'])->name('onAccount');
Route::middleware(LoginMiddleware::class)->get('offAccount/{user}', [LoginController::class, 'offAccount'])->name('offAccount');








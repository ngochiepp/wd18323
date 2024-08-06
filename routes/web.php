<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\ASM\MangaController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SendMailController;
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

//senmail
// Route::get('sendmail', [SendMailController::class, 'sendMail']);

Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return view('index');
    });
    Route::get('client', [MangaController::class, 'index'])->name('/');
    Route::get('admin', [LoginController::class, 'submitlogon'])->name('admin.submitlogin');
});


Route::get('/', [LoginController::class, 'formLogin'])->name('submitlogin');
Route::get('login', [LoginController::class, 'login'])->name('login'); 
Route::post('submitlogin', [LoginController::class, 'submitlogin'])->name('submitlogin'); 

Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('submitregister', [LoginController::class, 'submitregister'])->name('submitregister');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');;
Route::middleware(Loginmiddleware::class)->group(function () {
    // admin
    Route::get('account', [LoginController::class, 'account'])->name('admin.account');
    Route::get('listUser/{user}', [LoginController::class, 'listUser'])->name('admin.listUser');
    Route::get('onAccount/{user}', [LoginController::class, 'onAccount'])->name('admin.onAccount');
    Route::get('offAccount/{user}', [LoginController::class, 'offAccount'])->name('admin.offAccount');
    Route::put('update/{user}', [LoginController::class, 'update'])->name('admin.update');
    Route::get('formUpdatePassword/{user}', [LoginController::class, 'formUpdatePassword'])->name('admin.formUpdatePassword');
    Route::put('updatePassword', [LoginController::class, 'updatePassword'])->name('admin.updatePassword');
    Route::delete('deleteUser/{user}', [LoginController::class, 'deleteUser'])->name('admin.deleteUser');

    // danh mục
    Route::get('categories', [MangaController::class, 'categories'])->name('admin.categories');
    Route::get('cateFormUpdate/{cate}', [MangaController::class, 'cateFormUpdate'])->name('admin.cateFormUpdate');
    Route::put('cateUpdate/{cate}', [MangaController::class, 'cateUpdate'])->name('admin.cateUpdate');
    Route::get('cateFormAdd', [MangaController::class, 'cateFormAdd'])->name('admin.cateFormAdd');
    Route::post('cateAdd', [MangaController::class, 'cateAdd'])->name('admin.cateAdd');
    Route::delete('cateDelete/{cate}', [MangaController::class, 'cateDelete'])->name('admin.cateDelete');

    // sản phẩm
    Route::get('products', [MangaController::class, 'productsAdmin'])->name('admin.productsAdmin');
    Route::get('prdFormUpdate/{clo}', [MangaController::class, 'prdFormUpdate'])->name('admin.prdFormUpdate');
    Route::put('prdUpdate/{clo}', [MangaController::class, 'prdUpdate'])->name('admin.prdUpdate');
    Route::get('prdFormAdd', [MangaController::class, 'prdFormAdd'])->name('admin.prdFormAdd');
    Route::post('prdAdd', [MangaController::class, 'prdAdd'])->name('admin.prdAdd');
    Route::delete('prdDelete/{clo}', [MangaController::class, 'prdDelete'])->name('admin.prdDelete');
});

Route::get('/', function () {
    return view('welcome');
})->middleware('checkToken');

// Route::get('home', [LoginController::class, 'home'])->name('home');
// Route::get('login', [LoginController::class, 'login'])->name('login');
// Route::post('login', [LoginController::class, 'submitlogin'])->name('submitlogin');
// Route::post('logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('register', [LoginController::class, 'register'])->name('register');
// Route::post('register', [LoginController::class, 'submitregister'])->name('submitregister');
// Route::put('update/{user}', [LoginController::class, 'update'])->name('update');

// Route::middleware(LoginMiddleware::class)->get('home', [LoginController::class, 'home'])->name('home');
// Route::middleware(LoginMiddleware::class)->get('listUser/{user}', [LoginController::class, 'listUser'])->name('listUser');
// Route::middleware(LoginMiddleware::class)->get('onAccount/{user}', [LoginController::class, 'onAccount'])->name('onAccount');
// Route::middleware(LoginMiddleware::class)->get('offAccount/{user}', [LoginController::class, 'offAccount'])->name('offAccount');

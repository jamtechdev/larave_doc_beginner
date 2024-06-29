    <?php

    use App\Http\Controllers\StudentController;
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
    // Nomrmal route
    Route::get('/', function () {
        return view('welcome');
    });

    // Route::get('/about', function () {
    //     return view('About');
    // });

    // Route::get('/test', function () {
    //     return view('test',);
    // });
    // option route
    // Route::get('/option/{id?}', function (string $id = null) {
    //     return view('OptionalRoute', ['id' => $id]);
    // });
    // multi as parameter 
    // Route::get('/multi/{id}/comment/{name}', function (string $id, string $name) {
    //     return view('multileParameter', ['id' => $id, 'name' => $name]);
    // });

    // laravel Route constraints

    // Route::get('/test/{id}', function (string $id) {
    //     return view('test', ['id' => $id]);
    // })->whereIn('id', ['movie', 'news', 'politics']);

    //  
    // Route::get('/', function () {
    //     return view('welcome');
    // })->name('home');
    // Route::get('/about', function () {
    //     return view('About');
    // })->name('about');
    // Route::get('/test', function () {
    //     return view('test');
    // })->name('test');

    // redirect route
    // 301 for permanent redirect
    // Route::redirect('/about', "/test");

    // Route group
    // Route::prefix("admin")->group(function () {
    //     Route::get("/", function () {
    //         return view('welcome');
    //     });
    //     Route::get("about", function () {
    //         return view('About');
    //     });
    // });
    // Name Route

    Route::prefix("admin")->group(function () {
        Route::get("/", function () {
            return view('Pages.Login');
        })->name('admin');
        Route::get("dashboard", [StudentController::class, 'showUser'])->name('dashboard');
        Route::get("profile/{id}", [StudentController::class, 'showUserProfile'])->name('profile');
        Route::get("about", function () {
            return view('pages.about');
        })->name('about');

        Route::get("test", function () {
            return view('pages.test');
        })->name('test');
    });

    // not found route
    Route::fallback(function () {
        return ("<h1>Page Not found</h1>");
    });

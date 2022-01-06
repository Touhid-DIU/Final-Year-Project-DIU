<?php

use Illuminate\Support\Facades\Route;

// import all component files...
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\BookitemsComponent;
use App\Http\Livewire\BookingComponent;
use App\Http\Livewire\RouteComponent;
use App\Http\Livewire\ScheduleComponent;
use App\Http\Livewire\DriverlistComponent;
use App\Http\Livewire\VisitingcarComponent;
use App\Http\Livewire\FoodcourtComponent;
use App\Http\Livewire\GreengardenComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CricketComponent;
use App\Http\Livewire\VolleyballComponent;
use App\Http\Livewire\GolfComponent;
use App\Http\Livewire\BonomayaComponent;
use App\Http\Livewire\AnisulhaqComponent;
use App\Http\Livewire\AuditoriumComponent;
use App\Http\Livewire\ExplorelabComponent;
use App\Http\Livewire\VisitPermissionComponent;
use App\Http\Livewire\SlotBookingComponent;
use App\Http\Livewire\user\UserDashboardComponent;
use App\Http\Livewire\admin\AdminDashboardComponent;
use App\Http\Livewire\admin\AdminAddCategoryComponent;
use App\Http\Livewire\admin\AdminEditCategoryComponent;
use App\Http\Livewire\admin\AdminAddProductComponent;
use App\Http\Livewire\admin\AdminEditProductComponent;
use App\Http\Livewire\admin\pages\AdminCricketComponent;
use App\Http\Livewire\admin\pages\AdminBooksItemsComponent;


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


// For layouts pages....

Route::get('/', HomeComponent::class);
Route::get('/about', AboutComponent::class);
Route::get('/contact', ContactComponent::class);
Route::get('/book/items', BookitemsComponent::class);
Route::get('/route', RouteComponent::class);
Route::get('/schedule', ScheduleComponent::class);
Route::get('/driver/list', DriverlistComponent::class);
Route::get('/visiting/car', VisitingcarComponent::class);
Route::get('/food/court', FoodcourtComponent::class);
Route::get('/green/garden', GreengardenComponent::class);
Route::get('/cricket/football', CricketComponent::class);
Route::get('/basketball', VolleyballComponent::class);
Route::get('/golf', GolfComponent::class);
Route::get('/bonomaya', BonomayaComponent::class);
Route::get('/anisulhaq', AnisulhaqComponent::class);
Route::get('/auditorium', AuditoriumComponent::class);

Route::get('/explore/lab', ExplorelabComponent::class);
Route::get('/visiting/permission', VisitPermissionComponent::class);
Route::get('/booking', BookingComponent::class);
Route::get('/slot/booking', SlotBookingComponent::class)->name('slot.booking');


// for category 

Route::get('/book/category/{category_slug}', CategoryComponent::class)->name('book.category');



// for user
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard', UserDashboardComponent::class )->name('user.dashboard');
});


// for admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/add/category', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/edit/category{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('admin/product/add', AdminAddProductComponent::class )->name('admin.addproduct');
    Route::get('admin/product/edit/{product_slug}', AdminEditProductComponent::class )->name('admin.editproduct');

    // all pages here...
    Route::get('admin/cricket', AdminCricketComponent::class);
    Route::get('admin/bookitems', AdminBooksItemsComponent::class);
});
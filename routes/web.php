<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'pageController@mainfun') ->name('mainpage');


//Route::get('login', 'pageController@loginfun') ->name('loginpage');

Route::get('promotion', 'pageController@promotionfun') ->name('promotionpage');


Route::get('itemdetail/{id}', 'pageController@itemdetailfun') ->name('itemdetailpage');

Route::get('itembybrand/{id}', 'pageController@itembybrand') ->name('itembybrandpage');
Route::get('filteritems', 'pageController@filteritems') ->name('filteritemspage');

Route::get('shoppingcart', 'pageController@shoppingcartfun') ->name('shoppingcartpage');

Route::get('loginform', 'pageController@loginfun') ->name('loginpage');
Route::get('registerform', 'pageController@registerfun') ->name('registerpage');




//Route::get('loginpage', 'pageController@loginfun') ->name('loginpage');
//Route::get('registerpage', 'pageController@registerfun') ->name('registerpage');



//backend 
Route::middleware('role:Admin')->group(function(){


Route::get('brand', 'pageController@brandfun') ->name('brandpage');



Route::get('subcategory', 'pageController@subcategoryfun') ->name('subcategorypage');

});


Route::middleware('role:Admin')->group(function(){



Route::get('dashbord', 'backendController@dashbordfun') ->name('dashbordpage');

Route::resource('items', 'ItemController');
Route::resource('brands', 'BrandController');
Route::resource('categories', 'CategoryController');
Route::resource('subcategories', 'SubcategoryController');

});

Route::resource('orders','OrderController');
    

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

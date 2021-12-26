 <?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\delete;/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("/list",[delete::class,"list"]);  // This Route First Fetch all Data and Show on The Page
Route::get("list{id}",[delete::class,"delete"]); // This Route Will Delete Data When User want delete Them.


Route::get("edit{id}",[delete::class,"showData"]);// open that ID data which want to update
Route::post("boom",[delete::class,"update"]); // updated finished
Route::get("/safe",[delete::class,"install"]); // This Route Provided a Blank Form To Fill Data
Route::POST("/isd",[delete::class,"insert"]); // This Route Will Inserted Data Successfully

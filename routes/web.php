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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/discount',function (){
   return view('calculate_discount') ;
});
Route::get('/result', function (){
    return view('result');
});

Route::post('/discount', function (Illuminate\Http\Request $request){
    $name = $request->hint;
$price = $request->price;
$discount = $request->discount;
$result = ($price * $discount) * 0.1;
$total = $price - $result;
    echo "Name product:". $name."<br>";
    echo "Price:".$price."<br>";
    echo "Discount percent:". $discount."%"."<br>";
    echo "Total discount: ".$result."<br>";
    echo "Product Price after discount:".$total;
    return view('result', compact([$result,$discount,$price]));


});

<?php

use Illuminate\Http\Request;

Route::get('/greeting/{name?}', function ($name = null) {

    if ($name) {

        echo 'Hello ' . $name . '!';

    } else {

        echo 'Hello World!';

    }

});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome_admin');
    }

    return view('login_error');
});
Route::get('/ProductDiscountCalculator', function () {
    return view('ProductDiscountCalculator');

});
Route::post('/viewProductDiscount', function (Illuminate\Http\Request $request) {
    $proDesc = $request->proDesc;
    $listPr = $request->listPr;
    $disPer = $request->disPer;
    $sum = $listPr * $disPer / 100;
    $amount = $disPer - $sum;
    return view('viewProductDiscount', compact('proDesc', 'listPr', 'disPer', 'sum', 'amount'));

});
Route::get('/Dictionary', function () {
    return view('Dictionary');
});
    Route::post('/Dictionary', function (Illuminate\Http\Request $request) {
    $variable = $request->variable;
    $result = '';
    $arrays = ['key' => 'chia khoa',
        'red' => 'mau do',
        'blue' => 'mau xanh',
        'black' => 'mau den'];
    foreach ($arrays as $key => $value) {
        if ($variable == $key) {
            $result = $value;
            break;
        }else{
            $result = "khong tim thay";
        }
    }
    return view('Dictionary',compact('result'));
    })->name('dpost');



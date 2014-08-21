<?php

Route::get('/', function(){
    return Popular::all();

});

Route::get('died', function(){
    $parties = Popular::whereBetween('died', [Input::get('f'), Input::get('t')])->get();
    return $parties;
});
Route::get('born', function(){
    $parties = Popular::whereBetween('born', [Input::get('f'), Input::get('t')])->get();
    return $parties;
});
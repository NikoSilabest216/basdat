<?php
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\PublicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\CssSelector\Node\FunctionNode;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function(){
    Route::prefix('auth')->group(function(){
        Route::post('register',[AuthController::class,'register']);
        Route::post('login',[AuthController::class,'login']);
        Route::post('logout',[AuthController::class,'logout']);
        Route::post('refresh',[AuthController::class,'refresh']);
        Route::post('me',[AuthController::class,'me']);
    });
    Route::middleware('jwt.verify')->group(function(){
        Route::apiResource('author',AuthorController::class,[
            'as'=>'api'
        ]);
    });
    Route::get('public',[PublicController::class,'index']);
});

Route::any('{any}', function () {
    return response()->json([
        'status'=>'error',
        'message'=>'NO DATA'
    ],404);
});

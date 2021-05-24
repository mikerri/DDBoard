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

// 메인
Route::get('/', [App\Http\Controllers\User\MainController::class, 'index'])->name('home');
// 로그인 후 리다이렉트
Route::get('/home', function() {
    return redirect(route('home'));
});

Route::prefix('content')->group(function() {
    // 심플로우 > 소개
    Route::get('introduction', function() {
        return view('user.content.introduction', ['gnb'=>1, 'lnb'=>1]);
    });

    // 심플로우 > 주요기능 > 웨비나 / 발표기능 / 다운플로우 / 업플로우
    Route::get('function{tnb}', function($tnb) {
        return view('user.content.function', ['gnb'=>1, 'lnb'=>2, 'tnb'=>$tnb]);
    });

    // 개인정보취급(처리)방침
    Route::get('privacy', function() {
        return view('user.content.privacy');
    });
    // 이용약관
    Route::get('terms', function() {
        return view('user.content.terms');
    });
});

// 게시판
Route::prefix('board')->group(function() {
    // 활용사례
    Route::get('/use', function() {
        //return view('');
    });
    // 주요사용처

    // 갤러리

    // 공지사항

    // 홍보영상

    // 자주묻는 질문

    // 1:1문의

    // 활용백서
});

// 로그인
Route::get('login', function() {
    return view('auth.login', ['gnb'=>8, 'lnb'=>1]);
})->name('login');
Route::post('login');
// 로그아웃
Route::post('logout')->name('logout');

// 회원가입
Route::get('register', function() {
    return view('auth.register', ['gnb'=>8, 'lnb'=>2]);
})->name('register');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::get('welcome', function() {
    return view('welcome', ['gnb'=>8, 'lnb'=>2]);
})->name('welcome');

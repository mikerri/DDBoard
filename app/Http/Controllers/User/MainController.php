<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // 홈페이지 메인
    public function index()
    {
        return view('user.index');
    }
}

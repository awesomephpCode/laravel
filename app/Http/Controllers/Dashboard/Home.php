<?php

namespace App\Http\Controllers\Dashboard;

use Cookie;
use Grpc\Server;
use Illuminate\Http\Request;
use App\Http\Model\Login as admin;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Psy\Util\Json;

class Home extends Common
{

    public function __construct()
    {
//        dd(session('admin'));
    }

    //登录
    public function index(Request $request)
    {
//        dd(session('admin'));

        return view('home/index');
    }

}

<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;

class Login extends Common
{
    //登录
    public function login(Request $request)
    {
        $return_url = $request->return_url ? $request->return_url : null;
        if ($request->isMethod('post')){
            $input = $request->input();
            $admin = new Admin;
            $res = $admin->where('username',$input['username'])->first();
            if ($res){
               if (password_verify($input['password'],$res->password)){
                   $request->session()->put('admin', $res);

                   if ( isset($return_url)){
                       return redirect($return_url);
                   }
                   return redirect()->route('home');
               }
            }
            return back()->with('msg','用户名或者密码错误');
        }else{
            return view('login/login',['return_url'=>$return_url]);
        }
    }

    //注销
    public function out()
    {
        session(['admin'=>null]);
        return redirect()->route('admin/login');
    }

    //上传头像
    public function upload_avatar(Request $request)
    {
        $path = $request->file('upFile')->store('avatar');
        if ($path){
            $url = config('custom.upload_url').$path;
            $ret['code'] = 0;
            $ret['msg'] = '请求成功';
            $ret['data']['file'] = $url;
            return $ret;
        }
    }

    //修改
    public function modify(Request $request)
    {
        if ($request->isMethod('post')){
            $res = $request->input();
            if ($res['username'] != ""){
                $data['username'] = $res['username'];
            }
            if ($res['password'] != ""){
                $data['password'] = password_hash($res['password'],PASSWORD_DEFAULT);
            }
            $data['avatar']=$res['avatar'];
            $admin = new Admin;
            $result = $admin->where('id',session()->get('admin')->id)->update($data);
            if ($result){
                session(['admin'=>null]);
                return redirect()->route('admin/login');
            }else{
                return back()->with('msg','修改失败');
            }
        }
        return view('login/modify',['avatar' => session()->get('admin')->avatar]);
    }

}

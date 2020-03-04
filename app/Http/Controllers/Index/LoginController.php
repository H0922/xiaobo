<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ykuser;
class LoginController extends Controller
{
    //登录展示页面
    public function loginlist(){
        return view('index/loginlist');
    }
    //登录执行页面
    public function loginins(){
        $name=request()->input('user_name');
        $pwd=request()->input('user_pwd');
        $res=ykuser::where('user_name','=',$name)->first();
        // dd($res['user_pwd']);
        if($res){
            if($res['user_pwd']==$pwd){
                session(['name'=>$name]);
                return redirect('index');
            }else{
                echo '密码不正确请您重新填写,正在为您跳转。。。。。';
                header("refresh:2,url='/");
                die;
               
            }
        }else{
            echo '用户不正确请您重新填写,正在为您跳转。。。。。';
            header("refresh:2,url='/");
            die;
        }
    }
    //注册展示页面
    public function reglist(){
        return view('index/reglist');
    }
    //执行注册页面
    public function regins(){
        $data=request()->input();
        unset($data['_token']);
        if($data['user_pwd']!=$data['user_pwds']){
            echo '两次密码不一致,正在为您跳转。。。。。';
            header("refresh:2,url='index");
            die;
        }
        $tel=preg_match("/^1[34578]{1}\d{9}$/",$data['user_tel']);

        if($tel==''){
            echo '手机号格式错误,正在为您跳转。。。。。';
            header("refresh:2,url='index");
            die;
        }
        $tell=ykuser::where('user_tel','=',$data['user_tel'])->first();
        if($tell){
            echo '手机号已经存在,正在为您跳转。。。。。';
            header("refresh:2,url='index");
            die;
        }
        unset($data['user_pwds']);
        $res=ykuser::insert($data);
        if($res){       
           return redirect('/');
        }
        dd($data);
    }
}

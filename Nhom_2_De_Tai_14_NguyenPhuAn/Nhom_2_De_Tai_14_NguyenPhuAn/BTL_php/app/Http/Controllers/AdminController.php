<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Social;
use Socialite;
use App\Login;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Validator;

class AdminController extends Controller
{
    //
    public function login(){
        return view('adminlogin');
    }

    public function admin_layout(){
        return view('adminlayout');
    }
    // public function AuthLogin(){
    //     $admin_id = Session::get('admin_id');
    //     if($admin_id){
    //         return Redirect::to('dashboard');
    //     }else{
    //         return Redirect::to('admin')->send();
    //     }
    // }

    // public function index(){
    // 	return view('adminlogin');
    // }
    // public function show_dashboard(){
    //     $this->AuthLogin();
    // 	return view('admin.dashboard');
    // }
    // public function dashboard(Request $request){
    //     $admin_email = $request->admin_email;
    //     $admin_password = md5($request->admin_password);
    //     $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
    //     echo '<pre>';
    //     print_r($result);
    //     echo '</pre>';
    // }
    // public function logout(){
    //     $this->AuthLogin();
    //     Session::put('admin_name',null);
    //     Session::put('admin_id',null);
    //     return Redirect::to('/login');
    // }
}

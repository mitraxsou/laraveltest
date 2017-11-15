<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class LoginController extends Controller
{
    //
    function login(){
    	$id=1;

    	/*
    	$v=User::where([
    					['id',1],
    					['email','a@a.a']
    				]);*/
    	
    	$v=DB::table('users')->where([
    					['id',1],
    					['email','a@a.a']
    				])->get();
    	dd($v);
    }
}

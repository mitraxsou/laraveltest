<?php


namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function first(){
    	//return redirect('/user');
    	//User::find(id,"2");
    	//::table('gf')->where(id,"2")
    	dd('jjj');

    }

    function testIdName ($id, $name){
    	return "hello test and the id is ".$id." and the name is ".$name;
    }

    function test(){

    			//return view('test');
    	return redirect ('/testRedirect');
    }

    function passParameters($var1,$var2){
         return view('sendpara',compact('var1','var2'));
    }
}

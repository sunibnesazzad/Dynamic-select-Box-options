<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;

class HomeController extends Controller
{
    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function ajaxRequest()
    {
        $result1 = DB::table('CATEGORIES')->select('*')->get();
        /*return $result1;*/
        return view('contact',compact('result1'));

    }

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function ajaxRequestPost(Request $request)
    {
        if($request->ajax()){
            $input = $request->name;

            $states = DB::table('CATEGORIES')->where('NAME', 'like','%'.$input.'%')->pluck('name','id')->all();
            //select will not work need to use pluck
            $data = view('option',compact('states'))->render();
            return response()->json(['options'=>$data]);
        }
        /*$input = $request->name;

        return response()->json(['success'=>$input]);*/

    }
}

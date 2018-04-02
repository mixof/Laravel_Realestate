<?php

namespace App\Http\Controllers;


use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CabinetController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cabinet.home');
    }

    public function plans()
    {
        return view('cabinet.plans');
    }

    public function addProperty(Request $request)
    {
       $this->validate($request,[
           'title'=>'required|max:150',
           'description'=>'required',
           'rent_type'=>'Integer|required',
           'price'=>'Integer|required',
           'price_type'=>'Integer|required',
           'location_id'=>'Integer|required',
           'street'=>'required|max:300',
           'rooms_count'=>'Integer|required',
           'area'=>'required|numeric',
           'bathrooms_count'=>'required|Integer',
           'bedrooms_count'=>'required|Integer',
           'category_id'=>'Integer|required',
           'phone'=>'max:13|required',
           'phone_2'=>'max:13',
           'email'=>'required|max:70|email',
       ]);


       dump(Auth::user()->id);


    }
}

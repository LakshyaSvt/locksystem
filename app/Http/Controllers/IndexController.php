<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Product;
use App\Models\State;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index(){
        $states = State::get();
        $products = Product::get();
        return view('product-lead',compact('states','products'));
    }

    public function fetchCitiesBySate($state_id){
        $state = State::findOrFail($state_id);
        return $state->cities;
    }
}

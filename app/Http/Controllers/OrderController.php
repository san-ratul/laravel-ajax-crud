<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {   
        return view('order');
    }

    public function store(Request $request)
    {
        $cart = $request->session()->get('cart');
        if(!isset($cart)){
            $firstCart[$request['title']] = array(
                'link' => $request['link'],
                'title' => $request['title'],
            );
            $request->session()->push('cart',$firstCart);
        }else{
            $newEntry[$request['title']] = array(
                'link' => $request['link'],
                'title' => $request['title'],
            );
            $request->session()->push('cart',$newEntry);
        }
        print_r($cart = $request->session()->get('cart'));
    }
}

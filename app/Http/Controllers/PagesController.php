<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public  function index(){
        $title = "KARTHIK FROM CONTROLLER";
        return view('pages.index',compact('title'));
    }
    
    public function about(){
        // return view('pages.about');
        return view('pages.about')->with('title',"ksjflksdf");

    }
    
    public function services(){
        $data = array();
        $data['title'] = "array title";
        $data['web'] = ["array title second","pro",'serv'];
        
        return view('pages.services')->with($data);
    }
}

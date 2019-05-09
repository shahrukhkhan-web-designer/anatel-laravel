<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        return view('home.index');
    }

    public function about() {
        return view('about.about');
    }
    public function contact() {
        return view('contact.contact');
    }
    public function business() {
        return view('business.business');
}
public function careers() {
        return view('careers.careers');
}





}
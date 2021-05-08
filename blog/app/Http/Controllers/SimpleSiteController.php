<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class SimpleSiteController extends Controller{
    function showHome(){
        return view('home');
    }
    function showService(){
        return view('service');
    }
    function showAbout(){
        return view('about');
    }
    function showPortfolio(){
        return view('portfolio');
    }
}

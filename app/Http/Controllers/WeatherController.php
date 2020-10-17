<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{

    function __construct()
    {
		$this->arr_view_data  = [];
		$this->module_title  = "Home";
	}
	
    public function index()
    {
		$this->arr_view_data['module_title'] = $this->module_title;
        return view('home', $this->arr_view_data);
	}
	
	public function about()
	{
		$this->arr_view_data['module_title'] = "About Me";
        return view('about', $this->arr_view_data);
	}

}

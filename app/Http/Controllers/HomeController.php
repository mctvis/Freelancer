<?php

namespace project\Http\Controllers;
class HomeController extends Controller
{
	public function index()
	{
		return view('home');
	}

	public function aboutus()
	{
		return view('about');
	}
}
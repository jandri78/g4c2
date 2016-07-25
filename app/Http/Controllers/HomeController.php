<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
    	return view('layout/master');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function campaigns()
	{
    	return view('consulta');
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function login()
	{
    	return view('login/masterlogin');
	}
}

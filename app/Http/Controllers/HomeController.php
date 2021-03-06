<?php namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Symfony\Component\VarDumper\VarDumper;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

    protected $app;
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Application $app)
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}

}

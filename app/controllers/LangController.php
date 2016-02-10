<?php

class LangController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
	//	$lang = 'en'

   return View::make('home');

 //
 // 	if ($lang == $postlanguage['language'])
 // 			{ 	}
 // 	else {
 // 			$lang = $postlanguage['languaje'];
 // 	}
 //
 //    Lang::setLocale($lang);
 // //		return View::make('home');
 //

	}

	public function lang(){


		 return View::make('home');

	}

	public function langsave(){


	//$lang = Input::all();

	return 1;


//	 $lang = $postlanguage['language'];
	 //header("Content-type: text/x-json");


	}

}

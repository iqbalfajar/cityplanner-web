<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AppController extends Controller  {

	public function getV2()
	{
		return view('app.v2');
	}

}

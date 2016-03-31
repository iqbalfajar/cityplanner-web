<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ExamplesController extends Controller  {

	public function getIndex()
	{
		return view('examples.index');
	}

	public function getExamples($type = null)
	{
		return view('examples.' . $type);
	}

}

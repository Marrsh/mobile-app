<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;

class FormController extends BaseController
{
    public function index(Request $request)
    {
        return view('details',['from' => $request->postcodeFrom]);
    }
}

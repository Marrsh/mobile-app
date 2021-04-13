<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Costs;

use Illuminate\Routing\Controller as BaseController;

class FormController extends BaseController
{
    public function index(Request $request)
    {
        $incodeTo = $this->stripIncode($request->postcodeTo);
        $incodeFrom =  $this->stripIncode($request->postcodeFrom);
        $costsTo = Costs::where('postcode', $incodeTo)->get()->first();
        $costsFrom = Costs::where('postcode', $incodeFrom)->get()->first();
        $full = $request->full;
        $half = $request->half;
        $quarter = $request->quarter;
        $total = 0;

        if($request->full){
            $full = $costsTo->nd_full * $full + $costsFrom->nd_full * $full;
            $total = $total + $full;
        }
        if($request->half){
            $half = $costsTo->nd_half * $half + $costsFrom->nd_half * $half;
            $total = $total + $half;
        }
        if($request->quarter){
            $quarter = $costsTo->nd_half * $quarter + $costsFrom->nd_half * $quarter;
            $total = $total + $quarter;
        }

        return view('details',
        [
            'formData' => $request,
            'price' => $prices = [
                'quarter'=>
            ]
        ]);
    }

    protected function stripIncode($postcode)
    {
        $postcode = explode(" ",$postcode);
        return $postcode[0];
    }
}

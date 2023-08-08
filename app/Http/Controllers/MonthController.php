<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MonthController extends Controller
{
public function __construct()
{
    $this->middleware('month');

}
public function numToMonth(Request $request){

    $num =$request->num;
    if ($num==1) {
        return "JAN";
    } else if ($num==2) {
        return "FEB";
    }else if ($num==3) {
        return "MAR";
    }
}

}

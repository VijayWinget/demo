<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id) {
        return 'view this ID '.$id;
    }


     //example for the db insert
     public function savePostSample(Request $request) {

        $request ->input('');

        return 'view this ID ';
     }



}

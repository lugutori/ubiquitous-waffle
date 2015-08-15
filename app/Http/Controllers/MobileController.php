<?php

namespace qFuturo\Http\Controllers;

use Illuminate\Http\Request;

use qFuturo\Option;
use qFuturo\Http\Requests;
use qFuturo\Http\Controllers\Controller;

class MobileController extends Controller
{
    public function forapp(){
        $options = Option::all();
        return $options;
    }
}

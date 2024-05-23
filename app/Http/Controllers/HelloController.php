<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function greeting(){
        echo "<H1>Hello World</H1>";
    }
}

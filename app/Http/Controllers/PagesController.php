<?php

namespace App\Http\Controllers;

use App\Example;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home(Example $example)
    {
        ddd($example);
    }
}

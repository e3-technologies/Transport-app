<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Terminal;
use App\Company;

class TerminalsController extends Controller
{
    public function index()
    {
        $terminals = Terminal::all();
        
        return $terminals;
    }
}

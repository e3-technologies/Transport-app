<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompaniesController extends Controller
{
    public function index()
    {
        $companyies = Company::all();

        return $companyies;
    }
}

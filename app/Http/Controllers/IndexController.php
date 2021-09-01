<?php

namespace App\Http\Controllers;

use App\Models\Indexabout;
use App\Models\Indexcontact;
use App\Models\Indexportfolio;
use App\Models\Indexskill;
use App\Models\Indextitle;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index (){
        $dataTitle = Indextitle::all();
        $dataAbout = Indexabout::all();
        $dataSkills = Indexskill::all();
        $dataPortfolio = Indexportfolio::all();
        $dataContact = Indexcontact::all();
        return view('pages.index', compact('dataTitle', 'dataAbout', 'dataSkills', 'dataPortfolio', 'dataContact'));
    }
    public function indexBack (){
        $dataAbout = Indexabout::all();
        return view('backoffice.pages.home.home', compact('dataAbout'));
    }
}

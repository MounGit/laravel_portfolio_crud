<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\Indexabout;
use App\Models\Indextitle;
use Illuminate\Http\Request;

class IndexAboutController extends Controller
{
    public function index (){
        $dataTitle = Indextitle::all();
        $dataAbout = Indexabout::all();
        return view('backoffice.pages.about.about', compact('dataAbout', 'dataTitle'));
    }
    public function create (){
        return view('backoffice.pages.about.aboutCreate');
    }
    public function store (Request $request){
        $newEntry = new Indexabout;
        $newEntry->image = $request->image;
        $newEntry->lastname = $request->lastname;
        $newEntry->firstname = $request->firstname;
        $newEntry->title = $request->title;
        $newEntry->description = $request->description;
        $newEntry->bday = $request->bday;
        $newEntry->website = $request->website;
        $newEntry->phone = $request->phone;
        $newEntry->city = $request->city;
        $newEntry->age = $request->age;
        $newEntry->degree = $request->degree;
        $newEntry->mail = $request->mail;
        $newEntry->freelance = $request->freelance;
        $newEntry->description2 = $request->description2;
        $newEntry->save();
        return redirect()->back();
    }
    public function edit(Indexabout $id){
        $dataAbout = $id;
        return view('backoffice.pages.about.aboutEdit', compact('dataAbout'));
    }
    public function update(Indexabout $id, AboutRequest $request){
        $request->validated();
        $dataAbout = $id;
        $dataAbout->image = $request->image;
        $dataAbout->title = $request->title;
        $dataAbout->lastname = $request->lastname;
        $dataAbout->firstname = $request->firstname;
        $dataAbout->description = $request->description;
        $dataAbout->bday = $request->bday;
        $dataAbout->website = $request->website;
        $dataAbout->phone = $request->phone;
        $dataAbout->city = $request->city;
        $dataAbout->age = $request->age;
        $dataAbout->degree = $request->degree;
        $dataAbout->mail = $request->mail;
        $dataAbout->freelance = $request->freelance;
        $dataAbout->description2 = $request->description2;
        $dataAbout->save();
        redirect()->route('aboutBack');
    }
}

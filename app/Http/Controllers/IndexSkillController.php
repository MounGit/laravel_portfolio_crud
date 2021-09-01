<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillsRequest;
use App\Models\Indexskill;
use Illuminate\Http\Request;

class IndexSkillController extends Controller
{
    public function index () {
        $dataSkills= Indexskill::all()
            ->take(6);
        return view('backoffice.pages.skills.skills', compact('dataSkills'));
    }
    public function create () {
        return view('backoffice.pages.skills.skillsCreate');
    }
    public function store(SkillsRequest $request) {
        $request->validated();
        $newEntry = new Indexskill;
        $newEntry->skill = $request->skill;
        $newEntry->val = $request->val;
        $newEntry->save();
        return redirect()->back();
    }
    public function show(Indexskill $id){
        $dataSkills = $id;
        return view('backoffice.pages.skills.skillsShow', compact('dataSkills'));
    }
    public function edit(Indexskill $id) {
        $dataSkills = $id;
        return view('backoffice.pages.skills.skillsEdit', compact('dataSkills'));
    }
    public function update (Indexskill $id, SkillsRequest $request) {
        $request->validated();
        $dataSkills = $id;
        $dataSkills->skill = $request->skill;
        $dataSkills->val = $request->val;
        $dataSkills->save();
        return redirect()->route('skillsShow', $dataSkills->id);
    }
    public function destroy(Indexskill $id){
        $id->delete();
        return redirect()->route('skillsBack');
    }
}

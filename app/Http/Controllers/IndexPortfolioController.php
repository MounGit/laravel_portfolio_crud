<?php

namespace App\Http\Controllers;

use App\Http\Requests\PortfolioRequest;
use App\Models\Indexportfolio;
use Illuminate\Http\Request;

class IndexPortfolioController extends Controller
{
    public function index() {
        $dataPortfolio = Indexportfolio::all()
        ->take(9);
        return view('backoffice.pages.portfolio.portfolio', compact('dataPortfolio'));
    }
    public function create() {
        return view('backoffice.pages.portfolio.portfolioCreate');
    }
    public function store(PortfolioRequest $request){
        $request->validated();
        $newEntry = new Indexportfolio;
        $newEntry->image = $request->image;
        $newEntry->save();
        return redirect()->back();
    }
    public function show(Indexportfolio $id) {
        $dataPortfolio = $id;
        return view('backoffice.pages.portfolio.portfolioShow', compact('dataPortfolio'));
    }
    public function destroy(Indexportfolio $id) {
        $id->delete();
        return redirect()->route('portfolioBack');
    }
    public function edit(Indexportfolio $id) {
        $dataPortfolio = $id;
        return view('backoffice.pages.portfolio.portfolioEdit', compact('dataPortfolio'));
    }
    public function update(Indexportfolio $id, PortfolioRequest $request) {
        $request->validated();
        $dataPortfolio = $id;
        $dataPortfolio->image = $request->image;
        $dataPortfolio->save();
        return redirect()->route('portfolioShow', $dataPortfolio->id);
    }
}

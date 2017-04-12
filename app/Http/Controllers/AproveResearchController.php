<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search as searchModel;


class AproveResearchController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('CheckTecher');

    }

    public function show(){
$searchs=searchModel::all();

      return view('admin',array(
          "searchs"=>$searchs
      ));
  }
  public function approve($id){
      $searchs=searchModel::find($id);
      $searchs->status=1;
      $searchs->save();

      return redirect()->back();

  }
}

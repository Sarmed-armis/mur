<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search as searchModel;


class Weclomecontroller extends Controller
{
    public function index(){
        $searchs=searchModel::where('status',1)->get();
        $chemcis=searchModel::where('status',1)->where('section',"كيمياء")->get();
        $computers=searchModel::where('status',1)->where('section',"حاسوب")->get();
        $maths=searchModel::where('status',1)->where('section',"رياضيات")->get();
        $lives=searchModel::where('status',1)->where('section',"احياء")->get();
        $chemcifirst=searchModel::where('status',1)->where('section',"كيمياء")->first();

        return view('welcome',array(
            "searchs"=>$searchs,
            "chemcis"=>$chemcis,
            "computers"=>$computers,
            "maths"=>$maths,
            "lives"=>$lives,
            "chemcifirst"=>$chemcifirst
        ));

    }
}

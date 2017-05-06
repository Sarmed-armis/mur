<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\Add;
use App\Search as researchModle;
use Illuminate\Support\Facades\Auth;

class PorfileController extends Controller
{
         public function __construct(){


         // this for auth op
        $this->middleware('auth');
    }

public function GetUserInfo(){
             $searchs=researchModle::where("user_name",Auth::user()->name)->get();



return view('profile',array(
    "searchs"=>$searchs
));




}
public function add(Add $reqest){

    $path = 'uploads/file';

    $search_file = rand(11111111111111, 99999999999999) . '.' . $reqest->search_file->getClientOriginalExtension();

    $reqest->search_file->move($path, $search_file);

    $path_image = 'uploads/images';

    $search_image = rand(11111111111111, 99999999999999) . '.' . $reqest->search_image->getClientOriginalExtension();

    $reqest->search_image->move($path_image, $search_image);

    researchModle::create([
        "user_name" =>Auth::user()->name,
         "search_dis"=>$reqest->input('descrptions'),
            "search_name"=>$reqest->input('inputName'),
            "search_file"=>$search_file,
            "search_image"=>$search_image,
            "section"=>$reqest->input('section'),
            "code"=>rand(2000,3000),
    ]
    );
return redirect()->back();
}
}

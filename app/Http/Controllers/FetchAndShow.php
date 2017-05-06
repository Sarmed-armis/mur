<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search as searchModel;
use PhpParser\Node\Expr\Array_;


class FetchAndShow extends Controller
{
  public function index($id){
      $result = $id;

      switch ($result) {
          case "1":

              $section="حاسوب";
              break;
          case "2":

              $section="رياضيات";
              break;
          case "3":

              $section="الجو";
              break;
          case "4":

              $section="فيزياء";
              break;

          case "5":

              $section="كيمياء";
              break;

          case "6":

              $section="احياء";
              break;


      }
    $datas=searchModel::where('section',$section)->get();

      return view('show',Array('datas'=>$datas));

  }
}

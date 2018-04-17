<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\Category;

class PagesController extends Controller
{
  public  function home()
  {
    $publications = Publication::where('id','>',0)->orderBy('id','DESC')->take(3)->get();
    //dd($publications);
    return view('home',[
      'publications' => $publications
    ]);
  }

  public function access()
  {
    return view('access');
  }

  public function quienes()
  {
    return view('quienes');
  }

  public function que()
  {
    return view('quehacemos');
  }

  public function autoridades()
  {
    return view('autoridades');
  }

  public function create()
  {
    $categories = Category::all();
    return view('createPublication',[
      'categories' => $categories,
    ]);
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\Image;
use App\Http\Requests\CreatePublicationRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $publications = Publication::paginate(10);
      //dd($publications);
      return view('admin',[
        'publications' => $publications
      ]);
    }

    public function createPublication(CreatePublicationRequest $request)
    {
      $user= $request->user();
      $publication = Publication::create([
        'category_id' =>$request->input('category_id'),
        'user_id' =>$user->id,
        'title' =>$request->input('title'),
        'content' =>$request->input('content'),
        'statusNew' =>'despublicado'
      ]);

      $image = Image::create([
        'publication_id'=>$publication->id,
        'name'=>'holaMundo.jpg',
        'type'=>'n'
      ]);
      return redirect('home');
    }
}

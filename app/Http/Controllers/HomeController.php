<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\Image;
use App\Category;
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

      $img = $request->file('input-img');

      $image = Image::create([
        'publication_id'=>$publication->id,
        'name' =>$img->store('images','public'),
        'type'=>'n'
      ]);
      return redirect('home');
    }

    public function editGetPublication(Publication $publication)
    {
      //dd($publication);
      $categories = Category::all();
      return view('editPublication',[
        'publication'=>$publication,
        'categories'=>$categories,
      ]);
    }

    public function editPublication(CreatePublicationRequest $request)
    {
      $user= $request->user();

      $publication = Publication::find($request->input('id'));

      $publication->id=$request->input('id');
      $publication->user_id=$user->id;
      $publication->title=$request->input('title');
      $publication->content=$request->input('content');
      $publication->statusNew=$request->input('status');

      $publication->save();

      $img = $request->file('input-img');

      $image = Image::find($publication->id);

      $image->id=$publication->id;
      $image->name=$img->store('images','public');
      $image->save();

      return redirect('home');
    }
}

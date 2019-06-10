<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;

use Illuminate\Support\Facades\Storage;

use App\Post;
use App\Category;
use App\Tag;

class PostController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderby('id', 'DESC')->paginate(10); //->where('user_id', auth()->user()->id)

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderby('descripcion', 'ASC')-> pluck('descripcion', 'id');
        $tags = Tag::orderby('descripcion', 'ASC')->get();

        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $post = Post::create($request->all());

        //image
        if($request->file('cabeceraimagen')){
            $path= Storage::disk('public')->put('image', $request->file('cabeceraimagen'));
            $post->fill(['cabeceraimagen'=>asset($path)])->save();
        }

        //tag
        $post->tags()->attach($request->get('tags'));

        return redirect()->route('posts.index', $post->index)->with('info', 'Post creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $post = Post::find($id);

        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::orderby('descripcion', 'ASC')-> pluck('descripcion', 'id');
        $tags = Tag::orderby('descripcion', 'ASC')->get();
        $post = Post::find($id);

        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
         $post = Post::find($id);
            
        $post->fill($request->all())->save();


        //image
        if($request->file('cabeceraimagen')){
            $path= Storage::disk('public')->put('image', $request->file('cabeceraimagen'));
            $post->fill(['cabeceraimagen'=>asset($path)])->save();
        }

        //tag
        $post->tags()->sync($request->get('tags'));

        return redirect()->route('posts.index', $post->index)->with('info', 'Post actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $post = Post::find($id)->delete();
    
        return back()->with('info', 'Post eliminado correctamente');
    }
}

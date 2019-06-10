<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;


use App\Post;
use App\Category;
use App\Tag;
use App\Imagen;

use DB;
use Cache;

class PrincipalController extends Controller
{
     
    public function principal(){
    	$posts = Post::orderby('id', 'DESC')->get();
        $tv=Post::orderby('totalV', 'desc')->get();
        $img= Imagen::orderby('id', 'desc')->get();



    	return view('web.posts', compact('posts', 'tv', 'img'));
    }


    public function category($slug){
    	$category = Category::where('slug', $slug)->pluck('id')->first();
    	$posts = Post::where('category_id', $category)->orderby('id', 'DESC')->paginate(3);

    	return view('web.posts', compact('posts'));
    }

    public function tag($slug){
    	
    	$posts = Post::whereHas('tags', function($query) use($slug){
    		$query->where('slug', $slug);
    	})->orderby('id', 'DESC')->paginate(3);

    	 $tv=post::orderBy('totalV', 'desc')->get();
    

    return view('web.tag', array('posts' => $posts, 'TV'=>$tv,));
    }

    public function post($slug){

        
    	$post= Post::where('slug', $slug)->first();
                if(Cache::has($slug)==false)
                {
                    Cache::add($slug,'contador',0.30);
                    $post->totalV+=1;
                    $post->save();
                }
       $posts = Post::orderby('id', 'DESC')->get();

       $TV = Post::orderby('totalV', 'desc')->get();

    	return view('web.post', compact('post', 'posts', 'TV'));

    }

    public function search($search){
        
        $search = urldecode($search);
        $comments = post::select()
                ->where('titulo', 'LIKE', '%'.$search.'%')
                ->orderBy('id', 'desc')
                ->get();
        $Imagen = Imagen::orderBy('id', 'desc')->get();
        $tv=post::orderBy('totalV', 'desc')->get();
    $P = post::orderBy('id', 'desc')->get();
        
        if (count($comments) == 0){
            return view('web.search', array('POST' => $P,'TV'=>$tv,'img' => $Imagen, 'message' => 'no hay resultados que mostrar', 'search' => $search));
            // ->with('message', 'No hay resultados que mostrar')
            // ->with('search', $search);
        } else{
            return view('web.search', array('comments' => $comments, 'search' => $search, 'img' => $Imagen,'POST' => $P,'TV'=>$tv,));
            // ->with('comments', $comments)
            // ->with('search', $search);
        }

    }

     public function anteriores(){

         $tv=Post::orderBy('totalV', 'desc')->get();
        $P = Post::orderBy('id', 'desc')->paginate(7);
        
        
                            
        return view('web.anteriores', array('POST' => $P,'TV'=>$tv));
    }

    public function getCategory($slug){
    $category = Category::where('slug', $slug)->pluck('id')->first();
    $posts = post::where('category_id', $category)->orderBy('id', 'desc')->paginate(7);
    $tv=post::orderBy('totalV', 'desc')->get();
    $P = post::orderBy('id', 'desc')->paginate(7);

    
    
    return view('web.category', array('POSTS' => $posts, 'POST' => $P,'TV'=>$tv));

}

public function getTag($slug){


    
    $posts = post::whereHas('tags', function($query) use($slug){
        $query->where('slug', $slug);
    })->orderBy('id', 'desc')->paginate(7);

    
    $tv=post::orderBy('totalV', 'desc')->get();
    $P = post::orderBy('id', 'desc')->get();

    return view('web.tag', array('posts' => $posts, 'POST' => $P,'TV'=>$tv,));

}

public function getProg(){


    $tv=post::orderBy('totalV', 'desc')->get();
    $P = post::orderBy('id', 'desc')->get();
    

    return view('web.programacion', array('POST' => $P,'TV'=>$tv));
}

public function getContacto(){

     // $Imagen = Imagen::find(12);
    $tv=post::orderBy('totalV', 'desc')->get();
    $P = post::orderBy('id', 'desc')->get();
    


    return view('web.contacto', array('POST' => $P,'TV'=>$tv));
}



}

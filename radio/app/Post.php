<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'user_id', 'category_id', 'descripcion', 'slug', 'titulo', 'urlmultimedia', 'cabeceraimagen', 'texto', 'totalV'
	];

	public function user(){
		return $this->belongsTo(User::class);
	}

	public function category(){
		return $this->belongsTo(Category::class);
	}

    public function tags(){
    	return $this->belongsToMany(Tag::class);
    }

}

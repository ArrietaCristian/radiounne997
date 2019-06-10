<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
     protected $fillable = [
		'descripcion', 'url'];

	protected $table ='imagens';
    
}

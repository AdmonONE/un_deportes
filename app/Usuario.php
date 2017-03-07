<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	protected $table = 'users';
    
    protected $fillable = ['codigo', 'documento', 'name', 'email'];

    public function scopeDocumento($query, $documento)
    {
 
  		return $query->where('codigo', 'LIKE', '$codigo');
 
    	
    }
}

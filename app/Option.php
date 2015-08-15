<?php

namespace qFuturo;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    //
	protected $fillable = 
	[
	'codigo',
	'cuerpo',
	'dimension',
	'correcta'
	];
}

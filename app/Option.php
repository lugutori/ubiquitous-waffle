<?php

namespace qFuturo;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    //
	protected $fillable = 
	[
	'body',
	'is_right',
	];
	public function question()
	{
		return $this->belongsTo('qFuturo\Question');
	}
}


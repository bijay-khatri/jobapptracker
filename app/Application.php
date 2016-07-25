<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'description','applied_on'
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function position(){
    	return $this->belongsTo(Position::class);
    }

    public function company(){
    	return $this->belongsTo(Company::class);
    }
}

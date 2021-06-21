<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model{
	
	protected $table = 'employee';
	public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email'
    ];

}
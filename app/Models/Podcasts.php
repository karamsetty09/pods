<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Podcasts extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [ 'name', 'description', 'marketingurl', 'feedurl', 'image' ];
 
    /**
     * The attributes that should be mutated to dates.
     * scratchcode.io
     * @var array
     */
 
    protected $dates = [ 'deleted_at' ];
}

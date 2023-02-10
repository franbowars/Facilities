<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
    use HasFactory;
    
    protected $guarded = array('id');
    
    public static $rules = array(
            'name' => 'required',
            'address' => 'required',
            'content' => 'required',
            'equipment' => 'required',
            'fee' => 'required',
            'accsess' => 'required',
            );
}

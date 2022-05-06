<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion'];

     public static $rules = array(
         'fullname' => 'required',
         'gender' => 'required',
         'email' => 'required|email',
         'postcode' =>'required',
         'address' =>'required',
         'opinion' => 'required',
    );
}
 
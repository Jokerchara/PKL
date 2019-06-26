<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
    protected $fillable = ['nama_catagory','slug'];
    public $timestamps = true;
}

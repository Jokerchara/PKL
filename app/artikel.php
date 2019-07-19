<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
        'judul', 'slug', 'foto',
        'konten', 'id_user', 'id_catagory'
    ];
    public $timestamps = true;

    public function catagory()
    {
        return $this->belongsTo('App\catagory', 'id_catagory');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function tag()
    {
        return $this->belongsToMany('App\tag', 'artikel_tag', 'id_artikel', 'id_tag');
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    //Relation one to many
    public function review(){
        return $this->hasMany('App\Models\Review');
    }

    //Relation one to many reverse
    public function teacher(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function area(){
        return $this->belongsTo('App\Models\Area');
    }

    public function grade(){
        return $this->belongsTo('App\Models\Grade');
    }

    public function price(){
        return $this->belongsTo('App\Models\Price');
    }



    //Relation many to many
    public function student(){
        return $this->belongsToMany('App\Models\User');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable = ['name'];
    protected $hidden = ['id'];

    public function sports(){
        return $this->hasMany('App\Sport', 'season_id');
    }

    public function albums(){
        return $this->hasMany('App\Album', 'season_id');
    }
}

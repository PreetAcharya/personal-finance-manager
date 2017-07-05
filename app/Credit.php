<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class credit extends Model
{
    protected $table = 'credits';
    protected $primaryKey = 'creditId';


    protected $fillable = [
        'creditUserId', 'creditName', 'creditCategoryId','creditAmount','creditDate'
    ];

    public function creditUserId()
    {
        return $this->hasOne('App\User');
    }

    public function creditCategoryId()
    {
        return $this->hasOne('App\Category');
    }
}

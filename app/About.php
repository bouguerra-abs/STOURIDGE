<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title','description','image','name','profile','email','phone','skill1','skill2','skill3','skill4','skill5','skill6','skill7',
    ];
}

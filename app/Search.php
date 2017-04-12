<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{ protected $table='searchs';
    protected $fillable = [
        'user_name', 'search_dis', 'search_name','search_file','search_image','section'
    ];
}

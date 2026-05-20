<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    // ajout usehasfactory
    use hasfactory;
    protected $fillable = [
        'id_sport',
        'name',
        'descripti


    ];
}

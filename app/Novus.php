<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Novus extends Model
{
    protected $table = "novus";
    protected $fillable = [
        'id','regno','name','fname','pname','schname','description','attendence','cgpa',
    ];
}

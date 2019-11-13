<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Categoria extends Model
{
    //
    protected $table ='categoria';
    protected $primaryKey ='idcategoria';
    public $timestamps=false;

    protected $fillable=[
        'nombre',
        'descripcion',
        'condicion',
    ];

    protected $guarded =[

    ];
}
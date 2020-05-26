<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mascotas';

    protected $fillable = ['nombre', 'raza', 'edad'];
}

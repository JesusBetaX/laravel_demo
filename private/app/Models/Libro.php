<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'libros';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'resumen', 'npagina','edicion','autor','precio'];
}

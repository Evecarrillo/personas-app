<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Municipio extends Model
{
    use HasFactory;
    protected $table = 'tb_municipios';
    protected $primaryKey = 'muni_codi';
    public $timestamps = false;
    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'muni_codi', 'muni_codi');
    }
}

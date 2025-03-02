<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Publico extends Model implements Searchable
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nombre', 'correo', 'evento_id'
    ];

    public function getSearchResult(): SearchResult
    {
        $url = route('buscar.resultado', $this->id);

        return new SearchResult(
            $this,
            $this->nombre,
            $url
        );
    }

    public function evento(){
        return $this->belongsTo(Evento::class);
    }

}

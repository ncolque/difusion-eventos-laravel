<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Evento extends Model implements Searchable
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nombre', 'fecha', 'hora', 'estado', 'user_id'
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

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function publicos(){
        return $this->hasMany(Publico::class);
    }

    public function mensajes(){
        return $this->hasMany(Mensaje::class);
    }
}
